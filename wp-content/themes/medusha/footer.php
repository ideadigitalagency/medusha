<?php wp_footer(); ?>

<footer class="footer">
    <div class="container">
        <div class="row no-gutters footer_padd">
            <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                <div class="copy-right">
                    ©Medusha 2018 
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 col-1 hidden-mob">
                <a href="tel:+380 (56) 790 02 33" class="footer-number">+380 (56) 790 02 33</a>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-2 col-2">
                <div class="social">
                    <a href="<?php the_field('main-page__inst'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/instagram-logo.png" alt="">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/facebook.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-5 col-6 align-right">
                <a target="_blank" href="https://ideadigital.agency/" class="idea">
                    <span>CREATED BY:</span> IDIADIGITAL.Agency
                </a>
            </div>
        </div>
    </div>
</footer>


<!-- Modal leaveAppli  -->
<div class="modal fade" id="leaveAppli" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog form-pop-dialog modal-dialog-centered" role="document">
		<div class="modal-content form-modal-content">
			
			<button type="button" class="form-close" data-dismiss="modal" aria-label="Close">
				<img src="<?php echo get_template_directory_uri(); ?>/build/images/popup/close-pop-bg.png" alt="" class="form-close-bg">
				<img src="<?php echo get_template_directory_uri(); ?>/build/images/popup/close-pop.svg" alt="" class="form-close-btn">
			</button>
			
			<div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="27"]'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal submit  -->
<div class="modal fade" id="successfully" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog form-pop-dialog modal-dialog-centered" role="document">
		<div class="modal-content form-modal-content form-modal-content_success">
			
			<button type="button" class="form-close" data-dismiss="modal" aria-label="Close">
				<img src="<?php echo get_template_directory_uri(); ?>/build/images/popup/close-pop-bg.png" alt="" class="form-close-bg">
				<img src="<?php echo get_template_directory_uri(); ?>/build/images/popup/close-pop.svg" alt="" class="form-close-btn">
			</button>
			
			<div class="modal-body">
				<div class="form__title-big">Спасибо за заявку</div>
				<div class="form__title-small">Менеджер свяжкется с вами в течение часа</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal addBasket  -->
<div class="modal fade" id="addBasket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog form-pop-dialog modal-dialog-centered" role="document">
		<div class="modal-content form-modal-content form-modal-content_success">
			
			<button type="button" class="form-close" data-dismiss="modal" aria-label="Close">
				<img src="<?php echo get_template_directory_uri(); ?>/build/images/popup/close-pop-bg.png" alt="" class="form-close-bg">
				<img src="<?php echo get_template_directory_uri(); ?>/build/images/popup/close-pop.svg" alt="" class="form-close-btn">
			</button>
			
			<div class="modal-body">
				<div class="form__title-big">
					<span>Ваш товар</span>  успешно<br>
					добавлен <span>в корзину</span> 
				</div>
			</div>

			<div class="basket-btn-wrp basket-btn-wrp_width basket-btn-wrp_width_padd">
				<div class="row no-gutters">
					<div class="col-lg-6">
						<div class="basket-btn-wrp-item ">
							<div class="basket-btn basket-btn_padd">
								Продолжить покупку
							</div>
						</div>
					</div>
					<div class="col-lg-6 align-right">
						<div class="basket-btn-wrp-item">
							<div class="basket-btn basket-btn_padd">
								очистить корзину
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<!-- Modal leaveAppli-type1  -->
<div class="modal fade" id="leaveAppli-type1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog form-pop-dialog modal-dialog-centered" role="document">
		<div class="modal-content form-modal-content">
			
			<button type="button" class="form-close" data-dismiss="modal" aria-label="Close">
				<img src="<?php echo get_template_directory_uri(); ?>/build/images/popup/close-pop-bg.png" alt="" class="form-close-bg">
				<img src="<?php echo get_template_directory_uri(); ?>/build/images/popup/close-pop.svg" alt="" class="form-close-btn">
			</button>
			
			<div class="modal-body">
				<div class="form__title-big form__title-big_padd">Остались вопросы</div>
				<form action="">

					<input type="text" placeholder="Имя" class="form__popup form__popup_padd">
					<input type="text" placeholder="E-mail" class="form__popup form__popup_padd">
					<input type="text" placeholder="Телефон" class="form__popup form__popup_padd">
					<input type="text" placeholder="Сообщение" class="form__popup form__popup_padd">
					
					<div class="charac-b2b__param-name charac-b2b__param-name_padd">Выберите способ доставки</div>
					<div class="charac-b2b__param-list charac-b2b__param-list_padd">
						<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
							<input type="radio" name="group2" class="radio-popup_padd"/>Самовывоз
						</div>
						<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
							<input type="radio" name="group2" class="radio-popup_padd"/>Курьером
						</div>
						<div class="charac-b2b__param-item">
							<input type="radio" name="group2" class="radio-popup_padd"/>Новая почта
						</div>
					</div>

					<div class="charac-b2b__param-name charac-b2b__param-name_padd">Место откуда можно забрать товар</div>
					<input type="text" placeholder="Днепр, ул. Маршала Малиновского, 114" class="form__popup form__popup_padd">

					<div class="charac-b2b__param-name charac-b2b__param-name_padd">Способ оплаты</div>
					<div class="charac-b2b__param-list charac-b2b__param-list_padd">

						<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
							<input type="radio" name="group2" class="radio-popup_padd"/>Наложенным платежом
						</div>
						<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
							<input type="radio" name="group2" class="radio-popup_padd"/>Курьером
						</div>
						<div class="charac-b2b__param-item">
							<input type="radio" name="group2" class="radio-popup_padd"/>LiqPay
						</div>
					</div>

					<input type="submit" value="отправить" class="main__btn form__submit form__submit-full">

				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal leaveAppli-type2  -->
<div class="modal fade" id="leaveAppli-type2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog form-pop-dialog modal-dialog-centered" role="document">
		<div class="modal-content form-modal-content">
			
			<button type="button" class="form-close" data-dismiss="modal" aria-label="Close">
				<img src="<?php echo get_template_directory_uri(); ?>/build/images/popup/close-pop-bg.png" alt="" class="form-close-bg">
				<img src="<?php echo get_template_directory_uri(); ?>/build/images/popup/close-pop.svg" alt="" class="form-close-btn">
			</button>
			
			<div class="modal-body">
				<div class="form__title-big form__title-big_padd">Остались вопросы</div>
				<form action="">

					<input type="text" placeholder="Имя" class="form__popup form__popup_padd">
					<input type="text" placeholder="E-mail" class="form__popup form__popup_padd">
					<input type="text" placeholder="Телефон" class="form__popup form__popup_padd">
					<input type="text" placeholder="Сообщение" class="form__popup form__popup_padd">
					
					<div class="charac-b2b__param-name charac-b2b__param-name_padd">Выберите способ доставки</div>
					<div class="charac-b2b__param-list charac-b2b__param-list_padd">
						<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
							<input type="radio" name="group2" class="radio-popup_padd"/>Самовывоз
						</div>
						<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
							<input type="radio" name="group2" class="radio-popup_padd"/>Курьером
						</div>
						<div class="charac-b2b__param-item">
							<input type="radio" name="group2" class="radio-popup_padd"/>Новая почта
						</div>
					</div>

					<div class="charac-b2b__param-name charac-b2b__param-name_padd">Введите свой адрес и удобное время доставки</div>
					<input type="text" placeholder="Город, улица, время" class="form__popup form__popup_padd">

					<div class="charac-b2b__param-name charac-b2b__param-name_padd">Способ оплаты</div>
					<div class="charac-b2b__param-list charac-b2b__param-list_padd">
						
						<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
							<input type="radio" name="group2" class="radio-popup_padd"/>Наложенным платежом
						</div>
						<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
							<input type="radio" name="group2" class="radio-popup_padd"/>Курьером
						</div>
						<div class="charac-b2b__param-item">
							<input type="radio" name="group2" class="radio-popup_padd"/>LiqPay
						</div>
					</div>

					<input type="submit" value="отправить" class="main__btn form__submit form__submit-full">

				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal leaveAppli-type3  -->
<div class="modal fade" id="leaveAppli-type3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog form-pop-dialog modal-dialog-centered" role="document">
		<div class="modal-content form-modal-content">
			
			<button type="button" class="form-close" data-dismiss="modal" aria-label="Close">
				<img src="<?php echo get_template_directory_uri(); ?>/build/images/popup/close-pop-bg.png" alt="" class="form-close-bg">
				<img src="<?php echo get_template_directory_uri(); ?>/build/images/popup/close-pop.svg" alt="" class="form-close-btn">
			</button>
			
			<div class="modal-body">
				<div class="form__title-big form__title-big_padd">Остались вопросы</div>
				<form action="">

					<input type="text" placeholder="Имя" class="form__popup form__popup_padd">
					<input type="text" placeholder="E-mail" class="form__popup form__popup_padd">
					<input type="text" placeholder="Телефон" class="form__popup form__popup_padd">
					<input type="text" placeholder="Сообщение" class="form__popup form__popup_padd">
					
					<div class="charac-b2b__param-name charac-b2b__param-name_padd">Выберите способ доставки</div>
					<div class="charac-b2b__param-list charac-b2b__param-list_padd">
						<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
							<input type="radio" name="group2" class="radio-popup_padd"/>Самовывоз
						</div>
						<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
							<input type="radio" name="group2" class="radio-popup_padd"/>Курьером
						</div>
						<div class="charac-b2b__param-item">
							<input type="radio" name="group2" class="radio-popup_padd"/>Новая почта
						</div>
					</div>

					<div class="charac-b2b__param-name charac-b2b__param-name_padd">Введите свой адрес и удобное время доставки</div>
					<div class="charac-b2b__param-list form__popup_half charac-b2b__param-list_padd">
						<div class="charac-b2b__param-item">
							<div class="custom-select-bvzk charac-b2b-select">
								<select style="width:100%;">
										<option value="0">Днепр</option>
										<option value="1">Днепр</option>
										<option value="2">Днепр</option>
								</select>
							</div>
						</div>
					</div>
					<div class="charac-b2b__param-list form__popup_half charac-b2b__param-list_padd">
						<div class="charac-b2b__param-item">
							<div class="custom-select-bvzk charac-b2b-select">
								<select style="width:100%;">
										<option value="0">№ 25</option>
										<option value="1">№ 30</option>
										<option value="2">№ 20</option>
								</select>
							</div>
						</div>
					</div>

					<div class="charac-b2b__param-name charac-b2b__param-name_padd">Способ оплаты</div>
					<div class="charac-b2b__param-list charac-b2b__param-list_padd">
						
						<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
							<input type="radio" name="group2" class="radio-popup_padd"/>Наложенным платежом
						</div>
						<div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
							<input type="radio" name="group2" class="radio-popup_padd"/>Курьером
						</div>
						<div class="charac-b2b__param-item">
							<input type="radio" name="group2" class="radio-popup_padd"/>LiqPay
						</div>
					</div>

					<input type="submit" value="отправить" class="main__btn form__submit form__submit-full">

				</form>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/build/lib/readmore/readmore.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/build/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/build/lib/swiper/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/build/lib/input/number.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/build/lib/input/checkbox.radio.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/build/lib/input/select-custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/build/lib/animate/animate-css.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/build/lib/animate/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/build/js/scripts.min.js?v=0.001"></script>

</body>
</html>