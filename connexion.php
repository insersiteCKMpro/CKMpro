// condition si on es admin
if(!connecteAdmin()) // Si l'internaute n'es pas ADMIN, il n'a rien a faire ici, on le redirige vers la page connexion.php
{
    // header('Location:' . URL.'../include/header.php');
}
<?php 
require_once('../include/init.php');

//'action' est bien définit dans l'URL et a pour valeur 'deconnexion', cela veut dire que nous avons cliqué sur le lien 'deconnexion' et à ce moment la on détruit la SESSION
if(isset($_GET['action']) && $_GET['action'] == 'deconnexion')
{
    session_destroy();
}

// Si l'internaute est connecté, il n'a rien à faire sur la page connexion, on le redirige vers sa page profil
if(internauteEstConnecte())
{
    header("Location:profil.php");
}

//echo '<pre>'; print_r($_POST); echo '</pre>';

if($_POST)
{
    $data = $bdd->prepare("SELECT * FROM membre WHERE pseudo = :pseudo || email = :email"); 
    $data->bindValue(':pseudo', $_POST['pseudoEmail'], PDO::PARAM_STR);
    $data->bindValue(':email', $_POST['pseudoEmail'], PDO::PARAM_STR);
    $data->execute();

    if($data->rowCount() > 0) 
    {
        //echo 'OK pseudo ou  email existant';
        $membre = $data->fetch(PDO::FETCH_ASSOC);
        //echo '<pre>'; print_r($membre); echo '</pre>';

        // $membre['mdp'] == $_POST['mdp']
        if(password_verify($_POST['mdp'],$membre['mdp'])) // Si le mot de passe de la BDD est égal au mot de passe saisie dans le formulaire, on netre dans la condition IF
        {
            //echo 'mot de passe OK !!';
            foreach($membre as $key => $value) 
            {
                if($key != 'mdp') 
                {
                    $_SESSION['membre'][$key] = $value; // on crée dans le fichier session un tableau 'membre' et on enregistre les données de l'internaute qui pourra dès à présent naviguer sur le site sans être deconnecté 
                }
            }
            //echo '<pre>'; print_r($_SESSION); echo '</pre>';
            header("Location:profil.php"); 
           
        else 
        {
            //echo 'mot de passe erroné !!';
            $erreurMdp = '<p class="font-italic text-danger">* Mot de passe erroné !</p>';
        }
    }
    else /
    {
        $erreurPseudoEmail = '<p class="font-italic text-danger">* Pseudo ou  Email inexistant</p>';
    }

}

require_once('../include/header.php');
?>

<h1 class="display-4 text-info text-center mt-2">Connexion</h1><hr>


<form method="post" class="col-md-4 mx-auto">
    <div class="form-group">
        <label for="pseudoEmail">Pseudo ou Email</label>
        <input type="text" class="form-control" id="pseudoEmail" name="pseudoEmail" aria-describedby="emailHelp" placeholder="Enter email or Pseudo">
        <?php if(isset($erreurPseudoEmail)) echo $erreurPseudoEmail; ?>
    </div>
    <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Password">
        <?php if(isset($erreurMdp)) echo $erreurMdp; ?>
    </div>
    <button type="submit" class="col-md-12 btn btn-info">Connexion</button>
</form>

<?php 
require_once('../include/footer.php');
?>

<!-- --------------------------------------------------------- -->


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
    header('Location:' . URL . 'profil.php');
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
        $erreurEmailPseudo = '<p class="font-italic text-danger">Pseudo ou Mail inexistant</p>';
    }
}

require_once('include/header.php');
// echo '<pre>';print_r($_POST);echo '</pre>'; 


?>
<style>
body{
    background-image: linear-gradient(to left top, #3b02a4, #0051d1, #0080e9, #00a9f0, #00d0f2, #00d1f3, #00d1f4, #00d2f5, #00adf6, #0084f0, #0056db, #4705ae)!important;
}
</style>
<h1 class= "display-4 text-center col-md-4 mx-auto  ">Connexion</h1>
<?php if(isset($validInscription)) echo $validInscription; ?>


    <form method="post" class="col-md-6 mx-auto text-center bg-info rounded-lg" style= "min-height : 300px" action="">

    <div class="form-group col-md-6 mx-auto text-center ">

  <label for="emailPseudo">Email ou Pseudo</label>
  <input type="text" class="form-control bg-primary " id="emailPseudo" placeholder="Email ou Mot de passe" name="emailPseudo" value="<?php if(isset($emailPseudo)) echo $emailPseudo; ?>">
  <?php if(isset($erreurEmailPseudo)) echo $erreurEmailPseudo; ?>
</div>

<div class="form-group col-md-6 mx-auto text-center">
  
  <label for="mdp">Mot de passe</label>
  <input type="text" class="form-control bg-primary" id="mdp" placeholder="Mettre Mot de passe" name="mdp">
  <?php if(isset($erreurMdp)) echo $erreurMdp; ?>
  
</div>

<button type="submit" class=" col-md-7 text-center mx-auto btn btn-info bg-dark"><b>Identifiez vous !</b></button><br>

<br>



</form>



<?php
require_once('include/footer.php');