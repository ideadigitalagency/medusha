
<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>

	<section class="contact main-first-screen contact_padd">

		<div class="container contact-wrp menu-animation-fs-left">
            <div class="contact__title contact__title_padd"><?php the_title(); ?></div>

            <div class="contact__name contact__name_padd">Телефон</div>
            <div class="contact__text contact__text_padd">
                <a href="tel:+<?php the_field('cont__numb'); ?>"><?php the_field('cont__numb'); ?></a>
            </div>

            <div class="contact__name contact__name_padd">Почта</div>
            <div class="contact__text contact__text_padd"><?php the_field('cont__mail'); ?></div>

            <div class="contact__name contact__name_padd">Адрес</div>
            <div class="contact__text contact__text_padd"><?php the_field('cont__adr'); ?></div>

            <div class="contact__name contact__name_padd">График работы</div>
            <div class="contact__text contact__text_padd"><?php the_field('cont__work'); ?></div>

            <div class="contact__name contact__name_padd">Следи за нами</div>
            <div class="social-contact">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/instagram-logo.png" alt="">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/facebook.png" alt="">
                </a>
            </div>

		</div>
		
		<div class="contact-screen__bg"></div>
		<div class="contact-screen__bg-map main-first-screen__img menu-animation-fs-right">
			<?php echo do_shortcode('[intergeo id="IzM"][/intergeo]'); ?>
			<!-- <?php echo do_shortcode('[intergeo id="EDN"][/intergeo]'); ?> -->
		</div>
		
	</section>


<?php get_footer(); ?>