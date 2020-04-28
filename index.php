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


<?php if( is_singular() ) get_template_part( 'inc/part-thumbnail' ); ?>

<div class="row content-sidebar">

	<section class="posts">
		
		<?php

			// start the loop... make wp look for posts
			if ( have_posts() ) : while ( have_posts() ) : the_post();
		
		
			// print the content of the post to the screen
			// look at the file inc/content.php for how this is formatted
			get_template_part( 'inc/content', get_post_format() );
			
			
			// end the loop... When there are no more posts, stop looking
			endwhile; endif;
			
			
			if( is_single() ) :
			
				// if on a single post
				// show links to the next and previous post
				the_post_navigation();
				
			elseif( is_home() ) :
			
				// if on the blog page
				// display page numbers if there are more posts than fit on one page
				the_posts_pagination();			
			
			endif;
			
		?>
		
	</section>
	
	<aside>
		
		<?php 
			// load sidebar.php
			get_template_part( 'inc/sidebar' ); 
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