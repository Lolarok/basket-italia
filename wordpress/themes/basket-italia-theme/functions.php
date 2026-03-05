<?php
// Basket Italia Theme - Functions v1.0.0
function basket_setup(){
  load_theme_textdomain("basket-italia",get_template_directory()."/languages");
  add_theme_support("automatic-feed-links");
  add_theme_support("title-tag");
  add_theme_support("post-thumbnails");
  register_nav_menus(["primary"=>"Menu Principale","footer"=>"Footer"]);
  set_post_thumbnail_size(1200,630,true);
  add_image_size("card-thumb",400,250,true);
}
add_action("after_setup_theme","basket_setup");
function basket_scripts(){
  wp_enqueue_style("gfonts","https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Roboto+Condensed:wght@400;700&display=swap",[],null);
  wp_enqueue_style("basket-style",get_stylesheet_uri(),[],"1.0.0");
  wp_enqueue_script("basket-main",get_template_directory_uri()."/js/main.js",["jquery"],"1.0.0",true);
}
add_action("wp_enqueue_scripts","basket_scripts");
function basket_reading_time(){
  $w=str_word_count(strip_tags(get_the_content()));
  return max(1,round($w/200))." min";
}
add_filter("excerpt_length",fn()=>25,999);
add_filter("excerpt_more",fn()=>"...");
function basket_seo(){
  if(!is_single()&&!is_page())return;
  $d=wp_trim_words(get_the_excerpt(),25);
  echo "<meta name=description content=".esc_attr($d).">
";
  echo "<meta name=twitter:card content=summary_large_image>
";
}
add_action("wp_head","basket_seo",5);
