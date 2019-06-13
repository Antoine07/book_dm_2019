
<div class="container-post">
    <?php if( have_posts() ) : ?>
        <?php while( have_posts() === true )  :  
        // dépile les articles sans cette fonction => boucle infinie    
        the_post(); ?>
        <h2><a href="<?php 
        // the permalink récupère le lien de l'article dans le contexte de la boucle
        the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="entry">
        <?php the_category() ; ?>
        <?php the_excerpt() ; ?>
            <p><?php the_author_posts_link(); ?></p>
        </div>
        <?php endwhile ; ?>

    <?php else :  ?>
        <p>Désolé pas d'article pour l'instant </p>
    <?php endif; ?>
</div><!-- .contanier-post -->
