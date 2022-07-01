<?php get_header() ?>

	<div class="container">
		<div class="mainhome">

            <?php if( cz( 'slider_home' ) ) : ?>

                <div class="mainslider">

                    <?php if( cz( 'home_grid_enable' ) && cz( 'grid_home_img1' ) && cz( 'grid_home_img2' ) ) : ?>
                        <div class="grider">
                            <a href="<?php echo cz('grid_home_href1'); ?>" style="background-image: url('<?php echo cz('grid_home_img1'); ?>');">
                                <?php if(cz('grid_home_txt1')){ ?>
                                    <span><?php _cz('grid_home_txt1'); ?></span>
                                <?php } ?>

                            </a>
                            <a href="<?php echo cz('grid_home_href2'); ?>" style="background-image: url('<?php echo cz('grid_home_img2'); ?>');">
                                <?php if(cz('grid_home_txt2')){ ?>
                                    <span><?php _cz('grid_home_txt2'); ?></span>
                                <?php } ?>
                            </a>
				        </div>
			        <?php endif;?>

				    <div class="owl-carouselcont"
                             data-auto="<?php echo cz( 'tp_home_slider_rotating' ) ? 'true' : 'false' ?>"
                             data-time="<?php echo cz( 'tp_home_slider_rotating_time' ) ?
                                 cz( 'tp_home_slider_rotating_time' ) . '000' : '4000' ?>">
						    <?php

                            $btmVideo_one_slider = (bool) cz( 'id_video_youtube_home' );
                            $slider_home_position = 'slide_'.cz( 'slider_home_position' );
                            foreach( cz( 'slider_home' ) as $key => $item ) {

                                $emptyTextClass   = ! $item[ 'text' ] ? 'emptyText' : '';
								$shop_now_enabled = isset( $item[ 'shop_now_enabled' ] ) ? $item[ 'shop_now_enabled' ] : true;

								if ( ! $item[ 'img' ] )
									continue;

								printf(
                                    '<div class="item">
                                        <div class="itembgr scene_block scene'.$key.'">
                                            <div class="slideblack %s" style="background:%s;">
                                                <div class="slideblacktext" style="color:%s">%s</div>
                                                <div class="slidebtns row">
                                                    %s %s
                                                </div>
                                            </div>
                                        </div>
                                    </div>',
                                    $slider_home_position,
                                    $item[ 'background' ],

                                    $item[ 'text_color' ],
                                    $item[ 'text' ],
                                    $shop_now_enabled ? sprintf(
                                        '<a style="" href="'.$item[ 'shop_now_link' ].'" class="btn btn-primary">'.$item[ 'button_text' ].'</a>'
                                    ) : '',
                                    $btmVideo_one_slider && $shop_now_enabled ? sprintf(
                                        '<a class="btn btn-default viewvideo" data-lity 
                                            href="https://www.youtube.com/watch?v=%s">
                                            <i class="fas fa-play"></i> <span>%s</span>
                                            </a>',
                                        cz( 'id_video_youtube_home' ),
                                        __( 'View Video', 'dav2' )
                                    ) : ''
                                );

								$btmVideo_one_slider = false;
							}
							?>
				    </div>
			    </div>

			<?php endif; ?>
			
		</div>

		<?php if( cz( 'tp_countdown' ) ) : ?>

            <div class="content-countdown">
                <div class="top-plate clearfix">
                    <div class="text text-uppercase">
                        <?php _cz( 'tp_countdown_text' ) ?>
                    </div>
                    <div id="clock" data-time="<?php adstm_clock_time(); ?>"></div>
                    <div id="clock-template" style="display:none;">
                        <div class="clock text-center">
                            <div class="item">%D<span><?php _e( 'D', 'dav2' ) ?></span></div>
                            <div class="item">%H<span><?php _e( 'H', 'dav2' ) ?></span></div>
                            <div class="item">%M<span><?php _e( 'M', 'dav2' ) ?></span></div>
                            <div class="item">%S<span><?php _e( 'S', 'dav2' ) ?></span></div>
                        </div>
                    </div>
                    <?php if(cz( 'tp_countdown_link' )){ ?>
                        <a href="<?php _cz('tp_countdown_link') ?>"></a>


                    <?php }?>
                </div>
            </div>

        <?php endif; ?>

		<?php get_template_part( 'template/widget/_features' ); ?>


        <?php if( cz( 'home_featured_ones' ) ){ ?>
            <div class="content-from-cat aship-box-products">
                <h3 class="title-cat aship-title text-uppercase">
                    <span>
                        <?php _cz( 'home_featured_title' ); ?>
                    </span>
                </h3>
                <div class="row no-gutters">
                    <?php do_action('adstm_start_loop_featured_product', 8);
                    get_template_part('template/loop/home/loop'); ?>
                </div>
            </div>
        <?php } ?>
        <?php if( cz( 'tp_top_selling' ) ){ ?>
            <div class="content-from-cat aship-box-products">
                <h3 class="title-cat aship-title text-uppercase">
                    <a href="<?php echo adstm_home_url( 'product' ) ?>?orderby=orders">
                        <?php _cz( 'tp_top_selling_label' ); ?>
                    </a>
                </h3>
                <div class="row no-gutters">
                    <?php do_action('adstm_start_loop_topselling_product', 8);
                    get_template_part('template/loop/home/loop'); ?>
                </div>
            </div>
        <?php } ?>
        <?php if( cz( 'tp_best_deals' ) ){ ?>
            <div class="content-from-cat aship-box-products">
                <h3 class="title-cat aship-title text-uppercase">
                    <a href="<?php echo adstm_home_url( 'product' ) ?>?orderby=discount">
                        <?php _cz( 'tp_best_deals_label' ); ?>
                    </a>
                </h3>
                <div class="row no-gutters">
                    <?php do_action( 'adstm_start_loop_bestdials_product', 8 );
                    get_template_part( 'template/loop/home/loop' ); ?>
                </div>
            </div>
        <?php } ?>

        <?php if( cz( 'tp_new_arrivals' ) ){ ?>
            <div class="content-from-cat aship-box-products">
                <h3 class="title-cat aship-title text-uppercase">
                    <a href="<?php echo adstm_home_url( 'product' ) ?>?orderby=newest">
                        <?php _cz( 'tp_new_arrivals_label' ); ?>
                    </a>
                </h3>
                <div class="row no-gutters">
                    <?php do_action( 'adstm_start_loop_arrivals_product', 8 );
                    get_template_part( 'template/loop/home/loop' );?>
                </div>
            </div>
        <?php }
                    if(cz('tp_home_article')){
                        ?>
                        <div class="subhome">
                            <div class="row">
                                <?php
                                    do_action( 'adstm_home_article' ) ?>
                                    <?php if ( cz('s_in_name_api') || cz( 's_link_fb' )){ ?>
                                        <div class="homesocs col-3">
                                            <h4><?php _cz('s_title_social_box') ?></h4>
                                            <?php if( cz( 's_link_fb' ) ) : ?>
                                                <div class="fb-page" data-href="<?php echo cz('s_link_fb'); ?>"
                                                     data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                                                     data-show-facepile="true" data-show-posts="false">
                                                    <div class="fb-xfbml-parse-ignore">
                                                        <blockquote cite="<?php echo cz( 's_link_fb' ) ?>">
                                                            <a href="<?php echo cz( 's_link_fb' ) ?>" target="_blank">
                                                                <?php echo cz( 's_fb_name_widget' ) ?>
                                                            </a>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            <?php endif;
                                            get_template_part( 'template/social' ); ?>
                                        </div>
                                    <?php } ?>
                            </div>
                        </div>
                    <?php }else{
                        $s_in_name_api = cz('s_in_name_api');
                        $s_link_fb = cz( 's_link_fb' );
                        if ( $s_in_name_api || $s_link_fb):


                            ?>
                            <h3 class="title-cat aship-title text-uppercase">
                                <span><?php echo cz('s_title_social_box'); ?></span>
                            </h3>
                            <div class="social_flex">
                                <?php
                                if( $s_link_fb ) : ?>
                                    <div class="fb-page" data-href="<?php echo $s_link_fb; ?>"
                                         data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                                         data-show-facepile="true" data-show-posts="false">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="<?php echo $s_link_fb ?>">
                                                <a href="<?php echo $s_link_fb ?>" target="_blank">
                                                    <?php echo cz( 's_fb_name_widget' ) ?>
                                                </a>
                                            </blockquote>
                                        </div>
                                    </div>
                                <?php endif;

                                if($s_in_name_api){
                                    $in = new adstm_instagram($s_in_name_api);
                                    $in->size = 'standard';
                                    $params = $in->params();
                                    $src = cz( 'tp_item_imgs_lazy_load' ) ? 'data-src' : 'src';
                                    ?>
                                    <div class="insta_block">
                                        <div class="instaname">
                                            <?php echo cz('s_in_name_group'); ?>
                                        </div>
                                        <div class="instaprofile">
                                            <?php _e( 'by', 'dav2' ) ?> @<?php echo $s_in_name_api; ?>
                                        </div>
                                        <div class="instastats">
                                            <div class="instaphcount">
                                                <?php
                                                if(isset($params[ 'photos' ])){
                                                    echo $params[ 'photos' ] . ' ' . __( 'photos', 'dav2' );
                                                }
                                                ?>
                                            </div>
                                            <div class="instafoll">
                                                <?php
                                                if(isset($params[ 'followers' ])){
                                                    echo $params[ 'followers' ] . ' ' . __( 'followers', 'dav2' );
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="instas">
                                            <?php
                                            $i = 0;
                                            if( $params[ 'images' ] ) foreach( $params[ 'images' ] as $image ) {

                                                if( $i < 6 )
                                                    printf('<a target="_blank" href="%2$s"><span><img %3$s="%1$s" alt=""></span></a>',
                                                        $image,
                                                        'https://www.instagram.com/'.$s_in_name_api,
                                                        $src
                                                    );
                                                $i++;
                                            }

                                            ?>
                                        </div>
                                    </div>
                                <?php }

                                ?>


                            </div>


                        <?php endif;
                    }
                    ?>



	</div>

<?php
if(cz( 'tp_subscribe_show' )){
    _cz( 'tp_subscribe' );
}
?>

<?php get_footer() ?>