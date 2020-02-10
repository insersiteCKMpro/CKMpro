<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <title>03 - formulaire4 PHP</title>
</head>
<body>
    <!--
        1. Réaliser un formulaire HTML avec les champs suivant : pseudo, email et un bouton 'submit' de validation 

        2. Faite en sorte d'afficher les données du formulaire directement sur la page du formulaire4.php
    -->
    <div class="container" ></div>
           

            <h1 class="display-4 text-center text-info"> 03 - formulaire4 PHP</h1><hr>

            <form method="POST" action="formulaire4.php" class="col-md-4 offset-md-4 -text-center">

        <div class="form-group">
            <label for="pseudo">pseudo</label>
            <input type="text" id="pseudo" name="pseudo" 
            placeholder="Entrer pseudo"> 
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text"id="email" name="email"
             placeholder="Entrer email">
        </div>

        <button type="submit" class="btn btn-primary">connexion</button>
        </form>
    </div>
</body>
<?php ?>
</html>