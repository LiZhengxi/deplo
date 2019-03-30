<?php
$id = $_GET["id"]; 
include ("credential/connexion.php");
// Take the SQL sentence
$requet = $db->prepare ("select * FROM annonce where id =?");
$requet->bindValue(1,$id);
// Execute the SQL
 $requet->execute(); 
 $annonce = $requet->fetchAll(PDO::FETCH_ASSOC); 

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">	
<title> Description	</title>
<meta name="Annonce" content="Page d'annonce"> 
<link rel="stylesheet" type="text/css" href = "src/styleDescription.css">
</head>

<body>
   

<header class="top">
        
        <p class="contact">
            <a  href="pageAccueil.php" class="white">Contact</a>
            |
            <a href="pageAccueil.php" class="white"> Sign in</a>
            |
            <a href="pageAccueil.php" class="white"> Sign up</a>
        </p>
        <ul>
            <li><a href="pageAccueil.php">Page</a></li>
            <li><a href="pageAjoute.php">Vendre vos planètes</a></li>
            <li><a href="pageAjoute.php">Planètes vendues</a></li>
            <li><a href="pageAccueil.php">Services</a></li>
            <li><a href="pageAccueil.php">Qui sommes-nous ?</a></li>
        </ul>
    </header>   

<div class="medium">   
<div class="description">
         <h1>Titre: <?php echo $annonce[0]['title'];?> </h1>
         <br>
         <h2>planete: <?php echo $annonce[0]['planetNom'];?></h2>
         <br>
         <img width="500" height="300" src =" <?php echo (preg_replace('# #','',$annonce[0]['imgAdress']));?>">
         <p>Distance(Terre): <?php echo $annonce[0]['planetDistance'];?></p>
         <p>Composition: <?php echo $annonce[0]['planetComposition'];?></p>
         <p>Habitant: <?php echo $annonce[0]['planetHabitant'];?></p>
         <p>Propriétaire: <?php echo $annonce[0]['planetProprietaire'];?></p>
         <p>Visibilité(1:oui,0:non): <?php echo $annonce[0]['planetViabilite'];?></p>
         <p>Description: <?php echo $annonce[0]['description'];?></p>
         <br>
         <p><a class = "button" href ="<?php echo "description.php?id=".$annonce[0]['id']; ?>" >Payer</a>   (Pas encore disponible pour le moment)</p>
         <br>
         <a style="color:white; font-size:0.8em;" href = "pageAccueil.php"> Retourner sur la page précédent</a>
</div>

</div>

<div class="bottom">
        <ul class="bottomList">
            <li class="bottomItem">
                <p class="text">l'actualité </p>
                <br>
                <br>
               
                <p class="text"><a class = "button" href="abonner.html"> S'abonner</a></p>
               
                <!--
                <form class="text">
                    <label for="user">Adresse mail:</label> 
                    <br>
                    <input type="email" style="height:20px;">
                    <br><br>
                    <input type="submit" value="s'abonner">
                </form>
                -->
            </li>

            <li class="bottomItem">
                <p class="text"> Nos engagements</p>
                <br>
                <p class="textSmall">Spéciale registrer x planet
                    <br>(Space X) pense que toute personne sur 
                    Terre doit pouvoir profiter de sa 
                    propre étoile dans le ciel nocturne.
                     C’est pourquoi nous vous donnons 
                     la possibilité de nommer une étoile
                      dans l’Online Star Register !
                   </p>
            </li>
            <li class="bottomItem">
                <p class="text">service client</p>
                <br><br>
                <p class="textSmall">Le service client est à l'écoute du lundi au samedi de 8h à 20h</p>
                <br><br>
                <p class="text"><a class="button" href="contact">nous contacter</a></p>
            </li>
        </ul>
</div>

<div class="foot">
        <a class="icon" href="https://www.facebook.com/" target = "_blank">
            <img src="src/photo/facebook.png" width="50px" height="50px">
        </a>

        <a class="icon" href="https://fr.linkedin.com/" target = "_blank">
                <img src="src/photo/lindink.png" width="50px" height="50px">
        </a>

        <a class="icon" href="https://www.instagram.com/?hl=fr" target = "_blank">
                <img src="src/photo/instragram.png" width="50px" height="50px">
        </a>

        <a class="icon" href="https://twitter.com/?lang=fr" target = "_blank">
                    <img src="src/photo/twiter.png" width="50px" height="50px">
        </a>

        <a class="icon" href="https://www.youtube.com/?gl=FR&hl=fr" target = "_blank">
                <img src="src/photo/youtube.png" width="50px" height="50px">
        </a>

</div>
</body>

</html>