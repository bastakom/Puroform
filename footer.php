<?php
/**
 * Footer
 */
	
$footer_bg_color   = get_field( 'footer_bg_color', 'options' );
$footer_text_color = get_field( 'footer_text_color', 'options' );
$footer_text       = get_field( 'footer_text', 'options' );
$additional_menu   = get_field( 'additional_menu', 'options' );
$social_title      = get_field( 'social_title', 'options' );
$copy_rights   = get_field( 'copy_rights', 'options' );
$email   = get_field( 'email', 'options' );
$title_2 = get_field( 'under_adress', 'options');
?>

<!-- BEGIN of footer -->
<footer class="footer">
<a href="#" id="scroll" style="display: none;"><span></span></a>
	<?php if ( $additional_menu ): ?>
		<div class="top-footer">
			<div class="grid-container">
			    <div class="grid-x grid-margin-x">
			        <div class="cell text-center">
				        <?php if ( $social_title = get_field('social_title', 'options') ): ?>
				            <h6 class='social-title'><?php echo $social_title; ?></h6>
				        <?php endif; ?>
						<?php get_template_part('parts/socials'); // Social profiles ?>
			        </div>
			    </div>
			</div>
		</div>
	<?php endif; ?>
	<div class="bottom-footer
		<?php echo $footer_text_color ? 'dark-section' : ''; ?>"
	     style="background-color: <?php echo $footer_bg_color; ?>"
	>
		<div class="grid-container" style="max-width: 100rem !important;">
			<div class="grid-x grid-padding-x center_justify">
				<div class="cell large-2 medium-6 footer-cell">
				<div class="footer__logo">
						<?php if ( $footer_logo = get_field( 'footer_logo', 'options' ) ):
							echo wp_get_attachment_image( $footer_logo['id'], 'medium' );
						else:
							show_custom_logo();
						endif; ?>
					</div>
				</div>
                <div class="cell large-4 medium-6 footer-cell footer_cell_2" >
                <?php if ( $address = get_field( 'address', 'option' ) ): ?>
						<address class="footer-address">
							<h4 style="margin-bottom:0; font-size:20px; font-family:khand!important;"><?php echo $address; ?></h4><br>
							<div class="contact_section">
								<p>Contact</p>
                                <p class="email">
                                    <a href="mailto:<?php echo $email; ?>" style="text-transform: lowercase; font-family: inherit;" ><?php echo $email; ?></a>
                                </p>
							</div>
							
							<div class="instagram_section">
								<p>Instagram</p><?php get_template_part('parts/socials'); // Social profiles ?>
							</div>
						
						<div style="padding-top:25px;" >
							<h4 style="font-size:20px; padding-bottom:6px; font-family:khand!important;">STUDIO</h4>
							<p style="text-transform:none; font-size:16px; line-height: 2em;">Avda. Valle del Golf<br>
							Urb. Aloha Mirasierra BL3  Local 01<br>
							29660 Nueva Andalucia Marbella</p>
						</div>
							
						</address>
					<?php endif; ?>

                        
				</div>
				

                <?php if ( ! $additional_menu ): ?>
					<div class="cell large-3 medium-6 footer-cell social-cell" style="padding-top:0!important; padding-right:0!important;">
					<?php if ( $footer_text ): ?>
					    <?php echo $footer_text; ?>
					<?php endif; ?>
					</div>
				<?php endif; ?>
				
                <div class="cell large medium-6 footer-cell" style="width:100%; text-align:center;">
             
                    </div>
				
				
			
				
				<?php if ( $additional_menu ): ?>
					<div class="cell large-3 medium-6 footer-cell">
						<?php
						if ( has_nav_menu( 'footer-menu-additional' ) ) {
							wp_nav_menu( array( 'theme_location' => 'footer-menu-additional', 'menu_class' => 'footer-menu', 'depth' => 1 ) );
						}
						?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
        <div class="copy_right" style="width:100%;">
            <p><?php echo $copy_rights ?></p>
			<div>
				<a href="/Cookies">Cookies</a>
				<a href="/Privacy-Policy">Privacy Policy</a>
			</div>
        </div>
</footer>
<!-- END of footer -->

<?php wp_footer(); ?>

<!--Theme Settings Style-->
<style>

.center_justify {
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

@media screen and (max-width:800px){
    .header-menu.menu .submenu li>a  {
        margin-top: 0 !important;
    }
}

<!--	--><?php //if ( $font_family = get_field('font_family', 'options') ): ?>
/*		body, a, h1, h2, h3, h4 {*/
/*			font-family: */<?php //echo $font_family['font']; ?>/*, sans-serif !important;*/
/*		}*/
/*	*/<?php //endif; ?>
	
	<?php if ( $button_color = get_field('button_color', 'options') ): ?>
	    .button {
			position: relative;
			background-color: transparent;
		    transform: translateZ(0);
		    border: none;
		}
		.button:before {
	        content: '';
	    	position: absolute;
	    	top: 0;
	    	right: 0;
	    	bottom: 0;
	    	left: 0;
	    	background-color:<?php echo $button_color; ?>;
			transition: .3s ease-in-out;
	    	z-index: -1;
	    }
		.button:hover:before {
			background-color: <?php echo $button_color; ?>;
			filter: brightness(80%);
		}

		.button:hover {
			opacity: 0.7;
			background:transparent !important;
		}

        .header-menu.menu .submenu li>a  {
            background-color: <?php echo $button_color; ?> !important;
            color:black !important;
			border: 1px solid black !important;
            margin-top: 26px;
			transition:0.5s ease-in-out;
        }

		.header-menu.menu .submenu li>a:hover  {background-color:#104e78 !important; color:white !important; border: none!important;}
        .boka_knapp{
            background-color: <?php echo $button_color; ?> !important;
            color:black;
            padding:15px;
            margin-top:30px;
        }

        .boka_knapp:hover {
            filter: brightness(80%);
            color:black;
        }

	<?php endif; ?>


<!--	--><?php //if( $text_weight = get_field('text_weight', 'option')) : ?>
/*		.button {*/
/*			font-weight:*/<?php //echo $text_weight; ?>/* !important;*/
/*		}*/
/*	*/<?php //endif; ?>


	<?php if ( $button_border = get_field('button_border', 'options') ): ?>
        .button {
            border: 1.5px solid <?php echo $button_border; ?>;
        }
    <?php endif; ?>


	<?php if ( $button_border_radius = get_field('button_border_radius', 'options') ): ?>
        .button {
            border-radius: <?php echo $button_border_radius; ?>px !important;
        }
    <?php endif; ?>

    <?php if  ( $button_text_color = get_field('button_text_color', 'option') ) : ?>
        a.button {
            color: <?php echo $button_text_color; ?>;
        }
    <?php endif; ?>


	<?php if  ( $scroll_background = get_field('scrollbackground', 'option') ) : ?>
        .background_color {
            background-color: <?php echo $scroll_background; ?> !important;
        }
    <?php endif; ?>

	

    .social-title {
        padding-bottom:20px;
    }

    h6.social-title {text-transform:unset !important; font-size:28px;}
    
    
    .copy_right {padding:15px; background:#3e3a37; color:white;}
    .stay-tuned__link{border:2px solid black; color:black;}
    /*#scroll{border-color:white!important;}*/
    /*#scroll span{border-bottom-color:white!important;}*/
    .stay-tuned__link:hover{border:2px solid black; color:black;}
	html {scroll-behavior: smooth;}
	body {scroll-behavior: smooth;}
	::-webkit-scrollbar {display: none;}
	.header-menu.menu .submenu li>a:hover{background-color:transparent!important;}
	a{-webkit-tap-highlight-color:transparent!important;}
    .header-menu.menu .submenu li>a{border:none !important;}
    .footer__logo img {max-height: 200px; }
    select#nf-field-15 {color: white;}
    /*h4, label { font-family: futurabt !important;}*/
    /*.nf-field-element {font-family: 'futurabt';}*/
    /*a, h1, h2, h3 { font-family: khand !important;}*/
    /*p{font-family: futurabook !important;}*/
    .imgcell_full{object-fit: cover;}
    .top_left {font-family: "Khand" !important;}
    /*.social-cell a{font-family: futurabt !important;}*/
    .about-section p{font-family: khand !important;}
    @media screen and (max-width: 1000px){
    #scroll{display:none !important;}
    .moblie_section {padding-top: 80px !important;}
    .top_left {margin-top: 30px;}
    .section-title{font-size:30px !important;}
    .bottom-footer{padding-top:20px !important;}
    .footer__logo {margin-bottom:0px;}
    .nf-form-title h3{font-size:30px !important;}
    .contact_title {font-size:30px !important;}
    .flex_block{padding-top: 0px !important;}
    button:focus {background-color: #914c25!important;}
    
    .section_text_full{
        width: 100%;
        padding-right: 0px !important;
        margin: 0 !important;
        padding-top:30px;
    }

}

.text-left{
    padding-top:0px !important;
    padding-bottom:20px;
}

</style>

</body>
</html>
