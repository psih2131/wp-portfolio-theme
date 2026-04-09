<?php

//registration meny
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
    register_nav_menu( 'headermeny', 'Header meny' );
    register_nav_menu( 'footermeny', 'Footer meny' );
}

/**
 * Разметка пунктов шапки как в вёрстке: main-menu__item + btn / btn-caption; подменю — submenu.
 */
class Kuzmych_Walker_Nav_Menu_Header extends Walker_Nav_Menu {

	private static function toggle_svg() {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" version="1.1" viewBox="0 0 20 20"><path d="M19.6,9.6h-3.9c-.4,0-1.8-.2-1.8-.2-.6,0-1.1-.2-1.6-.6-.5-.3-.9-.8-1.2-1.2-.3-.4-.4-.9-.5-1.4,0,0,0-1.1-.2-1.5V.4c0-.2-.2-.4-.4-.4s-.4.2-.4.4v4.4c0,.4-.2,1.5-.2,1.5,0,.5-.2,1-.5,1.4-.3.5-.7.9-1.2,1.2s-1,.5-1.6.6c0,0-1.2,0-1.7.2H.4c-.2,0-.4.2-.4.4s.2.4.4.4h4.1c.4,0,1.7.2,1.7.2.6,0,1.1.2,1.6.6.4.3.8.7,1.1,1.1.3.5.5,1,.6,1.6,0,0,0,1.3.2,1.7v4.1c0,.2.2.4.4.4s.4-.2.4-.4v-4.1c0-.4.2-1.7.2-1.7,0-.6.2-1.1.6-1.6.3-.4.7-.8,1.1-1.1.5-.3,1-.5,1.6-.6,0,0,1.3,0,1.8-.2h3.9c.2,0,.4-.2.4-.4s-.2-.4-.4-.4h0Z"/></svg>';
	}

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent  = str_repeat( $t, $depth );
		$classes = array( 'submenu' );
		$class   = esc_attr( implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) ) );
		$output .= "{$n}{$indent}<ul class=\"{$class}\">{$n}";
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent  = str_repeat( $t, $depth );
		$output .= "{$indent}</ul>{$n}";
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		if ( 0 === (int) $depth ) {
			$classes[] = 'main-menu__item';
		} else {
			$classes[] = 'submenu__item';
		}

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id_attr = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
		$id_attr = $id_attr ? ' id="' . esc_attr( $id_attr ) . '"' : '';

		$output .= $indent . '<li' . $id_attr . $class_names . '>';

		$title = apply_filters( 'the_title', $item->title, $item->ID );
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$has_children = in_array( 'menu-item-has-children', $classes, true );

		if ( 0 === (int) $depth && $has_children ) {
			$output .= '<div class="main-menu__toggle">';
			$output .= '<span class="main-menu__link btn btn-anim"><span class="btn-caption">' . esc_html( $title ) . '</span></span>';
			$output .= self::toggle_svg();
			$output .= '</div>';
		} elseif ( 0 === (int) $depth ) {
			$atts           = array();
			$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
			$atts['target'] = ! empty( $item->target ) ? $item->target : '';
			$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
			$atts['href']   = ! empty( $item->url ) ? $item->url : '';
			$atts['class']  = 'main-menu__link btn btn-anim';
			$atts           = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
					$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}
			$output .= '<a' . $attributes . '><span class="btn-caption">' . esc_html( $title ) . '</span></a>';
		} else {
			$atts           = array();
			$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
			$atts['target'] = ! empty( $item->target ) ? $item->target : '';
			$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
			$atts['href']   = ! empty( $item->url ) ? $item->url : '';
			$atts           = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
					$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}
			$output .= '<a' . $attributes . '>' . esc_html( $title ) . '</a>';
		}
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$n = '';
		} else {
			$n = "\n";
		}
		$output .= "</li>{$n}";
	}
}

/**
 * Пункты футера: footer-nav__item anim-uni-in-up + footer-nav__link btn-anim + btn-caption.
 */
class Kuzmych_Walker_Nav_Menu_Footer extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent  = str_repeat( $t, $depth );
		$classes = array( 'footer-nav__sub' );
		$class   = esc_attr( implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) ) );
		$output .= "{$n}{$indent}<ul class=\"{$class}\">{$n}";
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent  = str_repeat( $t, $depth );
		$output .= "{$indent}</ul>{$n}";
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		$classes[] = 'footer-nav__item';
		$classes[] = 'anim-uni-in-up';

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id_attr = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
		$id_attr = $id_attr ? ' id="' . esc_attr( $id_attr ) . '"' : '';

		$output .= $indent . '<li' . $id_attr . $class_names . '>';

		$title = apply_filters( 'the_title', $item->title, $item->ID );
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$atts           = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
		$atts['href']   = ! empty( $item->url ) ? $item->url : '';
		$atts['class']  = 'footer-nav__link btn-anim';
		$atts           = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		$output .= '<a' . $attributes . '><span class="btn-caption">' . esc_html( $title ) . '</span></a>';
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$n = '';
		} else {
			$n = "\n";
		}
		$output .= "</li>{$n}";
	}
}

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

