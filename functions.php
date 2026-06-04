<?php

// Lägg till meny
add_action('init', 'register_my_menus');
function register_my_menus(){
    register_nav_menus(array(
        'main-nav' => 'Huvudmeny',
        'footer-nav' => 'Footermeny'
    ));
}


// Aktivera utvald bild och ange storlekar
add_theme_support('post-thumbnails');

// Custom storlekar 
add_image_size('fyrkantig-bild', 280, 280 );
add_image_size('rondad-bild', 150, 150, array('center','center') );


// Skapa/ändra rättigheter för en användarroll 
function custom_editor_capabilities() {  
    $role = get_role( 'editor' );
    if ( ! $role ) {
        return;
    }
    // Editor ska ha specifika rättigheter som att redigera inlägg, redigera sidor
    $role->add_cap( 'edit_posts' ); 
    $role->add_cap( 'edit_pages' ); 
    $role->add_cap( 'edit_others_posts' ); 

    // Editor har inte rättighet att uppdatera WordPress, skapa nya användare och redigera temainställningar 
    $role->remove_cap( 'update_core' ); 
    $role->remove_cap( 'create_users' ); 
    $role->remove_cap( 'edit_theme_options' ); 
}
add_action( 'admin_init', 'custom_editor_capabilities' );


// Ge automatiskt namnet Mattias Dahlgren till nya redaktörer (SÄKER VERSION)
//lösenord är "password_mattias"
function customize_editor_user_name( $user_id ) {
    $user = get_user_by( 'id', $user_id );
 
    if ( $user && in_array( 'editor', $user->roles ) ) {
        // Genom att använda update_user_meta slipper vi oändliga loopen!
        update_user_meta( $user_id, 'first_name', 'Mattias' );   
        update_user_meta( $user_id, 'last_name', 'Dahlgren' );
    }
}
add_action( 'user_register', 'customize_editor_user_name' );


// Registrera ett widget-område (Sidebar)
// Tvinga WordPress att använda den klassiska widget-menyn 

function see_bilforsaljning_widgets_init() {
    register_sidebar( array(
        'name'          => 'Huvud-sidebar',
        'id'            => 'main-sidebar',
        'before_widget' => '<div class="widget-item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );
add_action( 'widgets_init', 'see_bilforsaljning_widgets_init' );


//ANPASSNING AV EXCERPT (NYHETSSAMMANFATTNING)
//Ändra längden på the_excerpt() till exakt 20 ord istället för standard 55.
function custom_excerpt_length($length) {
    return 20; 
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);


//Ändra sluttecknet från [...] till vanliga tre punkter (...) efter avklippt text.
function custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

