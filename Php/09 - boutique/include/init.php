<?php
//--- Connexion bdd
$bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//--- SESSION

session_start();

//-------------- Chemins
define("RACINE_SITE",$_SERVER['DOCUMENT_ROOT'].'PHP/09-boutique/');
// echo RACINE_SITE;
// cette constante retourne le chemin physique du dossier 09-boutique sur le serveur
// lors de l'enregistrement d'image/photos, nous aurons besoin du chemein complet du dossier photo pour enregistrer la photo

define("URL","http://localhost/PHP/09-boutique/");
// cette constante servira a enregistrer l'URL d'une image/photo dans la BDD, on ne conserve jamais la photo elle méme, ce serait trop lourd pour le serveur 

// -----------------variables
// on definit des variables  à vide qui permetteront par exemple de stocké des messsages d'erreur ou de validation ou bien du contenu
$_content = '';
$_valid = '';

//------------- FAILLES XSS

foreach($_POST as $key => $value)
{
    $_POST[$key] = strip_tags($value);
}

//-------- Inclusion
require_once("functions.php");

?>