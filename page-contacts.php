<!-- Page wich uses slug contacts, overrides page.php -->
<?php get_header(); ?>
<h1 class="display-4 w-100 text-center text-primary-custom my-2"><?php the_title(); ?></h1>
<span class="text-center text-primary-custom"><?php the_content(); ?></span>

<?php my_custom_contactsForm(); ?>

<?php get_footer(); ?>
