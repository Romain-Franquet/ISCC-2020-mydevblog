<!DOCTYPE html>		<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="visuel.css" />
       
        <title>MyDevBlog</title>
    </head>
     <?php 
     include ('header_2.php');
     ?>
<?php

function site(){
    if (isset($_GET['page']))
    if ($_GET ['page'] == 1){
        echo include ('ajout_article.php');


    }
    if (isset($_GET['page']))
    if ($_GET ['page'] == 2){
        echo include ('ajout_utilisateur.php');


    }
    if (isset($_GET['page']))
    if ($_GET ['page'] == 3){
        echo include ('utilisateurs.php');

    }
}

site();

?>
<?php
include ('footer.php')
?>