<?php
/** MySQL hostname */
//  define('DB_HOST', '127.0.0.1:8889');
//---------------------CONNEXION BDD -------------------------------------//

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ckmpro";

$connexion = new mysqli($servername, $username, $password, $dbname);

/*
 * Ceci est le style POO "officiel"
 * MAIS $connect_error était erroné jusqu'en PHP 5.2.9 et 5.3.0.
 */
// if ($db->connect_error) {
//     die('Erreur de connexion (' . $db->connect_errno . ') '
//             . $db->connect_error);
// }

/*
 * Utilisez cette syntaxe de $connect_error si vous devez assurer
 * la compatibilité avec les versions de PHP avant 5.2.9 et 5.3.0.
 */
if (mysqli_connect_error()) {
    die('Erreur de connexion (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

// echo 'Succès... ' . $connexion->host_info . "\n";

// $connexion->close();

//----------------------------------------------- SESSION

//  session_start();

//------------------------------------------------ CHEMIN 

       define('RACINE_SITE',$_SERVER['DOCUMENT_ROOT'] . "../ckmpro/img/");
    //    define('RACINE_SITE',$_SERVER['REQUEST_URI'] . "../ckmpro/img/");
    //    echo RACINE_SITE . '<hr>';

       define ('URL', 'http://localhost/ckmpro/');
    //    define ('URL', 'http://www.ckm.insersite-prezweb.fr/');


//-------------------------------------------------------//


//---------------- FAILLES XSS
foreach($_POST as $key => $value)
{
    $_POST[$key] = strip_tags(trim($value));
}
// On passe en revue chaques données siasie dans un formulaire en executant strip_tag() sur chaques valeur saisie.trim() supprime les espaces en debut et fin de chaine
//-------------------- INCLUSIONS

require_once('fonction.php');
?>