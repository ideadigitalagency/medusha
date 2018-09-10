<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<?php get_header(); ?>

<section class="main-first-screen main-first-screen_autoheight main-first-screen-cat_padd main-about_animate-left">

	<div class="container ">
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

					<div class="charac-b2b__param-name charac-b2b__param-name_padd">Выберите пожалуйста вкус</div>
					<form action="">

						<div class="charac-b2b__param-list charac-b2b__param-list_padd">
							<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
								<input type="radio" name="group" class="charac-b2b-radio_padd" /> Липа
							</div>
							<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
								<input type="radio" name="group" class="charac-b2b-radio_padd"/>Гречиха
							</div>
							<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
								<input type="radio" name="group" class="charac-b2b-radio_padd"/>Разнотравье
							</div>
							<div class="charac-b2b__param-item">
								<input type="radio" name="group" class="charac-b2b-radio_padd"/>Акация
							</div>
						</div>

						

					

						<div class="charac-b2b__param-name charac-b2b__param-name_padd">Выберите пожалуйста объем</div>
						<div class="charac-b2b__param-list charac-b2b__param-list_padd">
							<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
									<input type="radio" name="group2" />0.5 мл
							</div>
							<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
									<input type="radio" name="group2" />0.7 мл
							</div>
							<div class="charac-b2b__param-item">
								<input type="radio" name="group2" />1 л
							</div>
						</div>

						<div class="charac-b2b__param-name charac-b2b__param-name_padd">Минимальное количество</div>
						<div class="charac-b2b__param-list charac-b2b__param-list_padd">
							<div class="charac-b2b__param-item">
								<div class="custom-select-bvzk charac-b2b-select">
									<select style="width:100%;">
											<option value="0">1</option>
											<option value="1">2</option>
											<option value="2">30</option>
									</select>
								</div>
								<?php
								/**
								 * @since 3.0.0.
								 */
								do_action( 'woocommerce_before_add_to_cart_quantity' );

								woocommerce_quantity_input( array(
									'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
									'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
									'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : $product->get_min_purchase_quantity(),
								) );

								/**
								 * @since 3.0.0.
								 */
								do_action( 'woocommerce_after_add_to_cart_quantity' );
								?>
							</div>
						</div>
					</form> 
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
			</div>
		</div>
	</div>

	<!-- <div class="main-first-screen__bg menu-animation-fs-right"></div> -->

	<div class="scroll-animation">
		<div class="scroll-down-wrp_r">
			<a href="#next-block" class="scroll-down"><img src="build/images/main-page/line-down.png" alt=""> листай вниз</a>
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
