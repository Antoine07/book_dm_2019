<?php 
// inclure le fichier header.php 
get_header() ; ?>
<div class="col-md-8">
<?php 
// inclure la boucle WP à l'aide de la fonction API
get_template_part('loop') ; 
?>
</div>

<?php get_sidebar('md4') ; ?>

<?php get_footer() ; ?>