<?php get_header(); ?>

<main id="main-content" class=" h-full mt-[51rem] md:mt-[990px] lg:mt-[50rem]">
    <?php
    
    while (have_posts()) :
        the_post();

        
        the_content();

    endwhile; 
    ?>
</main>

<?php get_footer(); ?>
