<?php
function connect_to_database(){
$servername = "localhost";
$username = "root"; 
$password = "root"; 
$databasename = "projet";

try {
    $pdo = new PDO ("mysql:host=$servername;dbname=$databasename, root, root");
    return $pdo;
}
catch (PDOException $e){ 
echo "Connection failed: ".$e->getMessage();
}
}
connect_to_database();
$pdo =connect_to_database();
?>


