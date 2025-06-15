<?php

$home_url = get_bloginfo('url');
$template_url = get_bloginfo('template_directory');


//ショートコード

//home_url
function home_urlFunc()
{
  return get_bloginfo('url');
}
add_shortcode('home_url', 'home_urlFunc');

//template_url
function template_urlFunc()
{
  return get_bloginfo('template_directory');
}
add_shortcode('template_url', 'template_urlFunc');

//サムネイル
add_theme_support('post-thumbnails');

// ショートコードの展開を有効化
function my_kses_allowed_html($tags, $context)
{
  if ($context == 'post') {
    $tags['use']['xlink:href'] = true;
  }
  return $tags;
}
add_filter('wp_kses_allowed_html', 'my_kses_allowed_html', 10, 2);


/*【管理画面】投稿メニューを非表示 */
function remove_menus()
{
  global $menu;
  remove_menu_page('edit.php'); // 投稿を非表示
}
add_action('admin_menu', 'remove_menus');


//MW WP FORMで自動改行を無効
function my_wpform_autop_filter()
{
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
my_wpform_autop_filter();


/*---------------------------------------------------------------*/
//ここからカスタマイズ
/*---------------------------------------------------------------*/
// カスタム投稿
add_action('init', 'custom_posttype');
function custom_posttype()
{
  register_post_type('news', array(
    'labels' => array(
      'name' => 'お知らせ',
      'singular_name' => 'お知らせ',
    ),
    'public' => true,
    'show_ui' => true,
    'rewrite' => true,
    'has_archive' => true,
    'hierarchical' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true,
  ));
  //  register_taxonomy('tax_blog',array('blog'), array(
  //    'hierarchical' => true,
  //    'label' => 'カテゴリー',
  //    'show_ui' => true,
  //    'show_in_rest' => true,
  //    'public' => true
  //  ));
  //  register_taxonomy('tax_tag',array('blog'), array(
  //    'hierarchical' => false,
  //    'label' => 'タグ',
  //    'show_ui' => true,
  //    'show_in_rest' => true,
  //    'public' => true
  //  ));
}


//お問い合わせのバナーのショートコード
//function shortcode_contact_banner($atts){
//  ob_start();
//  get_template_part('inc/contact-banner');
//  return ob_get_clean();
//}
//add_shortcode('contact_banner','shortcode_contact_banner');


// パーマリンクルールの追加
function myRewriteRule()
{
  //post
  //  add_rewrite_rule('blog/?$' ,'index.php?post_type=post', 'top');
}
add_action('init', 'myRewriteRule');


//カスタム投稿タイプの投稿一覧にカスタムタクソノミーの絞込をつける
add_action('restrict_manage_posts', 'add_custom_taxonomies_term_filter');
function add_custom_taxonomies_term_filter()
{
  global $post_type;
  //  if ( $post_type == 'blog' ) {
  //    $taxonomy = 'tax_blog';
  //    wp_dropdown_categories( array(
  //      'show_option_all' => 'すべてのカテゴリー',
  //      'orderby' => 'name',
  //      'selected' => get_query_var( $taxonomy ),
  //      'hide_empty' => 0,
  //      'name' => $taxonomy,
  //      'taxonomy' => $taxonomy,
  //      'value_field' => 'slug',
  //    ) );
  //    $taxonomy = 'tax_tag';
  //    wp_dropdown_categories( array(
  //      'show_option_all' => 'すべてのタグ',
  //      'orderby' => 'name',
  //      'selected' => get_query_var( $taxonomy ),
  //      'hide_empty' => 0,
  //      'name' => $taxonomy,
  //      'taxonomy' => $taxonomy,
  //      'value_field' => 'slug',
  //    ) );
  //  }
}



//抜粋出力用関数
function my_excerpt($length = 60)
{
  global $post;
  $cont = $post->post_content;
  //タグ除去
  $cont = strip_tags($cont);
  //ショートコード除去
  $cont = preg_replace('#\[[^\]]+\]#', '', $cont);
  //改行除去
  $cont = str_replace(array("\r\n", "\n", "\r"), "", $cont);
  if (mb_strlen($cont, 'UTF-8') > $length) {
    $cont = mb_substr($cont, 0, $length, 'UTF-8');
    echo $cont . '…';
  } else {
    echo $cont;
  }
  return;
}



/*-------------------------------------------*/
/* MW WP FORM フォームより前の文章を非表示にする */
/* ※使い方※ */
/* 1.<div class="contact_msg"></div>の中に非表示にしたい文章を入力する */
/* 2.cssで.contact_msg_hiddenにdisplay:none;のスタイルを適用する */
/*-------------------------------------------*/
function my_enqueue_scripts_mwwpfrom() {
	if( !wp_script_is( 'jquery', 'done' ) ) {
		wp_enqueue_script( 'jquery' );
	}
	//jQueryに記述したい内容を入力する(シングルコーテーションとダブルコーテーション注意)
	$script = "
jQuery(function($){
	if($('div').hasClass('mw_wp_form_confirm')){
		$('.privacy-check').addClass('privacycheck_hidden');
	} else if ($('div').hasClass('mw_wp_form_complete')) {
		$('.contact_msg').addClass('contact_msg_hidden');
	} else if ($('span').hasClass('error')) {
		$('.contact_msg').addClass('contact_msg_hidden');
	}
});
";
	wp_add_inline_script( 'jquery-core', $script, 'after' );//インラインスクリプトを追加する
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts_mwwpfrom' );