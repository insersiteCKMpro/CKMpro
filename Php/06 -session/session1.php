<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> 06-session1 </title>
</head>
<body>



<?php
  session_start(); /* permet de créer un fichier session qui est stocké du coté serveur,
  on peut observer son contenu avec xampp dans le dossier 'c:/xwamp/tmp/' */ 

  /* $_SESSION  est u,ne superglobale qui permet de stocker les données de la session
   dans un tableau  ARRAY */

   $_SESSION['pseudo'] = "El_basquo"; // on crée un indice 'pseudo'  dans la session auquel on associe une valeur
   $_SESSION['nom'] = "Safourcade";
   $_SESSION['prenom'] = "Leon";

   echo '<pre>' ; print_r($_SESSION); echo '</pre>';
    /* une session est moyen simple de garder des variables active quelque soit 
    la  page ou l'on se trouve
    Sans les sessions, on ne pourrait aps naviguer sur un site tout en restant connecté
    mles sessions sont conservées coté"s serveyr puisqu'elles contiennent des données sensible tels que votre
    nom, prénoms, email, <ect....
    lorsqu'une session et crée coté serveur, cela crée dans le meme temps un cookie précisement a l'identifiant de la session
    
    */
   // unset($_SESSION['prenom']);

   // echo '<pre>' ; print_r($_SESSION); echo '</pre>'; // fonction prédéfinie qui permet  de vider une partie de la session

   // session_destroy(); // supression de la session





?>
    
</body>
</html>