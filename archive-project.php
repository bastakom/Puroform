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

	<?php if( $posts = get_field('archive_projects', 'options') ): ?>
        <?php $i = 0; ?>
        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php $i++; ?>
            <?php setup_postdata($post); ?>

            <?php if ( $i == 1 ): ?>

                <div class="container">

	                <div class="grid-xd box image_background_thumb " style="height:500px!important; margin-top:50px;
		                background-image:url('<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>')">
		                <figure class="effect-marley image-width" style="height:100%;">
			                <a href="<?php the_permalink() ?>">
				                <figcaption>
					                <div class="onhover">
						                <h2 style="font-family:futurabook!important;"><?php the_title(); ?></h2>
						                <p><?php the_field( 'plot_square' ); ?></p>
						                <p><?php the_field( 'metadesciption' ) ?>
							                <i class="far fa-arrow-alt-circle-right"></i>
						                </p>
					                </div>
				                </figcaption>
			                </a>
		                </figure>
	                </div>

                </div>
				<div class="flex-box">

            <?php else: ?>


					<div class="grid-xd column-flex box image_background_thumb"
					     style="height:500px!important; background-image:url('<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>')">
						<figure class="effect-marley image-width" style="height:100%;">
							<a href="<?php the_permalink() ?>">
								<figcaption style="align-self: center; text-align:center !important; ">
									<div class="onhoverfull">
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


            <?php endif; ?>

        <?php endforeach; ?>
				</div><!-- END of .flex-box -->

	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

	<?php else: ?>

<!--		/////////////////////////////////////////////////-->

		<div class="container">
            <?php

            $args = array(
               'orderby' => 'date',
               'post_type' => 'project',
               'posts_per_page' => '3',
            );
            $the_query = new WP_Query( $args );
		    $url = get_the_post_thumbnail_url(get_the_ID(),'full');
            ?>

            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


	            <div class="grid-xd box image_background_thumb " style="height:500px!important; margin-top:50px;
		            background-image:url('<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>')">
		            <figure class="effect-marley image-width" style="height:100%;">
			            <a href="<?php the_permalink() ?>">
				            <figcaption>
					            <div class="onhover">
						            <h2 style="font-family:futurabook!important;"><?php the_title(); ?></h2>
						            <p><?php the_field( 'plot_square' ); ?></p>
						            <p><?php the_field( 'metadesciption' ) ?>
							            <i class="far fa-arrow-alt-circle-right"></i>
						            </p>
					            </div>
				            </figcaption>
			            </a>
		            </figure>
	            </div>


		    <?php endwhile; else: ?>

                <?php endif; wp_reset_query();  ?>
		</div>

		<div class="flex-box">
            <?php

            $args = array(
               'orderby' => 'date',
               'post_type' => 'project',
               'posts_per_page' => '100',
               'offset' => '1',
            );
            $the_query = new WP_Query( $args );
		    $url = get_the_post_thumbnail_url(get_the_ID(),'full');
            ?>

            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	            <div class="grid-xd column-flex box image_background_thumb"
	                 style="height:500px!important; background-image:url('<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>')">
					 test
		            <figure class="effect-marley image-width" style="height:100%;">
			            <a href="<?php the_permalink() ?>">
				            <figcaption style="align-self: center; text-align:center !important; ">
					            <div class="onhoverfull">
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

      	     <?php endwhile; else: ?>

    	     <?php endif; wp_reset_query();  ?>
		</div>

	<!--		/////////////////////////////////////////////////-->

	<?php endif; ?>

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
