
<?php

// Pour afficher les erreurs à l'écran

ini_set('display_errors', 1);

error_reporting(E_ALL);


// Identifiants de connexion

$user = 'root';

$pass = '1234';


// configuration de la connexion, pas la même qu'avec MAMP sur vos pc

$db = new PDO('mysql:host=192.168.0.22;dbname=neoma;charset=utf8', $user, $pass);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>