<?php get_header(); ?>

	<section class="artic blog blog_padd">
    
        <div class="container">

			<?php if (have_posts()): while (have_posts()): the_post(); ?>

            <h1 class="artic__title artic__title_pad"><?php the_title(); ?></h1>

            <div class="artic__thumbtail artic__thumbtail_padd">
				<?php echo the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
            </div>

			<div class="artic__text"><?php the_content(); ?></div>
			
            <div class="artic__next-prev artic__next-prev_padd pagintaion">

				<div class="artic__next-prev-wrp">
					<?php previous_post_link('%link' , ' ' , 0 , '16,21'); ?>
					<img src="<?php echo get_template_directory_uri(); ?>/build/images/prev.svg" alt=""><span>Назад</span>
				</div>
				
				<div class="artic__next-prev-wrp">
					<?php next_post_link('%link' , ' ' , 0 , '16,21'   ); ?>
					<span>Вперед</span><img src="<?php echo get_template_directory_uri(); ?>/build/images/next.svg" alt="">
				</div>
                
			</div>

			<?php endwhile; endif; ?>
			
        </div>

	</section>

    <div class="blog_bg-full"></div>

<?php get_footer(); ?>