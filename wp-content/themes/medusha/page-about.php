
<?php
/*
Template Name: О нас
*/
?>

<?php get_header(); ?>

	<section class="about about_padd">
    
        <div class="container">

            <div class="about__video">
                <img src="<?php echo get_template_directory_uri(); ?>/build/images/about/about-1.jpg" alt="" class="img-fluid">
            </div>
            
        </div>

        <div class="about__video_bg"></div>

    </section>
    
    <section class="about-block-2">

        <div class="about-block-2___bg-two"></div>

        <div class="container">

            <div class="row">
                <div class="offset-lg-5 col-lg-7 offset-md-6 col-md-6 col-sm-12">
                    <div class="about-block-2__wrp about-block-2__wrp">
                        <div class="about-block__title about-block__title_padd"><?php the_field('about__tit'); ?></div>
                        <div class="about-block__text"><?php the_field('about__text'); ?></div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="about-block-2__child-one">
            <div class="child-one-wrp">
				<?php $image1 = get_field('about__photo'); if( !empty($image1) ): ?>
				<img src="<?php echo $image1['url']; ?>" class="img-fluid page-item__img" alt="<?php echo $image1['alt']; ?>" />
				<?php endif; ?>
                <div class="about-block__name child-one_rotate"><?php the_field('about__tit_photo'); ?></div>
            </div>
        </div>

        <div class="about-block-2___bg"></div>

        <div class="about-block-2__child-two">
            <div class="child-one-wrp">
                <div class="about-block__name child-two_padd"><?php the_field('about__tit_photo2'); ?></div>
				<?php $image2 = get_field('about__photo2'); if( !empty($image2) ): ?>
				<img src="<?php echo $image2['url']; ?>" class="img-fluid page-item__img" alt="<?php echo $image2['alt']; ?>" />
				<?php endif; ?>
            </div>
        </div>

        <div class="about-block-2__child-three">
            <div class="child-three-wrp">
                <div class="about-block__name child-three_rotate"><?php the_field('about__tit_photo3'); ?></div>

				<?php $image3 = get_field('about__photo3'); if( !empty($image3) ): ?>
				<img src="<?php echo $image3['url']; ?>" class="img-fluid page-item__img" alt="<?php echo $image3['alt']; ?>" />
				<?php endif; ?>
            </div>
        </div>

    </section>

    <div class="blog_bg"></div>

    <div class="about-bloc-last about-bloc-last_padd">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 align-right about-bloc-last-item_padd">
                    <div class="about-block__title about-block__title_padd"><?php the_field('about__tit2'); ?></div>
                    <div class="about-block__text"><?php the_field('about__text2'); ?></div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1 col-sm-12">
                    <div class="child-four-wrp">
                        <div class="about-block__name child-last_rotate"><?php the_field('about__tit_photo4'); ?></div>

						<?php $image4 = get_field('about__photo4'); if( !empty($image4) ): ?>
						<img src="<?php echo $image4['url']; ?>" class="img-fluid page-item__img" alt="<?php echo $image4['alt']; ?>" />
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-block-last___bg"></div>
    </div>

<?php get_footer(); ?>