<!-- BEGIN of Post -->
<article id="post-<?php the_ID(); ?>" <?php post_class( 'preview preview--' . get_post_type() ); ?>>
	<div class="grid-x grid-margin-x" style="margin-top:100px;">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="medium-4 small-12 cell text-center medium-text-left">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail( 'medium', array( 'class' => 'preview__thumb' ) ); ?>
				</a>
			</div>
		<?php endif; ?>
		<div class="cell auto">
			<h3 class="preview__title">
				<a href="<?php the_permalink(); ?>"
				   title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'default' ), the_title_attribute( 'echo=0' ) ) ); ?>"
				   rel="bookmark"><?php echo get_the_title() ?: __( 'No title', 'default' ); ?>
				</a>
			</h3>
                
			<?php if ( is_sticky() ) : ?>
				<span class="secondary label preview__sticky"><?php _e( 'Sticky', 'default' ); ?></span>
			<?php endif; ?>
			<div class="preview__excerpt">
				<?php the_excerpt(); wp_trim_words(10) ?>
                
			</div>
                <div style="margin-top: 30px;">
                   <a class="boka_knapp" href="<?php the_permalink(); ?>">Boka här</a>
            </div>
		
		</div>
	</div>
</article>
<!-- END of Post -->
