<?php get_header(); ?>

<div class="display"> 
     
    <div class="car-list">
        <h2 class="h2">Tillgängliga bilar</h2> 
        <?php
        // Huvudloopen för den valda bilen
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                
                // Variabler för kontakten (Sätts till tomma strängar först för att undvika PHP-varningar)
                $poster_name = "";
                $email = "";

                if (has_post_thumbnail()) {
                    ?>  
                    <div class="car-item">
                        <?php the_post_thumbnail('fyrkantig-bild'); ?>
                        <h3><?php the_title(); ?></h3>
                        
                        <p class="bil_info_p">
                            <?php 
                            the_content();
                            
                            // Hämta författardata om bilen tillhör rätt kategori
                            if (in_category('available_cars')) {
                                $poster_name = get_the_author_meta('first_name') . " " . get_the_author_meta('last_name'); 
                                $email = get_the_author_meta('email');
                            }
                            ?>  
                        </p>
                        
                        <div class="kontakt_info">
                            <h4>Är du intresserad av bilen</h4>
                            <br> 
                            <p>Var vänlig och kontakta: <?php echo esc_html($poster_name); ?> <br> <br> 
                            Email: <a href="mailto:<?php echo esc_html($email); ?>"><?php echo esc_html($email); ?></a></p>
                        </div>
                    </div> 
                    <?php
                }
            }
        }
        ?>
    </div> 
   
    <div>
        <h2 id="h2_kommer_snart_list">See mer</h2> 
        <div class="commer-snart-list"> 
            <?php
    
            $see_more_query = new WP_Query(array(
                'category_name'  => 'available_cars',
                'posts_per_page' => 3,
                'post__not_in'   => array(get_the_ID()) // Döljer bilen man redan läser om
            ));

            if ($see_more_query->have_posts()) {
                while ($see_more_query->have_posts()) {
                    $see_more_query->the_post();
                    
                    if (has_post_thumbnail()) {
                        ?>  
                        <div class="commer1"> 
                            <h2 id="h2_kommer_snart_list"><?php the_title(); ?></h2>
                            <?php the_post_thumbnail('rondad-bild'); ?>
                            <a href="<?php the_permalink(); ?>" class="fix_btn">Läs mer</a>
                        </div> 
                        <?php
                    }
                }
            }
            wp_reset_postdata(); 
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>