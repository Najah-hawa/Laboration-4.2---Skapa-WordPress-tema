<?php get_header(); ?>


    <div class="container" >
        <?php 
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <section>  
                    <!-- Hämtar "Om oss" som en h2-rubrik  -->
                    <h2 class="h2-om"><?php the_title(); ?></h2>
                    
                    <div class="entry-content">
                        <?php 
                        // Hämtar allt innehåll från WordPress-editorn
                        the_content(); 
                        ?>
                    </div>
                </section>
                <?php
            }
        }
        ?>
    </div>


<aside class="sidebar">
    <?php if ( is_active_sidebar( 'main-sidebar' ) ) {
        dynamic_sidebar( 'main-sidebar' );
    } ?>
</aside>  

<?php get_footer(); ?>