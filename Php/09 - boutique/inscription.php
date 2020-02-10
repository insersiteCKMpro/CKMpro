<?php
 require_once("include/init.php");

// Si l'internaute est connecté, il n'a rien à faire sur la page inscription, on le redirige vers sa page profil
if(internauteEstConnecte()) //
{
  header("Location:profil.php");
}

// 2. Controller en PHP que l'on receptionne bien toutes les données du formulaire 
// echo '<pre>'; print_r($_POST); echo '</pre>';

if($_POST)

{   // 3. Controler la disponiblité du pseudo (unique)
    // On selectionne tout dans la BDD à condition que le champs pseudo soit égal à la donnée saisie dans le champ 'pseudo' du formulaire
    $verifPseudo = $bdd->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
    $verifPseudo->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
    $verifPseudo->execute();
    $erreurPseudo = '';
    // Si le résultat est supérieur à 0, c'est qu'il y a bien un pseudo existant dans la BDD, on affiche un message d'erreur
    if($verifPseudo->rowCount() > 0)
    {
        $erreurPseudo = '<p class="font-italic text-danger">* Ce pseudo est indisponible. Merci d\'en siasir un autre.</p>';
        $error = true;
    }
    //-----------------------------------------------------------------------------------
    if(strlen($_POST['pseudo']) < 2 || strlen($_POST['pseudo']) > 15)
    {
        $erreurPseudo = '<p class="font-italic text-danger">taille non valide</p>';
        $error = true;
    }


    // 4. Controler la disponiblité de l'email (unique)
    $verifEmail = $bdd->prepare("SELECT * FROM membre WHERE email = :email");
    $verifEmail->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $verifEmail->execute();

    if($verifEmail->rowCount() > 0)
    {
        $erreurEmail = '<p class="font-italic text-danger">* il y a deja un compte existant à cette adresse.
        Veuillez en saisir un un autre ou vous rendre sur la page 
        <a href="connexion.php" class="alert-link>connexion .</p>';
        $error = true;
    }
    

    // 5. Controler que les mots de passe correspondent bien
    if($_POST['mdp'] !== $_POST['mdp_confirm'])
    {
        $erreurMdp = '<p class="font-italic text-danger">* Verifier les mots de passe </p>';
        $error = true;
    }

    // 6. Réaliser le traitement PHP permettant l'insertion d'un membre dans la table 'membre' (requete préparée) si  l'internaute a correctement rempli le formulaire,  c'est à dire 
    if(! isset($error))// si la variable $error n'est poas defini, cela veurt dire qu'il n'est rentré dabnns aucune des conditions 
    {
        $_POST['mdp'] = password_hash($_POST['mdp'], PASSWORD_DEFAULT); /* password_hash() permet de céer une clé de hachage pour 
        le mdp, on ne conserve jamais le mot de passe en claire dans la BDD password_verify() : permet de comparer une clé de hachage a une chaine de caractéres, onn l'executera au moment de la connexion
        pour verifier si le mot de passe saisie par l'internaute correspond a une cle de hachage dans la BDD */ 


        // requete préparée d'insertion SQL
        $data = $bdd->prepare("INSERT INTO membre (pseudo, mdp,nom,prenom,email,civilite,ville,code_postal,adresse) 
        VALUES (:pseudo,:mdp,:nom,:prenom,:email,:civilite,:ville,:code_postal,:adresse)");
        $data->bindValue(':pseudo' , $_POST['pseudo'], PDO::PARAM_STR);
        $data->bindValue(':mdp' , $_POST['mdp'], PDO::PARAM_STR);
        $data->bindValue(':nom' , $_POST['nom'], PDO::PARAM_STR);
        $data->bindValue(':prenom' , $_POST['prenom'], PDO::PARAM_STR);
        $data->bindValue(':email' , $_POST['email'], PDO::PARAM_STR);
        $data->bindValue(':civilite' , $_POST['civilite'], PDO::PARAM_STR);
        $data->bindValue(':ville' , $_POST['ville'], PDO::PARAM_STR);
        $data->bindValue(':code_postal' , $_POST['code_postal'], PDO::PARAM_INT);
        $data->bindValue(':adresse' , $_POST['adresse'], PDO::PARAM_STR);
        $data->execute();
        
        $validInsert = '<div class="col-md-6 mx-auto alert alert-success text-center">Félicitations vous etes maintenant
        inscrit sur notre site ! vous pouvez des a présent vous 
        <a href="connexion.php" class="alert_link text-success">connecter</a></div>';
    }


}
require_once("include/header.php");
?>

<!--
    1. realiser un formulaire correespondant a la table membre (sauf id_membre et statut)
-->

<h1 class="display-4 text-info text-center mt-2">Inscription</h1><hr>

<?php if(isset($validInsert)) echo $validInsert; ?>

<form method="post" class="co-md-6 mx-auto">
  <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Pseudo">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Entrer pseudo" value="<?php if(isset($_POST['pseudo'])) echo $_POST['pseudo']; ?>">
            <?php if(isset($erreurPseudo)) echo $erreurPseudo; ?>
        </div>
        <div class="form-group col-md-6">
            <label for="Mdp">Mot de passe</label>
            <input type="mdp" class="form-control" id="mdp" name="mdp" placeholder="saisir votre mot de passe">
            <?php if(isset($erreurMdp)) echo $erreurMdp; ?>
        </div>
  </div>
  <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nom">nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Saisir votre nom">
        </div>
        <div class="form-group col-md-6">
            <label for="mdp_confirm">Confirme mot de passe</label>
            <input type="password" class="form-control" id="mdp_confirm" name="mdp_confirm" placeholder="confirmer mot de passe">
            <?php if(isset($erreurMdp)) echo $erreurMdp; ?>
        </div>  
  </div>
  <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Prenom">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Saisir votre prénom">
        </div>
        <div class="form-group col-md-6">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder=" saisir votre email">
            <?php if(isset($erreurEmail)) echo $erreurEmail; ?>
        </div>
  </div>
  <div class="form-row">
        <div class="form-group col-md-3">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville">
        </div>

        <div class="form-group col-md-3">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse"  placeholder="Apartment, studio, or floor">
        </div>
        
        <div class="form-group col-md-3">
            <label for="code_postal">Code postal</label>
            <input type="text" class="form-control" id="codepostal" name="code_postal">
        </div>  

        <div class="form-group col-md-3">
            <label for="imputState">Civilite</label>
            <select id="civilite" class="form-control" name="civilite">
                <option value="f">Madame</option>
                <option value="m">Monsieur</option>
            </select>    
        </div>      
  </div>
  
  <button type="submit" class="btn btn-primary">Inscription</button>
</form>

<?php
require_once("include/footer.php");
?>