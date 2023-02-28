<?php
/**
 * Archive
 *
 * Standard loop for the archive paket page
 */
get_header(); ?>

<div class="project_header">
    <h2>OUR PROJECTS</h2>
    <?php the_field('project_text', 'options'); ?>
    <div class="project_choice">
        <a class="see_all_projects" href="/category/puroform-boutique-development">PUROFORM BOUTIQUE DEVELOPMENT >></a>
        <a class="see_all_projects" href="/category/puroform-project-management">PUROFORM PROJECT MANAGEMENT >></a>
    </div>
</div>

<div class="backgorund_project" style="background: #f3f1f3">

				<div class="flex-box">

				<?php query_posts( array( 'post_type' => 'project', 'showposts' => 100, 'orderby' => 'post__out' ) );
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



			  <div class="grid-xd column-flex box image_background_thumb"
					     style="height:500px!important; background-image:url('<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>')">
						<figure class="effect-marley image-width" style="height:100%;">
							<a href="<?php the_permalink() ?>">
								<figcaption style="align-self: center; text-align:center !important; ">
									<div class="onhoverfull">
									<p class="metadescription_overlay" style="text-align:center !important; align-self:center; text-decoration: underline;"><?php the_field('category'); ?></p>
										<p class="center_text header_center_text"><?php the_title(); ?></p>
										<p class="center_text"><?php the_field( 'plot_square' ); ?></p>
										<p class="center_text"
										   style="text-align:center !important;"><?php the_field( 'metadesciption' ) ?>
										</p>
									</div>
								</figcaption>
							</a>
						</figure>
					</div>


					<?php wp_reset_postdata(); ?>

				<?php endwhile; endif; wp_reset_query(); ?>
				</div>



		</div>

	<!--		/////////////////////////////////////////////////-->


</div>



<style>
	.header {background-color: #DACBB1!important; position:relative !important; top:0px!important;}
    .grid-xd figure:hover {background: rgba(222, 179, 138, 0.7) !important;}
    figcaption p {text-align:right!important;}
    figcaption {
      display:flex;
      align-items: flex-end;
    }

    .onhoverfull {
        justify-content: center;
        width: 100%;
    }

    .center_text{text-align:center !important; align-self:center !important; font-family: futurabook!important;}
    .header_center_text{font-size:28px !important;}

    @media screen and (max-width:1000px){
        .project_choice{display:flex !important;}
        figcaption p {text-align:center!important;}
        figure.effect-marley h2::after, figure.effect-marley p{align-self: center; text-align:center !important;}
        .fur_picture img {height: 229px !important; object-fit: cover;}
    }
</style>


<?php get_footer(); ?>
