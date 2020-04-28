<?php 
	// print the file header.php which contains the opening <html> 
	// and the top part of the site that is included on every page
	get_header(); 
?>


			
<?php
	
	if( is_archive() ) :
		
		echo( '<header class="page-header row">' );
		the_archive_title( '<h4 class="title">', '</h4>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
		echo( '</header>' );
		
	endif;
	
?>


<div class="row content-sidebar">

	<section class="woo">
		
		<?php woocommerce_content(); ?>
				
	</section>
	
	<aside>
		
		<?php 
			// load sidebar.php
			get_sidebar(); 
		?>
		
	</aside>

</div><!-- row -->	


<?php 
	
	// load the comments.php file if it is needed
	if ( comments_open() or get_comments_number() ) comments_template(); 

	
	// print the file footer.php which contains the closing </html> 
	// and the bottom part of the site that is included on every page
	get_footer();
	
?>