<?php
/**
 * project_glaze functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package project_glaze
 */
/*==================================
	#Подключение стилей и скриптов
====================================*/

function my_scripts( ) {
		/*wp_enqueue_script( 'es5-shim' , get_template_directory_uri() . '/libs/html5shiv/es5-shim.min.js', array(), null, true );
		wp_script_add_data( 'es5-shim', 'conditional', 'lt IE 9' );
		wp_enqueue_script( 'html5shiv' , get_template_directory_uri() . '/libs/html5shiv/html5shiv.min.js', array(), null, true );
		wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
		wp_enqueue_script( 'html5shiv-printshiv' , get_template_directory_uri() . '/libs/html5shiv/html5shiv-printshiv.min.js', array(), null, true );
		wp_script_add_data( 'html5shiv-printshiv', 'conditional', 'lt IE 9' );
		wp_enqueue_script( 'respond' , get_template_directory_uri() . '/libs/respond/respond.min.js', array(), null, true );
		wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
		wp_deregister_script ( 'jquery' );
    wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js',array( ), null ,true );    
    wp_enqueue_script  ( 'fancybox', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.pack.js', array(jquery), null, true );
    wp_enqueue_script ( 'owlcarousel' , get_template_directory_uri() . '/libs/owlcarousel/owl.carousel.min.js', array(jquery), null, true );
    wp_enqueue_script( 'common_js', get_template_directory_uri() . '/js/common.js', array(jquery), null, true );
    wp_enqueue_script( 'jquery_plugin_js' , get_template_directory_uri() . '/libs/countdown/jquery.plugin.js', array(jquery), null, true ); 
  
    wp_enqueue_style( 'bootstrap_grid', get_template_directory_uri() . '/libs/bootstrap/bootstrap-grid-3.3.1.min.css',array(), null, all );
    wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/libs/font-awesome-4.2.0/css/font-awesome.min.css',array(), null, all );
    wp_enqueue_style( 'fancybox_css', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.css',array(), null, all );
    wp_enqueue_style( 'owlcarousel_css', get_template_directory_uri() . '/libs/owlcarousel/owl.carousel.css',array(), null, all );
    wp_enqueue_style( 'countdown', get_template_directory_uri() . '/libs/countdown/jquery.countdown.css',array(), null, all );
    wp_enqueue_style( 'fonts_css', get_template_directory_uri() . '/css/fonts.css',array(), null, all );
	  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.css',array(), null, all );
	  wp_enqueue_style( 'media_css', get_template_directory_uri() . '/css/media.css',array(), null, all );
  */}
	add_action( 'wp_enqueue_scripts', 'my_scripts' );
/*==================================
//Конец подключения стилей и скриптов
====================================*/
/*====================================
//отключение ненужных функций
=====================================*/
		remove_action('wp_head','wp_generator');  // сокрытие версии wordpress
		remove_action( 'wp_head', 'rsd_link' );		// отключение редактирования через клиенты
		remove_action( 'wp_head', 'wlwmanifest_link' ); // отключение Windows Live Writer
/*====================================
//клнец отключения ненужных функций
=====================================*/
/*==================================
//полное отключение Emoji
====================================*/
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
/*==================================
//конец полного отключения Emoji 
====================================*/



?>