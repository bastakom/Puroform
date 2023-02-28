<?php
/**
 * Archive
 *
 * Standard loop for the archive paket page
 */
get_header(); ?>

           
<?php 

    $title = get_sub_field('title')

?>
       <h3 style="font-size:30px; text-align:center; margin-top:100px; margin-bottom:50px;"><?php echo $title?></h3>
         <div style="
          padding-bottom: 100px;
          margin: 0 auto; max-width:1366px; padding-left:185px; padding-right:185px;
          display:grid; grid-template-columns: 1fr 1fr 1fr; 
           "
          >
         
           <?php 

           $args = array( 
               'orderby' => 'date',
               'post_type' => 'paket',
               'posts_per_page' => '100',
           );
           $the_query = new WP_Query( $args );

           ?>

           <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
           
          
          <div class="grid-xd home-page-paket" style="height:100%!important; margin-top:50px;">
            <figure class="effect-marley">
            <a href="<?php the_permalink() ?>"><div> <?php the_post_thumbnail('full'); ?></div>
              <figcaption>
                <h2><?php the_title(); ?></h2>
                  <p class="metadescription_overlay"><?php the_field('metadesciption'); ?> ... </p>
                  <p style="font-size:28px; font-family: PlayfairDisplay;">Från <br> <?php the_field('bokning_pris'); ?>/person</p>
                </figcaption>			
              </a>
            </figure>
            </div>

           <?php endwhile; else: ?>
          
        <?php endif; wp_reset_query();  ?>
        </div>


           
           

</main>


<?php get_footer(); ?>
