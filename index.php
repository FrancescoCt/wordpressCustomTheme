<!-- Main page of the site -->
<?php get_header(); ?>
<!-- Functions declared in functions.php -->
<?php my_custom_randomImage(); ?>
<h1 class="display-4 w-100 text-center text-primary-custom my-2"><?php bloginfo('name'); ?></h1>
<span class="text-center text-primary-custom"><?php bloginfo('description'); ?></span>

<?php my_custom_cardsAdvanced($CARDS_ADVANCED_IMAGES); ?>
<?php my_custom_mainSections($FRONT_PAGE_SECTIONS_INFO); ?>

<h2 class="display-4 w-100 text-center text-primary-custom my-2">La nostra squadra</h2>
<?php my_custom_cards($CARDS_IMAGES); ?>
<h2 class="display-4 w-100 text-center text-primary-custom my-2">Vieni a trovarci</h2>
<div class="container d-flex justify-content-center align-items-center">
    <!-- Insert here iframe of desired location from google maps -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12758.58947456039!2d14.835078373463048!3d36.92269480297206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13119b2192f515df%3A0xa0655fdb1712c2b3!2s97015%20Frigintini%20RG!5e0!3m2!1sit!2sit!4v1740866319522!5m2!1sit!2sit" width="344" height="375" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer(); ?>
