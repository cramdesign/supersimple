</main>

<footer id="footer">
<div class="row">
		
	<h6 id="description"><?php bloginfo( "description" ); ?></h6>
	
	<nav id="social">
		<?php wp_nav_menu( array( 'theme_location' => 'social', 'container' => false, 'menu_class' => '' )); ?>
	</nav>
		
</div><!-- row -->	
</footer>
	
<?php 
	/*
	Like wp_head(), wp_footer() allows Wordpress to do some necessary work in the footer of the theme.
	For example, sometimes javascript is loaded in the footer rather than the head. 
	Include this function call in every theme.	
	*/
	wp_footer(); 
?>

</body>
</html>