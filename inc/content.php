<article <?php post_class("the_content"); ?>>
	
<?php if( is_singular() ) get_template_part( 'inc/part-thumbnail' ); ?>
<?php if ( ! is_front_page() or is_home() ) : /* no header on a static front page */ ?>

	<header>
		
		<?php 
			if ( is_singular() ) {
			
				// if this post is a single post, page, or attachment; just print the title
				// but not if it's the front page as set in Settings > Reading
				the_title( '<h1 class="title">', '</h1>' );
									
			} else {
			
				// otherwise print the title with a link to the single
				the_title( '<h2 class="title"><a href="' . get_the_permalink() . '" data-id="' . get_the_ID() . '">', '</a></h2>' );

			}
		?>
		
		<?php 
			// pages and attachments don't need meta data
			if ( ! is_page() and ! is_attachment() ) : 
		?>
			
			<div class="meta">
				
				<p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
				
				<?php if( has_category() ) : ?>
				<p class="categories"><?php the_category(', ') ?></p>
				<?php endif; ?>
				
				<?php if( get_comments_number() ) : ?>
				<p class="comments"><?php comments_popup_link( 'No Comments', '1 Comment', '% Comments' ); ?></p>
				<?php endif; ?>
				
			</div><!-- meta -->
			
		<?php endif; ?>
		
	</header>
	
<?php endif; ?>

<?php is_singular() ? the_content() : the_excerpt(); ?>
		
</article><!-- post -->