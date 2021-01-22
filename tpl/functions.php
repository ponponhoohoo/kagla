<?php

function logout_redirect(){
  wp_safe_redirect( home_url() );
  exit();
}
add_action('wp_logout','logout_redirect');


add_filter('template_include','custom_search_template');
function custom_search_template($template){
  if ( is_search() ){
    $post_types = get_query_var('post_type');
    foreach ( (array) $post_types as $post_type )
      $templates[] = "{$post_type}-search.php";
    $templates[] = 'search.php';
    $template = get_query_template('search',$templates);
  }
  return $template;
}

function my_default_text($text) {
  $current_user = wp_get_current_user();

  // ログインフォームの「既存ユーザのログイン」
  $text['login_heading'] = '上記の条件を承諾いただける方は下記よりログインをお願いします。';

  // ログインフォームの「ログイン情報を保存」
  $text['remember_me'] = 'ログイン情報を記憶';

  // ログインフォームの「はじめての方はこちら」
  $text['register_link_before'] = '';

   // ログインフォームの「新規ユーザー登録」
  $text['register_link'] = '新規会員登録';

   // ログインフォームの「パスワードをお忘れですか？」
  $text['forgot_link_before'] = '';

   // ログインフォームの「パスワードリセット」
  $text['forgot_link'] = 'パスワードを忘れた場合';

  // ウィジェットの「こんにちは {ユーザー名} さん」
  $text['sb_status'] = "ようこそ $current_user->nickname さん";

  // ログインページの「こんにちは {ユーザー名} さん」
  $text['login_welcome'] = "ようこそ $current_user->nickname さん";

  // ウィジェットの「パスワードをお忘れですか？」
  $text['sb_login_forgot'] = 'パスワードを忘れた場合';
	
  // ウィジェットの「登録」
  $text['sb_login_register'] = '新規会員登録';
	
  // 登録フォームの「新規ユーザー登録」
  $text['register_heading'] = '';
	
  // 登録フォームの「Terms of Service」
  $text['register_tos'] = '利用規約をお読みいただき、チェックしてください。';

  // メンバーシップの「このコンテントにアクセスする権限がありません。」
  $text['product_restricted'] = 'このページは有料会員のみ閲覧できます。';

  return $text;
}
add_filter('wpmem_default_text', 'my_default_text');

function link_Include($params = array()) {
 ob_start();
 get_template_part('link');
 return ob_get_clean();
}
add_shortcode('link', 'link_Include');

function replaceImagePath($arg) {
	$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
	return $content;
}  
add_action('the_content', 'replaceImagePath');
/*ショートコード テンプレートURL 画像などテーマ内から引っ張ってくる時に！
<?php bloginfo('template_url'); ?>を記載したい場合
投稿内で[template_url]と書いておけばよい！*/
function shortcode_templateurl() {
    return get_bloginfo('template_url');
}
/*ショートコード サイトURL
<?php bloginfo('url'); ?>を記載したい場合
投稿内で[url]と書いておけばよい！*/
function shortcode_url() {
    return get_bloginfo('url');
}
add_shortcode('url', 'shortcode_url');
add_shortcode('template_url', 'shortcode_templateurl');
add_theme_support('post-thumbnails');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action( 'wp_head','adjacent_posts_rel_link_wp_head', 10);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action( 'wp_head','wp_shortlink_wp_head',10, 0 );
?>