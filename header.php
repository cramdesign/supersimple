<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
<header id="header">
<div class="row">
		
	<hgroup id="masthead">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( "name" ); ?>" rel="home">
		
		    <?php 
			    
				$header_image = get_header_image();
				
			    if ( ! empty( $header_image ) ) :
			    
			        echo( '<img src="' . $header_image . '" width="' . get_custom_header()->width . '" height="' . get_custom_header()->height . '" alt="" />' );
			    
			    else : 
			    
			    	echo( '<h1 id="logo" class="title">' . get_bloginfo( "name" ) . '</h1>');
			    
			    endif;
		    
		    ?>
				
		</a>
	</hgroup>
			
	<nav id="menu">
		<input type="checkbox" id="menu-toggle" class="toggle">
		<label for="menu-toggle" class="toggle">Menu</label>
		<?php wp_nav_menu( array( 'theme_location' => 'primary' )); ?>
	</nav>
		
</div><!-- row -->	
</header>

<main id="main">