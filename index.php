<?php get_header(); ?>

<main>
    <div class="display"> 
        
        <div class="page-content-box">
            <?php 
            // Standardloopen som visar det innehåll som hör till den aktuella sidan
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1 class="h2" style="margin-bottom: 20px;"><?php the_title(); ?></h1>
                        
                        <div class="entry-content">
                            <?php 
                            // Visar sidans eller inläggets text
                            the_content(); 
                            ?>
                        </div>
                    </article>
                    <?php 
                }
            } else {
                echo '<p>Inget innehåll hittades.</p>';
            }
            ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>