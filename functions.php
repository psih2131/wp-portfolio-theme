<?php

function post_type_registr(){
    register_post_type('blog', array(
        'labels'             => array(
            'name'               => 'blog', // Основное название типа записи
            'singular_name'      => 'blog', // отдельное название записи типа Book
            'add_new'            => 'Добавить пост',
            'add_new_item'       => 'Добавить новый пост',
            'edit_item'          => 'Редактирывать пост',
            'new_item'           => 'Новый пост',
            'view_item'          => 'Посмотреть пост',
            'search_items'       => 'Найти пост',
            'not_found'          =>  'посто не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Блог'

          ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-clipboard',
        'supports'           => array('title','thumbnail','custom-fields','page-attributes','post-formats'),
        'show_in_rest'       => true 
    ) );

   

    // список параметров: wp-kama.ru/function/get_taxonomy_labels
    register_taxonomy( 'category-blog', [ 'blog' ], [ 
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Категори',
            'singular_name'     => 'Категори',

            'menu_name'         => 'Категори',
        ],
        'description'           => '', // описание таксономии
        'public'                => true,
        'hierarchical'          => true,
        'rewrite'               => true,
        'capabilities'          => array(),
        'meta_box_cb'           => null, 
        'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest'          => null, // добавить в REST API
        'rest_base'             => null, // $taxonomy
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    ] );


    // список параметров: wp-kama.ru/function/get_taxonomy_labels
    register_taxonomy( 'tegs-blog', [ 'blog' ], [ 
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Теги',
            'singular_name'     => 'Теги',

            'menu_name'         => 'Теги',
        ],
        'description'           => '', // описание таксономии
        'public'                => true,
        'hierarchical'          => true,
        'rewrite'               => true,
        'capabilities'          => array(),
        'meta_box_cb'           => null, 
        'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest'          => null, // добавить в REST API
        'rest_base'             => null, // $taxonomy
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    ] );



	register_post_type('works', array(
        'labels'             => array(
            'name'               => 'works', // Основное название типа записи
            'singular_name'      => 'works', // отдельное название записи типа Book
            'add_new'            => 'Добавить работу',
            'add_new_item'       => 'Добавить новую работу',
            'edit_item'          => 'Редактирывать работу',
            'new_item'           => 'Новая работу',
            'view_item'          => 'Посмотреть работу',
            'search_items'       => 'Найти работу',
            'not_found'          =>  'работ не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Работы'

          ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-clipboard',
        'supports'           => array('title','thumbnail','custom-fields','page-attributes','post-formats'),
        'show_in_rest'       => true 
    ) );


	register_taxonomy( 'tegs-works', [ 'works' ], [ 
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Теги работ',
            'singular_name'     => 'Теги работ',

            'menu_name'         => 'Теги работ',
        ],
        'description'           => '', // описание таксономии
        'public'                => true,
        'hierarchical'          => true,
        'rewrite'               => true,
        'capabilities'          => array(),
        'meta_box_cb'           => null, 
        'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest'          => null, // добавить в REST API
        'rest_base'             => null, // $taxonomy
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    ] );


    register_post_type('testimonials', array(
        'labels'             => array(
            'name'               => 'testimonials', // Основное название типа записи
            'singular_name'      => 'testimonials', // отдельное название записи типа Book
            'add_new'            => 'Добавить отзыв',
            'add_new_item'       => 'Добавить новый отзыв',
            'edit_item'          => 'Редактирывать отзыв',
            'new_item'           => 'Новый отзыв',
            'view_item'          => 'Посмотреть отзыв',
            'search_items'       => 'Найти отзыв',
            'not_found'          =>  'отзывлв не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Отзывы'

          ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-clipboard',
        'supports'           => array('title','custom-fields','page-attributes','post-formats'),
        'show_in_rest'       => true 
    ) );

}
add_action('init', 'post_type_registr');


//регистрация страници с опциями ACF
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}



/**
 * kuzmych functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kuzmych
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kuzmych_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on kuzmych, use a find and replace
		* to change 'kuzmych' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'kuzmych', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'kuzmych' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'kuzmych_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'kuzmych_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kuzmych_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kuzmych_content_width', 640 );
}
add_action( 'after_setup_theme', 'kuzmych_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kuzmych_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kuzmych' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kuzmych' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kuzmych_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kuzmych_scripts() {
	wp_enqueue_style( 'kuzmych-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'kuzmych-style', 'rtl', 'replace' );

	wp_enqueue_script( 'kuzmych-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kuzmych_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

