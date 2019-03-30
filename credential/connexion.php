
<?php

// Pour afficher les erreurs à l'écran

ini_set('display_errors', 1);

error_reporting(E_ALL);


// Identifiants de connexion

$user = 'neoma_2019';

$pass = 'aiZb0JnvFoTzGURQ';


// configuration de la connexion, pas la même qu'avec MAMP sur vos pc

$db = new PDO('mysql:unix_socket=/var/run/mysqld/mysqld.sock;dbname=neoma_2019;charset=utf8', $user, $pass);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>