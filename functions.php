<?php
function wp_resources(){
    wp_enqueue_style( 'style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'wp_resources');

register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));

function get_first_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
  
    if(empty($first_img)) {
      $first_img = "wp-content/themes/ultimatewptheme/assets/default.jpg";
    }
    return $first_img;
  }