
<!DOCTYPE html>		<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="visuel.css" />
       
        <title>MyDevBlog</title>
    </head>
     <?php 
     include ('header.php');
     ?>
<?php

function site(){
    if (isset($_GET['page']))
    if ($_GET ['page'] == 1){
        echo include ('Page_accueil.php');


    }
    if (isset($_GET['page']))
    if ($_GET ['page'] == 2){
        echo include ('Articles.php');


    }
    if (isset($_GET['page']))
    if ($_GET ['page'] == 3){
        echo include ('Contact.php');

    }
}

site();

?>
<?php
include ('footer.php')
?>