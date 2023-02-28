
<?php
/**
 * on going 
 *
 * Standard loop for the category page
 */
get_header(); ?>
	
	
	   
	<main class="main-slider">
	<div class="archive_header_title">
      <h2>PROJECTS</h2>
		<?php the_field('alreadybuilt_text', 'options'); ?>
		</div>
	<div class="container-slider" style="max-width:100em !important;">
		<div class="swiper-container">
			<div class="swiper-wrapper">
	
	   <?php query_posts( array( 'post_type' => 'project', 'cat' => 7, 'showposts' => 16 ) );
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			

			  <div class="swiper-slide">		
				<div class="header_title_slider">
					<h2 style="display:flex;"><?php echo $post->post_title; ?></h2>
				</div>
				<a href="<?php echo get_permalink($post->ID); ?>">
				<figure class="effect-marley ">
					<div class="card-image">
						<?php the_post_thumbnail('full'); ?>
						</div>
						 <figcaption class="card_slider_hover">
							<p><?php the_field('metadesciption')?></p>
							<p class="square-text"><?php the_field('plot_square'); ?></p>
						</figcaption>
					 </figure>
					</a>
					  
					
</div>
					
				
									

				<?php endwhile; endif; wp_reset_query(); ?>

				
					</div>	
						<div class="swiper-button-next">
							<i class="fas fa-chevron-circle-right arrow-icon"></i>
								</div>
							<div class="swiper-button-prev">
						<i class="fas fa-chevron-circle-left arrow-icon"></i>
					</div>
				</div>

				<div class="project_choice">
					<a class="see_all_projects seemore" href="/category/on-going">SEE OUR ON GOING >></a>
				</div>
	
		</main>


<style>
	.header {background-color: #DACBB1!important; position:relative !important; top:0px!important;}
    .card-image img {object-fit:cover;}
	.square-text{font-size: 13px !important; left:33px !important;}
    .card_slider_hover{width:95.5% !important;}
    @media screen and (max-width:1000px) {
        .card_slider_hover p {
            padding:30px;
        }
    }
</style>

<?php get_footer(); ?>



