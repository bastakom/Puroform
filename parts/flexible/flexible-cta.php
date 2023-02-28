<?php

$title      = get_sub_field( 'title' );
$text       = get_sub_field( 'text' );
$text_color = get_sub_field( 'text_color' );
$link       = get_sub_field( 'button_link' );
$image      = get_sub_field( 'bg_image' );
$bg         = get_sub_field( 'background' );

?>
<?php if ( $text or $title or $link ): ?>
	<section class="section section-cta section-padding <?php echo $text_color ? 'dark-section' : ''; ?> rel-wrap">
		<?php if ( $image ): ?>
			<img src="<?php echo $image['sizes']['full_hd']; ?>" class="stretched-img bg-img" alt="<?php echo $image['alt']; ?>">
		<?php endif; ?>
		<?php if ( $bg ): ?>
		    <div class="overlay-color stretched-img"></div>
		<?php endif; ?>
		<div class="grid-container CTA-ninja">
		    <div class="grid-x grid-padding-x align-center-middle cta-grid" style="max-width:100%!important;
			justify-content: flex-start;
			display:flex;
			z-index:99;
			">
			<div style="background-color: <?php echo $bg; ?>;" class="innerdiv-CTA">
				<div class="cell large-7 medium-8 ninja-content text-cell text-center rel-content">
					<div class="text-wrap">
					    <?php if ( $title ): ?>
						    <h2 data-aos="zoom-out-up">
					            <?php echo $title; ?>
						    </h2>
					    <?php endif; ?>
						<?php if ( $text ): ?>
							<div data-aos="zoom-out-up">
								<?php echo $text; ?>
							</div>
						<?php endif; ?>
						<?php if ( $link ): ?>
						    <a
						        href="<?php echo esc_url( $link['url'] ); ?>"
						        class="button <?php echo $bg == 1 ? 'accent' : ''; ?>"
						        target="<?php echo esc_html( $link['target'] ? $link['target'] : '_self' ); ?>"
						        data-aos="zoom-out-up"
						    >
								<?php echo esc_attr( $link['title'] ); ?>
						    </a>
						<?php endif; ?>
					</div>
				</div>
		    </div>
		</div>
	</div>
	</section>
<?php endif; ?>
