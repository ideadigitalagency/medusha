<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	 
	<?php if (is_front_page() || is_home()) : ?>
        <title><?php bloginfo('name'); ?></title>
    <?php else : ?>
        <title><?php wp_title(); ?></title>
    <?php endif; ?>

    <?php wp_head(); ?>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link href="<?php echo get_template_directory_uri(); ?>/build/lib/animate/hover.css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/build/lib/swiper/swiper.min.css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/build/lib/animate/animate.css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/build/styles/style.min.css?v=0.002" rel="stylesheet">
	 
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:image" content="build/common/og.jpg">
	<meta property="og:description" content="">
</head>
<body <?php body_class(); ?>>

	<header class="header header_padd">
		<div class="container">

				<div class="row justify-content-between no-gutters">

					<div class="col-lg-3 col-md-3 col-sm-3  hidden-mob menu-animation-number">
						<a href="tel:+380 (56) 790 02 33" class="number">+380 (56) 790 02 33</a>
					</div>
		
					<div class="col-lg-6 col-md-6 col-sm-6 align-center menu-animation-logo">
                    <?php if (is_front_page() || is_home()) : ?>
                        <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/build/images/logo.svg" alt=""></div>
						<div class="logo-white"><img src="<?php echo get_template_directory_uri(); ?>/build/images/logo-white.svg" alt=""></div>
                    <?php else : ?>
                        <div class="logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/build/images/logo.svg" alt=""></a></div>
						<div class="logo-white"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/build/images/logo-white.svg" alt=""></a></div>
					<?php endif; ?>
						
					</div>
		
					<div class="col-lg-3 col-md-3 col-sm-3 align-right menu-animation-burger">
						<div class="menu-burger">
							<div class="main_menu">
								<div class="nav_wrap">
								
									<div class="main-name">MENU</div>
									<div id="nav-icon" class="nav-icon" class="visible-xs visible-sm visible-md visible-lg">
										<span class="nav-icon__item"></span>
										<span class="nav-icon__item"></span>
										<span class="nav-icon__item"></span>
									</div>

								</div>
							</div>
						</div>
					</div>
		
				</div>

		</div>
		
	</header>

	<div id="main-menu" class="main-menu ">
		
		<div class="menu-wrap menu-wrap_padd">
			
			<div class="container">
				
				<div id="menu-ul-wrp" class="menu-ul-wrp">
					<ul>
						<li><a href="<?php echo get_home_url(); ?>">Главная</a> </li>
						<li>
							<a href="#" id="link-prod" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">Мёд в органической упаковке</a>
							<ul class="sub-menu sub-menu_padd dropdown-menu" aria-labelledby="link-prod">
								<li><a href="#">Для корпоративных клиентов</a></li>
								<li><a href="#">Для частных клиентов</a></li>
							</ul>
						</li>
						<li>
							<a href="#" id="link-prod" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">Подарочные наборы</a>
							<ul class="sub-menu sub-menu_padd2 dropdown-menu" aria-labelledby="link-prod">
								<li><a href="#">Для корпоративных клиентов</a></li>
								<li><a href="#">Для частных клиентов</a></li>
							</ul>
						</li>
						<li><a href="#">О нас</a></li>
						<li><a href="<?php echo get_category_link(17); ?>">Блог</a></li>
						<li><a href="<?php echo get_category_link(20); ?>">Товар</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>

				<div class="menu-social menu-social_padd">
					<a href="<?php the_field('main-page__inst'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/instagram-logo-white.svg" alt="" class="show">
						<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/instagram-logo-oliv.svg" alt="" class="hover">
					</a>
					<a href="<?php the_field('main-page__face'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/facebook-white.svg" alt="" class="show">
						<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/facebook-oliv.svg" alt="" class="hover">
					</a>
				</div>

				<div class="menu-lang">
					<span class="menu-lang__item">Укр</span>
					<span class="menu-lang__item active">Рус</span>
					<span class="menu-lang__item">Анг</span>
				</div>

			</div>

		</div>
		
	</div>