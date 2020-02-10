<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>la boutique du  bon SOUND !!!</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">le site du FREE SOUND</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
          <?php if(internauteEstConnecte()) : // acces membre connecter ?> 
    
        <li class="nav-item">
          <a class="nav-link" href="<?= URL?>profil.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL?>boutique.php">Boutique</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL?>panier.php">Panier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL?>connexion.php?action=deconnexion">Deconnexion</a>
        </li>

        <?php else: // acces visiteur ?>

        <li class="nav-item">
          <a class="nav-link" href="<?= URL?>connexion.php">Panier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL?>inscription.php">inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL?>boutique.php">boutique</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL?>panier.php">panier</a>
        </li>

        <?php endif; ?>

        <?php if(internauteEstConnecteEtEstAdmin()) : ?>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Back office</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="<?= URL?>admin/gestion_boutique.php">Gestion boutique</a>
                <a class="dropdown-item" href="<?= URL?>admin/gestion_membre.php">Gestion membre</a>
                <a class="dropdown-item" href="<?= URL?>admin/gestion_commandes.php">Gestion commande</a>
              </div>
        </li>

        <?php endif; ?>

    </ul>

        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>

  </div>
  
 </nav> <!-- style="min-height: 650px;"-->
 <main class="container" style="min-height: 900px;">
 </main>
