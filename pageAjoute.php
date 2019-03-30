
<!--This is the principal page-->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">	
<title> planet site	</title>
<meta name="planet site" content="This is the first page of the planet site"> 
<link rel="stylesheet" type="text/css" href = "src/styleAjoute.css">
</head>

<body>
    
    <header class="top">
        
        <p>
            <a  href="pageAccueil.php" class="white">Contact</a>
            |
            <a href="pageAccueil.php" class="white"> Sign in</a>
            |
            <a href="pageAccueil.php" class="white"> Sign up</a>
        </p>
        <ul>
        <li><a href="pageAccueil.php">Page</a></li>
            <li><a href="pageAccueil.php">Achetez vos planètes</a></li>
            <li><a href="pageAjoute.php">Vendre vos planètes</a></li>
            <li><a href="pageAccueil.php">Planètes vendues</a></li>
            <li><a href="pageAccueil.php">Qui sommes-nous ?</a></li>
        </ul>
    </header>

    <div class="medium">
    <P style="text-align:center; color: white; font-size: 1.5em;">Sign in to Space X</P>
    <br>
    <br>

    <form method="POST" class="fieldset" action="ajoute.php" enctype="multipart/form-data">
                <h3> Veuillez remplir ce formulaire : </h3>
                <p class="textMedium">Votre annonce : </p>
                <br>
                <label for="Titre" >Titre Annonce:</label>
                <input type="text" name="titre" id="titre" required autofocus/>
                <br><br>
               
               
                <label for="nom"  >Nom Planet:</label> 
                <input type="text" name="nom" id="nom" required/>
                <br><br>
              
                <label for="couleur">Couleur Planet<br></label> 
                <input type= "color" name="couleur" id="couleur" required>
                <br><br>
              

                <label for="taille" >Taille Planet<br></label> 
                <input type="text" name="taille" id="taille" required/>
                <br><br>

                <label for="distance planet" >Distance planet<br></label> 
                <input type="text" name="distance" id="distance" required placeholder="en KM"/>
                <br><br>


                <label for= "image"> Votre image<br></label>
                <input type="file" name="image1"  required accept="image/*">
                <br><br>
                
                
                <label for="composition">Dans quel matière est votre planète?<br></label>
                    <select name="composition" required>
                        <option value="Fer">Fer</option>
                        <option value="Mercure">Mercure</option>
                        <option value="Eau">Eau</option>
                        <option value="Plomb">Plomb</option>
                        <option value="Granit">Granit</option>
                        <option value="Chrome">Chrome</option>
                        <option value="cobalt">Cobalt</option>
                        <option value="Palladium">Palladium</option>
                    </select> 
                    <br><br><br><br>
                
                
                <label for="Habitant" >Habitant:<br></label> 
                <input type="text" name="habitant" >
                <br><br>

                <label for="proprietaire" >Propriétaire:<br></label> 
                <input type="text" name="proprietaire" id="proprio"/>
                <br><br>

                
                 
                <p style="font-size : 1.1em;"> Veuillez indiquer si votre planête est viable :
                 <label for="Oui" ></label>
                <input type="radio"  required name="viabilite" id="Viab" class="case"/>oui <input type="radio"  name="viabilite" id="Viab" class="case"/>non
                </p>
                <br>
           
           
                <label for="prix" > Prix:<br></label> 
                <input type="text" name="prix" id="prix" placeholder="prix en €"/>
                <br><br>

                
                <label for="descrip"> Description:<br></label> 
                <Textarea name="descrip" id="descrip" rows="10" cols="50"> </Textarea>
                <br>


                <input type="submit" value="Envoyer" />
    
        </form>
    
    </div>



    <div class="bottom">
        <ul>
            <li>
                <h1 class="text">l'actualité </h1>
                <br>
                <br>
               
                  <!--<p class="text">
                  <a class = "button" href="abonner.html"> S'abonner</a></p> -->
               
                
                <form class="text" action="abondant.php" method="post">
                    <label for="user">Adresse mail:</label> 
                   
                    <input type="email" name="abondant" style="height:20px; margin-top:10px;">
                    <br><br>
                    <input class="buttonA" type="submit" value="s'abonner">
                </form>
                
            </li>

            <li>
                <h1 class="text"> Nos engagements</h1>
            </li>
            <li>
                <h1 class="text">service client</h1>
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