<?php
//---------------------- FONCTION INTERNAUTE CONNECTE

function connecte()// cette fonction indique si le membre est connecté
{



// Si l'indice membre dans le fichier session n'est pas définit, cela veut dire que l'inrernaute n'est pas passé par la page connexion ou inscription

if(!isset($_SESSION['client']))

{
    return false;
}
else // sino 'membre' dans la session existe,le membre est connecté,on retourne true
{
    return true;
}
}

//-------------------------------- FONCTION INTERNAUTE CONNECTE ET ADMIN
function connecteAdmin() // cette fonction indique si un membre est administrateur du site
{
    // Si l'internaute est connecté et que dans la BDD le champ'statut' a pour valeur '1',cela veut dire que l'internaute est administrateur du site
if(connecte() && $_SESSION['client']['statut'] == 1)
{
    return true;
}
else // Sinon le statut de l'internaute est a '0' donc c'est un membre du site
{
    return false;
}
}