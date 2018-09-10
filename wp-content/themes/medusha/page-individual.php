
<?php
/*
Template Name: Индивидуальное решение
*/
?>

<?php get_header(); ?>

    <section class="main-first-screen main-first-screen-cat_padd main-about_animate-left">

            <div class="container ">
                <div class="row no-gutters">
                    <div class="col-6">
                        <div class="individual menu-animation-fs-left">
								
								<?php if (have_posts()): while (have_posts()): the_post(); ?>
								<?php
									$images = $dynamic_featured_image -> get_featured_images();
									if( $images ) {
										foreach ( $images as $key => $image ) {
											$class = ( $key !== count( $images ) -1 ) ? " class='slider-item" : " class='image-block active'";          
											$title = $dynamic_featured_image -> get_image_title($image['full']);
											?>
												<div <?php echo $class ?>>
													<img src="<?php echo $image['full']; ?>" alt="picture">
												</div>
											<?php
										}
									}
									?>
								<?php endwhile; endif; ?>
        
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="first-screen-wrp first-screen-wrp_padd menu-animation-fs-right">
    
                            <div class="first-screen__eko-text first-screen__eko-text_padd menu-animation-fs-eko_r">Эко продукт</div>
                            <h1 class="first-screen__title first-screen__title_padd menu-animation-fs-title_r"><?php the_title(); ?></h1>
                            <div class="first-screen__text first-screen__text_padd menu-animation-fs-text_r"><?php the_content(); ?></div>
                            <div class="first-screen__btn first-screen__btn_padd main__btn menu-animation-fs-button_r" data-toggle="modal" data-target="#leaveAppli">
								Оставить заявку
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="main-first-screen__bg menu-animation-fs-right"></div>
        
            <div class="scroll-animation">
                <div class="scroll-down-wrp_r">
                    <a href="#next-block" class="scroll-down"><img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/line-down.png" alt=""> листай вниз</a>
                </div>
            </div>
            
    </section>

	<section id="next-block" class="main-slider-wrp main-slider-wrp_padd">

		<div class="container">
			<div class="row no-gutters">
				<div class="col-6 main-slider-left">
					<div class="main-slider__decore">
						<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/decorate-2.png" alt="">
					</div>
					<div class="main-slider__decore-two">
						<img src="build/images/main-page/decorate-3.png" alt="">
					</div>
					<div class="main-slider">

						<div class="slider-item">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/main-slide.jpg" alt="" class="img-fluid">
							<div class="slider-item_title">натуральная УПАКОВКА</div>
						</div>
						<div class="slider-item">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/main-slide.jpg" alt=""  class="img-fluid">
							<div class="slider-item_title">натуральная УПАКОВКА</div>
						</div>
						<div class="slider-item">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/main-slide.jpg" alt=""  class="img-fluid">
							<div class="slider-item_title">натуральная УПАКОВКА</div>
						</div>
						<div class="slider-item">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/main-slide.jpg" alt=""  class="img-fluid">
							<div class="slider-item_title">натуральная УПАКОВКА</div>
						</div>

					</div>
				</div>
				<div class="col-6">
					<div class="main-slider-images">

						<div class="images-item images-item-r-1 images-item_one">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/s-img1.jpg" alt="">
							<div class="images-item__title">
								Экологический чистый мед
							</div>
							<div class="images-item_bg"></div>
						</div>
						<div class="images-item images-item-r-2 images-item_active images-item_two">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/s-img2.jpg" alt="">
							<div class="images-item__title">
								100% пчелиный воск
							</div>
							<div class="images-item_bg"></div>
						</div>
						<div class="images-item images-item-r-3 images-item_three">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/s-img3.jpg" alt="">
							<div class="images-item__title">
								ЭКОЛОГИЧНАЯ УПАКОВКА
							</div>
							<div class="images-item_bg"></div>
						</div>
						<div class="images-item images-item-r-4 images-item_four">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/s-img4.jpg" alt="">
							<div class="images-item__title">
								ЭКОЛОГИЧНАЯ УПАКОВКА
							</div>
							<div class="images-item_bg"></div>
						</div>

					</div>

					<div class="main-slider-images__bg"></div>
					<div class="main-slider-images__decore-one">
						<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/decore-4.png" alt="">
					</div>
					<div class="main-slider-images__decore-two">
						<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/decore-5.png" alt="">
					</div>

				</div>
			</div>
		</div>

		<div class="main-slider__bg-left"></div>
        <div class="main-slider__bg-right"></div>
        <div class="main-slider__bg-bottom"></div>

    </section>
    
    <section class="slider-review slider-review_padd-individual">
        <div class="container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
					
				<?php $pc = new WP_Query('cat=21&orderby=date&posts_per_page=20'); ?>
                    <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                    <div class="swiper-slide">
                        <div class="review-slide-wrp review-slide-wrp_padd">
                            <div class="review-slide__img-wrp">
                                <?php echo the_post_thumbnail('rewiev', array('class' => 'blog-item__img img-fluid')) ?>
                            </div>
                            <div class="review-slide__text-wrp">
                                <div class="review-slide__name"><?php the_title(); ?></div>
                                <div class="review-slide__job review-slide__job_padd"><?php the_field('job'); ?></div>
                                <div class="review-slide__text"><?php the_content(); ?></div>
                            </div>
                        </div>
                    </div>
                    
                <?php endwhile; ?> 

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>


	<section class="main-form main-form-category main-form_padd">

        <div class="form-wrp form-wrp_padd">
			
			<?php echo do_shortcode('[contact-form-7 id="5"]'); ?>
            
            <div class="form-wrp-bee bee-animation fadeInRight">
                <img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/form-bee.png" alt="" class="">
            </div>
        </div>

        <div class="form-wrp-decore form-decore-bg-right-fade">
                <img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/form-decore-1.png" alt="">
        </div>

        <div class="form__decore-bg "></div>	
        <div class="form__decore-bg-two"></div>

        <div class="form__decore-two form-decore-bg-right-fade">
                <img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/form-decore-2.png" alt="">
        </div>
        <div class="form__decore-three form-decore-bg-right-fade">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/form-decore-3.png" alt="">
        </div>
        <div class="form__decore-bg-honey form-fade ">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/main-form-honey.png" alt="">
        </div>

    </section>

<?php get_footer(); ?>