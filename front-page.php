<?php get_header(); ?>
<!-- Main content -->

 <div  class="display"> 
 
   <div class="car-list">
            <h2 class="h2">Senaste tillgängliga bilar</h2> 
                 <?php

                 query_posts('category_name=available_cars&posts_per_page=3');
                 if(have_posts()){
                    while(have_posts()){
                        the_post();
                        //finns det bild
                        if(has_post_thumbnail()){
                            ?>
                    <div class="car-item">
                    <?php the_post_thumbnail('fyrkantig-bild');?>
                    <h3><?php the_title();?></h3>
                    <p><?php the_excerpt();?></p>
                    <a class="btn-default" href="<?php the_permalink();?>">Läs mer</a>
                    </div>
                            <?php


                        }
                    }
                 }
                 ?>
          </div> 

          <div>

            <h2 id="h2_kommer_snart_list">Kommer snart</h2> 
            <div class="commer-snart-list"> 
            <?php 
            query_posts('category_name=comming_soon_cars&posts_per_page=3');
              if(have_posts()){
                while(have_posts()){
                    the_post();
                        ?>
                    <div class="commer1">
                    <?php if(has_post_thumbnail()){the_post_thumbnail('rondad-bild'); } ?>   
                    <h3><?php the_title();?></h3>
                     </div>
                        <?php

                }
             }
            ?>
            </div>
         </div>


        

        
        </div>

            <div class="small_box">
                <div class="box"> 
                <?php
                wp_reset_query();  //nollställ custum query
               if(have_posts()){
                while(have_posts()){
                    the_post();
                    the_content();
                }
               }

               ?>
            </div>
        </div>

   
    <?php get_footer(); ?>