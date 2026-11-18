# Agence Murailles - WordPress Theme Setup Guide

## A. Executive Summary

This WordPress theme was converted from the **Resido v2.3** real estate HTML template (by Themez Hub), which was an HTTrack mirror of `shreethemes.net/resido-2.3`. The conversion creates a fully functional custom WordPress theme with:

- 4 Custom Post Types (Property, Agent, Agency, Testimonial)
- 5 Custom Taxonomies (Property Type, Status, City, Amenity, Agent Specialization)
- Native meta boxes (no ACF dependency)
- CDN-based library loading (all JS/CSS plugins via CDN since originals were corrupted by HTTrack)
- Full template hierarchy (front-page, archive, single, search, 404)
- AJAX property filtering foundation
- WordPress Customizer integration
- Responsive Bootstrap 5 design preserved from original

---

## B. Agent & Sub-Agent Organization

```
ARCHITECT (Lead)
├── Discovery Agent ─────── Scanned 59 HTML files, identified components
├── Home Variants Agent ─── Analyzed 11+ homepage layouts
├── Property Agent ──────── Analyzed 24 property-related templates
├── Theme Builder Agent ─── Built all PHP templates
├── CPT/Taxonomy Agent ──── Defined data model
├── Asset Agent ─────────── Fixed CSS imports, CDN mapping
└── QA/Docs Agent ───────── Validation and documentation
```

---

## C. Audit Report

### Page Classification

| Category | Count | Pages |
|----------|-------|-------|
| Homepage variants | 13 | index.html, home-2 through home-11, video.html, map.html |
| Property listings | 13 | grid*, list-layout*, classical*, half-map* |
| Single property | 5 | single-property-1 through 4, classical-property |
| Agent/Agency | 4 | agents, agent-page, agencies, agency-page |
| Blog | 2 | blog, blog-detail |
| Dashboard/Account | 6 | dashboard, my-profile, my-property, bookmark-list, change-password, payment |
| Utility | 6 | contact, pricing, component, submit-property, compare-property, 404 |
| Empty (0 bytes) | 10 | about-us, add-agent, checkout, create-account, faq, etc. |

### Critical Findings
1. **All JS files are `.html` (broken)** - Replaced with CDN versions
2. **All CSS plugin imports are `.html` (broken)** - Replaced with CDN versions
3. **10 pages are empty** - Handled via WordPress page system
4. **Google Maps API key missing** - Configurable via Customizer
5. **Homepage variants are demo alternatives** - Only index.html converted as primary

---

## D. WordPress Mapping Table

| HTML File | WP Equivalent | Template | Notes |
|-----------|--------------|----------|-------|
| index.html | Front Page | `front-page.php` | Primary homepage |
| home-2 to home-11 | Deprioritized | — | Demo variants, can be added as page templates later |
| grid-layout-with-sidebar.html | Property Archive | `archive-property.php` | Primary listing layout |
| single-property-1.html | Single Property | `single-property.php` | Property detail page |
| agents.html | Agent Archive | `archive-agent.php` | Agent listing |
| agent-page.html | Single Agent | `single-agent.php` | Agent profile |
| agencies.html | Agency Archive | `archive-agency.php` | Agency listing |
| agency-page.html | Single Agency | `single-agency.php` | Agency profile |
| blog.html | Blog Index | `index.php` | Standard WP blog |
| blog-detail.html | Single Post | `single.php` | Blog post detail |
| contact.html | Page Template | `template-contact.php` | Contact page |
| dashboard.html | Page Template | `template-dashboard.php` | User dashboard |
| 404.html | 404 Template | `404.php` | Error page |
| search (implied) | Search Template | `search.php` | Search results |

---

## E. Architecture Decision

### Theme Approach
- **Custom theme** (no page builder dependency)
- Bootstrap 5 grid preserved from original HTML
- All 3rd-party libraries loaded via CDN
- Original `styles.css` (243KB) cleaned of broken @imports and used as main stylesheet

### Plugin Approach (Minimal)
| Plugin | Reason | Required? |
|--------|--------|-----------|
| Contact Form 7 | Contact form on contact page | Recommended |
| WP Super Cache | Performance | Recommended |
| Yoast SEO | SEO management | Recommended |
| Regenerate Thumbnails | After importing images | One-time use |

### CPT/Taxonomy Plan
- **property** CPT with: property_type, property_status, property_city, property_amenity taxonomies
- **agent** CPT with: agent_specialization taxonomy
- **agency** CPT
- **testimonial** CPT (private, admin-only)

### Custom Fields (Native Meta Boxes)
- Property: price, price_period, bedrooms, bathrooms, sqft, garage, year_built, address, lat/lng, featured, video_url, agent_id, gallery_ids
- Agent: phone, email, website, social links, agency_id, rating
- Agency: phone, email, website, address, social links
- Testimonial: role, rating

---

## F. Final Theme Structure

```
agence-murailles/
├── style.css                          # Theme metadata
├── functions.php                      # Theme bootstrap
├── header.php                         # Global header + nav
├── footer.php                         # Global footer + login modal
├── front-page.php                     # Homepage
├── index.php                          # Blog listing
├── page.php                           # Default page
├── single.php                         # Blog post detail
├── single-property.php                # Property detail
├── single-agent.php                   # Agent profile
├── single-agency.php                  # Agency profile
├── archive.php                        # Default archive
├── archive-property.php               # Property grid + filters
├── archive-agent.php                  # Agent listing
├── archive-agency.php                 # Agency listing
├── search.php                         # Search results
├── searchform.php                     # Custom search form
├── 404.php                            # 404 error
├── sidebar.php                        # Sidebar
├── comments.php                       # Comments template
├── inc/
│   ├── theme-setup.php                # Theme support, menus, image sizes, nav walker
│   ├── enqueue.php                    # CSS/JS enqueue (CDN + local)
│   ├── custom-post-types.php          # Property, Agent, Agency, Testimonial CPTs
│   ├── custom-taxonomies.php          # Property Type, Status, City, Amenity, Specialization
│   ├── meta-boxes.php                 # Native meta boxes for all CPTs
│   ├── template-tags.php              # Helper functions (price, specs, badges, pagination)
│   ├── widgets.php                    # Featured Properties widget
│   ├── customizer.php                 # Theme Customizer options
│   └── ajax-handlers.php              # AJAX property filter endpoint
├── template-parts/
│   ├── content-property-card.php      # Property card (grid)
│   ├── content-property-card-sidebar.php  # Property card (compact/sidebar)
│   ├── content-agent-card.php         # Agent card
│   ├── content-blog-card.php          # Blog post card
│   └── modal-login.php               # Login modal
├── page-templates/
│   ├── template-contact.php           # Contact page template
│   └── template-dashboard.php         # User dashboard template
└── assets/
    ├── css/
    │   ├── styles.css                 # Main theme CSS (from Resido, imports fixed)
    │   └── colors.css                 # Color overrides
    ├── js/
    │   └── custom.js                  # Theme JS (navigation, slick, preloader, etc.)
    └── img/
        ├── banner-1.jpg               # Hero banner
        ├── p-1.jpg ... p-27.jpg       # Property images
        ├── pin.svg                    # Location pin icon
        └── ...                        # Other images
```

---

## H. XAMPP Local Setup Guide

### Prerequisites
- XAMPP installed with Apache + MySQL running
- PHP 7.4+ (XAMPP default is fine)
- WordPress 6.0+ downloaded

### Step 1: Create Database
1. Open `http://localhost/phpmyadmin`
2. Click "New" in left sidebar
3. Database name: `agence_murailles`
4. Collation: `utf8mb4_unicode_ci`
5. Click "Create"

### Step 2: Install WordPress
1. Download WordPress from `https://wordpress.org/download/`
2. Extract to `C:\xampp\htdocs\agence-murailles\`
3. Open `http://localhost/agence-murailles/`
4. Follow WordPress install wizard:
   - Database: `agence_murailles`
   - Username: `root`
   - Password: (leave empty for XAMPP default)
   - Host: `localhost`
   - Table Prefix: `wp_`
5. Set site title: "Agence Murailles"
6. Create admin account

### Step 3: Install Theme
1. Copy the entire `agence-murailles` folder from `wp-theme/` to:
   ```
   C:\xampp\htdocs\agence-murailles\wp-content\themes\agence-murailles\
   ```
2. Go to WordPress admin: `Appearance > Themes`
3. Activate "Agence Murailles"

### Step 4: Configure Permalinks
1. Go to `Settings > Permalinks`
2. Select "Post name" (`/%postname%/`)
3. Click "Save Changes" (do this TWICE to ensure rewrite rules flush)

### Step 5: Create Required Pages
Create these pages in `Pages > Add New`:
1. **Home** (leave content empty, this is handled by front-page.php)
2. **Blog** (leave empty)
3. **Contact** - assign template "Contact Page"
4. **Dashboard** - assign template "User Dashboard"
5. **About Us** (regular page)
6. **Submit Property** (placeholder page)

### Step 6: Set Reading Settings
1. Go to `Settings > Reading`
2. "Your homepage displays": **A static page**
3. Homepage: **Home**
4. Posts page: **Blog**
5. Save

### Step 7: Create Menu
1. Go to `Appearance > Menus`
2. Create menu named "Main Menu"
3. Add items:
   - Home (Page)
   - Properties (Custom Link: `/property/`)
   - Agents (Custom Link: `/agent/`)
   - Agencies (Custom Link: `/agency/`)
   - Blog (Page)
   - Contact (Page)
4. Assign to "Primary Menu" location
5. Create "Footer Menu" and assign to "Footer Menu" location

### Step 8: Add Sample Content
1. Go to `Properties > Add New` - create 6-10 sample properties with:
   - Title, description, featured image
   - Fill in Property Details meta box (price, beds, baths, sqft, address)
   - Assign Property Type, Status, City taxonomies
2. Go to `Agents > Add New` - create 3-4 agents with profile photos
3. Go to `Agencies > Add New` - create 1-2 agencies
4. Go to `Testimonials > Add New` - create 3 testimonials
5. Create some blog posts

### Step 9: Configure Customizer
1. Go to `Appearance > Customize > Agence Murailles Options`
2. Set:
   - Company phone, email, address
   - Social media URLs
   - Google Maps API key (if you have one)
   - Properties per page

### Step 10: Optional Plugins
Install via `Plugins > Add New`:
- **Contact Form 7** — add shortcode to Contact page content
- **Yoast SEO** — for SEO optimization

---

## I. QA Checklist

- [ ] Theme activates without PHP errors
- [ ] Homepage loads with hero banner, search form, properties section
- [ ] Navigation menu renders correctly (desktop + mobile)
- [ ] Property archive page shows grid with filter sidebar
- [ ] Single property page shows gallery, details, amenities, agent info
- [ ] Agent archive and single pages work
- [ ] Agency archive and single pages work
- [ ] Blog listing and single post pages work
- [ ] 404 page displays correctly
- [ ] Search results page works
- [ ] Contact page template loads
- [ ] Dashboard page redirects non-logged-in users
- [ ] Login modal appears when clicking "Sign In"
- [ ] Footer displays company info and social links
- [ ] All CSS loads (check browser DevTools Network tab)
- [ ] All JS loads (no console errors)
- [ ] Mobile responsive layout works
- [ ] Preloader shows and hides
- [ ] Back to top button works
- [ ] Custom post types appear in admin menu
- [ ] Meta boxes show on property/agent/agency edit screens
- [ ] Property gallery upload works in admin
- [ ] Pagination works on archive pages
- [ ] Customizer options save and display correctly
- [ ] Permalinks work (no 404 on property/agent/agency URLs)
- [ ] Featured image on property cards
- [ ] No hardcoded URLs remain in templates

---

## J. Known Gaps & Assumptions

### Known Gaps
1. **Home page variants** (home-2 through home-11): Only `index.html` was converted. Others can be added as page templates if needed.
2. **Google Maps**: Requires API key configuration. Map placeholder shown without key.
3. **File upload on submit-property**: The front-end property submission form is a placeholder. Full implementation requires additional security (nonce verification, capability checks, media handling).
4. **Payment/Pricing pages**: Not converted (these are demo pages from the HTML template). Can be added as regular WordPress pages.
5. **Compare Property**: Not implemented as a feature. Can be added later with JavaScript comparison table.
6. **Half-map layouts**: Not converted (require Google Maps integration). Can be added as page templates.
7. **Dropzone file upload**: Replaced with WordPress native media uploader in admin.
8. **Typed.js animation**: Not included (was a homepage text animation effect).
9. **Some CSS may reference broken image paths** from the original template's `assets/img/*.html` placeholders.
10. **Empty source pages** (about-us, faq, checkout, etc.): Handle as regular WordPress pages with content entered via editor.

### Assumptions
1. Target is local XAMPP development environment
2. WordPress 6.0+ with PHP 7.4+
3. CDN access available (Bootstrap, Font Awesome, jQuery plugins loaded from CDN)
4. Admin will enter content via WordPress dashboard
5. Contact form will use Contact Form 7 or similar plugin
6. User registration handled by WordPress native system
7. No e-commerce/payment processing needed (pricing page is informational only)

### Future Enhancements
1. Add remaining homepage variants as selectable page templates
2. Implement AJAX-based property filtering (foundation is in place)
3. Add front-end property submission with proper validation
4. Integrate Google Maps on property detail pages
5. Add property comparison feature
6. Add user bookmarking/favorites system
7. Create import XML with demo content
8. Add dark mode toggle
9. ACF integration for more flexible custom fields
10. Performance optimization (lazy loading, image optimization)
