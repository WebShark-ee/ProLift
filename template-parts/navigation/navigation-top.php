<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<nav id="site-navigation" class="navbar navbar-default navbar-fixed-top large-nav" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<div class="container">
	
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png"></a>
		</div>
		
		<div class="float-right">
			
			<?php
				wp_nav_menu( array(
					'menu'              => 'top-menu',
					'theme_location'    => 'top',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'navbar',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker())
				);
			?>
			<div class="search-container navbar-collapse collapse"><?php echo header_custom_searchform( $form ); ?></div>
		</div>
		
		<div class="collapse navbar-collapse navbar-contact">
			<ul class="nav navbar-nav navbar-right">
				<li class="hide-sm">Phone : <a href="tel:+3726837705">+372 683 7705</a></li>
				<li class="hide-sm">Email : <a href="mailto:info@prolift.ee">info@prolift.ee</a></li>
				<li>Language : <a href="#">Estonian</a></li>
			</ul>
		</div>
		
	</div>
</nav><!-- #site-navigation -->

