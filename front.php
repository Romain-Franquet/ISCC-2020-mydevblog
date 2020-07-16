<?php

    if( $_GET{"page"}=="acceuil"){
        include "Page_acceuil.html";
    }
    else if ( $_GET{"page"}=="articles"){
        include "Articles.html";
    }
    else if( $_GET{"page"}=="contact"){
        include "Contact.html";
    }
    ?>