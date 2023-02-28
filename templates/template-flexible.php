<?php
/**
 * Template Name: Flexible Page
 */
get_header(); ?>
	
<div class="flexible-sections" id="flexible-sections">
    <?php while ( have_rows( 'flexible' ) ) : the_row(); ?>
	    <?php get_template_part( 'parts/flexible/flexible', get_row_layout() ); ?>
    <?php endwhile; ?>
</div>

<?php if ( is_front_page() ): ?>
	<div class="se-pre-con">
	    <img src="/wp-content/uploads/2021/03/cropped-logo-final_gold86x88_2x.png" alt="">
	</div>
<?php endif; ?>

<!-- <div id="load"></div>
    <div id="contents">
           
    </div> -->

<?php get_footer(); ?>