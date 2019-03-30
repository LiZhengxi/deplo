<?php
include("connexion.php"); 
// Take the SQL sentence
$requet = $db->prepare ("INSERT INTO abandant (email) VALUES (?) ");
$requet->bindValue(1,$_POST['abondant']);
// Execute the SQL
 $requet->execute(); 

?>