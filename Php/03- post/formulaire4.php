<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <title>03 - formulaire 4 PHP</title>
</head>
<body>
        <div class= 'container'>
        <h1 class="display-4 text-center text-info">03 - formulaire4 php</h1><br>
        
        <?php

        if($_POST)
        {
          echo '<pre>' ; print_r($_POST); echo '</pre>';
          extract($_POST); // $_POST ['nom'] --> $nom
  
          //echo 'pseudo' : $_POST = ["pseudo"];
          //echo 'email' : $_POST = ["email"];
  
          echo '<div class="col-md-4 mx-auto alert alert-sucess text-center mt-4">';
          foreach($_POST as $key => $value)
          {
                echo "$key : <strong>$value</strong><br>";
          }  
          echo '</div>';
            ///---------------------------------------------------------------------------------------------------
             echo '<div class="col-md-4 mx-auto alert alert-sucess text-center mt-4">';
             echo "pseudo : <strong>$pseudo</strong><br>";
             echo "email :  <strong>$email</strong><br>";
             echo '</div>'; 
             //-------------------------------------------------------------------------------------------------------
             /* si l'on souhaite enregistrer des membres à  une newletter et que l'on ne posséde 
             pas de BDD, il serait intéressant de le faire via un fichier texte. Il existe des fonctions prédéfinies
             en PHP qui permettent de le faire.
             fopen()  : permet de créer le fichier texte 
             fwrite() : permet d'écrire dans le fichier texte
             fclose() : permet de fermer le fichier texte pour liberer de la ressource, qui n'est pas indispensable.
               */
              $fichier = fopen('liste.txt' , 'a');//
                  fwrite($fichier, "$pseudo - $email\r\n");
  
                  fclose($fichier); // permet de fermer le fichier
        }
        else
        {
          echo '<div class="col-md-6 mx-auto alert alert danger mt-4"><strong> degage T\'as rien a foutre ici!!!
          <a href="formulaire3.php" class="alert-link text-danger">Formulaire3</a> !!!</strong></div>';
          header('Location:formulaire3.php');
        }
    
        /*
        echo '<pre>' ; print_r($_POST); echo '</pre>';
        extract($_POST); // $_POST ['nom'] -->$nom

        //echo 'pseudo' : $_POST = ["pseudo"];
        //echo 'email' : $_POST = ["email"];

        echo '<div class="col-md-4 mx-auto alert alert-sucess text-center mt-4">';
        foreach($_POST as $key => $value)
        {
              echo "$key : <strong>$value</strong><br>";
        }  
        echo '</div>';
          ///---------------------------------------------------------------------------------------------------
           echo '<div class="col-md-4 mx-auto alert alert-sucess text-center mt-4">';
           echo "pseudo : <strong>$pseudo</strong><br>";
           echo "email :  <strong>$email</strong><br>";
           echo '</div>'; 
           //-------------------------------------------------------------------------------------------------------
            si l'on souhaite enregistrer des membres à  une newletter et que l'on ne posséde 
           pas de BDD, il serait intéressant de le faire via u nfichier texte. Il existe des fonctions prédéfinies
           en PHP qui permettent de le faire.
           fopen()  : permet de créer le fichier texte 
           fwrite() : permet d'écrire dans le fichier texte
           fclose() : permet de fermer le fichier texte pour liberer de la ressource, qui n'est pas indispensable.
             
            $fichier = fopen('liste.txt' , 'a');//
                fwrite($fichier, "$pseudo - $email\r\n");

                fclose($fichier); // permet de fermer le fichier
          */


        ?>   
        
        
        </div>

    
</body>

</html>