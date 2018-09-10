<?php
/*
 * The template for displaying 404 pages (not found)
 *
 */
get_header(); ?>


	<section class="page-404 page-404_padd">
    
		<a href="<?php echo get_home_url(); ?>"><h1 class="page-404__title page-404__title_padd">page not found</h1></a>

        <div class="page-404__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/honey-404.png" alt="" class="img-fluid">
        </div>

        <div class="bee-404-one page-404__bee page-404__bee-1">
            <div class="bee-404-four_one">
                <img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/bee-404.png" alt="">
            </div>
        </div>
        
        <div class="bee-404-two page-404__bee page-404__bee-2">
            <div class="">
                <img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/bee-404.png" alt="">
            </div>
        </div>
        
        <div class="bee-404-three page-404__bee page-404__bee-3">
            <div class="">
                <img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/form-bee.png" alt="">
            </div>
        </div>
        <div class="bee-404-four page-404__bee page-404__bee-4">
            <div class="bee-404-four_scale">
                <img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/form-bee.png" alt="">
            </div>
        </div>
        

    </section>
    
    

	<?php get_footer(); ?>
