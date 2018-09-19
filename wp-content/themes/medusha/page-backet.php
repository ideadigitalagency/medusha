
<?php
/*
Template Name: Корзина
*/
?>

<?php get_header(); ?>

	<section class="main-first-screen main-first-screen_autoheight main-first-screen-cat_padd basket">

        <div class="container">

            <div class="basket-title basket-title_padd">
               <div class="basket-title__name basket-title__name_padd">Корзина</div>
               <div class="basket-title__number">В вашей корзине 1 товар общей стоимостью 908грн.</div> 
            </div>

            <div class="basket-table-head basket-table-head__padd">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="basket-table-head__item">Товары</div>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <div class="basket-table-head__item basket-table-head__item_padd-l">Кол-во</div>
                    </div>
                    <div class="col-lg-3 col-md-3 align-center">
                        <div class="basket-table-head__item align-center">Выбранный объем</div>
                    </div>
                    <div class="col-lg-2 col-md-2 align-center">
                        <div class="basket-table-head__item align-center">Вкус</div>
                    </div>
                    <div class="col-lg-3 col-md-3 align-right">
                        <div class="basket-table-head__item">Стоимость заказа</div>
                    </div>
                </div>
            </div>

            <div class="basket-table-body basket-table-body_padd">

                <div class="basket-table-body__item basket-table-body__item_padd">
					<div class="basket-table-body__close">
						<img src="<?php echo get_template_directory_uri(); ?>/build/images/close.svg" alt="">
					</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-6 align-center ">
                            <div class="basket-table__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/category-page/prod-1.png" alt="" class="img-fluid">
                            </div>
                            <div class="basket-table__name basket-table__name_padd">
                                Шестигранник
                            </div>
                            <div class="basket-table__price-one basket-table__price-one_padd">
								<span class="basket-table__price-for-one">200 </span>
								<span class="basket-table__price-for-one basket-table__price-for-one_small">грн</span>
								<span class="basket-table__price-text">за </span>
								<span class="basket-table__price-text_big">1 </span>
								<span class="basket-table__price-text">шт</span>
                            </div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 table-body__item table-body__item_one  align-center">
							<div class="basket-table__number-item quantity-block">
								<button class="quantity-arrow-minus"> <img src="<?php echo get_template_directory_uri(); ?>/build/images/minus.svg" alt=""> </button>
								<input id="quantity-num1" class="quantity-num" type="number" value="1" />
								<button class="quantity-arrow-plus"> <img src="<?php echo get_template_directory_uri(); ?>/build/images/plus.svg" alt=""> </button>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 table-body__item table-body__item_two  align-center">
							<div class="basket-table__amound">1 л</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 table-body__item table-body__item_three  align-center">
							<div class="basket-table__taste basket-table-head__item_padd-l">Липа</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 table-body__item table-body__item_four align-right">
							<div class="basket-table__price-item">1097 <span class="basket-table__price-item_s">грн</span></div>
						</div>
                    </div>
                    
				</div>

				<div class="basket-table-body__item basket-table-body__item_padd">
					<div class="basket-table-body__close">
						<img src="<?php echo get_template_directory_uri(); ?>/build/images/close.svg" alt="">
					</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-6 align-center ">
                            <div class="basket-table__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/category-page/prod-2.png" alt="" class="img-fluid">
                            </div>
                            <div class="basket-table__name basket-table__name_padd">
                                Шестигранник
                            </div>
                            <div class="basket-table__price-one basket-table__price-one_padd">
								<span class="basket-table__price-for-one">200 </span>
								<span class="basket-table__price-for-one basket-table__price-for-one_small">грн</span>
								<span class="basket-table__price-text">за </span>
								<span class="basket-table__price-text_big">1 </span>
								<span class="basket-table__price-text">шт</span>
                            </div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 table-body__item table-body__item_one  align-center">
							<div class="basket-table__number-item quantity-block">
								<button class="quantity-arrow-minus"> <img src="<?php echo get_template_directory_uri(); ?>/build/images/minus.svg" alt=""> </button>
								<input id="quantity-num1" class="quantity-num" type="number" value="1" />
								<button class="quantity-arrow-plus"> <img src="<?php echo get_template_directory_uri(); ?>/build/images/plus.svg" alt=""> </button>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 table-body__item table-body__item_two  align-center">
							<div class="basket-table__amound">1 л</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 table-body__item table-body__item_three  align-center">
							<div class="basket-table__taste basket-table-head__item_padd-l">Липа</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 table-body__item table-body__item_four align-right">
							<div class="basket-table__price-item">1097 <span class="basket-table__price-item_s">грн</span></div>
						</div>
                    </div>
                    
				</div>

				<div class="basket-table-body__item basket-table-body__item_padd">
					<div class="basket-table-body__close">
						<img src="<?php echo get_template_directory_uri(); ?>/build/images/close.svg" alt="">
					</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-6 align-center ">
                            <div class="basket-table__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/category-page/prod-1.png" alt="" class="img-fluid">
                            </div>
                            <div class="basket-table__name basket-table__name_padd">
                                Шестигранник
                            </div>
                            <div class="basket-table__price-one basket-table__price-one_padd">
								<span class="basket-table__price-for-one">200 </span>
								<span class="basket-table__price-for-one basket-table__price-for-one_small">грн</span>
								<span class="basket-table__price-text">за </span>
								<span class="basket-table__price-text_big">1 </span>
								<span class="basket-table__price-text">шт</span>
                            </div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 table-body__item table-body__item_one  align-center">
							<div class="basket-table__number-item quantity-block">
								<button class="quantity-arrow-minus"> <img src="<?php echo get_template_directory_uri(); ?>/build/images/minus.svg" alt=""> </button>
								<input id="quantity-num1" class="quantity-num" type="number" value="1" />
								<button class="quantity-arrow-plus"> <img src="<?php echo get_template_directory_uri(); ?>/build/images/plus.svg" alt=""> </button>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 table-body__item table-body__item_two  align-center">
							<div class="basket-table__amound">1 л</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 table-body__item table-body__item_three  align-center">
							<div class="basket-table__taste basket-table-head__item_padd-l">Липа</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 table-body__item table-body__item_four align-right">
							<div class="basket-table__price-item">1097 <span class="basket-table__price-item_s">грн</span></div>
						</div>
                    </div>
                    
				</div>
				
			</div>
			
			<div class="basket-btn-wrp basket-btn-wrp_padd">
				<div class="row no-gutters">
					<div class="col-lg-6 col-12 mob-center">
						<div class="basket-btn-wrp-item ">
							<div class="basket-btn basket-btn_padd">
								Продолжить покупку
							</div>
						</div>
						
					</div>
					<div class="col-lg-6 col-12 mob-hidden align-right">
						<div class="basket-btn-wrp-item">
							<div class="basket-btn basket-btn_padd">
								очистить корзину
							</div>
						</div>
					</div>
				</div>
				
			</div>

			<div class="basket-order basket-order_padd">
				<div class="basket-order__title basket-order__title_padd">Общая сумма заказа</div>
				<div class="basket-order__price basket-order__price_padd">1 816 <div class="basket-order__price_s">грн</div></div>
				<div class="basket-order__btn main__btn">Оформить заказ</div>
			</div>

        </div>
		
	</section>
