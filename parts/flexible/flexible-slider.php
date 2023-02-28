<?php

$slides      = get_sub_field( 'slides' );
$autoplay    = get_sub_field( 'autoplay' );
$fullwidth   = get_sub_field( 'fullwidth' );
$bg          = get_sub_field( 'background_color' );
$text_color  = get_sub_field( 'text_color' );
$unic_id     = uniqid();

?>
<?php if ( $slides ): ?>
	
	<script type="text/javascript">

        jQuery( document ).on( 'ready', function() {
            jQuery( '#slider-<?php echo $unic_id; ?>' ).slick( {
                arrows: true,
                dots: false,
                infinite: true,
                speed: 500,
                autoplay: <?php echo $autoplay ? 'true' : 'false'; ?>,
                autoplaySpeed: 5000,
                slidesToShow: 1,
                slidesToScroll: 1,
                rows: 0, // Prevent generating extra markup
                slide: '.slick-slide'
            } );
        } );
	</script>
	
	<section class="section section-slider <?php echo $fullwidth ? 'section-padding' : ''; ?>">
		<div class="grid-container <?php echo $fullwidth ? '' : 'full'; ?>">
		    <div class="grid-x <?php echo $fullwidth ? 'grid-padding-x' : ''; ?>">
		        <div class="cell">
		            <div class="slider <?php echo $text_color ? 'dark-section' : ''; ?>" id="slider-<?php echo $unic_id; ?>">
						<?php foreach ( $slides as $slide ):
							$image      = $slide['background_image'];
							$content    = $slide['content'];
						?>
							<div class="slick-slide rel-wrap">
								<?php if ( $image ): ?>
									<img src="<?php echo $image['sizes']['full_hd']; ?>" class="stretched-img" data-no-lazy="1" alt="<?php echo $image['alt']; ?>">
								<?php endif; ?>
								<?php if ( $bg ): ?>
									<div class="overlay-color stretched-img" style="background-color: <?php echo $bg; ?>"></div>
								<?php endif; ?>
								<?php if ( $content ): ?>
									<div class="slide-content rel-content">
										<div class="grid-container">
										    <div class="grid-x grid-margin-x">
										        <div class="cell large-6">
													<?php echo $content; ?>
										        </div>
										    </div>
										</div>
									</div>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
		            </div>
		        </div>
		    </div>
		</div>
	</section>
<?php endif; ?>
