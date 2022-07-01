<?php
/**
 * Autor: Pavel Shishkin
 * Date: 30.06.2016
 * Time: 19:04
 */

if( ! defined( 'ADSTM_HOME' ) ) define( 'ADSTM_HOME', home_url() );

return [
	'tp_head'                => '',
	'tp_style'               => '',


	/*base*/
	'tp_create'              => true,

	'tp_color'                    => '#3C5460',
	'cart_color'                  => '#ff9841',
	'cart_color_hover'            => '#FF831B',
    'buttons_default'             => '#444444',
    'buttons_default_hover'       => '#222222',
	'tp_discount_bg_color'        => '#3c5460',
	'tp_price_color'              => '#ff9749',
	'tp_cart_pay_btn_color'       => '#ff9841',
	'tp_cart_pay_btn_color_hover' => '#FF831B',
    'tp_account_btn_color'        => '#ff9841',
    'tp_account_btn_color_hover'  => '#FF831B',

    'tp_header_text_color'        => '#b6d4e8',
    'tp_header_text_color_hover'  => '#ffffff',

    'tp_star_color'         => '#fac917',

    'tp_do_rtl'         => false,


	'tp_logo_img'      => IMG_DIR . 'logo.png',

	'tp_favicon'      => TEMPLATE_URL . '/favicon.ico',
	's_mail'          => 'support@' . parse_url(ADSTM_HOME, PHP_URL_HOST),
	'tp_header_phone' => '123 456 78 90',


	'tp_header_email'           => 'support@' . parse_url(ADSTM_HOME, PHP_URL_HOST),
	'tp_text_top_header'        => __( 'Free Worldwide Shipping', 'dav2' ),
    'tp_text_header_call'       => 'Got a question? Call us!',
    'tp_phone_header'           => __( '(111) 111 11 11', 'dav2' ),

	'shipping_icon'             => '',
	'tp_show_discount'          => true,

	'tp_countdown'            => true,
	'tp_countdown_text'       => __( 'Super Sale up to', 'dav2' ) . ' <span class="color sale">80%</span> ' . 
	                             __( 'off all items!', 'dav2' ) . ' <span class="color">' . 
	                             __( 'limited time offer', 'dav2' ) . '</span>',
	
	'tp_color_text_countdown'      => '#3c5460',
	'tp_color_text_countdown_sale' => '#eea12d',


    'tp_countdown_link'           => '',
    'tp_countdown_time_enable'    => false,
    'tp_countdown_days'           => '1',
    'tp_countdown_hours'          => '1',
    'tp_countdown_minutes'        => '1',



    'tp_item_imgs_lazy_load' => true,

    'tp_show_category_count' => true,


	/*home*/
	'id_video_youtube_home' => 'rsbZbmMk3BY',
	'slider_home_position' => 'center',
	'values_slider_home_position' => [
        ['value' => 'left', 'title' => __( 'Left', 'dav2' ) ],
        ['value' => 'center', 'title' => __( 'Center', 'dav2' ) ],
        ['value' => 'right', 'title' => __( 'Right', 'dav2' ) ],
    ],
	'slider_home_fs_mob'  => '20',
	'slider_home_fs_desk' => '20',
	'home_grid_enable'    => true,
	'grid_home_img1'      => IMG_DIR . 'mona1.jpg',
	'grid_home_img2'      => IMG_DIR . 'mona2.jpg',
	'grid_home_txt1'      => __( 'Buy with confidence using the world’s most popular and secure payment methods', 'dav2' ),
	'grid_home_txt2'      => __( 'Our Buyer Protection covers your purchase from click to delivery', 'dav2' ),
	'grid_home_href1'     => home_url( '/product/' ),
	'grid_home_href2'     => home_url( '/product/' ),

	'slider_home' => [
		[
			'img'              => IMG_DIR . 'mona.jpg',
            'img_adap'         => '',
			'head'             => __( 'What is Lorem Ipsum?', 'dav2' ),
			'head_color'       => '#fff',
			'text'             => __( 'Great Collection of Best Products', 'dav2' ),
			'text_color'       => '#fff',
            'button_text'      => __( 'Shop now', 'dav2' ),
			'shop_now_link'    => home_url( '/product/' ),
			'shop_now_enabled' => true,
			'background'       => 'rgba(0, 0, 0, 0.6)',
		],
		[
			'img'              => IMG_DIR . 'mona.jpg',
            'img_adap'         => '',
			'head'             => __( 'What is Lorem Ipsum?', 'dav2' ),
			'head_color'       => '#fff',
			'text'             => __( 'The world’s most popular and secure payment methods', 'dav2' ),
			'text_color'       => '#fff',
            'button_text'      => __( 'Shop now', 'dav2' ),
			'shop_now_link'    => home_url( '/product/' ),
			'shop_now_enabled' => true,
			'background'       => 'rgba(0, 0, 0, 0.6)',
		],
		[
			'img'              => IMG_DIR . 'mona.jpg',
            'img_adap'         => '',
			'head'             => __( 'What is Lorem Ipsum?', 'dav2' ),
			'head_color'       => '#fff',
			'text'             => __( 'Our Buyer Protection covers your purchase from click to delivery', 'dav2' ),
			'text_color'       => '#fff',
            'button_text'      => __( 'Shop now', 'dav2' ),
			'shop_now_link'    => home_url( '/product/' ),
			'shop_now_enabled' => true,
			'background'       => 'rgba(0, 0, 0, 0.6)',
		],
	],

	'features_enable'      => true,
    'features_title_color' => '#444',
    'features_text_color'  => '#444',
    'features_icon_color'  => '#999',

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


	'tp_home_article'              => '',
    'tp_home_article_more'          => false,
    'tp_home_slider_rotating'      => true,
    'tp_home_slider_rotating_time' => 4,
    'tp_home_buttons_color'        => '#ff9841',
    'tp_home_buttons_color_hover'  => '#FF831B',

	/*single product*/
    'tp_tab_item_details'                => true,
    'tp_tab_item_details_label'          => __( 'Product details', 'dav2' ),

	'tp_tab_item_specifics'              => false,
    'tp_tab_item_specifics_label'        => __( 'Item specifics', 'dav2' ),

	'tp_tab_shipping'                    => true,
    'tp_tab_shipping_label'              => __( 'Shipping & payment', 'dav2' ),


	'tp_single_shipping_payment_content' => ads\customization\czOptions::getTemplateField( 'tm_single_shipping_payment_content' ),
	'tp_show_quantity_orders'            => true,
	'tp_pack'                            => false,
	'tp_share'                           => true,
    'tp_orders'                          => true,
	'tp_best_price_guarantee'            => true,
	'tp_comment_flag'                    => true,
    'tp_verifed'                         => true,
	'tp_tab_item_review'                 => true,
    'tp_single_buyer_protection'         => true,
    'tp_enable_leave_review_box'         => true,
    'cm_readonly'                        => false,
    'cm_readonly_notify'                 => __( 'Please accept Terms & Conditions by checking the box', 'dav2' ),
    'tp_related'                         => true,
    'tp_recently'                        => true,
    'tp_size_chart'                      => true,

    'tp_single_enable_pre_selected_variation' => true,

	'tp_single_stock_count'   => 15,
	'tp_single_stock_enabled' => false,
	
	/*cart*/
	'tp_phone_number_required' => false,
	'tp_description_required'  => false,
	
	'tp_paypal_info_enable' => true,
	'tp_paypal_info_text'   => __( 'You can pay with your credit card without creating a PayPal account', 'dav2' ),

	'tp_credit_card_info_enable' => true,
	'tp_credit_card_info_text'   => __( 'All transactions are secure and encrypted. Credit card information is never stored.', 'dav2' ),

	'tp_readonly_read_required'            => false,
	'tp_readonly_read_required_text'       => __( 'I have read the', 'dav2' ) . ' <a href="' . home_url( '/terms-and-conditions/' ) . '">' . __( 'Terms & Conditions', 'dav2' ) . '</a>',

	/*SEO*/

	'tp_home_seo_title'       => '',
	'tp_home_seo_description' => '',
	'tp_home_seo_keywords'    => '',

	'tp_seo_products_title'       => __( 'All products', 'dav2' ),
	'tp_seo_products_description' => __( 'All products – choose the ones you like and add them to your shopping cart', 'dav2' ),
	'tp_seo_products_keywords'    => '',

	/*about*/
	'tp_bg1_about'                => '',
	'tp_about_b1_title'           => __( 'About Us', 'dav2' ),
	'tp_about_b1_description'     => __( 'Welcome to', 'dav2' ) . ' ' . parse_url( ADSTM_HOME, PHP_URL_HOST ) . '. ' .
	                                 __( 'From day one our team keeps bringing together the finest materials and stunning design to create something very special for you. All our products are developed with a complete dedication to quality, durability, and functionality. We\'ve made it our mission to not only offer the best products and great bargains, but to also provide the most incredible customer service possible.', 'dav2' ),

    'tp_about_us_keep'          => true,
	'tp_about_us_keep_in_contact_title'       => __( 'Keep in contact with us ', 'dav2' ),
	'tp_about_us_keep_in_contact_description' => __( "We're continually working on our online store and are open to any suggestions. If you have any questions or proposals, please do not hesitate to contact us.", 'dav2' ),

	'tp_our_core_values'          => true,
	'tp_our_partners'             => true,
	'tp_our_partners_description' => __( 'We work with the world\'s most popular and trusted companies so you can enjoy safe shopping and fast delivery.', 'dav2' ),
    'tp_our_partners_title'       => __( 'Our Partners', 'dav2' ),


	/*contact Us*/
	'tp_contactUs_text'             => __( 'Have any questions or need to get more information about the product? Either way, you’re in the right spot.', 'dav2' ),

	/*thankyou*/
	'tp_bg_thankyou'                => IMG_DIR . 'bg_page_thank.jpg',
	'tp_thankyou_fail_no_head_tag'  => '',
	'tp_thankyou_fail_no_head'      => __( 'Thank you for your order!', 'dav2' ),
	'tp_thankyou_fail_no_text'      => '<p>' . __( 'Your order was accepted and you will get notification on your email address.', 'dav2' ) .
	                                   '</p><p>*' . __( 'Please note that if you’ve ordered more than 2 items, you might not get all of them at the same time due to varying locations of our storehouses.', 'dav2' ) . '</p>',
	'tp_thankyou_fail_yes_head_tag' => '',
	'tp_thankyou_fail_yes_head'     => '<p>' . __( 'We are sorry, we were unable to successfully process this transaction.' ) . '</p>',
	'tp_thankyou_fail_yes_text'     => '',

	/*social*/
	's_title_social_box'            => __( 'join us on social media', 'dav2' ),
	's_link_fb'                     => '',
	's_fb_apiid'                    => '',
	's_fb_name_widget'              => '',

	's_link_in'       => '',
	's_in_name_api'   => '',
	's_in_name_group' => __( 'follow us on instagram', 'dav2' ),

	's_link_tw'           => '',
	's_link_pt'           => '',
	's_link_yt'           => '',
    's_link_fb_page'      => '',
    's_link_in_page'      => '',


	/*contact form*/
	's_send_mail'         => 'support@' . parse_url(ADSTM_HOME, PHP_URL_HOST),
	's_send_from'         => 'support@' . parse_url(ADSTM_HOME, PHP_URL_HOST),

	/*subscribe*/
	'tp_subscribe'        => ads\customization\czOptions::getTemplateField( 'tp_subscribe' ),
	/*footer*/
	'tp_confidence'       => __( 'Buy with confidence:', 'dav2' ),

	'tp_confidence_img_1' => IMG_DIR . 'f5.png',
	'tp_confidence_img_2' => IMG_DIR . 'f6.png',
	'tp_confidence_img_3' => IMG_DIR . 'f7.png',
	
    'tp_enable_upbutton'  => true,
	'tp_copyright'               => __( '© Copyright {{YEAR}}. All Rights Reserved', 'dav2' ),
	'tp_address'                 => '111 Your Street, Your City, Your State 11111, Your Country',
	'tp_copyright__line'         => $_SERVER['SERVER_NAME'],
	'tp_footer_script'           => '',
	'tp_footer_payment_methods'  => true,
	'tp_payment_methods'  => __( 'Payment methods:', 'dav2' ),
	'tp_footer_payment_methods_1'  => IMG_DIR .'f1.png',
	'tp_footer_payment_methods_2'  => IMG_DIR .'f2.png',
	'tp_footer_payment_methods_3'  => IMG_DIR .'f3.png',
	'tp_footer_payment_methods_4'  => IMG_DIR .'f4.png',
	'tp_footer_payment_methods_5'  => IMG_DIR .'f9.png',
	'tp_footer_payment_methods_6'  => IMG_DIR .'f8.png',


    'tp_footer_bgr_color'  => '#434343',
    'tp_footer_title_color'  => '#ffffff',
    'tp_footer_text_color'  => '#999999',
    'tp_footer_link_color'  => '#999999',
    'tp_footer_link_color_hover'  => '#ffffff',

    'tp_copyright_bgr_color'  => '#242424',
    'tp_copyright_notice_color'  => '#999999',
    'tp_copyright_domain_color'  => '#ffffff',

    'tp_footer_menu_title_1'      => 'Contact',
    'tp_footer_menu_title_2'      => 'Company info',
    'tp_footer_menu_title_3'      => 'Purchase Info',
    'tp_footer_menu_title_4'      => 'Customer Service',




	
	'tp_about_delivery_1'  => IMG_DIR .'del1.png',
	'tp_about_delivery_2'  => IMG_DIR .'del2.png',
	'tp_about_delivery_3'  => IMG_DIR .'del3.png',
	'tp_about_delivery_4'  => IMG_DIR .'del4.png',
	'tp_about_delivery_5'  => IMG_DIR .'del5.png',


    'tp_404_bgr'        =>'',
    'tp_404_text'       => __( "We can't seem to find the page you're looking for.", 'dav2' ).'<br />'.__( 'Here are some helpful links instead:', 'dav2' ),

    'tp_404_text_color' => '#333',

    'sc_one_page_enable'=> false,

    'tp_trust_box_enable'   => false,
    'tp_trust_box_title' => __('Shop With Confidence', 'dav2'),
    'tp_trust_box_desc' => __('Our store uses the most secure online ordering systems on the market, so you can be sure your details are completely safe with us. We are constantly improving our software to make sure we offer the highest possible security at all times.', 'dav2'),
    'trust_box_img' => IMG_DIR . 'opc/trust.png',


    'tp_whybuy_box_enable'   => false,
    'tp_whybuy_box_title' => __('Why Buy From Us?', 'dav2'),

    'tp_whybuy_reason1_title' => __('Money Back Guarantee', 'dav2'),
    'tp_whybuy_reason1_desc' => __('If for any reason you are not happy with your order, contact our customer care center and we\'ll issue a full refund. No questions asked!', 'dav2'),
    'tp_whybuy_reason1_img' => IMG_DIR . 'opc/wb1.png',

    'tp_whybuy_reason2_title' => __('Your Privacy Is Our Priority', 'dav2'),
    'tp_whybuy_reason2_desc' => __('All information is encrypted and transmitted without risk using an industry-standard Secure Socket Layer (SSL) protocol.', 'dav2'),
    'tp_whybuy_reason2_img' => IMG_DIR . 'opc/wb2.png',

    'tp_opc_timer_enable'   => false,
    'tp_opc_timer_text'     => __( 'Due to extremely high demand your cart is reserved only for', 'dav2' ),
    'tp_opc_timer_only'     => true,
    'tp_opc_timer_bgr'      => '#FF4B4B',
    'tp_opc_timer_color'    => '#fff',

    'cm_readonly2'            => false,
    'tp_readonly_read_required_text2'       => __( 'I have read the', 'dav2' ) . ' <a href="' . home_url( '/terms-and-conditions/' ) . '">' . __( 'Terms & Conditions', 'dav2' ) . '</a>',
    'cm_readonly_notify2'         => __( 'Please accept Terms & Conditions by checking the box', 'dav2' ),

    'social_sharing'    => '',
    'tp_show_sort_discount'    => true,

    'tp_top_selling'                => true,
    'tp_top_selling_label'          => __( 'Top Selling Products', 'dav2' ),

    'tp_best_deals'                 => true,
    'tp_best_deals_label'           => __( 'Best deals', 'dav2' ),

    'tp_new_arrivals'               => true,
    'tp_new_arrivals_label'         => __( 'New arrivals', 'dav2' ),

    'tp_our_core_values_title' => __('Our core values', 'dav2'),
    'tp_our_core_values_value1' => __('Be Adventurous, Creative, and Open-Minded', 'dav2'),
    'tp_our_core_values_value2' => __('Create Long-Term Relationships with Our Customers', 'dav2'),
    'tp_our_core_values_value3' => __('Pursue Growth and Learning', 'dav2'),
    'tp_our_core_values_value4' => __('Inspire Happiness and Positivity', 'dav2'),
    'tp_our_core_values_value5' => __('Make Sure Our Customers are Pleased', 'dav2'),


    'tp_currency_switcher'      => true,
    'tp_subscribe_show'      => true,



    'home_featured_ones' => false,
    'home_featured_list' => [],
    'home_featured_title'     => __( 'Featured products', 'dav2' ),

    'home_bgr_featured'          => '#fff',
    'home_featured_count'   => '4',
    'values_home_featured_count' => [
        ['value' => '4', 'title' => '4'],
        ['value' => '8', 'title' => '8'],
        ['value' => '12', 'title' => '12'],
    ],


    'tp_bens_show'  => true,

    'tp_mode'    => 0,


    'tp_single_feat_img'    => 0,


];