<?php get_header(); ?>



	<section class="blog blog_padd">


        <div class="container">
            <div class="row">
				
                <div class="col-lg-6 col-md-12">
                    <?php $pc = new WP_Query('cat=18&orderby=date&posts_per_page=1000'); ?>
                    <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                        <a href="<?php echo the_permalink(); ?>" class="blog-item blog-item_padd">
                            <div class="blog-item__img-wrp blog-item_padd_big">
                                <div class="blog-item__img_big">
                                    <?php echo the_post_thumbnail('blog-thumb-big', array('class' => 'blog-item__img blog-item__img_big  img-fluid')) ?>
                                </div>
                                <div class="blog-item__img-bg"></div>
                            </div>
                            <div class="blog-item__title_big blog-item__title_big_padd align-center"><?php the_title(); ?></div>
                            <div class="blog-item__text_big blog-item__text_padd align-center"><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 250, '...');?></div>
                            <div class="align-center">
                                <div class="blog-item__link">Читать</div>
                            </div>
                            
                        </a>
                    <?php endwhile; ?> 
				</div>
				
                <div class="col-lg-6 col-md-12">
				
                    <div class="row">
					<?php $posts = query_posts($query_string . '&posts_per_page=6'); if (have_posts()) : ?><?php $post = $posts[0]; ?>
					<?php while (have_posts()) : the_post(); ?>
					
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="<?php echo the_permalink(); ?>" class="blog-item blog-item_mob blog-item_padd">
                                <div class="blog-item__img-wrp">
									<?php echo the_post_thumbnail('blog-thumb', array('class' => 'blog-item__img img-fluid')) ?>
                                    <div class="blog-item__img-bg"></div>
                                </div>
                                <div class="blog-item__title blog-item__title_padd"><?php the_title(); ?></div>
                                <div class="blog-item__text blog-item__text_padd"><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 75, '...');?></div>
                                <div class="blog-item__link">Читать</div>
                            </a>
						</div>
					<?php endwhile; endif; ?>  

                    </div>
					
                </div>
            </div>
            
        </div>

		<?php echo get_template_part( 'parts/pagination' ); ?>
		
		<div class="blog_bg"></div>

	</section>

<?php get_footer(); ?>