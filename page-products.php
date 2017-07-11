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
							?>
							<div class="product">
								<div class="row">
									<div class="col-sm-3">
										<h4><?php echo get_the_title(); ?>  </h4>
										<div>
											<?php
											// load all 'category' terms for the post
											$terms = get_the_terms( get_the_ID(), 'manufacturer');
								
											
											// we will use the first term to load ACF data from
											if( !empty($terms) ) {

												$term = array_pop($terms);
										
												
												$image = get_field('image', $term );
												
												$name = get_field('name', $term );
												?>
												<div class="manufacturer">
													<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
												</div>
												<div class="manufacturer">
													Tootja:<br><span class="name"><?php echo $term->name; ?></span>
												</div>
										</div>
												<?php
												
												$link = get_field('link', $term );
												?>
												<a class="product-link" href="<?php echo $link; ?>"><?php echo $link; ?></a>
												<?php
												
											}
											?>
										
									</div>
									<div class="col-sm-9">
										<?php
										// check if the repeater field has rows of data
										if( have_rows('gallery') ):
											?>
										<div class="gallery"><?php
											// loop through the rows of data
											while ( have_rows('gallery') ) : the_row();
												$image = get_sub_field('image');
												// display a sub field value
												?>
												<div class="col"><img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"></div>
												<?php

											endwhile;
											?>
											<a class="col">Kogu<br>galerii</a>
										</div>
										<?php
										endif;
										?>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 references"><span class="bold">Referentsid</span> ALL / AJK / DHOLLANDIA / FASSI / HMF / IVECO / LIV / MAN / MERCEDES-BENZ / MITSUBISHI / MUU / SCANIA / V-KRAN / VOLVO</div>
								</div>
							</div>
							<?php
						
						endwhile;
						wp_reset_query();
						?>
						
					</div>
					
					
					<div class="col-md-3 sidebar-products">
						<h2>Tooteotsing</h2>
						<?php get_search_form(); ?>
						<button class="btn" data-toggle="collapse" data-target="#id1">Kategooriate järgi</button>
						<div id="id1" class="collapse in">
							<ul>
								<li><span>Tõsteseadmed</span></li>
								<li><span>Haagised</span></li>
								<li><span>Hüdraulika ja elektroonika</span></li>
								<li><span>Kommunaaltehnika</span></li>
								<li><span>Mahutid</span></li>
								<li><span>Tõstukite lisaseadmed</span></li>
								<li><span>Pealisehituse detailid</span></li>
								<li><span>Muu</span></li>
								<li><span>Agri/põllumajandus</span></li>
							</ul>
						</div>
						<button class="btn collapsed" data-toggle="collapse" data-target="#id2">Toodete järgi</button>
						<div id="id2" class="collapse">
							<ul>
								<li><span>Tõsteseadmed</span></li>
								<li><span>Haagised</span></li>
								<li><span>Hüdraulika ja elektroonika</span></li>
								<li><span>Kommunaaltehnika</span></li>
								<li><span>Mahutid</span></li>
								<li><span>Tõstukite lisaseadmed</span></li>
								<li><span>Pealisehituse detailid</span></li>
								<li><span>Muu</span></li>
								<li><span>Agri/põllumajandus</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();?>
