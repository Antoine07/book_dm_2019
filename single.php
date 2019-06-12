<?php 
// inclure le fichier header.php 
get_header() ; ?>
<?php 
// inclure la boucle WP à l'aide de la fonction API
get_template_part('loop', 'content') ; 
?>
<?php get_footer() ; ?>