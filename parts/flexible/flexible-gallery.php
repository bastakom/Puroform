<?php

$images    = get_sub_field( 'images' );
$link      = get_sub_field( 'button' );
$fullwidth = get_sub_field( 'fullwidth' );
$type      = get_sub_field( 'type' );

if ( $images ): ?>
	<section class="section section-gallery section-padding type-<?php echo $type; ?>">
		<div class="grid-container <?php echo $fullwidth ? '' : 'full'; ?>">
		    <div class="grid-x grid-padding-x <?php echo $type == 'grid' ? '' : 'grid'; ?>">
				<?php foreach ( $images as $image ): ?>
			        <div class="cell medium-6 large-4 img-cell grid-item">
						<div class="img-wrap">
							<img src="<?php echo $image['sizes']['medium_large']; ?>" data-no-lazy="1" class="<?php echo $type == 'grid' ? 'stretched-img' : ''; ?>" alt="<?php echo $image['alt']; ?>">
						</div>
		            </div>
				<?php endforeach; ?>
			    <?php if ( $link ): ?>
		    </div>
		    <div class="grid-x grid-padding-x align-center">
				    <div class="cell text-center button-cell">
				        <a
				            href="<?php echo esc_url( $link['url'] ); ?>"
				            class="button"
				            target="<?php echo esc_html( $link['target'] ? $link['target'] : '_self' ); ?>"
				        >
				            <?php echo esc_attr( $link['title'] ); ?>
				        </a>
				    </div>
			    <?php endif; ?>
		    </div>
		</div>
	</section>
<!--	<section class="section section-test section-padding">-->
<!--		<div class="grid">-->
<!--			--><?php //foreach ( $images as $image ): ?>
<!--				<div class="grid-item">-->
<!--					<img src="--><?php //echo $image['sizes']['medium_large']; ?><!--" data-no-lazy="1" class="grid-item_" alt="--><?php //echo $image['alt']; ?><!--">-->
<!--				</div>-->
<!--			--><?php //endforeach; ?>
<!--		</div>-->
<!--	</section>-->
<?php endif; ?>
