<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>03 - lecture fichier texte PHP</title>
</head>
<body>
        <div class="container">
            <h1 class="display-4 text-center text-info">03 -lecture fichier texte PHP </h1><br>
        
        
        <?php
            $nomFichier = "liste.txt";
            $fichier = file($nomFichier); // la fonction file() (fonction prédéfinie PHP) fait tout le travail, elle retourne chaque ligne d'un fichier à des indices différent d'un taleau array

            echo '<div class="col-md-4 mx-auto alert alert-sucess my-4>';
                echo '<pre>' ; print_r($fichier); echo '</pre>';
            echo '</div>';
            //--------------------------------------------------------------------------
            // affichage conventionnel 
            echo '<div class="col-md-5 mx-auto alert alert-info my-4">';
            foreach($fichier as $value)
            {
                echo "$value<br>";
            }
            echo '</div>';


        ?>
        
        
        
        
        
        
        
        
        
        
        </div>
    
</body>
</html>