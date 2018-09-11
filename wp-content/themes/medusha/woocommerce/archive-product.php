<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

	<section class="main-first-screen main-first-screen-cat_padd main-about_animate-left">

		<div class="container ">
			<div class="row no-gutters">
                <div class="col-6">
                    <div class="video video_padd menu-animation-fs-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/category-page/video.jpg" alt="">
                    </div>
                </div>
				<div class="col-6">
					<div class="first-screen-wrp first-screen-wrp_padd menu-animation-fs-right">

                        <div class="first-screen__eko-text first-screen__eko-text_padd menu-animation-fs-eko_r">Эко продукт</div>
                        <h1 class="first-screen__title first-screen__title_padd menu-animation-fs-title_r">
                        <?php if ( is_tax( 'product_cat', 'podarochnye-nabory-chastnym' ) ) : ?>
                            Подарочные наборы
                        <?php elseif ( is_tax( 'product_cat', 'podarochnye-nabory-korporativnym' ) ) : ?>
                            Подарочные наборы
                        <?php else : ?>    

                        Органический мед упакованный природой
                        <?php endif; ?>
                        </h1>
                        <div class="first-screen__text first-screen__text_padd menu-animation-fs-text_r">
                                <!-- <p>Первые мастера-пчеловоды разливали мед по восковых чашах. Целебный продукт бережно хранился, не терял своих свойств, что позволяло наслаждаться неповторимым вкусом долгое время.</p>
                                <p>Эта удивительно простая и полезная технология  дошла до наших дней и воплощена в продукции ТМ Медуша.</p>
                                <p>На территории нашей страны вы не найдете ничего подобного.</p>
                                <p>Мы дарим эмоции в одной баночке.В то же время, вы получаете необычный подарок, органический мед, пользу и качество.</p> -->
                                <!-- <p>Технология  разлива меда по восковым чашам дошла до наших дней со времен Израильского царства и воплощена в продукции ТМ «Медуша».<br>
                                    На территории нашей страны вы не найдете ничего подобного.
                                </p>
                                <p>
                                    Мы дарим эмоции в одной баночке.<br>
                                    Вы получаете необычный подарок, органической мед, пользу и качество.
                                </p> -->
                                <?php do_action( 'woocommerce_archive_description' ); ?>
                        </div>
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

	<section id="next-block" class="category category_padd">

        <div class="container">
        <?php

            global $post;
            $args = array( 'posts_per_page' => -1, 'post_type' => 'product'  );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <div class="category-items product-fade">
               <a href="<?php echo the_permalink(); ?>" class="category-item">
                   <div class="row no-gutters">
                        <div class="col-lg-6 align-center">
                            <div class="category-item__img">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/build/images/category-page/prod-1.png" alt="" class="img-fluid"> -->
                                <?php echo the_post_thumbnail('product', array('class' => 'img-fluid')) ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="category-item__type category-item__type_padd">продукт</div>
                            <div class="category-item__title category-item__title_padd"><?php the_title(); ?></div>
                            <div class="category-item__text category-item__text_padd"><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 90, '...');?></div>
                            <div class="category-item__link category-item__link_padd">подробнее</div>
                        </div>
                   </div>
               </a>
            </div>
            <?php 
                global $product; 
                $sku  = $product->get_sku(); 
                echo '';
                ?>

				<?php endforeach; 
            wp_reset_postdata();?>
            
            <?php if ( is_tax( 'product_cat', 'med-chastnym' ) ) : ?>
                <!-- <p>1</p> -->
            
            <?php else : ?>
                <div class="category-items category-items_right product-fade">
                    <a href="<?php echo get_page_link( 110 ); ?>" class="category-item">
                        <div class="row no-gutters">
                                <div class="col-lg-6 align-center">
                                    <div class="category-item__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/category-page/ptod-6.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="category-item__type category-item__type_padd">продукт</div>
                                    <div class="category-item__title category-item__title_padd">Индивидуальные 
                                            решения</div>
                                    <div class="category-item__text category-item__text_padd">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</div>
                                    <div class="category-item__link category-item__link_padd hvr-sweep-to-left">подробнее</div>
                                </div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>

        </div>

    </section>

    <?php if ( is_tax( 'product_cat', 'podarochnye-nabory-chastnym' ) ) : ?>

    <section class="your-kit your-kit_padd">
        <div class="container">

            <div class="your-kit__title your-kit__title_padd">Собери набор на свой вкус</div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="your-kit-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/category-page/set-1.jpg" alt="">
                        <div class="your-kit-item__name">Мед со свечкой </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="your-kit-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/category-page/set-2.jpg" alt="">
                        <div class="your-kit-item__name">Мед с чашкой</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="your-kit-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/category-page/set-1.jpg" alt="">
                        <div class="your-kit-item__name">Твои пожелание </div>
                    </div>
                </div>
            </div>

            <a href="#" class="your-kit__link your-kit__link_padd hvr-sweep-to-top" data-toggle="modal" data-target="#leaveAppli">Оставить заявку</a>

        </div>
    </section>

                            
    <?php elseif ( is_tax( 'product_cat', 'podarochnye-nabory-korporativnym' ) ) : ?>

    <section class="your-kit your-kit_padd">
        <div class="container">

            <div class="your-kit__title your-kit__title_padd">Собери набор на свой вкус</div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="your-kit-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/category-page/set-1.jpg" alt="">
                        <div class="your-kit-item__name">Мед со свечкой </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="your-kit-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/category-page/set-2.jpg" alt="">
                        <div class="your-kit-item__name">Мед с чашкой</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="your-kit-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/category-page/set-1.jpg" alt="">
                        <div class="your-kit-item__name">Твои пожелание </div>
                    </div>
                </div>
            </div>

            <a href="#" class="your-kit__link your-kit__link_padd hvr-sweep-to-top" data-toggle="modal" data-target="#leaveAppli">Оставить заявку</a>

        </div>
    </section>

    <?php elseif ( is_tax( 'product_cat', 'Мед корпоративным' ) ) : ?>

    <section class="instagramm instagramm_bg instagramm_bg-padd instagramm_padd">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 align-left">
                    <?php dynamic_sidebar( 'Instagram' ); ?>
                </div>
                <div class="col-lg-4">
                    <div class="instagramm-text instagramm-text_padd">
                        <div class="instagramm-text__title instagramm-text__title_padd">Instagram</div>
                        <div class="instagramm-text__descr">
                                Подписывайтесь на блог <span>Medusha</span> в Instagram! Там вас ждет множество пополняющихся тематических подборок, информация о свежих постах, последние новости и красивые снимки.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 align-right">
                    <div class="instagram2">
                        <?php dynamic_sidebar( 'Instagram2' ); ?>
                    </div>
            
                </div>
            </div>
        </div>
    </section>

    <?php else : ?>  

    <?php endif; ?>

    <section class="slider-review slider-review_padd">
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
    

    <?php if ( is_tax( 'product_cat', 'podarochnye-nabory-chastnym' ) ) : ?>
                            
    <?php elseif ( is_tax( 'product_cat', 'podarochnye-nabory-korporativnym' ) ) : ?>

    <?php elseif ( is_tax( 'product_cat', 'Мед корпоративным' ) ) : ?>
        
    <?php else : ?>  

    <section class="blog-items-wrp blog-items-wrp_padd">
        <div class="container">
            <div class="blog-title blog-title_padd">Блог</div>
            <div class="row">
            <?php $pc = new WP_Query('cat=17&orderby=date&posts_per_page=4'); ?>
            <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                <div class="col-lg-3">
                    <a href="<?php echo the_permalink(); ?>" class="blog-item blog-item-fade-1">
                        <div class="blog-item__img-wrp">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/build/images/category-page/blog-1.jpg" alt="" class="blog-item__img img-fluid"> -->
                            <?php echo the_post_thumbnail('blog-thumb', array('class' => 'blog-item__img img-fluid')) ?>
                            <div class="blog-item__img-bg"></div>
                        </div>
                        <div class="blog-item__title blog-item__title_padd"><?php the_title(); ?></div>
                        <div class="blog-item__text blog-item__text_padd"><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 75, '...');?></div>
                        <div class="blog-item__link">Читать</div>
                    </a>
                </div>
            <?php endwhile; ?> 
            </div>
        </div>
    </section>
    
    <?php endif; ?>

   

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
