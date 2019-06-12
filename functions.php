<?php

// Faire une fonction qui gère les classes dans le body html des pages

function al_get_class_body(){
    if(is_home()) echo 'home';
    elseif(is_category(2)) echo 'devfront';
    elseif(is_category(3)) echo 'devback';
    elseif(is_category())  echo 'category';
    elseif(is_single())    echo 'single';
    else echo 'default';
}
