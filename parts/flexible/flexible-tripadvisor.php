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
			<div class="contact_text_div" style="background-color:white!important;">
				<h3 style="color:black;">FOLLOW</h3>
			</div>
		        <div class="cell contact-cell mobile-instagram" style="background-color:<?php echo $form_background ?>;">
		            <?php echo do_shortcode( $shortcode ); ?> 
		        </div>
		    </div>
		</div>
	</section>
    <div class="justify">
        <a href="https://www.instagram.com/puroform/?hl=en" class="btn-class" style="
        margin-top:0!important; 
        margin-bottom:50px !important;
        padding: 15px;
        color: white;
        
        ">FOLLOW US</a>
    </div>
    
<?php endif; ?>

<style>

#sb_instagram .sb_instagram_header .sbi_header_text.sbi_no_bio h3{font-size: 38px; margin-bottom: 20px !important; padding-top:0 !important; margin-right:40px !important;}
    #sb_instagram .sb_instagram_header .sbi_header_img{display:none !important; }
    #sb_instagram .sb_instagram_header .sbi_header_text{margin-top:-22px !important; margin-bottom: 30px!important;}
    .justify{display:flex; justify-content:center;}
    .contact-cell{padding-bottom: 50px !important;}
    .mobile-instagram{max-width: 82%;}
    @media screen and (max-width:1000px;){
        .contact-cell{max-width: 100% !important;}
        #sb_instagram .sb_instagram_header .sbi_header_text{margin-bottom: 0; width:100%;}

    }
</style>