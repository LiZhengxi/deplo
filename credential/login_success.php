<?php
function check_login(){
    include("connexion.php"); 
    session_start(); // initialize session
    unset($_SESSION['name']);
    // Take the form value
     $email = $_POST['email'];
     $password=$_POST['pass'];

     
    // Take the SQL sentence
     $requet = $db->prepare ("select adresse_mail, password FROM compte");
    // Execute the SQL
     $requet->execute(); 
     $compte = $requet->fetchAll(PDO::FETCH_ASSOC); //fetch一个元素
    // Define a value to verify whether the compte existe ou not
     $nonExiste=0;
     for ($i=0;$i<=count($compte)-1;$i++)
     {
         if ($email == $compte[$i]['adresse_mail'])
         {  $nonExiste =1;
             if($password == $compte[$i]['password'])
             {  
               
                $_SESSION['name'] =$email; //enregistrer session info
                return 1;
             }
             else
             {
                  return 0;
             }
         }
     }
     if ($nonExiste==0)
     {
         echo "not find this account";
         return 0;
     }
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">	
<title> planet site	</title>
<meta name="planet site" content="This is the first page of the planet site"> 
</head>

<body>
    <?php 
        if (check_login()==1) {
            echo ('<p>Login successfully! If your page do no return <a href="login_page.php">Click here!</a></p>');
        }
        else
        {
            echo('<p>Login failed! Try again If your page do no return <a href="login_page.php">Click here!</a></p>');
        }
    ?>

</body>

</html>