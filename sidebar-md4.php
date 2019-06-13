<div class="col-md-4">

    <?php wp_nav_menu([
        'theme_location'  => 'sidebar',
        'container'       => 'nav',
        'container_class' => 'nav-main nav-collapse',
    ]); ?>

    <?php 
    // Hook qui calcule la multiplication de deux nombres
    // affiche le résultat dans un paragraphe
    do_action('al_multiplication_hook', [4, 5]) ; ?>
</div>