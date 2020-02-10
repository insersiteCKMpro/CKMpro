<?php
require_once('include/init.php');

// Si l'indice 'action' est bien definit definit dans l'URL et a pour valeur 'deconnexion',cela veut dire que nous avons cliqué
// sur le lien 'deconnexion' et a ce moment la on detruit la SESSION.  

if(isset($_GET['action']) && $_GET['action'] == 'deconnexion')
{
  session_destroy();
}
// Si l'internaute 
if(internauteEstConnecte()) //
{
  header("Location:profil.php");
}


if($_POST)
{
    $data = $bdd->prepare("SELECT * FROM membre WHERE pseudo = :pseudo || email = :email");
    /* on selectionne en BDD tous les membres qui possede le mémme pseudo ou email que l'internaute
     a saisie dans le formulaire*/
    $data->bindValue('pseudo' , $_POST['Emailpseudo'], PDO::PARAM_STR);
    $data->bindValue('email' , $_POST['Emailpseudo'], PDO::PARAM_STR);
    $data->execute();


    if($data->rowCount() > 0) // si la requete 
    {
       // echo 'ok pseudo ou email existant ';
       $membre = $data->fetch(PDO::FETCH_ASSOC);
       // echo '<pre>' ; print_r($membre); echo '</pre>';
    }
    //($membre['mdp'] == $_POST['mdp']
    if(password_verify($_POST['mdp'],$membre['mdp'])) /*si le mot de passe de la BDD est égal au mot de passe saisie dans le formulaire, on entre dans la condition IF*/
                                                    
    {
      foreach($membre as $key => $value)// on passe en revue les informations du membre qui a saisie le bon pseudo/email et mdp
      {
        if($key !='mdp')// on exclu le mdp qui n'est pas conservé dans le fichier session 
        {
          $_SESSION['membre'][$key] = $value;// on crée dans le fichier session un tableau 'membre' et on enregistre les données de l'internaute qui pourra des a present navigué sur le site sans etre deconnecté
        }
      }
      // echo '<pre>' ; print_r($_SESSION); echo '</pre>';
      header("location:profil.php"); // une fois l'internaute connecté, on le re-dirige vers sa page profil
      // header() :  fonction prédéfinie permettant de faire une redirection 
      // echo 'mot de passe OK !!';
    }
    else// sinon, cela veut dire que l'internaute a saisie un mot de passe érroné, on affiche un message d'erreur.
    {
        // echo'mot depasse éroné !!'; 
        $erreurMdp = '<p class="font-italic text-danger">* Mot de passe érroné</p>';
    }
    /*
    else
    {
        // $erreurPseudoEmail = '<p class="font-italic text-danger">* Pseudo ou Email inexsistant</p>';
    }*/
}
require_once('include/header.php');
?>
<!--
    Réaliser un formulaire de connexion avec les champs suivants : emails, pseudo,email, mdp, subnit 
-->

<h1 class= " offset-4 col-md-4 alert alert-dark text-center" > Connexion</h1>
<form  method="post" class='col-md-4 mx-auto'>
  <div class="form-group">
    <label for="Email ou Pseudo">Email ou Pseudo</label>
    <input type="text" class="form-control" id="Email ou Pseudo" name="Emailpseudo" placeholder="Email ou Pseudo">
    <small id="emailHelp" class="form-text text-muted">fuck the partage email with les gens</small>
    
  </div>
  <div class="form-group">
    <label for="mdp">mot de passe</label>
    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="mdp">
    <?php if(isset($erreurMdp)) echo $erreurMdp; ?>
  </div>
  <button type="submit" class="btn btn-primary col-md-4">connexion</button>
</form>
<?php
require_once("include/footer.php");
?>
