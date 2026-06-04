<?php
/*
Template Name: Lager - Bilsida
*/
get_header(); ?>

<main>
    <div class="display"> 
 
        <div class="car-list">
            <h2 class="h2">tillgängliga bilar</h2>
            <?php
            // Använd WP_Query
            $lager_available = new WP_Query(array(
                'category_name'  => 'available_cars',
                'posts_per_page' => -1 // -1 betyder att ALLA tillgängliga bilar visas på lagersidan
            ));

            if ($lager_available->have_posts()) {
                while ($lager_available->have_posts()) {
                    $lager_available->the_post();
                    if (has_post_thumbnail()) {
                        ?>
                        <div class="car-item">
                            <?php the_post_thumbnail('fyrkantig-bild'); ?>
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <a class="btn-default" href="<?php the_permalink(); ?>">Läs mer</a>
                        </div>
                        <?php
                    }
                }
            }
            wp_reset_postdata(); // Återställ efter custom query
            ?>
        </div> 

        <div>
            <h2 id="h2_kommer_snart_list">Kommer snart</h2> 
            <div class="commer-snart-list"> 
                <?php 
                $lager_coming = new WP_Query(array(
                    'category_name'  => 'comming_soon_cars',
                    'posts_per_page' => 3
                ));

                if ($lager_coming->have_posts()) {
                    while ($lager_coming->have_posts()) {
                        $lager_coming->the_post();
                        ?>
                        <div class="commer1">
                            <?php if (has_post_thumbnail()) { the_post_thumbnail('rondad-bild'); } ?>   
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <?php
                    }
                }
                wp_reset_postdata(); // Återställ efter custom query
                ?>
            </div>
        </div>
        
    </div>
</main>

<?php get_footer(); ?>