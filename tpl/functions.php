<?php

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