<?php

$title        = get_sub_field( 'title' );
$text         = get_sub_field( 'text' );
$image        = get_sub_field( 'image' );
$image_link   = get_sub_field( 'image_link' );
$link         = get_sub_field( 'button_link' );
$btn_color    = get_sub_field( 'btn_color' );
$extra_btns   = get_sub_field( 'extra_buttons' );
$buttons      = get_sub_field( 'buttons' );
$button_align = get_sub_field( 'button_align' );
$bg_color     = get_sub_field( 'background_color' );
$first_column = get_sub_field( 'first_column' );
$text_align   = get_sub_field( 'text_align' );
$text_color   = get_sub_field( 'text_color' );
$fullwidth    = get_sub_field( 'fullwidth' );
$height       = get_sub_field( 'height' );
$image_full   = get_sub_field( 'image_fullscreen' );
$text_title_size = get_sub_field('text_title_size');
$space_top = get_sub_field('space_top');
$space_bottom = get_sub_field('space_bottom');
$bg_image     = get_sub_field( 'bg_image' );
$full_height = get_sub_field('full_height');
$section_padding_top = get_sub_field('section_padding_top');
$imgcell_full = get_sub_field ('imgcell_full');
$button_background = get_sub_field('button_background');
$nopadding = get_sub_field ('nopadding');
$imagewidth = get_sub_field ('image_width');
$imageheight = get_sub_field ('image_height');
$background_section_color = get_sub_field('section_background_color');
$background_color_true = get_sub_field('background_color_true');
$unic_id     = uniqid();

?>
<?php if ( $text or $title or $link ): ?>
	<section class="section section-text-image <?php echo $background_color_true ?> <?php echo $text_color ? 'dark-section' : ''; ?>" style="background-image: url('<?php echo $bg_image; ?>');">
		<div class="grid_container_text_image grid-container <?php echo $fullwidth ? 'full' : ''; ?>" style="margin-bottom:<?php echo $space_bottom?>px; z-index:10;">
		    <div class="grid-x grid-padding-x section_text_full"  <?php echo $height ? 'style="min-height:' . $height . 'vh;"' : ''; ?> >
				<?php if ( $image ): ?>
					<div class="cell large-6 img-cell <?php echo $image_full ? '' : 'rel-wrap'; ?> <?php echo $first_column == 'Text' ? 'large-order-1' : ''; ?>">
						<?php if ( $image_link and $link ): ?>
							<a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_html( $link['target'] ? $link['target'] : '_self' ); ?>">
						<?php endif; ?>
				    	    <img class="<?php echo $imgcell_full; ?> id-<?php echo $unic_id; ?>" src="<?php echo $image['sizes']['large']; ?>" class="stretched-img" alt="<?php echo $image['alt']; ?>">
						<?php if ( $image_link and $link ): ?>
							</a>
						<?php endif; ?>
				    </div>
				<?php endif; ?>
				<div class="cell large-auto text-cell align<?php echo $text_align == 'center' ? '-center' : ''; ?>-middle
					text-<?php echo $text_align; ?>"
				    <?php echo $image_full ? 'style="background-color: ' . $bg_color . ';' : ''; ?>"
				>
				<div class="about-section"
				style="display:<?php if($about_section_title = get_sub_field('about_section_title')) : ?><?php echo $about_section_title ?><?php endif; ?>"
				>
				<p style="color:white;">ABOUT</p></div>
					<div class="text-wrap">
						
					    <?php if ( $title ): ?>
						    <h2 data-aos="zoom-out-up" style="font-size:<?php echo $text_title_size ?>px !important;">
					            <?php echo $title; ?>
						    </h2>
					    <?php endif; ?>
						<?php if ( $text ): ?>
							<div data-aos="zoom-out-up"
							style="
							padding: 30px;
    						padding-left: 0;
							"
							
							
							>
								<?php echo $text; ?>
							</div>
						<?php endif; ?>
						<?php if ( $link ): ?>
							<div class="text-<?php echo $button_align; ?>">
							    <a
							        href="<?php echo esc_url( $link['url'] ); ?>"
							        class="button <?php echo $btn_color == 1 ? 'accent' : ( $btn_color == 2 ? 'transparent' : '' ); ?>"
							        target="<?php echo esc_html( $link['target'] ? $link['target'] : '_self' ); ?>"
							        data-aos="zoom-out-up"
									style="background-color: <?php echo $button_background; ?> !important;"
							    >
									<?php echo esc_attr( $link['title'] ); ?>
							    </a>
							</div>
						<?php endif; ?>
						<?php if ( $extra_btns and $buttons ): ?>
							<?php foreach ( $buttons as $button ): ?>
								<p>
									<a
										href="<?php echo esc_url( $button['button']['url'] ); ?>"
										class="button <?php echo $btn_color == 1 ? 'accent' : ( $btn_color == 2 ? 'transparent' : '' ); ?>"
										target="<?php echo esc_html( $button['button']['target'] ? $button['button']['target'] : '_self' ); ?>"
										data-aos="zoom-out-up"
										style="background-color: <?php echo $button_background; ?> !important;"
									>
										<?php echo esc_attr( $button['button']['title'] ); ?>
									</a>
								</p>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
		    </div>
		</div>
	</section>
<?php endif; ?>


<style>
	<?php if($full_height):  ?>

		section.section.section-text-image {
			height: <?php echo $full_height?>
		}
	
		.text-cell {
			align-items: flex-start;
			padding-top: 0 !important;
		}


	<?php endif; ?>

    .section_text_full {
			padding-top: 100px !important;
			background: <?php echo $bg_color ?>;
			width:95%;
		}
	@media screen and (max-width:1024px){
		.section_text_full {
			padding-top: 60px !important;
		}
	}



		.text-left {
			padding-top: 20px;
		}

		.button:hover {
			background-color: <?php $button_background ?>;
		}

	<?php if($nopadding): ?>	
		.cell.large-auto.text-cell.align-middle.text-left {
			padding:<?php echo $nopadding; ?>px !important;
		}

		.cell.large-auto.text-cell.align-middle.text-left {
			padding:<?php echo $nopadding; ?>px !important;
		}

		<?php endif ?>


		<?php if($background_section_color) : ?>
			.section_background_color{background:<?php echo $background_section_color ?>}
		<?php endif; ?>

		<?php if($imagewidth) : ?>
			.imgcell_full.id-<?php echo $unic_id; ?> {
				width:<?php echo $imagewidth ?>% !important;
			}
			<?php endif; ?>


		<?php if($imageheight) : ?>
			.imgcell_full.id-<?php echo $unic_id; ?> {
				height:<?php echo $imageheight ?>px !important;
				z-index:99;
			}
			@media screen and (max-width:1024px){
				.imgcell_full.id-<?php echo $unic_id; ?>{
					height:100% !important;
					/*width: 100% !important;*/
					max-width: 500px;
					}	

					.grid_container_text_image{
				margin-top:0px !important;
			}
				}
			<?php endif; ?>


			.grid_container_text_image{
				margin-top:<?php echo $space_top?>px;
			}
	
</style>