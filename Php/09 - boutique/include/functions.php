<?php
//---------------------------------------FONCTION MEMBRE CONNECTE
function internauteEstConnecte() // cette fonction indique si le memebre est connecté
{
    if(!isset($_SESSION['membre'])) // si  l'indice 'membre' dans le fichier SESSION n'est pas definit, il n'existe pas, cela veut dire que l'interanaute n'est pas connnecte donc qu'il n'est pas passé"é par la page de connexion
    {
        return false;
    }
    else // sinon si l'indice 'membre' existe  dans la sesssion, cela veut dire que l'nternaute est connecté aon return true!!
    {
        return true;
    }

}
//---------------------------------------FONCTION MEMBRE CONNECTE et ADMIM
// cette fonction indique que si le membre est connecte et si il a un statut 'admin'

function internauteEstConnecteEtEstAdmin()
{   // si l'internaute est connecté et a un statut a 1, cela veut dire que l'internaute est administrateur du  site
    if(internauteEstConnecte() && $_SESSION['membre']['statut'] == 1)
    {
        return true;
    }
    else // Sinon,  cela veut  dire que l'internaute n'est  pas ADMIN et peut-etre dans le meme temps pas connecté
    {
        return false;
    }
}

?>