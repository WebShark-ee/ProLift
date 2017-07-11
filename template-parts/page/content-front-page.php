<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >
	
	
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="circle">
							<svg class="icon icon-panel" aria-hidden="true" role="img">
								<use href="#icon-knife" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-knife"></use>
							</svg>
						</div>
						<h3 class="panel-title">Tooted</h3>
					</div>
					<div class="panel-body">
						<div>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
						<button class="btn">Loe edasi</button>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="circle">
							<svg class="icon icon-panel" aria-hidden="true" role="img">
								<use href="#icon-tools" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-tools"></use>
							</svg>
						</div>
						<h3 class="panel-title">Teenused</h3>
					</div>
					<div class="panel-body">
						<div>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
						<button class="btn">Loe edasi</button>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="circle">
							<svg class="icon icon-panel" aria-hidden="true" role="img">
								<use href="#icon-excavator" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-excavator"></use>
							</svg>
						</div>
						<h3 class="panel-title">Referentsid</h3>
					</div>
					<div class="panel-body">
						<div>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
						<button class="btn">Loe edasi</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/images/truck.jpg">
			</div>
			<div class="col-xs-12 col-sm-6">
				<h3 class="text-lg">Helping and providing <span class="red">best service</span> to our client business over 20 years!!</h3>
				<p class="text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="number">200+</div>
				<div class="number-alt">Valmis projekti</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="number">1300+</div>
				<div class="number-alt">Valmis projekti</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="number">150+</div>
				<div class="number-alt">Valmis projekti</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="number">270+</div>
				<div class="number-alt">Valmis projekti</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 text-lg text-centered">We have <span class="red">world class engineers</span> and material that’s enough to provide you the best industrial business solution since 1980s with proud.</div>
		</div>
	</div>
	
	<div class="panel-content">
		<div class="wrap">
			<header class="entry-header">
				<?php //the_title( '<h2 class="entry-title">', '</h2>' ); ?>

				<?php //twentyseventeen_edit_link( get_the_ID() ); ?>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					/* translators: %s: Name of current post */
					//the_content( sprintf(
					//	__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
					//	get_the_title()
					//) );
				?>
			</div><!-- .entry-content -->

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
