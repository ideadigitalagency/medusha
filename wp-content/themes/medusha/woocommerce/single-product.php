<?php
/**
* The Template for displaying all single products
*
* This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see         https://docs.woocommerce.com/document/template-structure/
* @author         WooThemes
* @package     WooCommerce/Templates
* @version     1.6.4
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $product;

?>
<?php
    $title = get_the_title();
    $image = get_post_thumbnail_id();
    $summary = $post->post_excerpt;
?>
<?php get_header(); ?>




<section class="main-first-screen main-first-screen_autoheight main-first-screen-cat_padd main-about_animate-left">

	<div class="container">
		<div class="row no-gutters">
			<div class="col-lg-7">
				<div class="single-slider">
					<div class="row">
						<div class="col-lg-2 overflow-hidden">
							<div class="swiper-container gallery-thumbs">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
									</div>

									

								</div>
								<!-- Add Arrows -->
								<div class="gallery-thumb-next">
									<img src="<?php echo get_template_directory_uri(); ?>/build/images/next.svg" alt="">
								</div>
								<!-- <div class="gallery-thumb-prev">
									<img src="build/images/prev.svg" alt="">
								</div> -->
							</div>
						</div>
						<div class="col-lg-10">
							<div class="swiper-container gallery-top">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="<?php echo get_template_directory_uri(); ?>/build/images/single/single.jpg" alt="">
									</div>

									
								</div>
								<!-- Add Arrows -->
								<div class="gallery-top-next">
									<img src="<?php echo get_template_directory_uri(); ?>/build/images/next-white.svg" alt="">
								</div>
								<div class="gallery-top-prev">
									<img src="<?php echo get_template_directory_uri(); ?>/build/images/prev-white.svg" alt="">
								</div>
							</div>
						</div>
					</div>
						
					
					
					
				</div>
			</div>
			<div class="col-lg-4 offset-lg-1">

				<div class="product-charac-b2c">

					<h1 class="charac-b2b__title charac-b2b__title_padd"><?php the_title(); ?></h1>

					<?php do_action( 'woocommerce_single_product_summary' ); ?>

					
					<div class="charac-b2b__param-name charac-b2b__param-name_padd">Цена</div>
					<div class="charac-b2b__param-item charac-b2b__param-item_padd"><?php echo $product->get_price_html(); ?>грн</div>

					<div class="single-text__link single-text__link_padd main__btn">
						<div class="woocommerce-variation-add-to-cart variations_button">
							
							<button type="submit" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
							<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
							<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
							<input type="hidden" name="variation_id" class="variation_id" value="0" />
						</div>
					</div>
					

				</div>

				<div class="summary entry-summary">

					

				</div>


				
				<?php if ( is_tax( 'product_cat', 'med-chastnym' )) : ?>
					<?php echo get_template_part( 'parts/b2c-charac' ); ?>

				<?php elseif ( is_tax( 'product_cat', 'med-korporativnym' ) ) : ?>
					<?php echo get_template_part( 'parts/b2b-charac' ); ?>	
				<?php else : ?>
					<?php echo get_template_part( 'parts/' ); ?>
				<?php endif; ?>


			</div>
		</div>
	</div>

	<!-- <div class="main-first-screen__bg menu-animation-fs-right"></div> -->

	<div class="scroll-animation">
		<div class="scroll-down-wrp_r">
			<a href="#next-block" class="scroll-down"><img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/line-down.png" alt=""> листай вниз</a>
		</div>
	</div>

</section>

<section id="next-block" class="single single_padd single-b2b">

	<div class="container">

		<div class="single-title">Описание</div>
		<div class="single-text single-text_padd">
			<div class="single-text__read-more"><?php the_content(); ?></div>
		</div>

		<!-- <div class="single-text__link main__btn">Оставить заявку</div> -->

	</div>

</section>


<?php woocommerce_output_related_products(); ?>

<?php get_footer(); ?>