<?php 
// Connect to the data base
include("credential/connexion.php"); 

print_r($_FILES);

// pick up the file
$fichier_temp = $_FILES["image1"]['tmp_name'];
$fichier_dest = "src/upload/".$_FILES["image1"]["name"];

// Move to the other folder to stock this photo
$result = move_uploaded_file($fichier_temp, $fichier_dest);

print ($result);

if ($_POST['viabilite']=='on') {
    $viabilite =1;
}
else {
    $viabilite=0;
}

// Take the SQL sentence
$requet = $db->prepare ("INSERT INTO `annonce`(`title`, 
`planetNom`, `planetCouleur`,`planetTaille`,`planetDistance`,
`imgAdress`,`planetComposition` ,`prix`,  `planetProprietaire`,
`planetViabilite`, `planetHabitant`, `description`) 
 VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
$requet->bindValue(1,$_POST['titre']);
$requet->bindValue(2,$_POST['nom']);
$requet->bindValue(3,$_POST['couleur']);
$requet->bindValue(4,$_POST['taille']);
$requet->bindValue(5,$_POST['distance']);
$requet->bindValue(6,$fichier_dest);
$requet->bindValue(7,$_POST['composition']);
$requet->bindValue(8,$_POST['prix']);
$requet->bindValue(9,$_POST['proprietaire']);
$requet->bindValue(10,$viabilite);
$requet->bindValue(11,$_POST['habitant']);
$requet->bindValue(12,$_POST['descrip']);

// Execute the SQL
 $requet->execute(); 
// Define a value to verify whether the compte existe ou not

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">	
<title> planet site	</title>
<meta name="planet site" content="This is the first page of the planet site"> 
</head>

<body>
   
           <p>Login successfully! If your page do no return <a href="pageAccueil.php">Click here!</a></p>
   
            <?php header("refresh:5; location: index.php");?>
</body>

</html>