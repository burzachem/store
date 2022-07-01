<?php
$tmpl = new ads\adsTemplate();

$panel_one   = 'ads-panel_1';

$tmpl->addItem( 'uploadImg', [ 'label' => __( 'Background image (recommended size: 1920x500)', 'dav2' ), 'name' => 'tp_404_bgr' ] );

$tmpl->addItem( 'textarea', [ 'label' => __('Text','dav2'),'name' => 'tp_404_text' ] );
$tmpl->addItem( 'colorpicker', [ 'label' => __( 'Text color', 'dav2' ), 'name' => 'tp_404_text_color' ] );
$tmpl->addItem( 'buttons', [ 'class' =>'btn btn-green ads-no js-adstm-save', 'name' =>'save', 'value' => __( 'Save Settings', 'dav2' ) ] );
$tmpl->addItem( 'buttons', [ 'class' =>'btn btn-blue ads-no js-adstm-save', 'name' =>'default', 'value' => __( 'Default', 'dav2' ) ] );
$tmpl->template( $panel_one, $tmpl->renderItems() );

?>

<div class="wrap">
    <div class="row">
        <div class="col-md-30">
            <form id="custom_form" method="POST">
                <?php
                wp_nonce_field( 'cz_setting_action', 'cz_setting' ); ?>
                <?php
                $tmpl->renderPanel( [
                    'panel_title'   => __('404 page settings', 'dav2'),
                    'panel_class'   => 'success',
                    'panel_content' => '<div data-adstm_action="general" data-adstm_template="#' . $panel_one . '"></div>'
                ] );
                ?>

                <button form="custom_form" class="btn btn-save no-ads" name="save"><?php _e( 'Save Settings', 'dav2' ) ?></button>
                <button form="custom_form" class="btn btn-default" name="default"><?php _e( 'Default', 'dav2' ) ?></button>
            </form>

        </div>
    </div>
</div>