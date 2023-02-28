<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Set up Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
	<!-- Remove Microsoft Edge's & Safari phone-email styling -->
	<meta name="format-detection" content="telephone=no,email=no,url=no">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/draggable/1.0.0-beta.12/draggable.min.js" integrity="sha512-VTqyB/kLQGaTnF5kYAgeEFo8fwqdlAGNUQeoQi4EOmmBYTEQ/XrYC7lnzCvBBp1PR+1ODEQiT075oeUdPeFHwA==" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	<!-- Add external fonts below (GoogleFonts / Typekit) -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Khand&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-52NXB540V8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-52NXB540V8');
</script>
 <!-- End of site tag - Google Analytics -->

	<?php wp_head(); ?>
</head>

<?php
	$header_type       = get_field( 'header_type', 'options' );
	$header_bg_color   = get_field( 'header_bg_color', 'options' );
	$header_text_color = get_field( 'header_text_color', 'options' );
	$sticky_header     = get_field( 'sticky_header', 'options' );
	$header_font_size  = get_field( 'header_font_size', 'options' );
	$body_classes = $sticky_header ? 'has-sticky-header' : '';
?>

<body <?php body_class('no-outline ' . $body_classes); ?>>
<?php wp_body_open(); ?>


<style>
	<?php if ( $header_font_size ): ?>
		@media screen and (min-width: 1025px) {
			.header .header-menu.menu li a {
				font-size: <?php echo $header_font_size; ?>px;
			}
		}
	<?php endif; ?>
</style>

<!-- BEGIN of header -->
<header class="header
	<?php echo $sticky_header ? 'sticky-header' : ''; ?>
	<?php echo ! $header_type ? 'type-centered-logo' : ( $header_type > 1 ? 'type-sides' : 'type-centered-header' ); ?>
	<?php echo $header_text_color ? 'dark-section' : ''; ?>"
	style="position: <?php if ($notsticky = get_field('not_sticky')) : ?><?php echo $notsticky ?>; <?php endif; ?>
		margin-bottom: <?php if ($space_bottom_header = get_field('space_bottom_header')) : ?><?php echo $space_bottom_header ?>px; <?php endif; ?>
	"
>
	<div class="grid-container menu-grid-container">
		<div class="grid-x grid-margin-x" style="background-color: <?php if ($menu_background_color = get_field('menu_background_color')) :?> <?php echo $menu_background_color ?> <?php endif; ?>;">
			<div class="medium-3 small-12 cell logo-cell logo-moblie align-middle">
				<div class="logo text-center medium-text-left">
					<h1><?php show_custom_logo(); ?><span class="css-clip"><?php echo get_bloginfo( 'name' ); ?></span></h1>
				</div>
			</div>
			<div class="medium-9 small-12 cell menu-cell align-middle">
				<?php if ( has_nav_menu( 'header-menu' ) or has_nav_menu( 'header-menu-additional' ) ) : ?>
					<div class="hamburger-menu">

						<input id="menu__toggle" type="checkbox" />

						<label class="menu__btn" for="menu__toggle">
<!--						<p class="menu_text">menu</p>-->
						<span></span>
						</label>
						<ul class="menu__box">
							<?php if ( has_nav_menu( 'header-menu' ) ) : ?>

								<?php wp_nav_menu( array(
									'theme_location' => 'header-menu',
									'menu_class'     => 'menu header-menu futurabt_',
									'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown" data-submenu-toggle="true" data-multi-open="false" data-close-on-click-inside="false">%3$s</ul>',
									'walker'         => new Foundation_Navigation()
								) ); ?>
							<?php endif; ?>

							<div class="underline">
                            <?php echo do_shortcode('[widget id="icl_lang_sel_widget-2"]') ?>
                            </div>

							<div class="moblie_menu_open">
								<div class="instagram_section">
									<p>Social Media</p><?php get_template_part('parts/socials'); // Social profiles ?>
								</div>
									<div class="instagram_section">
										<p>Contact us</p><p class="email"><?php the_field('email', 'option') ?></p>
										</div>
											<div class="instagram_section">
												<p>Studio</p><p class="studio"><?php the_field('under_adress', 'option') ?></p>
												</div>
											</div>
										</ul>
									</div>

				<?php endif; ?>
			</div>
		</div>
	</div>

		<div class="breadcrumbs_page" style="display: <?php if($show_breadcrumbs = get_field('show_breadcrumbs')) : ?> <?php echo $show_breadcrumbs; ?>; " <?php endif; ?>>
			<?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '</p><p id="breadcrumbs">','</p><p>' );
					}

				?>

		</div>
</header>


<style>

.header.sticky-header {
	transition: 0.5s ease-in-out;
}
nav{
    transition: 0.5s ease-in-out;
}

.breadcrumb_last {font-family: khand !important;}


.wpml-ls-legacy-dropdown a{
    border:none !important;
    background-color:transparent !important;
    padding: 21px 10px !important;
}

@media screen and (max-width:1000px) {
    .wpml-ls-legacy-dropdown a {
        padding-left: 46px !important;
        display: inline !important;
        padding-right: calc(10px + .7em + .7em) !important;
    }
}

.futurabt a {font-family:futurabt !important;}

</style>
<!-- END of header -->
