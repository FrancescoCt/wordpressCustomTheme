<?php
// Create new query to obtain all posts
$args = array(
    'post_type' => 'post',       // Content type: post
    'posts_per_page' => -1,      // Obtain all posts 
    'post_status' => 'publish',  // Only published
); 
$GET_ALL_POSTS_QUERY = new WP_Query($args);
?>