<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>05- cookie</title>
    <style>

    </style>
</head>
<body>
    <div class="container">
        <h1 class="display-4 text-center text-info" >05 - COOKIE</h1><br/>

        <h2 class="text-center my-4">Votre langue : </h2>

        <ul class="list-group-item col-md-4 mx-auto text-center p-0">
        <li class="list-group"><a href="?pays=fr">FRANCE</a></li></br><hr>
        <li class="list-group"><a href="?pays=es">ESPAGNE</a></li><br><hr>
        <li class="list-group"><a href="?pays=gb">ANGLETERRE</a></li></br><hr>
        <li class="list-group"><a href="?pays=it">ITALIE</a></li><br><hr>

        <?php
            if(isset($_GET['pays']))/* on entre dans le IF seulement dans le cas ou
            l'on a cliqué sur un lien et donc envoyé un pays a l'URL*/ 
            { 
                $pays = $_GET['pays']; /* on trabnsmet la valleur recupéré dans l'URL au fichier cookie*/
            }
            elseif(isset($_COOKIE['pays']))/* on ne rentre que dans ELSEIF uniquement si la condition IF n'est pas passé et qu'un cookie 
            existe, si je reviens sur le site 1 mois plustard, c'est la valeur du cookie qui sera  prise en commpte*/ 
            {
                $pays = $_COOKIE['pays'];
            }
            else// on tombe dans le ELSE dans le cas ou un cookie n'a pas été crée et que nous n'avons cliqué sur aucun lien, C la premiére visite sur la page.
            {
                $pays = 'fr';
            }
            ///-------------------------------------------------------------------
            // creation d'un fichier cookie : 
            $un_an = 365*24*3600;// cookie en seconde par an. (365jrs*24h*3600s), 3600s vient de 60sec x 60min nombre de seconde dans 1h
            setcookie("pays", $pays, time()+$un_an); // setcookie("nom", "valeur", "durée de vie")
            // echo time(); // permet de voir le nombre de seconde écoulées entre le 1er janvier 1970 (date clé en informatique) et maintenat. Ce nombre évolue sans cesse

            //--------------------------------------------------------
            switch($pays)
            {
                case 'fr':
                    echo '<div class="col-md-12 mx-auto alert alert-primary"><strong>Vous etes sur un site en francais !</strong></div>';
                break;
                case 'es':
                    echo '<div class="col-md-10 mx-auto alert alert-warning"><strong>Vous etes sur un site en espagnol !</strong></div>';
                break;
                case 'gb':
                    echo '<div class="col-md-6 mx-auto alert alert-danger"><strong>Vous etes sur un site en anglais !</strong></div>';
                break;
                case 'it':
                    echo '<div class="col-md-8 mx-auto alert alert-success"><strong>Vous etes sur un site en italiens !</strong></div>';
                break;
            }
            /*
            Un cookie est sauvegardé sur le pc de l'internaute et on y mettra des informations d'importances mineur, des préférences, des traces de visites
            (ex : pour vous proposer des sugsestions de chemise dans le meme modéle de la derniére chemise que vous avez regardé sur une boutique.)
            Parce que le cookie est directement sur le pc de l'internaute et qu'il peut se le faire voler, nous ne mettrons pas d'informations 
            comme le psseudo et son mot de  passe.

            un cookie sera visible 1an apres le dnniere visite de l'utilisateur, l'internaute qui se connecte tous les mois 
            verra son choix gardé a l'infini.

            setCookie()est une fonction, prédéfinie permettant de créeer un fichier cookie, cependant il n'y a pas de fonctions prédéfi,niesz permettant de le suppprimer. 
            pour rendre inactif un cookie, on le met généralement à jour avec une date périmé.  
            */ 

        ?>
        
        
        
        
        </ul>

