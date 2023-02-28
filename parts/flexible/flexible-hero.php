<?php
	
	$type        = get_sub_field( 'type' );
	$image       = get_sub_field( 'image' );
	$video       = get_sub_field( 'video' );
	$video_m     = get_sub_field( 'video_mobile' );
	$title       = get_sub_field( 'title' );
	$hide_title  = get_sub_field( 'hide_title' );
	$text        = get_sub_field( 'text' );
	$text_align  = get_sub_field( 'text_align' );
	$buttons     = get_sub_field( 'buttons' );
	$height      = get_sub_field( 'height' );
	$overlay     = get_sub_field( 'overlay' );
    $scroll_next = get_sub_field( 'scroll_next' );
	$text_box_width = get_sub_field( 'text_box_width' );
    $title_size = get_sub_field( 'title_size' );
    $justify_box = get_sub_field('justify_content');
	$button_border = get_sub_field('button_border');
	$button_border_color = get_sub_field('button_border_color');
	$button_radius = get_sub_field('border_radius');
	$button_color_first = get_sub_field('button_background_color');
	$button_color_second = get_sub_field('button_background_color_second');
	$undertext = get_sub_field('undertext_size');
	$not_first   = get_row_index() == 1 ? false : true;
    

?>

<section class="section section-hero <?php echo $not_first ? 'section-not-first' : ''; ?> dark-section rel-wrap">
	<div class="overlay" style="background-color: <?php echo $overlay; ?>"></div>
	<div class="grid-container" >
		<?php if ( $video and $type != 'Image' ): ?>
			<video src="<?php echo $video['url']; ?>" class="stretched-img video-bg <?php echo $video_m ? 'show-for-medium' : ''; ?>" autoplay loop muted></video>
			<?php if ( $video_m ): ?>
				<video src="<?php echo $video_m; ?>" class="stretched-img video-bg hide-for-medium" autoplay loop muted playsinline></video>
			<?php endif; ?>
		<?php elseif ( $image and $type != 'Video' ): ?>
			<img src="<?php echo $image['sizes']['full_hd']; ?>" class="stretched-img bg-img" alt="<?php echo $image['alt']; ?>">
		<?php endif; ?>
		<div  class="grid-x grid-padding-x align-middle hero-grid section-padding justifycontent" <?php echo $height ? 'style="min-height:' . $height . 'vh;"' : ''; ?> >
			<div class="cell large-6 medium-8 text-cell rel-content text-<?php echo $text_align; ?>" style="width:<?php echo $text_box_width ?>%!important;">
				<div class="text-wrap">
					<?php if ( $title and ! $hide_title ): ?>
						<h4 class="main-title h4" style="font-size:<?php echo $title_size ?>px; line-height: 1 !important;" data-aos="zoom-out-up">
							<?php echo $title; ?>
						</h4>
					<?php endif; ?>
					<?php if ( $text ): ?>
						<h4 class="mobile_title h1" data-aos="zoom-out-up" style="margin-bottom:50px;">
							<?php echo $text; ?>
						</h4>
					<?php endif; ?>
					<?php if ( $buttons ): ?>
						<?php foreach ( $buttons as $button ): ?>
							<?php if ( $button['button'] ): ?>
								<a
									href="<?php echo esc_url( $button['button']['url'] ); ?>"
									class="hero_button"
									target="<?php echo esc_html( $button['button']['target'] ? $button['button']['target'] : '_self' ); ?>"
									style=
									"
									border: <?php echo $button_border ?>px solid <?php echo $button_border_color ?>;
									border-radius: <?php echo $button_radius ?>px;
									background: linear-gradient(90deg, <?php echo $button_color_first ?> 0%, <?php echo $button_color_second ?> 127%);
									padding-left: 30px;
									padding-right: 30px;
									padding-top: 15px;
									padding-bottom: 15px;
									margin-top:30px;
									"
								>
									<?php echo $button['button']['title']; ?>
								</a>
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	
	<?php if ( $scroll_next ): ?>
		<?php wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'menu_class'     => 'menu header-menu bottom-menu hero-menu futurabt_',
				'items_wrap'     => '<ul id="%1$s" class="%2$s"  data-close-on-click-inside="false">%3$s</ul>',
				'walker'         => new Foundation_Navigation()
			) ); ?>
	<?php endif; ?>
</section>


<style>
    .justifycontent {
        justify-content: <?php echo $justify_box ?>;
    }

	.mobile_title{
		font-size:<?php echo $undertext; ?>px !important;"
	}

	@media screen and (max-width:800px){
		.mobile_title{
		font-size:22px !important;}

		.hero-menu {
			display:none;
		}
	}
}

.section_text_full{padding-top: 120px !important;}
.button:focus {background-color: #914c25!important;}
button:focus {background-color: #914c25!important;}
	
input#nf-field-13 {
    font-family: 'khand' !important;
}
</style>