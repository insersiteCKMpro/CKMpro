<?php
require_once('include/init.php');

// si l'internaute n'est pas connecté, il n'a rien a faire suer la page profil, on le redirige vers la page connexion 
if(!internauteEstConnecte()) 
{
    header("Location:connexion.php");
}

//echo '<pre>' ; print_r($_SESSION); echo '</pre>';

require_once('include/header.php');
?>

<!-- EXO : afficher 'Bonjour Pseudo' en passant par la SESSION -->
<h1 class="display-4 text-center mt-3 mb-4">Bonjour <strong class="text-info"><?= $_SESSION['membre']['pseudo'] ?></strong></h1>


<ul class="col-md-4 mx-auto list-group list-group-flush text-center">

    <?php foreach($_SESSION['membre'] as $key => $value): ?>

        <?php if($key != 'id_membre' && $key !='statut'): ?>

            <li class="list-group-item"><?= ucfirst($key) ?> : <span class="text-info"> <?= $value?></span></li>

            <?php endif; ?>

    <?php endforeach; ?>

    <li class="list-group-item"><a href ="" class="alert-link text-info">Modifier </a></li>
</ul>

<?php
require_once('include/footer.php');
?>