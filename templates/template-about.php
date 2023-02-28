<?php
/**
 * Template Name: About Page
 */

get_header(); ?>


<div class="grid-x grid-padding-x section_text_full">
    <div class="column small-6">
        <?php the_field('text_left') ?>
    </div>
    <div class="column small-6">
        <img src="<?php the_field('image_right') ?>" alt="">
    </div>
</div>



<?php get_footer() ?>