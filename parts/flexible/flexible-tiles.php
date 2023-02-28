<?php

$type        = get_sub_field( 'tiles_type' );
$tiles       = get_sub_field( 'tiles' );
$columns     = get_sub_field( 'tiles_in_a_row' );
$tiles_title     = get_sub_field( 'tiles_title' );
$background = get_sub_field('background');
$icon_color = get_sub_field('icon_color');
//$projects = get_sub_field('show_link_to_all_projects');
$button     = get_sub_field('button');


?>

<?php if ( $tiles ):
	$count = count( $tiles );
?>
	<section class="section section-tiles section-padding section-padding-tiles"
			 style="background:<?php echo $background; ?>"
	> 
	
		<div class="grid-container">
		<h2 style="text-align:center !important; margin-bottom:50px;"><?php echo $tiles_title ?></h2>
		    <?php if ( $tiles ): ?>
				<?php
					$i = 0;
					$count = count($tiles);
				?>
			    <div class="grid-x grid-padding-x align-center text-center tiles-grid <?php echo ( $count == 2 and $type == 4 ) ? 'two-items' : ''; ?> <?php echo $columns ? 'medium-up-2 large-up-' . $columns : ''; ?>">
					<?php foreach ( $tiles as $item ): ?>
				        <?php
							$i++;
							$icon  = $item['icon'];
							$image = $item['image'];
							$title = $item['title'];
							$text  = $item['text'];
							$link  = $item['link'];
						?>
					    <div class="cell tile-item <?php echo $count < 4 ? ( ! $columns ? 'medium-auto' : '' ) : ( ! $columns ? 'large-auto medium-6' : '' ); ?>"
					         data-aos="zoom-in"
					         data-aos-delay="<?php echo ( $columns and $count > 8 ) ? '' : 200 + $i * 200; ?>"
					    >
						    <?php $i = $i == $columns ? 0 : $i; ?>
						    <?php if ( $icon or $image ): ?>
							    <div class="image-wrap">
								    <?php if ( $icon and $type == 0 ): ?>
							            <?php echo $icon; ?>
								    <?php endif; ?>
								    <?php if ( $image and $type == 1 ): ?>
							            <img src="<?php echo $image['sizes']['large']; ?>" class="tile-img" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['description']; ?>">
								    <?php endif; ?>
							    </div>
						    <?php endif; ?>
						    <?php if ( $title or $link ): ?>
					           <a href="<?php echo esc_url( $link['url'] ); ?>"><h3 class='tile-title matchHeight'><?php echo $title; ?></h3></a>
						    <?php endif; ?>
						    <?php if ( $text): ?>
					            <p class='tile-text matchHeight'><?php echo $text; ?></p>
						    <?php endif; ?>
							<!-- <?php if ( $link and $link['title'] ): ?>
							    <a
							        href="<?php echo esc_url( $link['url'] ); ?>"
							        class="button"
							        target="<?php echo esc_html( $link['target'] ? $link['target'] : '_self' ); ?>"
							    >
									<?php echo esc_attr( $link['title'] ); ?>
							    </a>
							<?php endif; ?> -->
					    </div>
					<?php endforeach; ?>
				</div>
				
		    <?php endif; ?>
<!--			--><?php //if ($projects): ?>
<!--			<div class="see_all_projects_div">-->
<!--				<a class="see_all_projects" href="/project">SEE ALL OUR PROJECTS <span>>></span></a>-->
<!--			</div>-->
<!--			--><?php //endif; ?>
			<?php if ( $button ): ?>
				<div class="see_all_projects_div">
				    <a
				        href="<?php echo esc_url( $button['url'] ); ?>"
				        class="see_all_projects"
				        target="<?php echo esc_html( $button['target'] ? $button['target'] : '_self' ); ?>"
				    >
						<?php echo esc_attr( $button['title'] ); ?> <span>>></span>
				    </a>
				</div>
			<?php endif; ?>

		</div>
		
	</section>

	<style>
		<?php if ($icon_color) : ?>
		.section-tiles .image-wrap {
			color: <?php echo $icon_color; ?> !important;
		}

		<?php endif; ?>

        .tile-title:hover {
            cursor: default;
        }
	</style>
	
<?php endif; ?>