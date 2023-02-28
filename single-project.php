<?php
/**
 * Single
 *
 * Loop container for single post content
 */



get_header(); ?>
				
				
	<main class="main-content" style="padding-top:0px !important;">
    <?php if($video = get_field('video')) : ?>
        <div class="video_section">
		    <video class="video_single" src="<?php echo $video ?>"  width="100%"></video>
		        <div class="playpause"></div>
		            <div class="project_choice">
                    <a class="see_all_projects moreimages" href="#images">MORE IMAGES</a>
                </div>
            </div>	
    <?php endif; ?>
    <?php if($ifimage = get_field('ifimage')) : ?>
            <div class="image-cover image-cover-pad rel-wrap">
                <img src="<?php echo $ifimage ?>" class="stretched-img" alt="">
            </div>
    <?php endif; ?>
	
		<div class="grid-container single_grid">
			<div class="row">
			
				<!-- BEGIN of post content -->
				<div class="large-8 medium-8 small-12 cell">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
                        
							<div id="post-<?php the_ID(); ?>" style="margin-bottom:100px !important; max-width:700px; margin:0 auto;">
								
								

                                <h1 class="page-title entry__title" style="font-size:55px !important; text-transform:uppercase;"><?php the_title(); ?></h1>
									<?php the_content( '', true ); ?>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="grid-container">
		    <div class="grid-x grid-margin-x">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="cell fur_picture" id="images" title="<?php the_title_attribute(); ?>" class="entry__thumb">
						<div class="inner-wrap rel-wrap">
							<?php the_post_thumbnail( 'full', array('class' => 'stretched-img') ); ?>
						</div>
					</div>
				<?php endif; ?>
				<?php
					$images = get_field('gallery');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $images ): ?>
						<div class="gallery_section" >
							<?php foreach( $images as $image_id ): ?>
								<div class="cell_gallery">
									<?php echo wp_get_attachment_image( $image_id, $size ); ?>
							</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
			</div>
		</div>
	</main>
	<div class="goback">
		<a href="javascript:history.back()"> << Go Back</a>
	</div>


	<style>
		.image-cover-pad {
			height: 80vh;
		}
		
		.header {background-color: #DACBB1!important; position:relative !important; top:0px!important;}

        .single-project .fur_picture img {
			height: 100%;
			width: 100%;
        }
        .single-project .single_grid {
			margin-bottom: 0;
        }
        .single-project .fur_picture .inner-wrap {
			padding-bottom: 40%;
			margin-bottom: 80px;
        }
    @media screen and (max-width:1000px){
        /*.fur_picture img {height: 229px !important; object-fit: cover;}*/
    }
	</style>


<?php get_footer(); ?>
