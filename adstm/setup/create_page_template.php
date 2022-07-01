<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 09.09.2015
 * Time: 8:51
 */

function dav2_create_pages() {

    global $wp_rewrite;

    if ( isset( $_POST[ 'tp_create' ] ) && $_POST[ 'tp_create' ] == true && is_admin() ) {
    	
        update_option( 'posts_per_rss', 20 );
        update_option( 'posts_per_page', 20 );
        update_option( 'show_on_front', 'page' );
        update_option( 'comments_per_page', 25 );
        update_option( 'page_comments', 1 );

        wp_delete_post(1, true );
        wp_delete_post(2, true );
        wp_delete_post(3, true );

        
        $wp_rewrite->set_permalink_structure( '/%postname%/' );

	    $pageObj = new dav2_PageTemplate();

        $front_page = get_post_by_name( 'home' );
        if(!$front_page) {
            $pageObj->addPage(['title' => __('Home', 'dav2'), 'post_name' => 'home', 'static' => 'front']);
        }
        $blog_page = get_page_by_path( 'blog' );
        if(!$blog_page) {
            $pageObj->addPage(['title' => __('Blog', 'dav2'), 'post_name' => 'blog', 'static' => 'posts']);
        }

	    $pageObj->addPage( [ 'title' => __( 'Subscription', 'dav2' ), 'post_name' => 'subscription' ] );
	    $pageObj->addPage( [ 'title' => __( 'Thank you', 'dav2' ), 'post_name' => 'thank-you-contact' ] );
	    $pageObj->addPage( [ 'title' => __( 'Payment methods', 'dav2' ), 'post_name' => 'payment-methods' ] );
	    $pageObj->addPage( [ 'title' => __( 'Shipping & Delivery', 'dav2' ), 'post_name' => 'shipping-delivery' ] );
	    $pageObj->addPage( [ 'title' => __( 'About Us', 'dav2' ), 'post_name' => 'about-us' ] );
	    $pageObj->addPage( [ 'title' => __( 'Contact Us', 'dav2' ), 'post_name' => 'contact-us' ] );
	    $pageObj->addPage( [ 'title' => __( 'Privacy Policy', 'dav2' ), 'post_name' => 'privacy-policy' ] );
	    $pageObj->addPage( [ 'title' => __( 'Terms and Conditions', 'dav2' ), 'post_name' => 'terms-and-conditions' ] );
	    $pageObj->addPage( [ 'title' => __( 'Refunds & Returns Policy', 'dav2' ), 'post_name' => 'refund-policy' ] );
	    $pageObj->addPage( [ 'title' => __( 'Frequently Asked Questions', 'dav2' ), 'post_name' => 'frequently-asked-questions' ] );
	    $pageObj->addPage( [ 'title' => __( 'Track your order', 'dav2' ), 'post_name' => 'track-your-order' ] );
	    $pageObj->addPageContent( [ 'title' => __( 'Account', 'dav2' ), 'post_name' => 'account', 'content' => '[ads_account]' ] );
	    $pageObj->addPageContent( [ 'title' => __( 'Orders', 'dav2' ), 'post_name' => 'orders', 'content' => '[ads_orders]' ] );

	    $pageObj->addPage( [ 'title' => __( 'Your shopping cart', 'dav2' ), 'post_name' => 'cart' ] );
	    $pageObj->addPage( [ 'title' => __( 'Thank you page', 'dav2' ), 'post_name' => 'thankyou' ] );

	    $pageObj->create();

	    createMenu( [
		    [ 'title' => __( 'Home', 'dav2' ), 'url' => '/' ],
	        [ 'title' => __( 'Products', 'dav2' ), 'url' => '/product/' ],
	        [ 'title' => __( 'Shipping', 'dav2' ), 'url' => '/shipping-delivery/' ],
	        [ 'title' => __( 'Returns', 'dav2' ), 'url' => '/refund-policy/' ],
	        [ 'title' => __( 'About', 'dav2' ), 'url' => '/about-us/' ],
	        [ 'title' => __( 'Tracking', 'dav2' ), 'url' => '/track-your-order/' ],
	        [ 'title' => __( 'Contact', 'dav2' ), 'url' => '/contact-us/' ]
	    ], 'Top Menu', 'top_menu' );

	    createMenu( [
		    [ 'title' => __( 'About Us', 'dav2' ), 'url' => '/about-us/' ],
		    [ 'title' => __( 'Privacy Policy', 'dav2' ), 'url' => '/privacy-policy/' ],
		    [ 'title' => __( 'Terms & Conditions', 'dav2' ), 'url' => '/terms-and-conditions/' ]
	    ], 'Company Info', 'footer-company' );

	    createMenu( [
		    [ 'title' => __( 'Payment Methods', 'dav2' ), 'url' => '/payment-methods/' ],
		    [ 'title' => __( 'Shipping & Delivery', 'dav2' ), 'url' => '/shipping-delivery/' ],
		    [ 'title' => __( 'Returns Policy', 'dav2' ), 'url' => '/refund-policy/' ]
	    ], 'Purchase info', 'footer-purchase' );
	    
        createMenu( [
	        [ 'title' => __( 'Contact Us', 'dav2' ), 'url' => '/contact-us/' ],
	        [ 'title' => __( 'Frequently Asked Questions', 'dav2' ), 'url' => '/frequently-asked-questions/' ]
        ], 'Customer service', 'footer-service' );
        
        add_action( 'init', 'createCategoryProduct', 10, [
	        [ 'title' => __( 'Costumes', 'dav2' ), 'url' => '/costumes/', 'slug' => 'costumes' ],
	        [ 'title' => __( 'Custom category', 'dav2' ), 'url' => '/custom-category/', 'slug' => 'custom-category' ],
	        [ 'title' => __( 'Gifts', 'dav2' ), 'url' => '/gifts/', 'slug' => 'gifts' ],
	        [ 'title' => __( 'Jewelry', 'dav2' ), 'url' => '/jewelry/', 'slug' => 'jewelry' ],
	        [ 'title' => __( 'Men clothing', 'dav2' ), 'url' => '/men-clothing/', 'slug' => 'men-clothing' ],
	        [ 'title' => __( 'Phone cases', 'dav2' ), 'url' => '/phone-cases/', 'slug' => 'phone-cases' ],
	        [ 'title' => __( 'Posters', 'dav2' ), 'url' => '/posters/', 'slug' => 'posters' ],
	        [ 'title' => __( 'T-shirts', 'dav2' ), 'url' => '/t-shirts/', 'slug' => 't-shirts' ],
	        [ 'title' => __( 'Toys', 'dav2' ), 'url' => '/toys/', 'slug' => 'toys' ],
	        [ 'title' => __( 'Women clothing', 'dav2' ), 'url' => '/women-clothing/', 'slug' => 'women-clothing' ]
        ] );
        
        createMenu( [
	        [ 'title' => __( 'Costumes', 'dav2' ), 'url' => '/costumes/' ],
	        [ 'title' => __( 'Custom category', 'dav2' ), 'url' => '/custom-category/' ],
	        [ 'title' => __( 'Gifts', 'dav2' ), 'url' => '/gifts/' ],
	        [ 'title' => __( 'Jewelry', 'dav2' ), 'url' => '/jewelry/' ],
	        [ 'title' => __( 'Men clothing', 'dav2' ), 'url' => '/men-clothing/' ],
	        [ 'title' => __( 'Phone cases', 'dav2' ), 'url' => '/phone-cases/' ],
	        [ 'title' => __( 'Posters', 'dav2' ), 'url' => '/posters/' ],
	        [ 'title' => __( 'T-shirts', 'dav2' ), 'url' => '/t-shirts/' ],
	        [ 'title' => __( 'Toys', 'dav2' ), 'url' => '/toys/' ],
	        [ 'title' => __( 'Women clothing', 'dav2' ), 'url' => '/women-clothing/' ]
        ], 'Main menu', 'category' );


        $cur_website = parse_url(ADSTM_HOME, PHP_URL_HOST);
        $IMG_DIR = str_replace('//'.$cur_website,'',IMG_DIR);

        $classic_params = [

            'tp_subscribe_show' => false,
            'tp_header_phone'   => '',
            'tp_address'        => '',
            'tp_text_header_call'   => '',
            'tp_phone_header'        => '',

            'home_grid_enable'      => false,
            'tp_show_sort_discount' => false,
            'tp_best_deals'         => false,
            'tp_countdown'            => true,

            'shipping_icon'             => '',
            'tp_text_top_header'        => __( 'Free Worldwide Shipping', 'dav2' ),

            'tp_about_delivery_1'  => $IMG_DIR .'del1.png',
            'tp_about_delivery_2'  => $IMG_DIR .'del2.png',
            'tp_about_delivery_3'  => $IMG_DIR .'del3.png',
            'tp_about_delivery_4'  => $IMG_DIR .'del4.png',
            'tp_about_delivery_5'  => $IMG_DIR .'del5.png',

            'features' => [
                'item'=> [
                    [
                        'head' => '<b>700+</b> '. __( 'Clients Love Us!', 'dav2' ),
                        'text' => __( 'We offer best service and great prices on high quality products', 'dav2' ),
                    ],
                    [
                        'head' => __( 'Shipping to', 'dav2' ) . ' <b>185</b> ' . __( 'Countries', 'dav2' ),
                        'text' => __( 'Our store operates worldwide and you can enjoy free delivery of all orders', 'dav2' ),
                    ],
                    [
                        'head' => '<b>100%</b>  ' . __( 'Safe Payment', 'dav2' ),
                        'text' => __( 'Buy with confidence using the world’s most popular and secure payment methods', 'dav2' ),
                    ],
                    [
                        'head' => '<b>2000+</b> ' . __( 'Successful Deliveries', 'dav2' ),
                        'text' => __( 'Our Buyer Protection covers your purchase from click to delivery', 'dav2' ),
                    ]
                ]
            ],

            'tp_tab_shipping_label'              => __( 'Shipping & Returns', 'dav2' ),
            'tp_single_shipping_payment_content' => ads\customization\czOptions::getTemplateField( 'tm_single_shipping_payment_content' ),

            'tp_mode'    => 1
        ];
        mode_save($classic_params);
        wp_send_json([
            'status' => 'SUCCESS',
            'message'   => 'Classic mode activated'
        ]);

    }

    if (isset( $_POST[ 'tp_create_sellvia_mode' ] ) && $_POST[ 'tp_create_sellvia_mode' ] == true && is_admin() ) {

        update_option( 'posts_per_rss', 20 );
        update_option( 'posts_per_page', 20 );
        update_option( 'show_on_front', 'page' );
        update_option( 'comments_per_page', 25 );
        update_option( 'page_comments', 1 );

        wp_delete_post(1, true );
        wp_delete_post(2, true );
        wp_delete_post(3, true );


        $wp_rewrite->set_permalink_structure( '/%postname%/' );

        $pageObj = new dav2_PageTemplate();
        $front_page = get_post_by_name( 'home' );
        if(!$front_page) {
            $pageObj->addPage(['title' => __('Home', 'dav2'), 'post_name' => 'home', 'static' => 'front']);
        }
        $blog_page = get_page_by_path( 'blog' );
        if(!$blog_page) {
            $pageObj->addPage(['title' => __('Blog', 'dav2'), 'post_name' => 'blog', 'static' => 'posts']);
        }

        $pageObj->addPage( [ 'title' => __( 'Subscription', 'dav2' ), 'post_name' => 'subscription' ] );
        $pageObj->addPage( [ 'title' => __( 'Thank you', 'dav2' ), 'post_name' => 'thank-you-contact' ] );
        $pageObj->addPage( [ 'title' => __( 'Payment methods', 'dav2' ), 'post_name' => 'payment-methods' ] );
        $pageObj->addPage( [ 'title' => __( 'Shipping & Delivery', 'dav2' ), 'post_name' => 'shipping-delivery' ] );
        $pageObj->addPage( [ 'title' => __( 'About Us', 'dav2' ), 'post_name' => 'about-us' ] );
        $pageObj->addPage( [ 'title' => __( 'Contact Us', 'dav2' ), 'post_name' => 'contact-us' ] );
        $pageObj->addPage( [ 'title' => __( 'Privacy Policy', 'dav2' ), 'post_name' => 'privacy-policy' ] );
        $pageObj->addPage( [ 'title' => __( 'Terms and Conditions', 'dav2' ), 'post_name' => 'terms-and-conditions' ] );
        $pageObj->addPage( [ 'title' => __( 'Refunds & Returns Policy', 'dav2' ), 'post_name' => 'refund-policy' ] );
        $pageObj->addPage( [ 'title' => __( 'Frequently Asked Questions', 'dav2' ), 'post_name' => 'frequently-asked-questions' ] );
        $pageObj->addPage( [ 'title' => __( 'Track your order', 'dav2' ), 'post_name' => 'track-your-order' ] );
        $pageObj->addPageContent( [ 'title' => __( 'Account', 'dav2' ), 'post_name' => 'account', 'content' => '[ads_account]' ] );
        $pageObj->addPageContent( [ 'title' => __( 'Orders', 'dav2' ), 'post_name' => 'orders', 'content' => '[ads_orders]' ] );

        $pageObj->addPage( [ 'title' => __( 'Your shopping cart', 'dav2' ), 'post_name' => 'cart' ] );
        $pageObj->addPage( [ 'title' => __( 'Thank you page', 'dav2' ), 'post_name' => 'thankyou' ] );

        $pageObj->create();

        createMenu( [
            [ 'title' => __( 'Home', 'dav2' ), 'url' => '/' ],
            [ 'title' => __( 'Products', 'dav2' ), 'url' => '/product/' ],
            [ 'title' => __( 'Shipping', 'dav2' ), 'url' => '/shipping-delivery/' ],
            [ 'title' => __( 'Returns', 'dav2' ), 'url' => '/refund-policy/' ],
            [ 'title' => __( 'About', 'dav2' ), 'url' => '/about-us/' ],
            [ 'title' => __( 'Tracking', 'dav2' ), 'url' => '/track-your-order/' ],
            [ 'title' => __( 'Contact', 'dav2' ), 'url' => '/contact-us/' ]
        ], 'Top Menu', 'top_menu' );

        createMenu( [
            [ 'title' => __( 'About Us', 'dav2' ), 'url' => '/about-us/' ],
            [ 'title' => __( 'Privacy Policy', 'dav2' ), 'url' => '/privacy-policy/' ],
            [ 'title' => __( 'Terms & Conditions', 'dav2' ), 'url' => '/terms-and-conditions/' ]
        ], 'Company Info', 'footer-company' );

        createMenu( [
            [ 'title' => __( 'Payment Methods', 'dav2' ), 'url' => '/payment-methods/' ],
            [ 'title' => __( 'Shipping & Delivery', 'dav2' ), 'url' => '/shipping-delivery/' ],
            [ 'title' => __( 'Returns Policy', 'dav2' ), 'url' => '/refund-policy/' ]
        ], 'Purchase info', 'footer-purchase' );

        createMenu( [
            [ 'title' => __( 'Contact Us', 'dav2' ), 'url' => '/contact-us/' ],
            [ 'title' => __( 'Frequently Asked Questions', 'dav2' ), 'url' => '/frequently-asked-questions/' ]
        ], 'Customer service', 'footer-service' );

        add_action( 'init', 'createCategoryProduct', 10, [
            [ 'title' => __( 'Costumes', 'dav2' ), 'url' => '/costumes/', 'slug' => 'costumes' ],
            [ 'title' => __( 'Custom category', 'dav2' ), 'url' => '/custom-category/', 'slug' => 'custom-category' ],
            [ 'title' => __( 'Gifts', 'dav2' ), 'url' => '/gifts/', 'slug' => 'gifts' ],
            [ 'title' => __( 'Jewelry', 'dav2' ), 'url' => '/jewelry/', 'slug' => 'jewelry' ],
            [ 'title' => __( 'Men clothing', 'dav2' ), 'url' => '/men-clothing/', 'slug' => 'men-clothing' ],
            [ 'title' => __( 'Phone cases', 'dav2' ), 'url' => '/phone-cases/', 'slug' => 'phone-cases' ],
            [ 'title' => __( 'Posters', 'dav2' ), 'url' => '/posters/', 'slug' => 'posters' ],
            [ 'title' => __( 'T-shirts', 'dav2' ), 'url' => '/t-shirts/', 'slug' => 't-shirts' ],
            [ 'title' => __( 'Toys', 'dav2' ), 'url' => '/toys/', 'slug' => 'toys' ],
            [ 'title' => __( 'Women clothing', 'dav2' ), 'url' => '/women-clothing/', 'slug' => 'women-clothing' ]
        ] );

        createMenu( [
            [ 'title' => __( 'Costumes', 'dav2' ), 'url' => '/costumes/' ],
            [ 'title' => __( 'Custom category', 'dav2' ), 'url' => '/custom-category/' ],
            [ 'title' => __( 'Gifts', 'dav2' ), 'url' => '/gifts/' ],
            [ 'title' => __( 'Jewelry', 'dav2' ), 'url' => '/jewelry/' ],
            [ 'title' => __( 'Men clothing', 'dav2' ), 'url' => '/men-clothing/' ],
            [ 'title' => __( 'Phone cases', 'dav2' ), 'url' => '/phone-cases/' ],
            [ 'title' => __( 'Posters', 'dav2' ), 'url' => '/posters/' ],
            [ 'title' => __( 'T-shirts', 'dav2' ), 'url' => '/t-shirts/' ],
            [ 'title' => __( 'Toys', 'dav2' ), 'url' => '/toys/' ],
            [ 'title' => __( 'Women clothing', 'dav2' ), 'url' => '/women-clothing/' ]
        ], 'Main menu', 'category' );


        $cur_website = parse_url(ADSTM_HOME, PHP_URL_HOST);
        $IMG_DIR = str_replace('//'.$cur_website,'',IMG_DIR);

        $sellvia_params = [
            'tp_subscribe_show' => false,
            'tp_header_phone'   => '',
            'tp_address'        => '',
            'tp_text_header_call'   => '',
            'tp_phone_header'        => '',

            'home_grid_enable'      => false,
            'tp_show_sort_discount' => false,
            'tp_best_deals'         => false,
            'tp_countdown'            => false,

            'shipping_icon'             => $IMG_DIR .'d_truck.png',
            'tp_text_top_header'        => __( 'Fast US Shipping', 'dav2' ),


            'tp_about_delivery_1'  => $IMG_DIR .'del2.png',
            'tp_about_delivery_2'  => $IMG_DIR .'del3.png',
            'tp_about_delivery_3'  => $IMG_DIR .'del4.png',
            'tp_about_delivery_4'  => $IMG_DIR .'del6.png',
            'tp_about_delivery_5'  => $IMG_DIR .'del7.png',

            'features' => [
                'item'=> [
                    [
                        'head' => '<b>'.__( 'Curated Selections', 'dav2' ).'</b>',
                        'text' => __( 'Discover exclusive products at unbeatable prices', 'dav2' ),
                    ],
                    [
                        'head' => '<b>'.__( 'Fast US Shipping', 'dav2' ).'</b>',
                        'text' => __( 'We offer free no-contact shipping within the US on every order', 'dav2' ),
                    ],
                    [
                        'head' => '<b>'.__( '100% Safe Payment', 'dav2' ).'</b>',
                        'text' => __( 'Buy with confidence using the world’s most secure payment methods', 'dav2' ),
                    ],
                    [
                        'head' => '<b>'.__( 'Easy Returns', 'dav2' ).'</b>',
                        'text' => __( 'Not in love with your purchase? Get a full refund, no questions asked', 'dav2' ),
                    ]
                ]
            ],

            'tp_tab_shipping_label'              => __( 'Shipping & Delivery', 'dav2' ),
            'tp_single_shipping_payment_content' => ads\customization\czOptions::getTemplateField( 'tm_single_shipping_payment_content_sellvia' ),

            'tp_mode'    => 2



        ];
        mode_save($sellvia_params);
        wp_send_json([
            'status' => 'SUCCESS',
            'message'   => 'Sellvia mode activated'
        ]);

    }


}
add_action( 'admin_init', 'dav2_create_pages' );

function createCategoryProduct() {
	
	$category   = [
		[ 'title' => __( 'Costumes', 'dav2' ), 'url' => '/costumes/', 'slug' => 'costumes' ],
		[ 'title' => __( 'Custom category', 'dav2' ), 'url' => '/custom-category/', 'slug' => 'custom-category' ],
		[ 'title' => __( 'Gifts', 'dav2' ), 'url' => '/gifts/', 'slug' => 'gifts' ],
		[ 'title' => __( 'Jewelry', 'dav2' ), 'url' => '/jewelry/', 'slug' => 'jewelry' ],
		[ 'title' => __( 'Men clothing', 'dav2' ), 'url' => '/men-clothing/', 'slug' => 'men-clothing' ],
		[ 'title' => __( 'Phone cases', 'dav2' ), 'url' => '/phone-cases/', 'slug' => 'phone-cases' ],
		[ 'title' => __( 'Posters', 'dav2' ), 'url' => '/posters/', 'slug' => 'posters' ],
		[ 'title' => __( 'T-shirts', 'dav2' ), 'url' => '/t-shirts/', 'slug' => 't-shirts' ],
		[ 'title' => __( 'Toys', 'dav2' ), 'url' => '/toys/', 'slug' => 'toys' ],
		[ 'title' => __( 'Women clothing', 'dav2' ), 'url' => '/women-clothing/', 'slug' => 'women-clothing' ]
	];
	
	foreach ( $category as $key => $item ) {
		wp_insert_term( $item[ 'title' ], 'product_cat', [
			'description' => '',
			'slug'        => $item[ 'slug' ],
			'parent'      => 0
		] );
	}
}

/**
 * @param $memu
 * @param $menu_name
 * @param bool|string $location
 *
 * @return bool
 */
function createMenu( $memu, $menu_name, $location = false ) {
	
	$menu_exists = wp_get_nav_menu_object( $menu_name );
	if ( !$menu_exists ) {
		$menu_id = wp_create_nav_menu( $menu_name );

		if ( $location ) {
			$locations              = get_theme_mod( 'nav_menu_locations' );
			$locations[ $location ] = $menu_id;
			set_theme_mod( 'nav_menu_locations', $locations );
		}

		foreach ( $memu as $key => $item ) {
			wp_update_nav_menu_item( $menu_id, 0, [
				'menu-item-title'    => $item[ 'title' ],
				'menu-item-position' => $key,
				'menu-item-url'      => home_url( $item[ 'url' ] ),
				'menu-item-status'   => 'publish'
			] );
		}

		return true;
	}

	return false;
}

/**
 *
 * @return array
 */

function mode_get_defaults() {

    $defaults = [];

    $file = get_template_directory() .'/adstm/customization/defaults.php';
    if( file_exists( $file ) ) {
        $defaults = include $file;
    }

    return apply_filters( 'cz_fields', $defaults );
}

/**
 * @param $params
 *
 * @return bool
 */

function mode_save($params) {
    if( isset( $params ) ) {

        $options = mode_get_defaults();

        $data      = get_option( 'cz_' .wp_get_theme() );
        $mix_data = array_merge($options,$data);

        foreach( $params as $key => $value ) {
            $mix_data[ $key ] = $value;
        }

        return update_option( 'cz_' .wp_get_theme() , $mix_data );
    }
    return false;
}

class dav2_PageTemplate {
	
	private $_pages = [];

	public function __construct() {}

	/**
	 * @param $page
	 * @throws Exception
	 */
	public function addPage( $page ) {

		if ( empty( $page[ 'post_name' ] ) )
			throw new Exception( 'no post_name' );

		$page[ 'content' ] = $this->getContent( $page[ 'post_name' ] );

		array_push( $this->_pages, $page );
	}

	/**
	 * addPageContent
	 *
	 * @param object $pageObj
	 * @throws Exception
	 */
	public function addPageContent( $pageObj ) {
		
		if( empty( $pageObj[ 'post_name' ] ) ) {
			throw new Exception( 'no post_name' );
		}

		if( empty( $pageObj[ 'content' ] ) ) {
			throw new Exception(' no post_content' );
		}

		array_push( $this->_pages, $pageObj );
	}

	public function create() {
		
		foreach ( $this->_pages as $page ) {

			$new_page = [
				'post_type'    => 'page',
				'post_title'   => $page[ 'title' ],
				'post_name'    => $page[ 'post_name' ],
				'post_content' => $page[ 'content' ],
				'post_status'  => 'publish',
				'post_author'  => 1,
			];

			if ( !$this->issetPage( $page[ 'post_name' ] ) ) {
				$id = wp_insert_post( $new_page );
				if ( isset( $page[ 'static' ] ) && $page[ 'static' ] == 'front' ) update_option( 'page_on_front', $id );
				if ( isset( $page[ 'static' ] ) && $page[ 'static' ] == 'posts' ) update_option( 'page_for_posts', $id );
			}
		}
	}

	/**
	 * @param $slug
	 * @return bool
	 */
	private function issetPage( $slug ) {
		
		$page_check = new WP_Query( [
			'pagename' => $slug
		] );
		
		if ( $page_check->post ) return true;

		return false;
	}

	/**
	 * @param $pagename
	 * @return mixed|string
	 */
    private function getContent( $pagename ) {

        if(isset( $_POST[ 'tp_create_sellvia_mode' ] ) && $_POST[ 'tp_create_sellvia_mode' ] == true){
            $file = dirname( __FILE__ ) . '/sellvia_pages_default/' . $pagename . '.php';
        }else{
            $file = dirname( __FILE__ ) . '/pages_default/' . $pagename . '.php';
        }


        if ( file_exists( $file ) ) {
            ob_start();
            include( $file );
            $text = ob_get_contents();
            ob_end_clean();

            return $text;
        }

        return '';
    }
}