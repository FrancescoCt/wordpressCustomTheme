<?php 
//Function that returns html component to be recalled in functions.php
function my_custom_navbarLinks(){
?>
   <?php
    // wp_nav_menu(array('theme_location' => 'primary'));
    // Navigation pages
    $pages = get_pages();

    // Print title links
    foreach ($pages as $page) {
        $page_title = $page->post_title;
        $page_link = get_permalink($page->ID);
        echo '<li class="nav-item"><a class="nav-link" href="' . $page_link . '">' . $page_title . '</a></li>';
    }
    ?> 
<?php 
}
?>