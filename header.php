<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Page d'accueil</title>
    <!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>" /> -->
    <?php 
    //hook permet d'injecter des scripts du noyau ou du thème perso
    wp_head() ?>
    
</head>
<body class="<?php echo al_get_class_body(['super', 'book', 'info']) ;?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1><?php single_post_title(); ?></h1>
            <nav>
                <a href="<?php echo esc_url( home_url( '/' ) ) ; ?>">Home page</a>
            </nav>
            <?php if( is_home() === true ) : ?>
                <h2>Vous êtes sur la page d'accueil </h2>
            <?php endif ; ?>