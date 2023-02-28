<?php

$shortcode  = get_sub_field( 'shortcode' );
$text_color = get_sub_field( 'text_color' );
$image      = get_sub_field( 'background_image' );
$bg_color   = get_sub_field( 'background' );
$form_background  = get_sub_field( 'form_background' );


if ( $shortcode ): ?>
	<section class="section section-shortcode section-padding <?php echo $text_color ? 'dark-section' : ''; ?> rel-wrap">
		<?php if ( $image ): ?>
			<img src="<?php echo $image['sizes']['full_hd']; ?>" class="stretched-img bg-img" alt="<?php echo $image['alt']; ?>">
		<?php endif; ?>
		<?php if ( $bg_color ): ?>
			<div class="overlay-color stretched-img contact_overlay" style="background-color: <?php echo $bg_color; ?>"></div>
		<?php endif; ?>
		<div class="grid-container rel-content">
		    <div class="grid-x grid-margin-x">
			<div class="contact_text_div" style="background-color: rgba(221,187,153,0.6) !important;">
				<h3>CONTACT</h3>
			</div>
		        <div class="cell contact-cell" style="background-color:<?php echo $form_background ?>;">
		            <?php echo do_shortcode( $shortcode ); ?> 
		        </div>
		    </div>
		</div>
	</section>
<?php endif; ?>

