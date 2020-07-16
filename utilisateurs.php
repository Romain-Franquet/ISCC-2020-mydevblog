<!DOCTYPE html>
<html lang="fr">
    <meta charset="utf-8">
<link rel="stylesheet" href="visuel.css">
<?php while ($u = $utilisateur -> fetch ()) { ?>
    <li><?= $u['login'] ?> - <a href="utilisateur.php?supprime=<?=$u['id'] ?>">Supprimer</a></li>
</ul>
<?php
if(isset($_GET['supprime']) AND !empty($_GET['supprime'])){
    $supprime = (int) $_GET['supprime'];
    $req = $pdo->prepare('DELETE FROM utilisateur WHERE id = ?');
    $req->execute(array($supprime));

    $supprime = $pdo->query('SELECT * FROM utilisateur ORDER BY id DESC');



}




}
?>
</html>