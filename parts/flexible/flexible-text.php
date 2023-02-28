<?php

$title       = get_sub_field( 'title' );
$text        = get_sub_field( 'text' );
$text_2      = get_sub_field( 'text_2' );
$columns     = get_sub_field( 'columns' );
$width       = get_sub_field( 'width' );
$text_align  = get_sub_field( 'text_align' );
$title_size  = get_sub_field( 'title_size' );
$background_color = get_sub_field ('background_color');
$section_title = get_sub_field ('section_title');
$top_section_title = get_sub_field ('top_section_title');
$top_section_text = get_sub_field ('section_text');
$section_top_padding = get_sub_field ('section_top_padding');

?>
<?php if ( $title and $text ): ?>
	<section class="section section-text section-padding moblie_section" 
		style=
		"background-color:<?php echo $background_color; ?>;
        padding-top: <?php echo $section_top_padding ?>px !important;
		
		">
		<div class="grid-container">
		    <div class="grid-x grid-padding-x align-center">
			    <div class="cell <?php echo $width ? 'large-6 medium-9' : ''; ?>">
                <h2 class="top-section-title" style="text-align:center; font-size:38px !important; text-transform:uppercase;"><?php echo $top_section_title; ?></h2>
					<p style="text-align:center;"><?php echo $top_section_text; ?></p>
				<?php if( $section_title ): ?>
					<p class="top_left"><?php echo $section_title; ?></p>
					  <?php endif; ?>
				    <h2 class='section-title text-<?php echo $text_align; ?>' data-aos="zoom-out-up"><?php echo $title; ?></h2>
			    </div>
		    </div>
		    <div class="grid-x grid-padding-x align-center text-center">
				<div class="cell <?php echo ( $columns and $text_2 ) ? 'large-5 medium-9' : ( $width ? 'large-6 medium-9' : '' ); ?>">
					<div data-aos="zoom-out-up">
						<?php echo $text; ?>
					</div>
				</div>
			    <?php if ( $columns and $text_2 ): ?>
				    <div class="cell large-5 large-offset-1 medium-9">
					    <div data-aos="zoom-out-up">
							<?php echo $text_2; ?>
					    </div>
				    </div>
			    <?php endif; ?>
		    </div>
		</div>
	</section>
<?php endif; ?>



<style>
	/* @media and screen (max-width:800px){
		padding-top: <?php echo $section_top_padding ?>px;
	} */
    .section-title {
        font-size:<?php echo $title_size?>px !important;
    }

  
    

    
</style>