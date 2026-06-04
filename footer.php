</main>

<!-- Footer -->
<footer>
    <p id="footer-h">SEE Bilförsäljning AB</p>
    
    <?php 
    // Den här koden hämtar menyn dynamiskt från WordPress-admin!
    wp_nav_menu(array(
        'theme_location' => 'footer-nav',
        'container'      => 'nav',
        'menu_class'     => 'footer-menu-list'
    )); 
    ?>
    
    <p>&copy; 2026 Bilförsäljning AB. Alla rättigheter reserverade.</p>
</footer>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
</body>
</html>