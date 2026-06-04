<?php 
/**
 * Template Name: Kontaktsida
 */
get_header(); ?>

    <div class="form-container">
        <?php 
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content(); // Här kommer plugin-formuläret att visas automatiskt!
            }
        }
        ?>
    </div>

<?php get_footer(); ?>