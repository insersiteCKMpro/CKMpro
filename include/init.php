<?php
//-----------------CONNEXION BDD    

$bdd = new PDO('mysql:host=localhost;dbname=ckmpro', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//----------------- SESSION
session_start();

//----------------- CHEMIN
define('RACINE_SITE',$_SERVER['DOCUMENT_ROOT'] . '/CKMpro/img/');
// echo RACINE_SITE . '<hr>';
// Cette constante retourne le chemin physique du dossier 10-BOUTIQUE sur le serveur
// Lors de l'enregistrement d'image/photos , nous aurons besoin du chemin complet du dossier photo pour enregistrer la photo

define ('URL', 'http://localhost/CKMpro/');
/*
    echo URL . '<hr>';
    Cette constante servira , par exemple, à enregistrer l'URL d'une photo/image dans le BDD, on ne conserve jamais la photo 
    elle même dans la BDD, ce serait trop lourd pour le serveur.
*/


//---------------- FAILLES XSS
foreach($_POST as $key => $value)
{
    $_POST[$key] = strip_tags(trim($value));
}
// On passe en revue chaques données siasie dans un formulaire en executant strip_tag() sur chaques valeur saisie.trim() supprime les espaces en debut et fin de chaine

//-------------------- INCLUSIONS
require_once('fonction.php');


