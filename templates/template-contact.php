<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<main class="main-content" style="padding-top:0; padding-bottom:0;">
	<section class="contact">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ): the_post(); ?>
				<article id="<?php the_ID(); ?> form_background" <?php post_class(); ?> style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url('<?php the_field('form_background_image') ?>')">
					<div class="grid-container">
						<div class="grid-x grid-margin-x">
							<div class="cell medium-6 lets_get">
								<h2 class="contact_title"><?php the_title(); ?></h2>
								<div class="contact__content">
									<?php the_content(); ?>
								</div>
								<div class="contact__links">
									<?php if ( $address = get_field( 'phone', 'option' ) ): ?>
										<address class="contact-link flex_block">
										<i class="fas fa-home"></i>	<?php echo $address; ?>
										</address>
									<?php endif; ?>
									<?php if ( $email = get_field( 'email', 'options' ) ): ?>
										<p class="contact-link flex_block "><i class="fas fa-envelope"></i><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
									<?php endif; ?>
										<div class="instagram-feed-contact instagram_contactsite"><?php get_template_part('parts/socials'); // Social profiles ?><p class="contact_instagram">puroform</p></div>
								</div>
							</div>
								<div class="cell medium-6">
								<?php if  ( $shortcode = get_field( 'shortcode' )): ?>
									<div class="contact__form">
									<div class="cell form_contact_site" style="background-color:<?php echo $form_background ?>;">
										<?php echo do_shortcode( $shortcode ); ?> 
									</div>
									</div>
							<?php endif; ?>
							</div>
							<?php if ( $location = get_field( 'location', 'options' ) ): ?>
								<div class="cell contact__map-wrap">
									<div class="acf-map contact__map">
										<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"
										     data-marker-icon="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/map-marker.png"><?php echo '<p>' . $location['address'] . '</p>'; ?></div>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>
</main>
<div class="se-pre-con">
    <img src="https://puroform.loc/wp-content/uploads/2021/03/cropped-logo-final_gold86x88_2x.png" alt="">
    <!-- <h4>LOADING</h4> -->
</div>


<style>

	.nf-form-content input[type=button]{background-color: #914c25 !important;}
</style>

<?php get_footer(); ?>
