<?php 

// pick up the file
$fichier_temp = $_FILES["image1"]['tmp_name'];
$fichier_dest = "upload/" . $_FILES["image1"]["name"];
// Move to the other folder to stock this photo
move_uploaded_file($fichier_temp, $fichier_dest);
// Connect to the BDD
include("./credential/connexion.php");

// On prépare la requête
$request = $db->prepare("INSERT INTO photo VALUE (?)");

// On renseigne les paramètres inconnus

$request->bindValue(1, $fichier_dest);
// On exécute le requête
$request->execute();

?>

<img src="<?php echo $fichier_dest ?>" width="200px">

