<?php 
	
	// Template Name: Full Width 
	
	get_header();
	
?>

<?php if( is_singular() ) get_template_part( 'inc/part-thumbnail' ); ?>

<div class="row">

	<section class="posts">
		
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
	
</div><!-- row -->	
	
<?php
	
	get_footer();
	
?>