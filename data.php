<?php
function connect_to_database(){
$servername = "localhost";
$username = "root"; 
$password = "root"; 
$databasename = "projet";

try {
    $db = new PDO ("mysql:host=$servername;dbname=$databasename, root, root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){ 
echo "Connection failed: ".$e->getMessage();
}
}
connect_to_database();
$pdo =connect_to_database();
?>


