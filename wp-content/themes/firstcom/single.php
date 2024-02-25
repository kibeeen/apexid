<?php get_header(); ?>

<div class="container">
    <h1><?php single_post_title(); ?></h1>
    <?php if (have_posts()) :
    while (have_posts()) : the_post();
    the_content();
    the_field('custom');
    endwhile;
    endif; ?>
</div>

<?php get_footer(); ?>