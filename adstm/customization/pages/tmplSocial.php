<?php
$tmpl = new ads\adsTemplate();

$tmpl->addItem( 'text', [ 'label' => __( 'Social media section title', 'dav2' ), 'name' => 's_title_social_box' ] );
$tmpl->addItem( 'text', [ 'label' => __( 'Facebook page link', 'dav2' ), 'name' => 's_link_fb' ] );
$tmpl->addItem( 'text', [ 'label' => __( 'Instagram feed title', 'dav2' ), 'name' => 's_in_name_group' ] );
$tmpl->addItem( 'text', [ 'label' => __( 'Instagram username', 'dav2' ), 'name' => 's_in_name_api' ] );
$tmpl->addItem( 'custom', array('value' => '<a class="ads-button btn btn-blue ads-no" id="update_instagram_images">'.__( 'Update Instagram images', 'dav2' ).'</a><span class="help-block">'.__( 'Use this button to update your Instagram images on Homepage', 'dav2' ).'</span>'));



$tmpl->addItem( 'buttons', [ 'class' =>'btn btn-green ads-no js-adstm-save', 'name' =>'save', 'value' => __( 'Save Settings', 'dav2' ) ] );
$tmpl->addItem( 'buttons', [ 'class' =>'btn btn-blue ads-no js-adstm-save', 'name' =>'default', 'value' => __( 'Default', 'dav2' ) ] );
$tmpl->template('ads-social-feed',$tmpl->renderItems());


$tmpl->addItem( 'uploadImg', [ 'label' => __( 'This image will be shown when you share a link to your store on social media. Recommended size: 1200*630px.', 'dav2' ), 'name' => 'social_sharing', 'width' => 500 ] );
$tmpl->addItem( 'buttons', [ 'class' =>'btn btn-green ads-no js-adstm-save', 'name' =>'save', 'value' => __( 'Save Settings', 'dav2' ) ] );
$tmpl->addItem( 'buttons', [ 'class' =>'btn btn-blue ads-no js-adstm-save', 'name' =>'default', 'value' => __( 'Default', 'dav2' ) ] );
$tmpl->template('ads-social-sharing',$tmpl->renderItems());






$tmpl->addItem( 'text', [ 'label' => __( 'Facebook link', 'dav2' ), 'name' => 's_link_fb_page' ] );
$tmpl->addItem( 'text', [ 'label' => __( 'Instagram link', 'dav2' ), 'name' => 's_link_in_page' ] );
$tmpl->addItem( 'text', [ 'label' => __( 'Twitter link', 'dav2' ), 'name' => 's_link_tw' ] );
$tmpl->addItem( 'text', [ 'label' => __( 'Pinterest link', 'dav2' ), 'name' => 's_link_pt' ] );
$tmpl->addItem( 'text', [ 'label' => __( 'YouTube link', 'dav2' ), 'name' => 's_link_yt' ] );
$tmpl->addItem( 'buttons', [ 'class' =>'btn btn-green ads-no js-adstm-save', 'name' =>'save', 'value' => __( 'Save Settings', 'dav2' ) ] );
$tmpl->addItem( 'buttons', [ 'class' =>'btn btn-blue ads-no js-adstm-save', 'name' =>'default', 'value' => __( 'Default', 'dav2' ) ] );
$tmpl->template('ads-social-link',$tmpl->renderItems());
?>

<div class="wrap">
    <div class="row">
        <div class="col-md-30">
            <form id="custom_form" method="POST">
				<?php
				wp_nonce_field( 'cz_setting_action', 'cz_setting' ); ?>
				<?php

                $tmpl->renderPanel( array(
                    'panel_title'   => __('Social Media Feed', 'dav2'),
                    'panel_class'   => 'success',
                    'panel_description'   =>  '',
                    'panel_content' => '<div data-adstm_action="general" data-adstm_template="#ads-social-feed"></div>'
                ) );

                $tmpl->renderPanel( array(
                    'panel_title'   => __('Social Sharing', 'dav2'),
                    'panel_class'   => 'success',
                    'panel_description'   =>  '',
                    'panel_content' => '<div data-adstm_action="general" data-adstm_template="#ads-social-sharing"></div>'
                ) );


				$tmpl->renderPanel( [
					'panel_title'   => __('Social Pages Links', 'dav2'),
					'panel_class'   => 'success',
					'panel_description'   =>  '',
					'panel_content' => '<div data-adstm_action="general" data-adstm_template="#ads-social-link"></div>'
				] );
				?>

                <button form="custom_form" class="btn btn-save no-ads" name="save"><?php _e( 'Save Settings', 'dav2' ) ?></button>
                <button form="custom_form" class="btn btn-default" name="default"><?php _e( 'Default', 'dav2' ) ?></button>
            </form>

        </div>
    </div>
</div>