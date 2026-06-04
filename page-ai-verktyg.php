<?php
/**
 * Template Name: AI Verktyg Mall
 */
get_header(); ?>

<main>
    <div class="display"> 
        
        <div class="page-content-box">
            <?php 
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1 class="h2" style="margin-bottom: 20px;"><?php the_title(); ?></h1>
                        
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <?php 
                }
            }
            ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>