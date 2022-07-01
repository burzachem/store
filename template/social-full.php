<?php if ( cz('s_in_name_api') ):

    $in = new adstm_instagram(cz('s_in_name_api'));
    $in->size = 'thumbnail';
    $params = $in->params();
    ?>
    <div>
        <div class="instamodule">
            <a target="_blank" href="https://www.instagram.com/<?php echo cz('s_in_name_api'); ?>">
                <div class="instaname">
                    <?php echo cz('s_in_name_group'); ?>
                </div>
                <div class="instaprofile">
                    <?php _e( 'by', 'dav2' ) ?> @<?php echo cz('s_in_name_api'); ?>
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
                <div class="instaphotos">
                    <?php
                    if(isset($params[ 'images' ])){
                        $i = 0;
                        if( $params[ 'images' ] ) foreach( $params[ 'images' ] as $image ) {

                            if( $i < 6 )
                                printf('<div><span><img src="%1$s" alt=""></span></div>',
                                    $image,
                                    cz('s_link_in')
                                );

                            $i++;
                        }
                    }


                    ?>
                </div>
            </a>
        </div>
    </div>

<?php endif; ?>



