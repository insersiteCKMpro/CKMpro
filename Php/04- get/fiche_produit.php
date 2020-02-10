<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>04- GET boutique </title>
    <style>

    </style>
</head>
<body>
    <div class="container">

        <h1 class="display-4 text-center">04- Détail du produit</h1><br/>
    <?php
        // echo '<pre>'; print_r($_GET); echo '</pre>';
        // nous constatons que les données transmise dans l'URL vont directement se stocker en PHP dans la supoerglobale '$_GET', c'est un tableau ARRAY associatif 
        // Exo : afficher les details des produits avec un afficcchage  conventionnel, faites en sorte de ne pas avoir l'id du produit affiché sur la page WEB 
        // boucle foreach : 
        echo     
        foreach($_GET as $key => $value)
        {
            if($key != 'id')
            { // cela permet d'ejecter l'indice 'id' et d'afficher tt le reste du tableau AARAY dans la superglobal $_GET
                if($key == 'prix')

                     echo "$key : <strong>$value €</strong><br>";
                else 
                     echo "$key : <strong>$value</strong><br>";

            }
        }
        echo'</div>';

        // 2émé solution : extraire les données une par une dans le tableau ARRAY
        echo '<div class="col-md-2 mx-auto alert alert-info my-4>';
            echo "Article : <strong>$_GET[article]</strong>";
            echo "Couleur : <strong>$_GET[couleur]</strong>";
            echo "Prix : <strong>$_GET[prix]</strong>";
        echo '</div>';    

    
    ?>
    </div>
</body>