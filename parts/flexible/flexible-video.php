<?php

$video     = get_sub_field( 'video' );
$video_m   = get_sub_field( 'video_mobile' );
$fullwidth = get_sub_field( 'fullwidth' );
$poster    = get_sub_field( 'poster_image' );

if ( $video ): ?>
	
	<section class="section section-video rel-wrap <?php echo $fullwidth ? 'section-padding' : ''; ?>">
		<div class="grid-container <?php echo $fullwidth ? '' : 'full'; ?>">
			<div class="grid-x video-grid <?php echo $fullwidth ? 'grid-margin-x rel-wrap' : ''; ?>">
				<div class="cell video-cell" data-aos="fade-up">
					<video src="<?php echo $video; ?>" class="stretched-img  <?php echo $video_m ? 'show-for-medium' : ''; ?>" width="100%" poster="<?php echo $poster['sizes']['full_hd']; ?>" controls></video>
					<?php if ( $video_m ): ?>
						<video src="<?php echo $video_m; ?>" class="stretched-img hide-for-medium" poster="<?php echo $poster['sizes']['full_hd']; ?>" controls></video>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

<?php endif; ?>