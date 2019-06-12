<?php

// Faire une fonction qui gère les classes dans le body html des pages

function al_get_class_body($className = null){
    $classes = ['default'];

    // si ce n'est pas null => on veut ajouter des classes depuis les paramètres
    // de la fonction
    if( is_null($className) === false ) { 
        // si c'est un tableau je rassemble toutes les classes avec
        // $classes => merge
        // et sinon c'est une chaîne de caractères => push dans $classes
        if( is_array($className) === true )
            $classes = array_merge( $classes, $className) ;
        else
            $classes[] = $className;
    }

    if(is_home()) 
        $classes[] = 'home';

    elseif(is_category(2)) 
        $classes[] =  'devfront';
        
    elseif(is_category(3)) 
        $classes[] =  'devback';
        
    elseif(is_category())  
        $classes[] =  'category';
        
    else $classes[] =  'single';
    
    return join(' ', $classes);
}

// Hook pour ajouter des scripts

// premier paramètre c'est le nom de la fonction
// deuxième paramètre c'est la fonction de callback
// exécutée pour ce HOOK : wp_enqueue_scripts
add_action('wp_enqueue_scripts',function(){

    // wp_enqueue_style ajouter la feuille de style style.css
    // et donc retier celle-ci dans le header
    // Techniquement la feuille de style passera par wp_head ou wp_footer
    // le premier paramètre est le nom de la cle pour ce style attention à ne pas utiliser
    // une deuxième fois cette cle cela ecrasera les precedents styles
    wp_enqueue_style( 'book_style', get_stylesheet_uri());
    

});