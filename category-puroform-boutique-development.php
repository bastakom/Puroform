
<?php
/**
 * PUROFORM BOUTIQUE DEVELOPMENT
 *
 * Standard loop for the category page
 */
get_header(); ?>
	
	
	   <main>
	   <div class="archive_header_title" style="height:30vh;">
      <h2>PUROFORM BOUTIQUE DEVELOPMENT</h2>
		<?php the_field('puroform_boutique_development', 'options'); ?>
		</div>
		<div style="background:#f3f1f3; padding-bottom: 50px;">
		<div class="button-filter">
			<button class="but-all">
			  COMPLETED
				</button>
					<button class="but-js">
					ON GOING
			 	</button>
		 </div>

<div class="cat">
    <div class="js-class">
	<?php query_posts( array( 'post_type' => 'project', 'cat' => 6, 'showposts' => 16 ) );
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php $post_status = get_field('post_status'); ?>
			
  
				<div class="grid-xd moblie-friendly" style="margin: 6px;">
				<figure class="effect-marley heightformoblie filtersystem <?php echo ($post_status == 2) ? 'point-cursor' : ''; ?>">


					<?php if($post_status == 1) : ?>
                    <a href="<?php the_permalink() ?>">
						<?php endif; ?>

                    <div> <?php the_post_thumbnail('full'); ?></div>
				<figcaption>
					<p class="metadescription_overlay" style="text-align:center !important; align-self:center; text-decoration: underline;"><?php the_field('category'); ?></p>
					<p style="font-size:25px; text-align:center !important; align-self: center; font-family:futurabook !important; font-weight: 500;"><?php the_title(); ?></p>
					<p class="metadescription_overlay" style="text-align:center !important; align-self:center;"><?php the_field('plot_square'); ?></p>
					<p class="metadescription_overlay" style="text-align:center !important; align-self:center;"><?php the_field('metadesciption')?></p>
					</figcaption>

	                    <?php if($post_status == 1) : ?>
                    </a>
				<?php endif; ?>

				</figure>
				</div>
			<?php endwhile; endif; wp_reset_query(); ?>
	</div>
    <div class="html5" >
	<?php query_posts( array( 'post_type' => 'project', 'cat' => 7, 'showposts' => 16 ) );
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php $post_status = get_field('post_status'); ?>
  
				<div class="grid-xd moblie-friendly" style="display:flex;margin: 6px;">
				<figure class="effect-marley heightformoblie <?php echo ($post_status == 2) ? 'point-cursor' : ''; ?>">


					<?php if($post_status == 1) : ?>
                    <a href="<?php the_permalink() ?>">
						<?php endif; ?>

                    <div> <?php the_post_thumbnail('full'); ?></div>
				<figcaption>
					<p class="metadescription_overlay" style="text-align:center !important; align-self:center; text-decoration: underline;"><?php the_field('category'); ?></p>
					<p style="font-size:25px; text-align:center !important; align-self: center; font-family:futurabook !important; font-weight: 500;"><?php the_title(); ?></p>
					<p class="metadescription_overlay" style="text-align:center !important; align-self:center;"><?php the_field('plot_square'); ?></p>
					<p class="metadescription_overlay" style="text-align:center !important; align-self:center;"><?php the_field('metadesciption')?></p>
					</figcaption>
	                    <?php if($post_status == 1) : ?>
                    </a>
				<?php endif; ?>
				</figure>
				</div>
			<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	</div>
  
  
</div>
			</div>

				<div class="project_choice">
					<a class="see_all_projects seemore" href="/category/puroform-project-management">SEE OUR PUROFORM PROJECT MANAGEMENT >></a>
				</div>
	
		</main>


<style>
	.header {background-color: #DACBB1!important; position:relative !important; top:0px!important;}
    .card-image img {object-fit:cover;}
    .card_slider_hover{width:95.5% !important;}
    .square-text{font-size: 13px !important; left:50px !important;}
    @media screen and (max-width:1000px) {
        .mobile_ptag {
            padding:40px;
            text-align:center !important;
        }
    }
</style>

<?php get_footer(); ?>



