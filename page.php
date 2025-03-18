<!-- Standard page by default, it's displayed if there are no files .php associated with the slug of declared page -->
 
<?php get_header(); ?>
<h1 class="display-4 w-100 text-center text-primary-custom my-2"><?php the_title(); ?></h1>
<span class="text-center text-primary-custom"><?php the_content(); ?></span>

<span>Pagina nuova! </span>
<?php get_footer(); ?>
