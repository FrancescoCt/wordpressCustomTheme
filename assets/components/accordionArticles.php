<?php 
//Function that returns html component to be recalled in functions.php
function my_custom_accordionArticles($get_all_posts_query){
?>

<div class="accordion my-5" id="accordionExample">
    <?php
    if ($get_all_posts_query->have_posts()) :
        while ($get_all_posts_query->have_posts()) : $get_all_posts_query->the_post();
            ?>
            
            <div class="card mb-2 ">
                <div class="card-header bg-light-custom" id="heading<?php the_ID(); ?>">
                    <h2 class="mb-0">
                        <button class="btn text-primary-custom " type="button" data-toggle="collapse" data-target="#collapse<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php the_ID(); ?>">
                            <?php the_title(); ?>
                        </button>
                    </h2>
                </div>
                <div id="collapse<?php the_ID(); ?>" class="collapse" aria-labelledby="heading<?php the_ID(); ?>" data-parent="#accordionExample">
                    <div class="card-body">

                        <?php 
                            // Shows the post image
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('custom_size', array('class' => 'img-fluid'));  // instead of 'full' you can use also other dimensions like 'medium', 'medium_large', 'large', 'custom_size', 'thumbnail'
                            }
                        ?>

                        <h5 class="my-5 text-primary-custom"><?php the_title(); ?></h5>
                        <p><strong class="text-primary-custom">Date:</strong> <?php the_date(); ?></p>
                        <p><strong class="text-primary-custom">Author:</strong> <?php the_author(); ?></p>
                        <p><strong class="text-primary-custom">Category:</strong> <?php the_category(); ?></p>
                        <p><strong class="text-primary-custom">Tag:</strong> <?php the_tags(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn bg-dark-custom text-white" target="_blank">See more</a>
                    </div>
                </div>
            </div>

            <?php
        endwhile;
        // Reset data of the post to avoid conflicts
        wp_reset_postdata();
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</div>

<?php 
}

?>