<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
		
			<div class="footer-ribbon">
				<div class="col"><div class="inner"><img src="<?php echo get_template_directory_uri() ?>/assets/images/footer1.jpg"></div></div>
				<div class="col"><div class="inner"><img src="<?php echo get_template_directory_uri() ?>/assets/images/footer2.jpg"></div></div>
				<div class="col"><div class="inner"><img src="<?php echo get_template_directory_uri() ?>/assets/images/footer3.jpg"></div></div>
				<div class="col"><div class="inner"><img src="<?php echo get_template_directory_uri() ?>/assets/images/footer4.jpg"></div></div>
				<div class="col"><div class="inner"><img src="<?php echo get_template_directory_uri() ?>/assets/images/footer5.jpg"></div></div>
			</div>
			
			<div class="white-ribbon">
				<img class="img-responsive img-centered" src="<?php echo get_template_directory_uri() ?>/assets/images/logos.png">
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-sm-6">
								<div id="map"></div>
							</div>
							<div class="col-sm-6 text">
								<h2>Kontakt</h2>
								<p>
									<span class="bold">Pro Lift OÜ</span><br>
									Saha tee 27, Loo alevik,<br>
									Jõelähtme vald, Harjumaa 74201
								</p>
								<p>
									Tel: <a href="tel:+3726837705">+372 683 7705</a><br>
									Faks: <a href="tel:+3726837705">+372 683 7706</a><br>
									E-mail:  <a href="mailto:info@prolift.ee">info@prolift.ee</a>
								</p>
								<p>
									AVATUD E-R 8.00–17.00
								</p>
								<p>
									<span class="bold">Pro Lift SIA</span><br>
									Patversmes iela 19<br>
									Rīga, LV1005
								</p>
								<p>
									Phone: <a href="tel:+37167112701">+371 6711 2701</a><br>
									E-mail: <a href="mailto:info@prolift.lv">info@prolift.lv</a>
								</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-6">
						<form action="/action_page.php">
							<div class="row">
								<div class="col-sm-6">
									<input class="form-control" type="text" id="name" name="name" placeholder="Nimi">
								</div>
								<div class="col-sm-6">
									<input class="form-control" type="text" id="email" name="email" placeholder="Email">
								</div>
							</div>
							<input class="form-control form-title" type="text" id="title" name="title" placeholder="Pealkiri">
							<textarea rows="10" class="form-control" id="subject" name="subject" placeholder="Küsimus"></textarea>
							
							<div class="row">
								<div class="col-xs-6">
									<button class="btn" type="submit">SAADA</button>
								</div>
								<div class="col-xs-6">
									<?php
									get_template_part( 'template-parts/footer/footer', 'widgets' );

									if ( has_nav_menu( 'social' ) ) : ?>
										<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
											<?php
												wp_nav_menu( array(
													'theme_location' => 'social',
													'menu_class'     => 'social-links-menu',
													'depth'          => 1,
													'link_before'    => '<span class="screen-reader-text">',
													'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
												) );
											?>
										</nav><!-- .social-navigation -->
									<?php endif; ?>
								</div>
							</div>
							<div class="copy-right">&copy; PROLIFT 2016</div>
						</form>
						
					</div>
				</div>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
