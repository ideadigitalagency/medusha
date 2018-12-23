<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
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
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="same-product same-product_pad-s">
		<div class="container">
			<div class="same-product__title same-product__title_padd">Подобные товары</div>

				<?php woocommerce_product_loop_start(); ?>

				<div class="row">
					
					<?php foreach ( $related_products as $related_product ) : ?>

					<?php
				 	$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					 ?>

					<div class="col-lg-3">

							<a href="<?php echo the_permalink(); ?>" class="same-product-wrp">
								<div class="same-product__img same-product__img_padd">
									<?php echo the_post_thumbnail('same-post', array('class' => 'img-fluid')) ?>
									<div class="same-product__img-bg"></div>
								</div>
								<div class="same-product__item-title"><?php the_title(); ?></div>
							</a>
						
					</div>
					<?php endforeach; ?>

				</div>

				<?php woocommerce_product_loop_end(); ?>
			
		</div>
	</section>

<?php endif;

wp_reset_postdata();


