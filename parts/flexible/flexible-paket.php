
           
<?php 

    $title    = get_sub_field('title');
    $button   = get_sub_field('button');
    $category = get_sub_field('category');

?>
       <!-- <h3 style="font-size:30px; text-align:center; margin-top:100px; margin-bottom:50px;"><?php echo $title?></h3> -->
<section class="section section-projects">
    
         <div class="flex-box-outside">
	         <?php if ( $title ): ?>
	             <h6 class='section-projects-title'><?php echo $title; ?></h6>
	         <?php endif; ?>
<!--             <p class="top_left" style="color:white;">PROJECTS</p>-->
	         <div class="flex-box-inside">
		         

           <?php

           $args = array(
               'orderby' => 'date',
               'post_type' => 'project',
               'cat' => $category,
               'posts_per_page' => '4',
           );
           $the_query = new WP_Query( $args );

           ?>

           <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
           
          
          <div class="grid-xd moblie-friendly" style="display:flex; flex-basis: 48%; margin: 6px;">
            <figure class="effect-marley heightformoblie">
            <a href="<?php the_permalink() ?>"><div> <?php the_post_thumbnail('full'); ?></div>
              <figcaption>
                <p style="font-size:25px; text-align:center !important; align-self: center; font-family:futurabook !important; font-weight: 500;"><?php the_title(); ?></p>
                  <p class="metadescription_overlay" style="text-align:center !important; align-self:center;"><?php the_field('category'); ?></p>
                </figcaption>
              </a>
            </figure>
            </div>

           <?php endwhile; else: ?>
          
         <?php endif; wp_reset_query();  ?>
      </div>
        <div class="see_all_projects_div">
	        <?php if ( $button  ): ?>
	            <a
	                href="<?php echo esc_url( $button['url'] ); ?>"
	                class="button"
	                target="<?php echo esc_html( $button['target'] ? $button['target'] : '_self' ); ?>"
	            >
	        		<?php echo esc_attr( $button['title'] ); ?>
	            </a>
	        <?php endif; ?>
<!--            --><?php //if ( ! $hide_button ): ?>
<!--				<a class="button" style="padding: 20px; letter-spacing: 1px;"href="/project">SEE ALL PROJECTS</a>-->
<!--            --><?php //endif; ?>
		</div>
    </div>
</section>


    <style>

      .heightformoblie{
        max-height: 430px !important;
      }

      .grid-xd img {
          object-fit:cover !important;
      }

      @media screen and (max-width:1000px) {
          .heightformoblie{
            max-height: 295px !important;
          }
          .heightformoblie img{
            max-height: 295px !important;
          }

          .mobile-friendly img {
            height: 350px !important;
          }

          .grid-xd figure:nth-child(1) img {
              height:350px !important;

          }

          img.attachment-full.size-full.wp-post-image.lazyloaded {
              height:350px!important;
          }
      }
      
    </style>

    
    
