<?php get_header(); ?>


			
<?php
	
	if( is_archive() ) :
		
		echo( '<header class="page-header row">' );
		the_archive_title( '<h4 class="title">', '</h4>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
		echo( '</header>' );
		
	endif;
	
?>


<div id="content">

	<section class="woo site-content">
		
		<?php woocommerce_content(); ?>
				
	</section>
	
	<aside class="site-sidebar">
		
		<?php get_template_part( 'inc/sidebar' ); ?>
		
	</aside>

</div><!-- #content -->	


<?php 
	
	// load the comments.php file if it is needed
	if ( comments_open() or get_comments_number() ) comments_template( '/inc/comments.php' ); 

	
	// print the file footer.php which contains the closing </html> 
	// and the bottom part of the site that is included on every page
	get_footer();
	
?>