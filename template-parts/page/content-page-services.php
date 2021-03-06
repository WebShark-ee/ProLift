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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<header class="entry-header">
			
			<?php twentyseventeen_edit_link( get_the_ID() ); ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<div class="row">
			<div class="col-xs-12 col-sm-6"><?php the_field('left_side'); ?></div>
			<div class="col-xs-12 col-sm-6"><?php the_field('right_side'); ?></div>
		</div>
	</div>
</article><!-- #post-## -->
