<?php
/**
 * HTML to WordPress PHP Converter
 *
 * Reads each .html file, extracts body content between nav/offcanvas end and footer start,
 * replaces asset paths and internal links, and generates WordPress-compatible PHP files.
 */

$source_dir = __DIR__;
$theme_dir  = __DIR__ . '/wp-theme/agence-murailles';
$pages_dir  = $theme_dir . '/page-templates';

// All HTML files to convert
$html_files = glob($source_dir . '/*.html');

// Map of html filename => WordPress page slug
$link_map = [
    'index.html'                        => '/',
    'home-2.html'                       => '/home-2/',
    'home-3.html'                       => '/home-3/',
    'home-4.html'                       => '/home-4/',
    'home-5.html'                       => '/home-5/',
    'home-6.html'                       => '/home-6/',
    'home-7.html'                       => '/home-7/',
    'home-8.html'                       => '/home-8/',
    'home-9.html'                       => '/home-9/',
    'home-10.html'                      => '/home-10/',
    'home-11.html'                      => '/home-11/',
    'video.html'                        => '/video-home/',
    'map.html'                          => '/map-home/',
    'single-property-1.html'            => '/single-property-1/',
    'single-property-2.html'            => '/single-property-2/',
    'single-property-3.html'            => '/single-property-3/',
    'single-property-4.html'            => '/single-property-4/',
    'agents.html'                       => '/agents/',
    'agent-page.html'                   => '/agent-page/',
    'agencies.html'                     => '/agencies/',
    'agency-page.html'                  => '/agency-page/',
    'blog.html'                         => '/blog-page/',
    'blog-detail.html'                  => '/blog-detail/',
    'contact.html'                      => '/contact/',
    'pricing.html'                      => '/pricing/',
    '404.html'                          => '/404-page/',
    'component.html'                    => '/components/',
    'dashboard.html'                    => '/dashboard/',
    'my-profile.html'                   => '/my-profile/',
    'my-property.html'                  => '/my-property/',
    'bookmark-list.html'                => '/bookmark-list/',
    'change-password.html'              => '/change-password/',
    'payment.html'                      => '/payment/',
    'submit-property.html'              => '/submit-property/',
    'compare-property.html'             => '/compare-property/',
    'grid-layout-with-sidebar.html'     => '/grid-layout-with-sidebar/',
    'grid-layout-with-map.html'         => '/grid-layout-with-map/',
    'grid.html'                         => '/grid-full/',
    'classical-property.html'           => '/classical-property/',
    'classical-layout-with-sidebar.html'=> '/classical-layout-with-sidebar/',
    'classical-layout-with-map.html'    => '/classical-layout-with-map/',
    'list-layout-new.html'              => '/list-layout-simple/',
    'list-layout-new-2.html'            => '/list-layout-advance/',
    'list-layout-new-3.html'            => '/list-layout-modern/',
    'list-layout-full.html'             => '/list-layout-full/',
    'list-layout-with-map.html'         => '/list-layout-with-map/',
    'half-map.html'                     => '/half-map/',
    'half-map-2.html'                   => '/half-map-2/',
    'single-property-page-1.html'       => '/single-property-page-1/',
    'about-us.html'                     => '/about-us/',
    'create-account.html'               => '/create-account/',
    'faq.html'                          => '/faq/',
    'checkout.html'                     => '/checkout/',
    'add-agent.html'                    => '/add-agent/',
];

/**
 * Fix asset paths and internal links in HTML content
 */
function fix_paths($html, $link_map) {
    // Fix image/asset paths: assets/ → WordPress theme URI
    $html = str_replace(
        ['src="assets/', 'url(assets/', "url('assets/", 'href="assets/'],
        [
            'src="<?php echo get_template_directory_uri(); ?>/assets/',
            'url(<?php echo get_template_directory_uri(); ?>/assets/',
            "url('<?php echo get_template_directory_uri(); ?>/assets/",
            'href="<?php echo get_template_directory_uri(); ?>/assets/',
        ],
        $html
    );

    // Fix background-image inline styles
    $html = preg_replace(
        '/style="background:url\(assets\//',
        'style="background:url(<?php echo get_template_directory_uri(); ?>/assets/',
        $html
    );

    // Fix internal .html links to WordPress page slugs
    foreach ($link_map as $html_file => $wp_slug) {
        $html = str_replace(
            'href="' . $html_file . '"',
            'href="<?php echo home_url(\'' . $wp_slug . '\'); ?>"',
            $html
        );
    }

    // Fix broken .html image references (HTTrack artifacts)
    // e.g. src="...assets/img/b-1.html" should try to use .jpg
    $html = preg_replace(
        '/src="([^"]*assets\/img\/[^"]*?)\.html"/',
        'src="$1.jpg"',
        $html
    );

    return $html;
}

/**
 * Extract the page body content from full HTML
 * Returns content between offcanvas end and footer start
 */
function extract_body($html) {
    // Find the end of offcanvas section (look for the closing </div> of offcanvas + Top header comment)
    $markers = [
        '<!-- ============================================================== -->' . "\n" .
        "\t\t\t\t<!-- Top header  -->" . "\n" .
        "\t\t\t\t<!-- ============================================================== -->",
    ];

    $start = false;
    foreach ($markers as $marker) {
        $pos = strpos($html, $marker);
        if ($pos !== false) {
            // Find the next newline after the marker
            $start = strpos($html, "\n", $pos + strlen($marker));
            break;
        }
    }

    if ($start === false) {
        // Fallback: look for end of offcanvas div
        $pos = strpos($html, '</div>' . "\n" . "\t\t\t\t<!-- ==");
        if ($pos !== false) {
            $start = $pos + 7;
        }
    }

    if ($start === false) {
        // Last fallback: after line ~430 content
        $lines = explode("\n", $html);
        $start_line = 0;
        for ($i = 420; $i < min(550, count($lines)); $i++) {
            if (strpos($lines[$i], 'hero-banner') !== false ||
                strpos($lines[$i], 'page-title') !== false ||
                strpos($lines[$i], 'error-wrap') !== false ||
                strpos($lines[$i], 'image-cover') !== false ||
                strpos($lines[$i], '<section') !== false) {
                $start_line = $i;
                break;
            }
        }
        if ($start_line > 0) {
            $start = strlen(implode("\n", array_slice($lines, 0, $start_line))) + 1;
        }
    }

    // Find footer start
    $footer_marker = '<footer class="dark-footer';
    $end = strpos($html, $footer_marker);

    if ($end === false) {
        $footer_marker = '<!-- ============================ Footer';
        $end = strpos($html, $footer_marker);
    }

    if ($start === false || $end === false) {
        return false;
    }

    return trim(substr($html, $start, $end - $start));
}

/**
 * Extract header (from start to end of offcanvas)
 */
function extract_header($html) {
    $marker = '<!-- ============================================================== -->' . "\n" .
              "\t\t\t\t<!-- Top header  -->" . "\n" .
              "\t\t\t\t<!-- ============================================================== -->";
    $pos = strpos($html, $marker);
    if ($pos !== false) {
        $end = strpos($html, "\n", $pos + strlen($marker));
        return substr($html, 0, $end + 1);
    }
    return false;
}

/**
 * Extract footer (from footer tag to end)
 */
function extract_footer($html) {
    $pos = strpos($html, '<footer class="dark-footer');
    if ($pos === false) {
        $pos = strpos($html, '<!-- ============================ Footer');
        if ($pos !== false) {
            // Go back to find the actual footer tag
            $before = substr($html, 0, $pos);
            $tag_pos = strrpos($before, '<footer');
            if ($tag_pos !== false) {
                $pos = $tag_pos;
            }
        }
    }

    if ($pos !== false) {
        return substr($html, $pos);
    }
    return false;
}

// ═══════════════════════════════════════════
// MAIN EXECUTION
// ═══════════════════════════════════════════

echo "Starting conversion...\n\n";

// 1. Generate header.php from index.html
$index_html = file_get_contents($source_dir . '/index.html');
$header_content = extract_header($index_html);
if ($header_content) {
    $header_content = fix_paths($header_content, $link_map);

    // Add WordPress head hooks
    $header_content = preg_replace(
        '/<title>.*?<\/title>/s',
        '<?php wp_title("|", true, "right"); ?><?php bloginfo("name"); ?>',
        $header_content
    );

    // Replace the CSS link tags with wp_head()
    $header_content = preg_replace(
        '/\s*<!-- Custom CSS -->.*?<link.*?colors\.css.*?>\s*/s',
        "\n    <?php wp_head(); ?>\n",
        $header_content
    );

    // Fix the HTML lang attribute
    $header_content = str_replace(
        '<html lang="zxx">',
        '<html <?php language_attributes(); ?>>',
        $header_content
    );

    // Remove HTTrack comments
    $header_content = preg_replace('/<!--\s*Mirrored from.*?-->\s*\n?/', '', $header_content);

    file_put_contents($theme_dir . '/header.php', $header_content);
    echo "✓ header.php generated\n";
}

// 2. Generate footer.php from index.html
$footer_content = extract_footer($index_html);
if ($footer_content) {
    $footer_content = fix_paths($footer_content, $link_map);

    // Remove HTTrack closing comment
    $footer_content = preg_replace('/<!--\s*Mirrored from.*?-->\s*\n?/', '', $footer_content);

    // Replace closing scripts with wp_footer()
    $footer_content = preg_replace(
        '/\s*<!-- =+\s*-->\s*\n\s*<!-- All Jquery -->\s*\n\s*<!-- =+ -->\s*\n(\s*<script.*?<\/script>\s*\n)+\s*<!-- =+\s*-->\s*\n\s*<!-- This page plugins -->\s*\n\s*<!-- =+\s*-->/s',
        "\n\t\t<?php wp_footer(); ?>",
        $footer_content
    );

    // If scripts weren't caught, add wp_footer before </body>
    if (strpos($footer_content, 'wp_footer') === false) {
        $footer_content = str_replace('</body>', "<?php wp_footer(); ?>\n</body>", $footer_content);
    }

    file_put_contents($theme_dir . '/footer.php', $footer_content);
    echo "✓ footer.php generated\n";
}

// 3. Convert each HTML page to a PHP page template
$converted = 0;
$skipped   = 0;

foreach ($html_files as $html_file) {
    $filename = basename($html_file);

    // Skip empty files
    if (filesize($html_file) < 100) {
        echo "⊘ $filename (empty/tiny - skipped)\n";
        $skipped++;
        continue;
    }

    $html = file_get_contents($html_file);
    $body = extract_body($html);

    if ($body === false) {
        echo "✗ $filename (could not extract body)\n";
        $skipped++;
        continue;
    }

    $body = fix_paths($body, $link_map);

    // Determine output filename
    $php_name = str_replace('.html', '', $filename);

    // Special cases
    $template_name = ucwords(str_replace(['-', '_'], ' ', $php_name));

    if ($filename === 'index.html') {
        $output_file = $theme_dir . '/front-page.php';
        $template_header = "<?php\n/**\n * Front Page (Home Layout 1)\n * Direct conversion from index.html\n *\n * @package Agence_Murailles\n */\nget_header();\n?>\n\n";
    } elseif ($filename === '404.html') {
        $output_file = $theme_dir . '/404.php';
        $template_header = "<?php\n/**\n * 404 Error Page\n * Direct conversion from 404.html\n *\n * @package Agence_Murailles\n */\nget_header();\n?>\n\n";
    } else {
        $output_file = $pages_dir . '/tpl-' . $php_name . '.php';
        $template_header = "<?php\n/**\n * Template Name: $template_name\n * Direct conversion from $filename\n *\n * @package Agence_Murailles\n */\nget_header();\n?>\n\n";
    }

    $template_footer = "\n\n<?php get_footer(); ?>\n";

    $output = $template_header . $body . $template_footer;

    file_put_contents($output_file, $output);
    echo "✓ $filename → " . basename($output_file) . "\n";
    $converted++;
}

echo "\n═══════════════════════════════════\n";
echo "Done! Converted: $converted | Skipped: $skipped\n";
echo "Theme dir: $theme_dir\n";
