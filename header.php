<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" xmlns="http://www.w3.org/1999/html">
<head>
	<link rel="shortcut icon" href="<?php _cz( 'tp_favicon' ); ?>"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <?php \ads\adsTmpl::meta(); ?>
	<?php wp_head(); ?>
	<style>
		<?php echo cz('tp_style') ?>
	</style>
	<?php echo cz( 'tp_head' ); ?>
    <?php
    $curr_id = get_the_ID();
    $body_classes         = [];
    $current_post_type    = get_post_type( $curr_id );
    $post_type_is_product = $current_post_type === 'product';
    array_push( $body_classes, 'davinci2' );

    if( cz( 'tp_item_imgs_lazy_load' ))
        array_push( $body_classes, 'js-items-lazy-load' );

    if( cz( 'tp_single_enable_pre_selected_variation') && $post_type_is_product )
        array_push( $body_classes, 'js-show-pre-selected-variation' );

    do_action('ads_head_addons');
    $template_dir = get_template_directory_uri();
    ?>
    <link rel="preload" href="<?php echo $template_dir; ?>/webfonts/OpenSans.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?php echo $template_dir; ?>/webfonts/OpenSans600.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?php echo $template_dir; ?>/webfonts/OpenSans700.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?php echo $template_dir; ?>/webfonts/fa-brands-400.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?php echo $template_dir; ?>/webfonts/fa-regular-400.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?php echo $template_dir; ?>/webfonts/fa-solid-900.woff" as="font" type="font/woff" crossorigin>
    <script>
        ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
    </script>
    <?php if(cz('social_sharing') && (is_front_page() || is_home())){ ?>
        <meta property="og:image" content="<?php _cz('social_sharing') ?>" />
    <?php } ?>

</head>
<body <?php body_class( $body_classes ); if(cz( 'tp_do_rtl' )){ ?>dir="rtl"<?php } ?> >
<div class="bgr">
    <div class="header_cont">
        <div class="adapupheader">
            <div class="shiptip">
                <?php if( cz( 'shipping_icon' ) ){ ?><img src="<?php echo cz('shipping_icon');?>" alt=""/> <?php }else{ ?><i class="fas fa-plane"></i> <?php }
                echo cz( 'tp_text_top_header' ) ?>
            </div>
            <div class="adapsearch">
                <span class="scope"><i class="fas fa-search"></i></span>
            </div>
        </div>
        <div class="upheader">
            <div class="container">
                <div class="row">
                    <div class="col upheaderL">
                        <div class="mainnav">
                            <h3><?php _e( 'Categories', 'dav2' ) ?></h3>
                            <div class="adapmainnav opened">
                                <span><?php _e( 'All categories', 'dav2' ) ?></span>
                                <span class="arrright"></span>
                            </div>
                            <?php
                            $locations = get_nav_menu_locations();
                            if( isset( $locations[ 'category' ] ) && $locations[ 'category' ] ) {

                                wp_nav_menu([
                                    'menu'           => 'Category',
                                    'theme_location' => 'category',
                                    'container'      => '',
                                    'menu_class'     => '',
                                    'depth'          => 4,
                                    'items_wrap'     => '<ul>%3$s</ul>',
                                    'walker'         => new WP_Bootstrap_Navwalker_simple
                                ] );
                            } else { ?>
                                <ul>
                                    <?php
                                    $menuProduct = wp_list_categories( [
                                        'child_of'            => 0,
                                        'current_category'    => 0,
                                        'depth'               => 4,
                                        'echo'                => 0,
                                        'exclude'             => '',
                                        'exclude_tree'        => '',
                                        'feed'                => '',
                                        'feed_image'          => '',
                                        'feed_type'           => '',
                                        'hide_empty'          => 1,
                                        'hide_title_if_empty' => false,
                                        'hierarchical'        => true,
                                        'order'               => 'ASC',
                                        'orderby'             => 'name',
                                        'separator'           => '<br />',
                                        'show_count'          => 1,
                                        'show_option_all'     => '',
                                        'show_option_none'    => '',
                                        'style'               => 'list',
                                        'taxonomy'            => 'product_cat',
                                        'title_li'            => '',
                                        'use_desc_for_title'  => 0
                                    ] );

                                    $menuProduct = preg_replace( "#<ul\s*class='children'#", "<span class='arrright'></span><ul class='children'", $menuProduct );
                                    $menuProduct = preg_replace( "#<a([^>]*)>([^>]*)<\/a>\s*\(([^>]*)\)#", "<a$1>$2 <span>($3)</span></a>", $menuProduct );

                                    echo $menuProduct ?>
                                </ul>
                            <?php } ?>
                        </div>
                        <div class="topmenu">
                            <?php

                            wp_nav_menu( [
                                'menu'           => 'Top Menu',
                                'theme_location' => 'top_menu',
                                'container'      => '',
                                'menu_class'     => '',
                                'items_wrap'     => '<ul>%3$s</ul>',
                                'walker'         => new WP_Bootstrap_Navwalker
                            ] )

                            ?>
                        </div>
                        <span class="closemenu"><i class="fas fa-times"></i></span>
                        <div class="adapheadsocs">
                            <div class="socs whitesocs">
                                <?php get_template_part( 'template/social-links' ) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-auto upheaderR">
                        <div class="shiptip">
                            <?php if( cz( 'shipping_icon' ) ){ ?><img src="<?php echo cz('shipping_icon');?>" alt=""/> <?php }else{ ?><i class="fas fa-plane"></i> <?php }
                            echo cz( 'tp_text_top_header' ) ?>
                        </div>
                        <?php if(cz('tp_currency_switcher')) { ?>
                            <div class="currency_chooser">
                                <?php do_action('adstm_dropdown_currency') ?>
                            </div>
                        <?php }
                        if( ! get_option( 'users_can_register' ) == 0 ) : ?>
                            <div class="cabheaderlink">
                                <?php if (get_current_user_id() == 0): ?>
                                    <a href="<?php echo adstm_home_url( 'userlogin' ) ?>">
                                        <i class="fas fa-user"></i> <?php _e( 'Log in', 'dav2' ) ?>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php echo adstm_home_url( 'account' ) ?>">
                                        <i class="fas fa-user"></i> <?php _e( 'My account', 'dav2' ) ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="headerbgr">
            <div class="container">
                <div class="header ">
                    <div class="row headerrow">
                        <div class="logo col-xl-3 col-8 col-sm-6">
                            <div class="adapmenu">
                                <i class="fas fa-bars"></i>
                            </div>
                            <a href="<?php echo adstm_home_url() ?>"><img src="<?php echo cz( 'tp_logo_img' ) ?>" alt=""/></a>
                        </div>
                        <div class="searchcont col-6">
                            <form action="<?php echo adstm_home_url()?>">
                                <div class="searchinputcont">
                                    <input class="js-autocomplete-search" autocomplete="off" name="s"
                                           type="text" value="" placeholder="<?php _e( "I'm shopping for...", 'dav2' ) ?>" />
                                    <div class="scopes">
                                        <span class="scope"><i class="fas fa-search"></i></span>
                                        <span class="clearsearch"><i class="fas fa-times-circle"></i></span>
                                        <span class="scope2"><i class="fas fa-search"></i></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-3 col-4 col-sm-5 col-md-6 col-lg-5">
                            <div class="row justify-content-between">
                                <div class="callhead col">
                                    <div class="callheadT">
                                        <?php echo cz( 'tp_text_header_call' ); ?>
                                    </div>
                                    <div class="callheadB">
                                        <?php echo cz( 'tp_phone_header' ); ?>
                                    </div>
                                </div>
                                <div class="shopcartbtn col">
                                    <?php do_action( 'adstm_cart_quantity_link' ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part( 'template/str_data_common' ); ?>