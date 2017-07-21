<?php
/**
 * Template Name: Tooted
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>



<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row"> 
					<div class="col-xs-12">
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/page/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9">
						<h2>Tooted</h2>
						<?php
				
						$exec_query = new WP_Query( array (
							'post_type' => 'product'
						) );
					
						// Start the Loop
						while ( $exec_query->have_posts() ) : $exec_query->the_post();
							get_template_part( 'template-parts/product/content', 'product' );
						
						endwhile;
						wp_reset_query();
						?>
						
					</div>
					
					
					<div class="col-md-3 sidebar-products">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();?>
