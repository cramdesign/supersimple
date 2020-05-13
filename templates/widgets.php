<?php 
	
	// Template Name: Widgets 
	
	get_header();
	
?>

<section class="posts site-content">
	
	<?php
		
		// start the loop... make wp look for posts
		if ( have_posts() ) : while ( have_posts() ) : the_post();
	
	
		// print the content of the post to the screen
		// look at the file inc/content.php for how this is formatted
		get_template_part( 'inc/content', get_post_format() );
		
		
		// end the loop... When there are no more posts, stop looking
		endwhile; endif;
		
	?>
	
</section>

<aside class="site-sidebar">
	
	<?php get_template_part( 'inc/sidebar' ); ?>
	
</aside>

<?php 
	
	// print the file footer.php which contains the closing </html> 
	// and the bottom part of the site that is included on every page
	get_footer();
	
?>