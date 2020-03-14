<?php 

add_action( 'init', 'register_post_type_' ); // Использовать функцию только внутри хука init
add_action('wp_enqueue_scripts', 'style_theme'); // Подключаем Основные Стили
add_action('wp_footer', 'scripts_theme'); // Подключаем скрипты( JavaScript )
add_action('after_setup_theme', 'theme_register_nav_menu'); //Регистрируем навигацию


add_theme_support( 'post-thumbnails' ); // Позволяем использовать миниатюры в постах




/*   ---- ПЕРЕВОДЫ СТРОК ------- */

pll_register_string( 'кнопка подробнее', 'Подробнее');

////////////////////////////////////



function style_theme(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/styles.css' );
}

function scripts_theme(){
    // wp_deregister_script( 'jquery-core' );
	// wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
    // wp_enqueue_script( 'jquery' );
    

    wp_enqueue_script('slic', get_template_directory_uri() . '/assets/js/slick.min.js');
    wp_enqueue_script('mainScript', get_template_directory_uri() . '/assets/js/file.js');
    wp_enqueue_script('goverment', get_template_directory_uri() . '/assets/js/main.js');
}

function theme_register_nav_menu(){
	    register_nav_menus( array(
			'head_menu' => 'Меню в шапке',
			'lang_menu' => 'Меню Языков'
	    ));
}

 
function register_post_type_() {
	$partners = array(
		'name' => 'Партнеры',
		'singular_name' => 'Партнер', // админ панель Добавить->Функцию
		'add_new' => 'Добавить партнера',
		'add_new_item' => 'Добавить нового партнера', // заголовок тега <title>
		'edit_item' => 'Редактировать партнера',
		'new_item' => 'Новый партнер',
		'all_items' => 'Все партнеры',
		'view_item' => 'Просмотр партнеров на сайте',
		'search_items' => 'Искать партнеров',
		'not_found' =>  'Партнеров не найдено.',
		'not_found_in_trash' => 'В корзине нет партнеров.',
		'menu_name' => 'Партнеры' // ссылка в меню в админке
	);
	$partners_args = array(
		'labels' => $partners,
		'public' => true, // благодаря этому некоторые параметры можно пропустить
		'menu_icon' => 'dashicons-admin-page', // иконка корзины
		'menu_position' => 5,
		'has_archive' => true,
		'supports' => array( 'title'),
		'taxonomies' => array('post_tag')
	);



	$cities = array(
		'name' => 'Города',
		'singular_name' => 'Город', // админ панель Добавить->Функцию
		'add_new' => 'Добавить Город',
		'add_new_item' => 'Добавить новый город', // заголовок тега <title>
		'edit_item' => 'Редактировать город',
		'new_item' => 'Новый город',
		'all_items' => 'Все города',
		'view_item' => 'Просмотр городов на сайте',
		'search_items' => 'Искать город',
		'not_found' =>  'Город не найден.',
		'not_found_in_trash' => 'В корзине нет городов.',
		'menu_name' => 'Города' // ссылка в меню в админке
	);
	$cities_args = array(
		'labels' => $cities,
		'public' => true, // благодаря этому некоторые параметры можно пропустить
		'menu_icon' => 'dashicons-admin-page', // иконка корзины
		'menu_position' => 5,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'excerpt'),
		'taxonomies' => array('post_tag')
	);

	$events = array(
		'name' => 'Мероприятия',
		'singular_name' => 'Мероприятие', // админ панель Добавить->Функцию
		'add_new' => 'Добавить Мероприятие',
		'add_new_item' => 'Добавить новое мероприятие', // заголовок тега <title>
		'edit_item' => 'Редактировать мероприятие',
		'new_item' => 'Новое мероприятие',
		'all_items' => 'Все мероприятия',
		'view_item' => 'Просмотр мероприятий на сайте',
		'search_items' => 'Искать мероприятие',
		'not_found' =>  'Мероприятий не найдено.',
		'not_found_in_trash' => 'В корзине нет мероприятий.',
		'menu_name' => 'Мероприятия' // ссылка в меню в админке
	);
	$events_args = array(
		'labels' => $events,
		'public' => true, // благодаря этому некоторые параметры можно пропустить
		'menu_icon' => 'dashicons-admin-page', // иконка корзины
		'menu_position' => 5,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail'),
		'taxonomies' => array('post_tag')
	);


	$gov = array(
		'name' => 'Правительство',
		'singular_name' => 'Руководителя', // админ панель Добавить->Функцию
		'add_new' => 'Добавить Руководителя',
		'add_new_item' => 'Добавить нового руководителя', // заголовок тега <title>
		'edit_item' => 'Редактировать руководителя',
		'new_item' => 'Новый руководитель',
		'all_items' => 'Все Руководители',
		'view_item' => 'Просмотр руководителей на сайте',
		'search_items' => 'Искать руководителя',
		'not_found' =>  'Руководителей не найдено.',
		'not_found_in_trash' => 'В корзине нет руководителей.',
		'menu_name' => 'Правительство' // ссылка в меню в админке
	);
	$gov_args = array(
		'labels' => $gov,
		'public' => true, // благодаря этому некоторые параметры можно пропустить
		'menu_icon' => 'dashicons-admin-page', // иконка корзины
		'menu_position' => 5,
		'has_archive' => true,
		'supports' => array( 'title', 'editor'),
		'taxonomies' => array('post_tag')
	);

	$usefullLinks = array(
		'name' => 'Полезные Ссылуи',
		'singular_name' => 'Полезную Ссылку', // админ панель Добавить->Функцию
		'add_new' => 'Добавить Полезную Ссылку',
		'add_new_item' => 'Добавить новую полезную ссылку', // заголовок тега <title>
		'edit_item' => 'Редактировать полезную ссылку',
		'new_item' => 'Новая полезная ссылка',
		'all_items' => 'Все полезные ссылки',
		'view_item' => 'Просмотр полезных ссылок на сайте',
		'search_items' => 'Искать полезные ссылки',
		'not_found' =>  'Полезных Ссылок не найдено.',
		'not_found_in_trash' => 'В корзине нет полезных ссылок.',
		'menu_name' => 'Полезные Ссылки' // ссылка в меню в админке
	);
	$usefullLinks_args = array(
		'labels' => $usefullLinks,
		'public' => true, // благодаря этому некоторые параметры можно пропустить
		'menu_icon' => 'dashicons-admin-page', // иконка корзины
		'menu_position' => 5,
		'has_archive' => true,
		'supports' => array( 'title', 'thumbnail'),
		'taxonomies' => array('post_tag')
	);

	register_post_type('partners',$partners_args);
	register_post_type('cities',$cities_args);
	register_post_type('events',$events_args);
	register_post_type('goverment',$gov_args);
	register_post_type('userfull_links',$usefullLinks_args);


}


?>