<?php
	
	if( has_post_thumbnail( $post->ID ) ) :
	
		echo( '<figure class="featured_image">' );
		
		if( is_singular() ) :
		
			echo( get_the_post_thumbnail( $post->ID, 'large' ) );
		
		else :
				
			echo( '<a href="' . get_the_permalink() . '">' . get_the_post_thumbnail( $post->ID, 'medium' ) . '</a>' );
		
		endif;
		
		echo( '</figure>' );
	
	endif; 

?>