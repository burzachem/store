<?php
$tmpl = new ads\adsTemplate();

$tmpl->addItem( 'textarea', [ 'label' => __( '< head > tag container for head elements', 'dav2' ), 'help' => __('Use this section to add or edit scripts that will be placed between tags <head></head> on your site.', 'dav2'), 'name' => 'tp_head' ] );
$tmpl->addItem( 'textarea', [ 'label' => __( 'CSS style', 'dav2' ), 'help' => __('Use this section to add or edit CSS for different objects.', 'dav2') . $tmpl->tooltip(__('This CSS will be applied to objects instead of default.', 'dav2')), 'name' => 'tp_style' ] );
$tmpl->addItem( 'buttons', [ 'class' =>'btn btn-green ads-no js-adstm-save', 'name' =>'save', 'value' => __( 'Save Settings', 'dav2' ) ] );
$tmpl->addItem( 'buttons', [ 'class' =>'btn btn-blue ads-no js-adstm-save', 'name' =>'default', 'value' => __( 'Default', 'dav2' ) ] );
$tmpl->template('ads-head',$tmpl->renderItems());
?>

<div class="wrap">
    <div class="row">
        <div class="col-md-30">
            <form id="custom_form" method="POST">
				<?php
				wp_nonce_field( 'cz_setting_action', 'cz_setting' ); ?>
				<?php
				$tmpl->renderPanel( array(
					'panel_title'   => __('CSS and Scripts Customization', 'dav2'),
					'panel_class'   => 'success',
					'panel_content' => '<div data-adstm_action="general" data-adstm_template="#ads-head"></div>'
				) );

				?>

                <button form="custom_form" class="btn btn-save no-ads" name="save"><?php _e( 'Save Settings', 'dav2' ) ?></button>
                <button form="custom_form" class="btn btn-default" name="default"><?php _e( 'Default', 'dav2' ) ?></button>
            </form>

        </div>
    </div>
</div>