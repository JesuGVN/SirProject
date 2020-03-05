<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Заголовок страницы в браузере -->
		<title>Sirdaryo.uz</title>
		<!-- Подключаем Шрифты -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans+Condensed:400|Roboto:500&display=swap&subset=cyrillic" rel="stylesheet">
		<!-- Кодировка страницы -->
			<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1">

            <?php wp_head(); ?>
	</head>
	<!-- Отображаемое тело страницы -->
	<body>

		<div class="wrapper">
			<!-- /.mainblock -->
			<div class="mainblock">
				<div class="info__top">
					<div class="container">
						<div class="info__content">
							<div class="info__contact">
								<div class="contact__mail"><a href="mailto:sirdaryo@mail.uz">sirdaryo@mail.uz</a></div>
								<div class="contac__tel"><a href="tel:+998915080258">+998 (91) 508 - 02 - 58</a></div>
								<div class="additional">Дополнительные Возможности</div>
							</div>
							<div class="languages">
								<p><a href="#">Uz</a></p>
								<p><a href="#">Rus</a></p>
								<p><a href="#">Eng</a></p>
							</div>
						</div>
					</div>
				</div>
				<header class="header">
					<div class="container">
						<div class="header__content">
							<div class="qwe"></div>
							<div class="header__logo">
								<a href="#"><img src="img/icons/test_logo.png" alt=""></a>
							</div>
							<div class="header__burger"><span></span></div>
							<nav class="header__menu">
								<!-- <ul class="header__list">
									<li><a href="#">Матбуот хизмати</a></li>
									<li><a href="#">Вилоят хокимлиги</a></li>
									<li><a href="#">Вилоят хакида</a></li>
									<li><a href="#">Шахар ва туманлар</a></li>
									<li><a href="#">Махаллий кенглаш</a></li>
									<li><a href="#">Хужатлар</a></li>
									<li><a href="#">Инвестицион салохият</a></li>
								</ul> -->
                                <?php wp_nav_menu(array(
                                'theme_location' => 'top',
                                'container'      => null,
                                'menu_class'     => 'header__list',
                                'menu_id'        => 'nav'
                                )); ?>
							</nav>
						</div>
					</div>
				</header>
			</div>

			<!-- /.slider -->
			<div class="slider">
			<?
			 $posts = get_posts( array(
                'numberposts' => 5,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => 'post_with_slider',
                'meta_value'  => '',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

		 	foreach( $posts as $post ){
				setup_postdata($post); ?>
				<div class="slider__item">
					<img src="<? the_post_thumbnail(); ?>" alt="">
					<div class="slider__text">
						<div class="slider-item__text"><p><? the_title(); ?></p></div>
						<div class="slider-item__btn"><a href="<? the_permalink(); ?>">Подробнее</a></div>
					</div>
				</div>
			<? 
			} 
			wp_reset_postdata();
		?>
			</div>
			
			 

