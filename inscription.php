<?php
require_once('include/init.php');
extract($_POST); // $_POST['pseudo'] --> pseudo


if($_POST)
{

    // ---------------------------------------------------------PARTIE PSEUDO INUTILE POUR CKMPRO--------------------------------------------------------------------
    // Contôle de la disponibilité du pseudo
    // On selectionne tout dans la BDD a condition que le champ 'pseudo' soit bien egal au psuedo saisi dans le formulaire
    // $verifPseudo = $bdd->prepare("SELECT * FROM membre WHERE pseudo = :pseudo"); // marqueur 'pseudo'
    // $verifPseudo->bindvalue(':pseudo', $pseudo, PDO::PARAM_STR); // on associe une valeur au marqueur
    // $verifPseudo->execute(); // on execute la requete
    // //Si le nombre de resultat de la requete de selection est supérieur à 0,cela veut dire qu'il y a au moins pseudo deja existantn dasn la BDD
    // // rowCount()--> méthode issue de la classe PDOStatement qui retourne le nombre de ligne resultant de la requete de selection
    // if($verifPseudo->rowCount()> 0)
    // {
    //     $erreurPseudo = '<p class="font-italic text-danger">Pseudo déja éxistant. Merci d\'en saisir un nouveau.</p>';
    //     $erreur =true;
    // }
    // ---------------------------------------------------------PARTIE PSEUDO INUTILE POUR CKMPRO--------------------------------------------------------------------


    // ---------------------------------------------------------SECURITER EMAIL---------------------------------------------------------------------------------------
    // EXo : contrôle de la disponibilité de l'email
    $verifEmail = $bdd->prepare("SELECT * FROM contact WHERE email = :email"); // marqueur 'pseudo'
    $verifEmail->bindvalue(':email', $email, PDO::PARAM_STR); // on associe une valeur au marqueur
    $verifEmail->execute(); // on execute la requete
    if($verifEmail->rowCount()> 0)
    {
        $erreurEmail = '<p class="font-italic text-danger">Email déja éxistant. Merci d\'en saisir un nouveau.</p>';
        $erreur =true;
    }
    //Exo : faites en sorte d'informer l'internaute si le pseudo ne contient pas les caractères suivant : [a-zA-Z0-9._-']
    // ---------------------------------------------------------SECURITER EMAIL---------------------------------------------------------------------------------------



    if(!preg_match('#^[a-zA-Z0-9._-]{2,20}+$#',$nom ,$prenom))
{
    $erreurNom = "<p class= 'text-danger font-italic'>* Caractères autorisés : [a-zA-Z0-9._-'] (entre 2 et 20 caractères)</p>";
    $erreurPrenom = "<p class= 'text-danger font-italic'>* Caractères autorisés : [a-zA-Z0-9._-'] (entre 2 et 20 caractères)</p>";
    $erreur =true;
}

// ---------------------------------------------------------SECURITER MDP ET CONFIRM MDP---------------------------------------------------------------------------------------

//EXO : faites en sorte d'informer l'internaute si les mots de passe ne correspondent pas
if($mdp !== $cmdp)
{
    $erreurMdp = "<p class= 'text-danger font-italic'>Les deux mdp ne correspondent pas !</p>";
    $erreur =true;
}
if($mdp == "")
{
    $erreurMdp = "<p class= 'text-danger font-italic'>remplir le champ !!!</p>";
    $erreur =true;
}


// ---------------------------------------------------------SECURITER DE CONFIRMATION FINAL---------------------------------------------------------------------------------------

// Si la variable n'est pas defini cela veut dire que nous sommes dans aucune condition if donc l'internaute n'a pas fait d'erreur
if(!isset($erreur))
{
    $mdp = password_hash($mdp, PASSWORD_DEFAULT); // on ne conservera jamais les mdp en clair dans la BDD
    // password_hash(): fonction predef permettant de creer une cle de hachage
    // password_verify() : fonction predefinie permettant de comparer
    //Exo: réaliser le traitement permettant d'insérer un membre dans la BDD avec une requete préparée
        // Si l'internaute peut envoyer des données dans une requete  SQL , il faut obligatoirement la préparée pour parer aux injections SQL
        $insertBdd = $bdd->prepare("INSERT INTO contact (nom, prenom,email,telephone,adresse) VALUES ( :nom ,:prenom,:email,:telephone,:adresse)");
  
        $insertBdd->bindValue(':nom', $nom, PDO::PARAM_STR);
        $insertBdd->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $insertBdd->bindValue(':email', $email, PDO::PARAM_STR);
        $insertBdd->bindValue(':telephone', $telephone, PDO::PARAM_INT);      
        $insertBdd->bindValue(':adresse', $adresse, PDO::PARAM_STR);
        $insertBdd->execute();

        header("Location:" .  URL . "connexion.php?inscription=valid"); // apres insertion on le redirige vers la page de connexion
    }
}

require_once('include/header.php');

?>

    <style>
    .hvr-bounce-to-right {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: red;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 1.5s; 
  transition-duration: 1.5s; 

}
.hvr-bounce-to-right:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: black;  /* regler couleur de l'animation */ 
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 1.5s; 
  transition-duration: 1.5s; /* regler vitesse animation */ 
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
  background-color:none;
}
.hvr-bounce-to-right:hover, .hvr-bounce-to-right:focus, .hvr-bounce-to-right:active {
  color:white;  /* changer couleur du text dans l'animation */
  background:none; /* changer couleur background en dessous de l'animation */
  
}
.hvr-bounce-to-right:hover:before, .hvr-bounce-to-right:focus:before, .hvr-bounce-to-right:active:before {
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
  -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
  transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
  background-color:none;
}

</style>


<!-- nous sommes dans la balise <main></main> -->


<!--
    1.Réaliser un formulaire correspondant à la table 'membre' de la BDD (sauf id_membre) + champs confirmer mdp
    2.contrôler en PHP que l'on receptionne bien les données saisies dans le formulaire
    3.
    -->

    <h1 class="display-4 text-center mt-2 text-info"><b>Inscription</b></h1><hr>

    <?php // echo '<pre>';print_r($_POST);echo '</pre>'; 
    ?>

    <form method="post" class="col-md-6 mx-auto text-center" style= "min-height : auto" action="">

 


  <div class="form-row">
  <div class="form-group col-md-6">
  <?php if(isset($erreurNom)) echo $erreurNom; ?>
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" placeholder="Mettre son Nom" name="nom">
  </div>
  
  <div class="form-group col-md-6">
  <?php if(isset($erreurPrenom)) echo $erreurPrenom; ?>
  <label for="prenom">Prenom</label>
  <input type="text" class="form-control" id="prenom" placeholder="Mettre son Prenom" name="prenom">
  
  
</div>
</div>



  <div class="form-row">
  <div class="form-group col-md-6">
  <?php if(isset($erreurMdp)) echo $erreurMdp; ?>
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="text" class="form-control" id="mdp" placeholder="Mettre Mot de passe" name="mdp">
  </div>

  <div class="form-group col-md-6">
  <?php if(isset($erreurMdp)) echo $erreurMdp; ?>
  <label for="confirmMdp">Confirmer Mot de passe</label>
  <input type="text" class="form-control" id="cmdp" placeholder="Confirmer le Mot de passe" name="cmdp">
  
  
</div>
</div>

<div class="form-group col-md-6 text-center mx-auto">
  <label for="email">Email</label>
  <input type="text" class="form-control" id="email" placeholder="Mettre son Email" name="email">
  <?php if(isset($erreurEmail)) echo $erreurEmail; ?>

</div>

<div class="form-group col-md-6 text-center mx-auto">
  <label for="codepostal">Telephone</label>
  <input type="text" class="form-control" id="telephone" placeholder="Mettre son numéro de téléphone" name="telephone">
  </div>

<div class="form-group col-md-12">
  <label for="adresse">Adresse</label>
  <input type="text" class="form-control" id="adresse" placeholder="Mettre son Adresse" name="adresse">
</div><br>



<button type="submit" class=" col-md-4 border-dark text-center mx-auto btn hvr-bounce-to-right mb-3"><b>Confirmer Inscription</b></button>

</form>
</div>
<?php require_once('include/footer.php'); ?>