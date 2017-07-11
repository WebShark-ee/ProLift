<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/header.jpg">
				<div class="carousel-caption">
					<h3>Oleme Teie usaldusväärne partner pakkudes professionaalsete lahendustega kiiret ja kvaliteetset teenust.</h3>
					<p><button class="btn">Loe edasi</button></p>
				</div>
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<div class="carousel-nav carousel-prev"><div></div></div>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<div class="carousel-nav carousel-next"><div></div></div>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<?php //get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
