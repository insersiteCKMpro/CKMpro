<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <title>03 - formulaire1 PHP </title>
</head>
<body>
    
    <div class= "container">
        <!-- Réaliser un formulaire HTML AVEC LES CHAMPS SUIVANT :  pseudo, MdP et bouton de validation -->
        <h1 class="display-4 text-center text-info">03- FORMULAIRE1 PHP  </h1><hr>

        <?php
         echo '<pre>' ; print_r($_POST); echo '</pre>';
         // exo :  Afficher les donnees saisies dans le formulaire avec un formulaire 

        if($_POST)// SI on soumet le formulaire, on entree dans la condition if
        { 
                echo '<div class="col-md-4 offset-md-4 alert alert-info text-center md-4">';
                   echo "Pseudo : <strong>$_POST[pseudo]</strong><hr>";
                   // echo "pseudo : " . $_POST ['pseudo'] . <hr>";
                   echo "Mot de passe : <strong>$_POST[password]</strong>";
                 echo '</div>';
        } 
        /* Sans la condition if($_POST), au premier chargement de la page, nous 
        avons des erreurs undefined, c'est normal puisque les indices 'pseudo' et 'password' ne sont pas detectés
        On entre dans la condition if($_POST)? au premier chargement de la page, nous n'avons plus d'erreurs 'undefined'
        CONTEXTE : nous pourrons,  plus tard, envoyer ces données dans une BDD (c'est comme cela que fonctionne les pages 
        d'inscriptiond'un site internet) */  
        ?>

        <!-- methode comment vont recupere les données | action : URL de destination des données saisies dans le formulaire-->
        <form method="post" action="" class="col-md-4 offset-md-4 -text-center">
        <div class="form-group">
            <label for="pseudo">pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" 
            placeholder="Enter pseudo"><!-- il ne faut pas oublier les attributs 
            'name'sur les formulaires HTML qui permettront de recuperer en php les données saisies 
            dans les champs du formulaire-->
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="text" class="form-control" id="Password" name="password"
             placeholder="Entrer Password">
        </div>
        <button type="submit" class="btn btn-primary">connexion</button>
        </form>
    
    </div>
    
</body>
</html>