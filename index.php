<!--This is the principal page-->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">	
<title> Page d'accueil	</title>
<meta name="Page d'accueil" content="Page d'accueil de notre site"> 
<link rel="stylesheet" type="text/css" href = "src/styleAccueil.css">
</head>

<body>
    
    <header class="top">
        
        <p class="contact">
            <a  href="index.php" class="white">Contact</a>
            |
            <a href="index.php" class="white"> Sign in</a>
            |
            <a href="index.php" class="white"> Sign up</a>
        </p>
        <ul>
            <li><a href="index.php">Page</a></li>
            <li><a href="pageAjoute.php">Vendre vos planètes</a></li>
            <li><a href="pageAjoute.php">Planètes vendues</a></li>
            <li><a href="index.php">Services</a></li>
            <li><a href="index.php">Qui sommes-nous ?</a></li>
        </ul>
    </header>

<div class="medium">   
    <div class="product">
        <p class="title">Nos sélections</p>
        <br>
       
    <div class="proRow">
    <?php 
   
    include("./credential/connexion.php"); 
  
        # We just show the title , name , size , img, habitant
         $requet = $db->prepare ("select * FROM annonce");
         // Execute the SQL
          $requet->execute(); 
          $annonce = $requet->fetchAll(PDO::FETCH_ASSOC); //fetch一个元素
         // Define a value to verify whether the compte existe ou not
          $nbreArticle = count($annonce);
          if ($nbreArticle == 0) {
              echo "noting for the moment"; 
          }
    ?>
    <?php for ($i=0; $i<$nbreArticle; $i++): ?>
        <?php $adr = $annonce[$i]['imgAdress']; ?>
    
        <div class="proBig">
            <div class="pro">
              <div class="proImg"><a href="<?php echo "description.php?id=".$annonce[$i]['id'];?>"><img src="./<?php echo (preg_replace('# #','',$adr)); ?>" ></a></div>
              <div class="proText">
                <h5><?php echo $annonce[$i]['title'] ;  ?></h5>
                <p class="proSize">Dimension: <?php echo $annonce[$i]['planetTaille']; ?></p>
                <p class="proPrice">€<span><?php echo ($annonce[$i]['prix']); ?></span></p>
                <a href= <?php echo "description.php?id=".$annonce[$i]['id']; ?>> Plus d'information</a> 
              </div>
              <div class="proFrom">Habitant: <?php echo ($annonce[$i]['planetHabitant'])?> K</div>
            </div>
      </div>
    <?php endfor; ?>
    </div>
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