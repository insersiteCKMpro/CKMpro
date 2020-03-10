<?php
require_once('include/init.php');
extract($_POST); // $_POST['pseudo'] devient $pseudo

//----  DECONNEXION
// Si l'indice 'action' est présent dans l'URL et a 
if(isset($_GET['action']) && $_GET['action'] == 'deconnexion')
{
    session_destroy();
}

if(connecte()) // si l'internaute est connecté, il n'a rien a fazire sur la page connecxion, on le redirige vers sa pas profil
{
    header('Location:' . URL . 'index.php');
}
//message de validation d'inscription
if(isset($_GET['inscription']) && $_GET['inscription'] == 'valid')
{
    $validInscription = "<p class= 'col-md-6 alert-success mx-auto text-center font-italic'>Inscription réussite ! Connectez vous !</p>";
    
}

if($_POST)
{
    $resultat = $bdd->prepare("SELECT * FROM membre WHERE pseudo = :pseudo OR email = :email");
    $resultat->bindvalue(':pseudo' , $emailPseudo, PDO::PARAM_STR);
    $resultat->bindvalue(':email' , $emailPseudo, PDO::PARAM_STR);
    $resultat->execute();
    if($resultat->rowCount() > 0)

    {

        //echo '<p class="font-italic col-md-3 text-success">Pseudo ou Mail existant</p>';
        $membre = $resultat->fetch(PDO::FETCH_ASSOC);
        if($mdp ==$membre['mdp'])
        //if(password_verify($mdp, $membre['mdp']))
        {
           // echo "mot de passe ok";
        foreach ($membre as $key =>$value)
        {
            if($key != 'mdp')
            {
                   $_SESSION['membre'][$key] = $value; // on créer dans le fichier session un tableau 
                   //indice 'membre' et on enregistre les donnes de l'internaute qui pourra des a present naviger sur le site sans être deconnecté
            }
        }
        echo '<pre>';print_r($_SESSION);echo '</pre>';
        header("Location:".URL."profil.php"); // Une fois l'internaute connecté, on le redirige vers sa page de profil
        }
        else
        {
            // echo"vérifier le mot de passe";
            $erreurMdp = '<p class="font-italic text-danger">Mot de Passe incorrect !</p>';
        }
    }
    else{
        $erreurEmail = '<p class="font-italic text-danger">Mail inexistant</p>';
    }
}

require_once('include/header.php');
// echo '<pre>';print_r($_POST);echo '</pre>'; 


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

<h1 class= "display-4 text-center col-md-4 mx-auto  ">Connexion</h1>
<?php if(isset($validInscription)) echo $validInscription; ?>


    <form method="post" class="col-md-6 mx-auto text-center border rounded-lg mb-5" style= "min-height : 300px" action="">

    <div class="form-group col-md-6 mx-auto text-center mt-4">

  <label for="emailPseudo">Email ou Pseudo</label>
  <input type="text" class="form-control" id="emailPseudo" placeholder="Email" name="email" value="<?php if(isset($email)) echo $email; ?>">
  <?php if(isset($erreurEmail)) echo $erreurEmail; ?>
</div>

<div class="form-group col-md-6 mx-auto text-center">
  
  <label for="mdp">Mot de passe</label>
  <input type="text" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp">
  <?php if(isset($erreurMdp)) echo $erreurMdp; ?>
  
</div>

<button type="submit" class=" col-md-3 text-center mx-auto btn hvr-bounce-to-right border border-dark"><b>Identifiez vous !</b></button><br>

</form>
<?php require_once('include/footer.php'); ?>;