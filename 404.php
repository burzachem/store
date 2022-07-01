<?php get_header() ?>

<div class="fullpic page404">
	
    <div class="page404center">
		
        <h1>404</h1>
		
        <p>
            <?php echo cz('tp_404_text'); ?>

		</p>
  
		<div class="flexbtns onblackbtns">
			<a class="btn btn-black" href="<?php echo adstm_home_url() ?>"><?php _e( 'Go Back Home', 'dav2' ) ?></a>
			<a class="btn btn-white" href="<?php echo adstm_home_url( 'contact-us' ) ?>"><?php _e( 'Contact Us', 'dav2' ) ?></a>
		</div>
	</div>	
</div>
<?php get_footer() ?>
