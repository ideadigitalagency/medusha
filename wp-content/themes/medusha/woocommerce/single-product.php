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
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( ); ?>


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
											<img src="build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="" class="img-fluid gallery-thumbs-img">
										</div>
									</div>
									<!-- Add Arrows -->
									<div class="gallery-thumb-next">
										<img src="build/images/next.svg" alt="">
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
											<img src="build/images/single/single.jpg" alt="">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="">
										</div>
										<div class="swiper-slide">
											<img src="build/images/single/single.jpg" alt="">
										</div>
									</div>
									<!-- Add Arrows -->
									<div class="gallery-top-next">
										<img src="build/images/next-white.svg" alt="">
									</div>
									<div class="gallery-top-prev">
										<img src="build/images/prev-white.svg" alt="">
									</div>
								</div>
							</div>
						</div>
							
						
						
					</div>
				</div>
				<div class="col-lg-4 offset-lg-1">
					<div class="product-charac-b2c">

						<h1 class="charac-b2b__title charac-b2b__title_padd">Шестигранник</h1>

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
								</div>
							</div>
						</form> 
						<div class="charac-b2b__param-name charac-b2b__param-name_padd">Цена</div>
						<div class="charac-b2b__param-item charac-b2b__param-item_padd">200 грн</div>

						<div class="single-text__link single-text__link_padd main__btn">Добавить в корзину</div>
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
				<div class="single-text__read-more">
						Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потомуДавно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. 
						Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потомуДавно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. 
						Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потомуДавно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. 
						Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потомуДавно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. 
						Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потомуДавно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. 
						Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потомуДавно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. 
				</div>
			</div>

			<!-- <div class="single-text__link main__btn">Оставить заявку</div> -->

		</div>

	</section>

	<section class="same-product same-product_pad-s">
		<div class="container">
			<div class="same-product__title same-product__title_padd">Подобные товары</div>
			<div class="row">
				<div class="col-lg-3">
					<a href="#" class="same-product-wrp">
						<div class="same-product__img same-product__img_padd">
							<img src="build/images/single/same-product.jpg" alt="" class="img-fluid">
							<div class="same-product__img-bg"></div>
						</div>
						<div class="same-product__item-title">название</div>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="#" class="same-product-wrp">
						<div class="same-product__img same-product__img_padd">
							<img src="build/images/single/same-product2.jpg" alt="" class="img-fluid">
							<div class="same-product__img-bg"></div>
						</div>
						<div class="same-product__item-title">название</div>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="#" class="same-product-wrp">
						<div class="same-product__img same-product__img_padd">
							<img src="build/images/single/same-product3.jpg" alt="" class="img-fluid">
							<div class="same-product__img-bg"></div>
						</div>
						<div class="same-product__item-title">название</div>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="#" class="same-product-wrp">
						<div class="same-product__img same-product__img_padd">
							<img src="build/images/single/same-product4.png" alt="" class="img-fluid">
							<div class="same-product__img-bg"></div>
						</div>
						<div class="same-product__item-title">название</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<script>
		galleryTop.controller.control = galleryThumbs;
		galleryThumbs.controller.control = galleryTop;
	</script>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
