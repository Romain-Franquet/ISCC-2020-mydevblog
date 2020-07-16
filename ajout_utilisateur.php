<!DOCTYPE html>		<html lang="fr">
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="visuel.css">
        <h1>Ajouter un utilisateur</h1>
<body>
<form enctype ="multpart/form-data" method = "post">
    
<p> 
    <input type="text" name="pseudo" placeholder="Identifiant"/> </br>
    <input type="text" name="motdepasse" placeholder="mot de passe"/> </br>
    <input type="submit" value="Valider"/>
</p>
</form>
</br>
    

        <?php
        function transfert($pseudo, $motdepasse){
           


          
include ("data.php");
$pdo= connect_to_database();

$req= "INSERT INTO utilisateurs(".
"pseudo, mot de passe,".
")VALUES(" .
"'" . $pseudo . "'.".
"'" . $motdepasse . "'.".

$prepare=$pdo->prepare($req);
$prepare->execute();
return true;

  }


  ?>
  </body>
  
  <?php
  if (isset($_POST['pseudo'], $_POST['mot de passe'])){
      if(!empty($_POST['pseudo']) AND !empty($_POST['mot de passe'])){
$titre =($_POST['Pseudo']);
$auteur =($_POST['mot de passe']);


transfert($pseudo, $motdepasse,);

$message='utilisateur ajouté';

}else{
    echo'veuillez remplir tous les champs';
}

  }

  if (isset($message)) {echo $message;}
  ?>
