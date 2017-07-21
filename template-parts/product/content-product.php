<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

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
