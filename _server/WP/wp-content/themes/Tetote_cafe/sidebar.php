<?php
global $template_url;
global $home_url;

//category
$args = array(
  'type'                     => 'post',
  'hide_empty'               => false,
  'pad_counts'               => true
);
$cat_list = get_categories($args);


//新着記事
$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 5,
  'order' => 'DESC',
  'orderby' => 'date',
);

$new_query = new WP_Query($args);

?>
