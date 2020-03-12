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