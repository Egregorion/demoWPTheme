<?php 
// ici on ne gère pas l'affichage seulement les fonctionnalités dans la partie admin
function montheme_support(){
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}

function montheme_scripts() {// chargement des styles et scripts à la sauce wordpress
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', [], false, 'all');
    wp_enqueue_style('mon-style', get_stylesheet_uri(), [], false, 'all');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', [], false, ['in_footer'=>true]);
}

// utilisation des action pour se greffer sur un moment d'exécution du code source de wordpress et lui demander de lancer notre fonction à ce moment là 
add_action('after_setup_theme', 'montheme_support');
add_action('wp_enqueue_scripts', 'montheme_scripts');