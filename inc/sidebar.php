<?php if( function_exists( 'supersimple_sectionmenu' ) and is_page() ) supersimple_sectionmenu(); ?>

<div class="widget-area">
	
	<?php 
			
		// if there are widgets in the sidebar (Appearance > Widgets), display them
		// the widget area is defined in functions.php
	
		if ( is_active_sidebar( 'sidebar' ) ) :
			
			dynamic_sidebar( 'sidebar' );
		
		elseif( is_user_logged_in() ) : 
		
			// default content 
	
	?>
	
			<div class="widget default">
				<h3 class="title">Widget area</h3>
				<p>Content can be placed in this area from the <a href="<?php echo admin_url( 'customize.php' ); ?>">customizer</a> or the <a href="<?php echo admin_url( 'widgets.php' ); ?>">widgets</a> interface. As it is, this area will appear blank to a non logged in user.</p>
			</div>
		
	<?php endif; ?>

</div><!-- widget-area -->