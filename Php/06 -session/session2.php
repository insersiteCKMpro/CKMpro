<?php

session_start(); /* permet de créer un fichier session qui est stocké du coté serveur,
on peut observer son contenu avec xampp dans le dossier 'c:/xwamp/tmp/' 
*/

/*
 lorsque j'effectue une session_start() la session n'est pas recrée car elle existe
 déja (grace au session_start() lancé par le fichier session1.php)
*/
echo '<pre>' ; print_r($_SESSION); echo '</pre>';/* affichage des informations contenu 
dans la session, on a accés au données de la session active méme si nous sommmes 
dans un autre fichier
*/ 

?>