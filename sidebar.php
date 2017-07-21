<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<h2>Tooteotsing</h2>
<?php echo pictorico_custom_searchform($form); ?>
<button class="btn" data-toggle="collapse" data-target="#id1">Kategooriate järgi</button>
<div id="id1" class="collapse in">
	<ul>
		<?php
		
		$_terms = get_terms( array('product-category') );
		// load all 'category' terms for the post
		while  ( !empty($_terms) ) {

			$term = array_pop($_terms);
			$name = get_field('name', $term );
			?>
			<li><a href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a></li>
			<?php
		}
		?>
	</ul>
</div>
<button class="btn collapsed" data-toggle="collapse" data-target="#id2">Tootja järgi</button>
<div id="id2" class="collapse">
	<ul>
		<?php
		
		$_terms = get_terms( array('manufacturer') );
		// load all 'category' terms for the post
		while  ( !empty($_terms) ) {

			$term = array_pop($_terms);
			
			$name = get_field('name', $term );
			
			?>
			<li><a href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a></li>
			<?php
		}
		?>
	</ul>
</div>
