<?php
/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	

	
}
add_action( 'after_setup_theme', 'my_setup' );



/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
// function my_script_init()
// {

// 	wp_enqueue_style( 'my-css', get_template_directory_uri() . '/css/styles.css', array(), '1.0.1', 'all' );
// 	// wp_enqueue_style( 'my-animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.1', 'all' );

// 	wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.1', true );
// 	wp_enqueue_script( 'my-min', get_template_directory_uri() . '/js/script.min.js', array( 'jquery' ), '1.0.1', true );

// }
// add_action('wp_enqueue_scripts', 'my_script_init');





// サンクスページに遷移
// function add_thanks_page() {
// 	echo <<< EOD
// 	<script>
// 		document.addEventListener( 'wpcf7mailsent', function( event ) {
// 		location = 'https://coordination-portfolio.com/confirm';
// 		}, false );
// 	</script>
// 	EOD;
// 	}
// 	add_action( 'wp_footer', 'add_thanks_page' );


//     add_action( 'wp_footer', 'add_thanks_wcf7' );

// function add_thanks_page() {
//     echo <<< EOD
//     <script>
//     document.addEventListener( 'wpcf7mailsent', function( event ) {
//     location = 'https://coordination-portfolio.com/confirm/';
//     }, false );
//     </script>
//     EOD;
//     }
//     add_action( 'wp_footer', 'add_thanks_page' );


//     add_action( 'wp_footer', 'add_thanks_wcf7' );

// function add_thanks_wcf7() {
// echo <<< EOD
// <script>
// document.addEventListener( 'wpcf7mailsent', function( event ) {
//   location = 'https://coordination-portfolio.com/confirm/';
// }, false );
// </script>
// EOD;
// }




//     // inquire画像よびだし
//     function contact_images_url() {
//         return get_stylesheet_directory_uri();
//     }
//     wpcf7_add_form_tag( 'indicate_images_url', 'contact_images_url' );


// // Contact Form 7 にショートコードを追加
// function get_mytheme_url() {
//     return get_template_directory_uri();
// }
// wpcf7_add_shortcode('show_mytheme_url', 'get_mytheme_url', true);


/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
// function my_menu_init() {
// 	register_nav_menus(
// 		array(
// 			'global'  => 'ヘッダーメニュー',
// 			'utility' => 'ユーティリティメニュー',
// 			'drawer'  => 'ドロワーメニュー',
// 		)
// 	);
// }
// add_action( 'init', 'my_menu_init' );
/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
// function my_widget_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => 'サイドバー',
// 			'id'            => 'sidebar',
// 			'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<div class="p-widget__title">',
// 			'after_title'   => '</div>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'my_widget_init' );








