<?php 
/*
Plugin Name: Shopkeeper Typekit Fonts
Plugin URI: http://www.getbowtied.com/
Description: A simple extension that allows you to use Typekit Fonts with your Shopkeeper theme.
Author: GetBowtied
Author URI: http://www.getbowtied.com
Version: 1.0
Text Domain: getbowtied
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$plugin_version = '1.0';

if (!class_exists('ShopkeeperTypekitFonts')) {
    class ShopkeeperTypekitFonts {

        public function __construct() {
            add_action( 'redux/init', array( $this, 'ExtendRedux' ) );
            add_action( 'wp_enqueue_scripts', array( $this, 'EnqueueTypekit' ), 99 );
            add_action( 'wp_head', array( $this, 'TypekitStyles' ), 100);
        }

        public function ExtendRedux() {
            $opt_name = "shopkeeper_theme_options";
            Redux::setSection( $opt_name, array(
                'icon'   => 'fa fa-font',
                'title'  => __( 'Typekit Fonts', 'shopkeeper' ),
                'fields' => array( 
                    // Typekit ID
                    array(
                        'id'=>'addon_font_typekit_kit_id',
                        'type' => 'text',
                        'title' => __('Typekit Kit ID', 'shopkeeper'), 
                        'subtitle' => __('<em>Paste the provided Typekit Kit ID.</em>', 'shopkeeper'),
                        'default' => ''
                    ),
                    // Adobe Typekit                        
                    array (
                        'title' => __('Main Typekit Font Face', 'shopkeeper'),
                        'subtitle' => __('<em>Enter your Typekit Font Name for the theme\'s Main Typography</em>', 'shopkeeper'),
                        'desc' => __('e.g.: futura-pt', 'shopkeeper'),
                        'id' => 'addon_main_typekit_font_face',
                        'type' => 'text',
                        'default' => ''
                    ),  
                    // Adobe Typekit                        
                    array (
                        'title' => __('Secondary Typekit Font Face', 'shopkeeper'),
                        'subtitle' => __('<em>Enter your Typekit Font Name for the theme\'s Secondary Typography</em>', 'shopkeeper'),
                        'desc' => __('e.g.: futura-pt', 'shopkeeper'),
                        'id' => 'addon_secondary_typekit_font_face',
                        'type' => 'text',
                        'default' => ''            )
                )
            ) );
        }

        public function EnqueueTypekit() {
            global $shopkeeper_theme_options;

             if ( (isset($shopkeeper_theme_options['addon_font_typekit_kit_id'])) && ($shopkeeper_theme_options['addon_font_typekit_kit_id'] != "") ) 
             {
                 wp_enqueue_script('shopkeeper-font_typekit', '//use.typekit.net/'.$shopkeeper_theme_options['addon_font_typekit_kit_id'].'.js', array(), NULL, FALSE );
                 wp_enqueue_script('shopkeeper-font_typekit_exec', plugin_dir_url( __FILE__ ).'assets/typekit.js', array(), NULL, FALSE );
            }    
        }

        public function TypekitStyles() {
            global $shopkeeper_theme_options;

            if ( (isset($shopkeeper_theme_options['addon_main_typekit_font_face'])) && ($shopkeeper_theme_options['addon_main_typekit_font_face'] != "") ) 
            {
                echo '<style>
                        h1, h2, h3, h4, h5, h6,
                        .comments-title,
                        .comment-author,
                        #reply-title,
                        #site-footer .widget-title,
                        .accordion_title,
                        .ui-tabs-anchor,
                        .products .button,
                        .site-title a,
                        .post_meta_archive a,
                        .post_meta a,
                        .post_tags a,
                         #nav-below a,
                        .list_categories a,
                        .list_shop_categories a,
                        .main-navigation > ul > li > a,
                        .main-navigation .mega-menu > ul > li > a,
                        .more-link,
                        .top-page-excerpt,
                        .select2-search input,
                        .product_after_shop_loop_buttons a,
                        .woocommerce .products-grid a.button,
                        .page-numbers,
                        input.qty,
                        .button,
                        button,
                        .button_text,
                        input[type="button"],
                        input[type="reset"],
                        input[type="submit"],
                        .woocommerce a.button,
                        .woocommerce-page a.button,
                        .woocommerce button.button,
                        .woocommerce-page button.button,
                        .woocommerce input.button,
                        .woocommerce-page input.button,
                        .woocommerce #respond input#submit,
                        .woocommerce-page #respond input#submit,
                        .woocommerce #content input.button,
                        .woocommerce-page #content input.button,
                        .woocommerce a.button.alt,
                        .woocommerce button.button.alt,
                        .woocommerce input.button.alt,
                        .woocommerce #respond input#submit.alt,
                        .woocommerce #content input.button.alt,
                        .woocommerce-page a.button.alt,
                        .woocommerce-page button.button.alt,
                        .woocommerce-page input.button.alt,
                        .woocommerce-page #respond input#submit.alt,
                        .woocommerce-page #content input.button.alt,
                        .yith-wcwl-wishlistexistsbrowse.show a,
                        .share-product-text,
                        .tabs > li > a,
                        label,
                        .comment-respond label,
                        .product_meta_title,
                        .woocommerce table.shop_table th, 
                        .woocommerce-page table.shop_table th,
                        #map_button,
                        .coupon_code_text,
                        .woocommerce .cart-collaterals .cart_totals tr.order-total td strong,
                        .woocommerce-page .cart-collaterals .cart_totals tr.order-total td strong,
                        .cart-wishlist-empty,
                        .return-to-shop .wc-backward,
                        .order-number a,
                        .account_view_link,
                        .post-edit-link,
                        .from_the_blog_title,
                        .icon_box_read_more,
                        .vc_pie_chart_value,
                        .shortcode_banner_simple_bullet,
                        .shortcode_banner_simple_height_bullet,
                        .category_name,
                        .woocommerce span.onsale,
                        .woocommerce-page span.onsale,
                        .out_of_stock_badge_single,
                        .out_of_stock_badge_loop,
                        .page-numbers,
                        .page-links,
                        .add_to_wishlist,
                        .yith-wcwl-wishlistaddedbrowse,
                        .yith-wcwl-wishlistexistsbrowse,
                        .filters-group,
                        .product-name,
                        .woocommerce-page .my_account_container table.shop_table.order_details_footer tr:last-child td:last-child .amount,
                        .customer_details dt,
                        .widget h3,
                        .widget ul a,
                        .widget a,
                        .widget .total .amount,
                        .wishlist-in-stock,
                        .wishlist-out-of-stock,
                        .comment-reply-link,
                        .comment-edit-link,
                        .widget_calendar table thead tr th,
                        .page-type,
                        .mobile-navigation a,
                        table thead tr th,
                        .portfolio_single_list_cat,
                        .portfolio-categories,
                        .shipping-calculator-button,
                        .vc_btn,
                        .vc_btn2,
                        .vc_btn3,
                        .offcanvas-menu-button .menu-button-text,
                        .account-tab-item .account-tab-link,
                        .account-tab-list .sep,
                        ul.order_details li span,
                        ul.order_details.bacs_details li,
                        .widget_calendar caption,
                        .widget_recent_comments li a,
                        .edit-account legend,
                        .widget_shopping_cart li.empty,
                        .cart-collaterals .cart_totals .shop_table .order-total .woocommerce-Price-amount,
                        .woocommerce table.cart .cart_item td a, 
                        .woocommerce #content table.cart .cart_item td a, 
                        .woocommerce-page table.cart .cart_item td a, 
                        .woocommerce-page #content table.cart .cart_item td a,
                        .woocommerce table.cart .cart_item td span, 
                        .woocommerce #content table.cart .cart_item td span, 
                        .woocommerce-page table.cart .cart_item td span, 
                        .woocommerce-page #content table.cart .cart_item td span,
                        .woocommerce-MyAccount-navigation ul li 
                        { font-family: '.$shopkeeper_theme_options['addon_main_typekit_font_face'].'}
                </style>';
            }

            if ( (isset($shopkeeper_theme_options['addon_secondary_typekit_font_face'])) && ($shopkeeper_theme_options['addon_secondary_typekit_font_face'] != "") ) 
            {
                echo '<style>
                    body,
                    p,
                    #site-navigation-top-bar,
                    .site-title,
                    .widget_product_search #searchsubmit,
                    .widget_search #searchsubmit,
                    .widget_product_search .search-submit,
                    .widget_search .search-submit,
                    #site-menu,
                    .copyright_text,
                    blockquote cite,
                    table thead th,
                    .recently_viewed_in_single h2,
                    .woocommerce .cart-collaterals .cart_totals table th,
                    .woocommerce-page .cart-collaterals .cart_totals table th,
                    .woocommerce .cart-collaterals .shipping_calculator h2,
                    .woocommerce-page .cart-collaterals .shipping_calculator h2,
                    .woocommerce table.woocommerce-checkout-review-order-table tfoot th,
                    .woocommerce-page table.woocommerce-checkout-review-order-table tfoot th,
                    .qty,
                    .shortcode_banner_simple_inside h4,
                    .shortcode_banner_simple_height h4,
                    .fr-caption,
                    .post_meta_archive,
                    .post_meta,
                    .page-links-title,
                    .yith-wcwl-wishlistaddedbrowse .feedback,
                    .yith-wcwl-wishlistexistsbrowse .feedback,
                    .product-name span,
                    .widget_calendar table tbody a,
                    .fr-touch-caption-wrapper,
                    .woocommerce .login-register-container p.form-row.remember-me-row label,
                    .woocommerce .checkout_login p.form-row label[for="rememberme"],
                    .woocommerce .checkout_login p.lost_password,
                    .form-row.remember-me-row a,
                    .wpb_widgetised_column aside ul li span.count,
                    .woocommerce td.product-name dl.variation dt, 
                    .woocommerce td.product-name dl.variation dd, 
                    .woocommerce td.product-name dl.variation dt p, 
                    .woocommerce td.product-name dl.variation dd p, 
                    .woocommerce-page td.product-name dl.variation dt, 
                    .woocommerce-page td.product-name dl.variation dd p, 
                    .woocommerce-page td.product-name dl.variation dt p, 
                    .woocommerce-page td.product-name dl.variation dd p,
                    .woocommerce span.amount,
                    .woocommerce ul#shipping_method label,
                    .woocommerce .select2-container,
                    .check_label,
                    .woocommerce-page #payment .terms label,
                    ul.order_details li strong,
                    .woocommerce-order-received .woocommerce table.shop_table tfoot th, 
                    .woocommerce-order-received .woocommerce-page table.shop_table tfoot th,
                    .woocommerce-view-order .woocommerce table.shop_table tfoot th, 
                    .woocommerce-view-order .woocommerce-page table.shop_table tfoot th,
                    .widget_recent_comments li,
                    .widget_shopping_cart p.total,
                    .widget_shopping_cart p.total .amount,
                    .mobile-navigation li ul li a,
                    .woocommerce table.cart .cart_item td:before, 
                    .woocommerce #content table.cart .cart_item td:before, 
                    .woocommerce-page table.cart .cart_item td:before, 
                    .woocommerce-page #content table.cart .cart_item td:before
                    { font-family: '.$shopkeeper_theme_options['addon_secondary_typekit_font_face'].'}
                </style>';
            }
        }

    }
    new ShopkeeperTypekitFonts();

    if ( ! class_exists( 'ShopkeeperTypekitFontsUpdater') ) {
        require_once dirname( __FILE__ ).'/plugin-updater.php';

        $plugin_update = new ShopkeeperTypekitFontsUpdater($plugin_version, 'https://my.getbowtied.com/extensions/shopkeeper-typekit-fonts/update.php', 'shopkeeper-typekit-fonts/shopkeeper-typekit-fonts.php');
    }
}