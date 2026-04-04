<?php
/**
 * Homepage Template - WPResidence Clone
 * All 9 sections from inspiration, static test data
 *
 * @package AgenceMurailles
 */

get_header();
?>

<main id="main-content" class="site-main">

<!-- ═══════════════════════════════════════════════════════════
     SECTION 1: HERO + SEARCH FORM (WPResidence exact clone)
     ═══════════════════════════════════════════════════════════ -->
<section class="elementor-section elementor-section-full_width elementor-section-height-min-height elementor-section-items-middle wpestate_hero_section" style="background-image:url('https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=1600&q=80');">
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section class="elementor-section elementor-inner-section elementor-section-boxed">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-inner-column">
                            <div class="elementor-widget-wrap elementor-element-populated">

                                <!-- Heading -->
                                <div class="elementor-element elementor-widget elementor-widget-heading">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Find your dream home</h2>
                                    </div>
                                </div>

                                <!-- Subtitle -->
                                <div class="elementor-element elementor-widget elementor-widget-text-editor">
                                    <div class="elementor-widget-container">
                                        <p>We are recognized for exceeding client expectations and delivering great results through dedication, ease of process, and extraordinary services to our worldwide clients.</p>
                                    </div>
                                </div>

                                <!-- Search Form Widget -->
                                <div class="elementor-element elementor-widget elementor-widget-WpResidence_Search_Form_Builder">
                                    <div class="elementor-widget-container">
                                        <div class="search_wrapper search_wr_elementor search_wr_elementor_shadow_true">
                                            <div class="search_wrapper_color"></div>
                                            <div class="wpestate-adv-holder">
                                                <div role="tabpanel" class="adv_search_tab">
                                                    <div class="nav nav-tabs" role="tablist">
                                                        <div class="adv_search_tab_item item_underline_active_no active sales" data-term="sales">
                                                            <a href="#sales_search" class="elementor_search_tab_head active" role="tab" aria-selected="true">Sales</a>
                                                        </div>
                                                        <div class="adv_search_tab_item item_underline_active_no rentals" data-term="rentals">
                                                            <a href="#rentals_search" class="elementor_search_tab_head" role="tab" aria-selected="false">Rentals</a>
                                                        </div>
                                                        <div class="adv_search_tab_item item_underline_active_no invest" data-term="invest">
                                                            <a href="#invest_search" class="elementor_search_tab_head" role="tab" aria-selected="false">Invest</a>
                                                        </div>
                                                    </div>

                                                    <div class="tab-content">
                                                        <!-- Sales Tab -->
                                                        <div role="tabpanel" class="tab-pane container active show" id="sales_search">
                                                            <form role="search" method="get" action="#">
                                                                <div class="search-fields-row">
                                                                    <div class="elementor-field-group elementor-column form-group elementor-col-20">
                                                                        <label class="elementor-field-label">Categories</label>
                                                                        <div class="dropdown bootstrap-select form-control wpestatemultiselect">
                                                                            <button type="button" class="wpestate-multiselect-custom-style dropdown-toggle btn-light">
                                                                                <div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Property Category</div></div></div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-field-group elementor-column form-group elementor-col-20">
                                                                        <label class="elementor-field-label">City</label>
                                                                        <div class="dropdown bootstrap-select form-control wpestatemultiselect">
                                                                            <button type="button" class="wpestate-multiselect-custom-style dropdown-toggle btn-light">
                                                                                <div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Property City</div></div></div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-field-group elementor-column form-group elementor-col-20">
                                                                        <label class="elementor-field-label">Beds &amp; Baths</label>
                                                                        <div class="btn-group wpestate-beds-baths-popoup-component" style="width:100%;">
                                                                            <button type="button" class="btn btn-default dropdown-toggle wpestate-multiselect-custom-style" style="width:100%;">
                                                                                Beds | Baths
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-field-group elementor-column form-group elementor-col-20">
                                                                        <label class="elementor-field-label">Price</label>
                                                                        <div class="btn-group wpestate-beds-baths-popoup-component" style="width:100%;">
                                                                            <button type="button" class="btn btn-default dropdown-toggle wpestate-multiselect-custom-style" style="width:100%;">
                                                                                Sale Price
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elemenentor_submit_wrapper elementor-field-group form-group elementor-column elementor-col-20">
                                                                        <button name="submit" type="submit" class="wpresidence_button" value="Search">
                                                                            <div class="elementor-icon"><i class="fas fa-search"></i></div>Search
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     SECTION 2: PROPERTIES BY AREA
     ═══════════════════════════════════════════════════════════ -->
<section class="wpresidence_section" style="background:linear-gradient(135deg, #f8f9fc 0%, #eef2f7 100%); padding:80px 0;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Properties by Area</h2>
            <p class="section-description">Highlight the best of your properties by using the List Category shortcode. You can list categories, types, cities, areas and states of your choice.</p>
        </div>

        <div class="wpresidence_shortcode_listings_wrapper row m-0">
            <?php
            $areas = array(
                array('name'=>'Jersey City','count'=>25,'img'=>'https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?w=600&q=80'),
                array('name'=>'The Heights','count'=>3,'img'=>'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=600&q=80'),
                array('name'=>'New Jersey State','count'=>25,'img'=>'https://images.unsplash.com/photo-1558642452-9d2a7deb7f62?w=600&q=80'),
                array('name'=>'New York State','count'=>16,'img'=>'https://images.unsplash.com/photo-1534430480872-3498386e7856?w=600&q=80'),
                array('name'=>'New York','count'=>17,'img'=>'https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?w=600&q=80'),
                array('name'=>'Bayonne','count'=>5,'img'=>'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=600&q=80'),
                array('name'=>'Greenville','count'=>17,'img'=>'https://images.unsplash.com/photo-1545153996-e01b5e29bf07?w=600&q=80'),
                array('name'=>'Manhattan','count'=>8,'img'=>'https://images.unsplash.com/photo-1485871981521-5b1fd3805eee?w=600&q=80'),
            );
            foreach($areas as $a): ?>
            <div class="col-md-3 listing_wrapper places_wrapper_type_3">
                <div class="places_square_backgorund_image" style="background-image:url('<?php echo esc_url($a['img']); ?>');">
                    <a href="#" class="places_cover"></a>
                    <div class="property_listing_square_details">
                        <h4><?php echo esc_html($a['name']); ?></h4>
                        <div class="property_location_type_3"><?php echo esc_html($a['count']); ?> listings</div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     SECTION 3: LATEST PROPERTIES (Sales)
     ═══════════════════════════════════════════════════════════ -->
<section class="wpresidence_section" style="padding:80px 0; background:#fff;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Latest Properties</h2>
            <p class="section-description">These are the latest properties in the Sales category. You can create the list using the "latest listing shortcode" and show items by specific categories.</p>
        </div>

        <div class="wpresidence_shortcode_listings_wrapper row">
            <?php
            $latest = array(
                array('title'=>'Luxury House in Greenville','price'=>'$860,000','img'=>'https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=600&q=80','beds'=>5,'baths'=>6,'size'=>'190 ft²','agent'=>'John Collins','featured'=>true,'status'=>'Sales','badge'=>'Active','desc'=>'This property is mostly wooded and sits high on a hilltop overlooking the Mohawk River Valley.','photos'=>12),
                array('title'=>'Modern Condo for Sale','price'=>'$150,000','img'=>'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=600&q=80','beds'=>3,'baths'=>2,'size'=>'120 ft²','agent'=>'Michael Suttherland','featured'=>true,'status'=>'Sales','badge'=>'New','desc'=>'Beautiful modern condo in a prime location with stunning views and contemporary finishes throughout.','photos'=>8),
                array('title'=>'Apartment with Subunits','price'=>'$999/month','img'=>'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&q=80','beds'=>4,'baths'=>3,'size'=>'200 ft²','agent'=>'Lora Smith','featured'=>false,'status'=>'Rentals','badge'=>'Active','desc'=>'Spacious apartment building featuring multiple sub-units, perfect for investment purposes.','photos'=>6),
                array('title'=>'Three Room Apartment','price'=>'$320,000','img'=>'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=600&q=80','beds'=>3,'baths'=>2,'size'=>'150 ft²','agent'=>'Mike Rutter','featured'=>false,'status'=>'Sales','badge'=>'Active','desc'=>'Charming three-room apartment in a quiet residential neighborhood with easy access to transit.','photos'=>9),
                array('title'=>'Penthouse Bay View','price'=>'$1,200,000','img'=>'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=600&q=80','beds'=>4,'baths'=>3,'size'=>'280 ft²','agent'=>'John Collins','featured'=>true,'status'=>'Sales','badge'=>'Active','desc'=>'Stunning penthouse with panoramic bay views, floor-to-ceiling windows and private rooftop terrace.','photos'=>15),
                array('title'=>'Cozy Studio Downtown','price'=>'$750/month','img'=>'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=600&q=80','beds'=>1,'baths'=>1,'size'=>'45 ft²','agent'=>'Lora Smith','featured'=>false,'status'=>'Rentals','badge'=>'New','desc'=>'Fully furnished studio apartment in the heart of downtown, walking distance to everything.','photos'=>5),
            );
            foreach($latest as $p): ?>
            <div class="col-md-4 listing_wrapper">
                <div class="property_listing property_card_default">
                    <div class="listing-unit-img-wrapper">
                        <div class="prop_new_details">
                            <div class="property_media"><i class="fas fa-camera"></i> <?php echo esc_html($p['photos']); ?></div>
                            <div class="property_location_image"><i class="fas fa-map-marker-alt"></i> New York</div>
                            <div class="featured_gradient"></div>
                        </div>
                        <a href="#"><img src="<?php echo esc_url($p['img']); ?>" alt="<?php echo esc_attr($p['title']); ?>" class="img-responsive wp-post-image" loading="lazy"></a>
                        <div class="tag-wrapper">
                            <?php if($p['featured']): ?><div class="featured_div">Featured</div><?php endif; ?>
                            <div class="status-wrapper">
                                <div class="action_tag_wrapper <?php echo esc_attr($p['status']); ?>"><?php echo esc_html($p['status']); ?></div>
                                <div class="ribbon-inside <?php echo esc_attr($p['badge']); ?>"><?php echo esc_html($p['badge']); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="property-unit-information-wrapper">
                        <h4><a href="#"><?php echo esc_html($p['title']); ?></a></h4>
                        <div class="listing_unit_price_wrapper"><?php echo esc_html($p['price']); ?></div>
                        <div class="listing_details"><?php echo esc_html($p['desc']); ?></div>
                        <div class="property_listing_details">
                            <span class="inforoom"><i class="fas fa-bed"></i> <?php echo esc_html($p['beds']); ?></span>
                            <span class="infobath"><i class="fas fa-bath"></i> <?php echo esc_html($p['baths']); ?></span>
                            <span class="infosize"><i class="fas fa-vector-square"></i> <?php echo esc_html($p['size']); ?></span>
                            <a href="#" class="unit_details_x">details</a>
                        </div>
                        <div class="property_location">
                            <div class="property_agent_wrapper">
                                <div class="property_agent_image_sign"><i class="far fa-user-circle"></i></div>
                                <a class="wpestate_card_agent_link" href="#"><?php echo esc_html($p['agent']); ?></a>
                            </div>
                            <div class="listing_actions">
                                <div class="share_unit">
                                    <a href="#" class="social_facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social_whatsup"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     SECTION 4: PROPERTIES BY CATEGORY
     ═══════════════════════════════════════════════════════════ -->
<section class="wpresidence_section" style="padding:80px 0; background:#f8f8f8;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Properties by Category</h2>
            <p class="section-description">Highlight the best of your properties by using the List Category shortcode. You can list specific properties categories, types, cities, areas.</p>
        </div>

        <div class="wpresidence_shortcode_listings_wrapper row m-0">
            <?php
            $cats = array(
                array('name'=>'Apartments','count'=>17,'img'=>'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=600&q=80','col'=>'col-md-6'),
                array('name'=>'Condos','count'=>8,'img'=>'https://images.unsplash.com/photo-1560185127-6ed189bf02f4?w=600&q=80','col'=>'col-md-3'),
                array('name'=>'Houses','count'=>5,'img'=>'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=600&q=80','col'=>'col-md-3'),
                array('name'=>'Industrial','count'=>1,'img'=>'https://images.unsplash.com/photo-1565610222536-ef125c59da2e?w=600&q=80','col'=>'col-md-3'),
                array('name'=>'Land','count'=>1,'img'=>'https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=600&q=80','col'=>'col-md-3'),
                array('name'=>'Offices','count'=>2,'img'=>'https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80','col'=>'col-md-3'),
                array('name'=>'Villas','count'=>4,'img'=>'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=600&q=80','col'=>'col-md-3'),
            );
            foreach($cats as $c): ?>
            <div class="<?php echo esc_attr($c['col']); ?> listing_wrapper places_wrapper_type_3">
                <div class="places_square_backgorund_image" style="background-image:url('<?php echo esc_url($c['img']); ?>'); <?php echo $c['col']==='col-md-6'?'min-height:280px;':''; ?>">
                    <a href="#" class="places_cover"></a>
                    <div class="property_listing_square_details">
                        <h4><?php echo esc_html($c['name']); ?></h4>
                        <div class="property_location_type_3"><?php echo esc_html($c['count']); ?> listings</div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     SECTION 5: PROPERTIES FOR RENT
     ═══════════════════════════════════════════════════════════ -->
<section class="wpresidence_section" style="padding:80px 0; background:#fff;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Properties for Rent</h2>
            <p class="section-description">These are the latest properties in the Rentals category. You can create the list using the "latest listing shortcode" and show items by specific categories.</p>
        </div>

        <div class="wpresidence_shortcode_listings_wrapper row">
            <?php
            $rentals = array(
                array('title'=>'Modern Studio Apartment','price'=>'$1,200/month','img'=>'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=600&q=80','beds'=>1,'baths'=>1,'size'=>'55 ft²','agent'=>'Lora Smith','status'=>'Rentals','badge'=>'Active','desc'=>'Stylish studio apartment with modern amenities in a vibrant downtown neighborhood.','photos'=>7),
                array('title'=>'Family House with Garden','price'=>'$2,800/month','img'=>'https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=600&q=80','beds'=>4,'baths'=>3,'size'=>'220 ft²','agent'=>'John Collins','status'=>'Rentals','badge'=>'Active','desc'=>'Beautiful family house with large garden, perfect for families looking for suburban comfort.','photos'=>10),
                array('title'=>'Loft Style Office Space','price'=>'$3,500/month','img'=>'https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80','beds'=>0,'baths'=>2,'size'=>'300 ft²','agent'=>'Michael Suttherland','status'=>'Rentals','badge'=>'New','desc'=>'Open concept loft-style office space with industrial details and excellent natural lighting.','photos'=>6),
                array('title'=>'Beachfront Condo','price'=>'$1,800/month','img'=>'https://images.unsplash.com/photo-1600607687644-c7171b42498f?w=600&q=80','beds'=>2,'baths'=>2,'size'=>'110 ft²','agent'=>'Mike Rutter','status'=>'Rentals','badge'=>'Active','desc'=>'Gorgeous beachfront condo with ocean views, recently renovated with premium finishes.','photos'=>9),
                array('title'=>'Luxury Penthouse Suite','price'=>'$5,500/month','img'=>'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=600&q=80','beds'=>3,'baths'=>3,'size'=>'250 ft²','agent'=>'John Collins','status'=>'Rentals','badge'=>'Active','desc'=>'Exclusive penthouse suite with rooftop terrace, concierge service and premium amenities.','photos'=>14),
                array('title'=>'Cozy Cottage Retreat','price'=>'$950/month','img'=>'https://images.unsplash.com/photo-1518780664697-55e3ad937233?w=600&q=80','beds'=>2,'baths'=>1,'size'=>'85 ft²','agent'=>'Lora Smith','status'=>'Rentals','badge'=>'New','desc'=>'Charming cottage retreat in a quiet setting, ideal for couples or remote workers.','photos'=>5),
            );
            foreach($rentals as $p): ?>
            <div class="col-md-4 listing_wrapper">
                <div class="property_listing property_card_default">
                    <div class="listing-unit-img-wrapper">
                        <div class="prop_new_details">
                            <div class="property_media"><i class="fas fa-camera"></i> <?php echo esc_html($p['photos']); ?></div>
                            <div class="property_location_image"><i class="fas fa-map-marker-alt"></i> New York</div>
                            <div class="featured_gradient"></div>
                        </div>
                        <a href="#"><img src="<?php echo esc_url($p['img']); ?>" alt="<?php echo esc_attr($p['title']); ?>" class="img-responsive wp-post-image" loading="lazy"></a>
                        <div class="tag-wrapper">
                            <div class="status-wrapper">
                                <div class="action_tag_wrapper <?php echo esc_attr($p['status']); ?>"><?php echo esc_html($p['status']); ?></div>
                                <div class="ribbon-inside <?php echo esc_attr($p['badge']); ?>"><?php echo esc_html($p['badge']); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="property-unit-information-wrapper">
                        <h4><a href="#"><?php echo esc_html($p['title']); ?></a></h4>
                        <div class="listing_unit_price_wrapper"><?php echo esc_html($p['price']); ?></div>
                        <div class="listing_details"><?php echo esc_html($p['desc']); ?></div>
                        <div class="property_listing_details">
                            <?php if($p['beds']): ?><span class="inforoom"><i class="fas fa-bed"></i> <?php echo esc_html($p['beds']); ?></span><?php endif; ?>
                            <span class="infobath"><i class="fas fa-bath"></i> <?php echo esc_html($p['baths']); ?></span>
                            <span class="infosize"><i class="fas fa-vector-square"></i> <?php echo esc_html($p['size']); ?></span>
                            <a href="#" class="unit_details_x">details</a>
                        </div>
                        <div class="property_location">
                            <div class="property_agent_wrapper">
                                <div class="property_agent_image_sign"><i class="far fa-user-circle"></i></div>
                                <a class="wpestate_card_agent_link" href="#"><?php echo esc_html($p['agent']); ?></a>
                            </div>
                            <div class="listing_actions">
                                <div class="share_unit">
                                    <a href="#" class="social_facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social_whatsup"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     SECTION 6: FEATURED PROPERTIES (Large Cards)
     ═══════════════════════════════════════════════════════════ -->
<section class="wpresidence_section" style="padding:80px 0; background:#f8f8f8;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Properties</h2>
            <p class="section-description">Here are some listings displayed with the featured property shortcode, which you can use when you have some special properties to present.</p>
        </div>

        <div class="wpresidence_featured_properties_wrapper">
            <?php
            $featured = array(
                array('title'=>'Villa on Washington Avenue','price'=>'$150,000','img'=>'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=1200&q=80','beds'=>5,'baths'=>3,'size'=>'250 ft²','agent'=>'John Collins','desc'=>'This property is mostly wooded and sits high on a hilltop overlooking the valley. Located right in the heart of the city with easy access to amenities.','status'=>'Sales'),
                array('title'=>'Luxury Villa in Rego Park','price'=>'$420,000','img'=>'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1200&q=80','beds'=>3,'baths'=>2,'size'=>'150 ft²','agent'=>'Michael Suttherland','desc'=>'An exquisite luxury villa featuring modern architecture, premium materials and state-of-the-art smart home technology throughout.','status'=>'Sales'),
                array('title'=>'Gorgeous Home for Sale','price'=>'$770,000','img'=>'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1200&q=80','beds'=>5,'baths'=>6,'size'=>'190 ft²','agent'=>'Lora Smith','desc'=>'This gorgeous home features an open floor plan, gourmet kitchen, hardwood floors throughout and a beautifully landscaped backyard.','status'=>'Sales'),
            );
            foreach($featured as $f): ?>
            <div class="featured_property_card">
                <div class="featured_property_image">
                    <img src="<?php echo esc_url($f['img']); ?>" alt="<?php echo esc_attr($f['title']); ?>" loading="lazy">
                    <div class="featured_gradient"></div>
                    <div class="tag-wrapper">
                        <div class="featured_div">Featured</div>
                        <div class="status-wrapper">
                            <div class="action_tag_wrapper <?php echo esc_attr($f['status']); ?>"><?php echo esc_html($f['status']); ?></div>
                        </div>
                    </div>
                </div>
                <div class="featured_property_content">
                    <h3><a href="#"><?php echo esc_html($f['title']); ?></a></h3>
                    <div class="listing_unit_price_wrapper" style="font-size:22px; margin-bottom:15px;"><?php echo esc_html($f['price']); ?></div>
                    <p class="listing_details" style="-webkit-line-clamp:4;"><?php echo esc_html($f['desc']); ?></p>
                    <div class="property_listing_details">
                        <span class="inforoom"><i class="fas fa-bed"></i> <?php echo esc_html($f['beds']); ?></span>
                        <span class="infobath"><i class="fas fa-bath"></i> <?php echo esc_html($f['baths']); ?></span>
                        <span class="infosize"><i class="fas fa-vector-square"></i> <?php echo esc_html($f['size']); ?></span>
                    </div>
                    <div class="property_agent_wrapper" style="margin-top:20px;">
                        <div class="property_agent_image_sign"><i class="far fa-user-circle"></i></div>
                        <a class="wpestate_card_agent_link" href="#"><?php echo esc_html($f['agent']); ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     SECTION 7: REAL ESTATE AGENTS
     ═══════════════════════════════════════════════════════════ -->
<section id="Agent-02" class="wpresidence_section" style="padding:80px 0; background:#fff;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Real Estate Agents</h2>
            <p class="section-description">With the "list agents shortcode" you can show your agents in any page, alongside with their contact details and link to their agent profile.</p>
        </div>

        <div class="row">
            <?php
            $agents = array(
                array('name'=>'Lily Bicharm','position'=>'Realtor','listings'=>4,'desc'=>'Lily is recognized for exceeding client expectations and delivering great results through dedication and extraordinary service.','img'=>'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80','phone'=>'800 900 8766'),
                array('name'=>'Samuel Diesel','position'=>'Commercial Broker','listings'=>4,'desc'=>'Samuel specializes in commercial real estate with over 15 years of experience in property acquisition and management.','img'=>'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80','phone'=>'1-800-555-1234'),
                array('name'=>'Dennis Albo','position'=>'Senior Agent','listings'=>6,'desc'=>'Dennis has deep expertise in residential properties and helps clients find their dream homes with personalized attention.','img'=>'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&q=80','phone'=>'1-800-555-6789'),
            );
            foreach($agents as $ag): ?>
            <div class="wpresidence_agent_unit_wrapper col-lg-4 col-12 col-sm-6 col-md-6 listing_wrapper">
                <div class="agent_unit">
                    <div class="agent-unit-img-wrapper">
                        <div class="agent_card_my_listings"><?php echo esc_html($ag['listings']); ?> listings</div>
                        <img src="<?php echo esc_url($ag['img']); ?>" class="img-responsive wp-post-image" alt="<?php echo esc_attr($ag['name']); ?>" loading="lazy">
                    </div>
                    <h4><a href="#"><?php echo esc_html($ag['name']); ?></a></h4>
                    <div class="agent_position"><?php echo esc_html($ag['position']); ?></div>
                    <div class="agent_card_content"><?php echo esc_html($ag['desc']); ?></div>
                    <div class="agent_unit_social agent_list">
                        <div class="wpestate_agent_unit_social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="agent_unit_phone"><a href="tel:<?php echo esc_attr($ag['phone']); ?>"><i class="fas fa-phone"></i></a></div>
                        <div class="agent_unit_email"><a href="mailto:agent@email.com"><i class="fas fa-envelope"></i></a></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     SECTION 8: TESTIMONIALS
     ═══════════════════════════════════════════════════════════ -->
<section id="testimonials_main" class="wpresidence_section" style="background:linear-gradient(135deg, #062750 0%, #0a3d7a 100%); padding:80px 0;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" style="color:#fff;">Testimonials</h2>
            <p class="section-description" style="color:rgba(255,255,255,0.7);">Publish the best of your client testimonials and let the world know what a great agent or real estate agency you are. Testimonials build trust.</p>
        </div>

        <div class="testimonials_grid">
            <?php
            $tests = array(
                array('name'=>'Dana Gilmore','role'=>'developer','text'=>'I reviewed and purchased a number of different WordPress Themes before settling on Wp Residence. suspended in a few pockets. There are traces of old foundations.'),
                array('name'=>'Susan Barkley','role'=>'happy seller','text'=>'The WP Estate team did an outstanding job helping me buy and create my first real estate website. Suspended in a few pockets with traces of old walls.'),
                array('name'=>'Lisa Simpson','role'=>'happy buyer','text'=>'We hired the WP Estate team as our buyer agent because they are the perfect team for real estate projects. Outstanding work and great support.'),
                array('name'=>'Sara Loreley','role'=>'buyer','text'=>'I reviewed and purchased a number of different WordPress Themes before settling on Wp Residence. The features and design are simply outstanding.'),
                array('name'=>'Virginia Wolf','role'=>'happy seller','text'=>'The WP Estate team did an outstanding job helping me buy and create my first real estate website. Professional and dedicated support throughout.'),
                array('name'=>'Jessica Fowley','role'=>'happy buyer','text'=>'We hired the WP Estate team as our buyer agent because they are the perfect team for real estate projects. Highly recommended for everyone.'),
            );
            $avatars = array(
                'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&q=80',
                'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&q=80',
                'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=100&q=80',
                'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=100&q=80',
                'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&q=80',
                'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&q=80',
            );
            foreach($tests as $i=>$t): ?>
            <div class="testimonial-container type_class_4">
                <div class="testimonial-image" style="background-image:url('<?php echo esc_url($avatars[$i]); ?>');"></div>
                <div class="testimonial-author-line"><?php echo esc_html($t['name']); ?></div>
                <div class="testimonial-location-line"><?php echo esc_html($t['role']); ?></div>
                <div class="testimonial-text"><?php echo esc_html($t['text']); ?></div>
                <div class="testimmonials_starts">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     SECTION 9: SCHEDULE A MEETING / CONTACT CTA
     ═══════════════════════════════════════════════════════════ -->
<section class="wpresidence_section schedule_meeting_section" style="padding:80px 0; background:#fff;">
    <div class="container">
        <div class="schedule_meeting_wrapper">
            <div class="schedule_meeting_content">
                <h2>Schedule a meeting with our team</h2>
                <p class="schedule_meeting_subtitle">Contact us today if you'd like to know more about how we help buy, sell or rent your home.</p>
                <p class="schedule_meeting_desc">Our experts and developers would love to contribute their expertise and insights to your real estate plans.</p>

                <div class="schedule_meeting_features">
                    <div class="schedule_feature_item">
                        <i class="fas fa-check-circle"></i>
                        <span>Find excellent deals</span>
                    </div>
                    <div class="schedule_feature_item">
                        <i class="fas fa-check-circle"></i>
                        <span>Friendly host</span>
                    </div>
                    <div class="schedule_feature_item">
                        <i class="fas fa-check-circle"></i>
                        <span>List your own property</span>
                    </div>
                    <div class="schedule_feature_item">
                        <i class="fas fa-check-circle"></i>
                        <span>Experience the best</span>
                    </div>
                </div>
            </div>
            <div class="schedule_meeting_form">
                <h3>Get in touch</h3>
                <form>
                    <div class="schedule_form_row">
                        <input type="text" class="form-control" placeholder="Your Name *" required>
                        <input type="email" class="form-control" placeholder="Your Email *" required>
                    </div>
                    <div class="schedule_form_row">
                        <input type="tel" class="form-control" placeholder="Your Phone">
                        <select class="form-control">
                            <option value="">I'm interested in...</option>
                            <option>Buying a property</option>
                            <option>Selling a property</option>
                            <option>Renting a property</option>
                            <option>Property management</option>
                        </select>
                    </div>
                    <textarea class="form-control" rows="4" placeholder="Your Message *" required></textarea>
                    <button type="submit" class="wpresidence_button" style="width:100%; margin-top:15px;">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

</main>

<?php
get_footer();
