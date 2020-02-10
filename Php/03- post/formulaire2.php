

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <title>03 - formulaire2 PHP </title>
</head>
             <!-- 
            1. Réaliser un formulaire HTML AVEC LES CHAMPS SUIVANT :  pseudo, MdP, confirmer Mdp, nom, prenom, email, 
            téléphone, adresse, ville, code postal et bouton de validation.
            
            2. Controler en PHP que l'on receptionne bien toutes les données saisie dans le formulaire.
            
            3. Afficher les données du formulaire en haut de page via une boucle avec un affichage conventionnel.
            
            4. faites en sortes d'informer l'internaute si le pseuddo n'est pas compris entre 2 et 15 caractéres.
             
            5. faites en sorte d'informer l'internaute si le champs 'nom' est laissé vide.  

            6. faites en sorte d'informer l'internaute si le champs 'email' est laissé vide. 

            7. faites en sorte d'informer l'internaute si le champs code
            postal n'est pas de type numérique (fonction prédéfinie) et la taille est différente de 5 chiffres.

            8. faites en sorte d'informer l'internaute si les mots de passe ne correspondent pas

            9. faites en sorte d'informer l'internaute que le numero n'est pas au bon format.

            10. afficher un message de validation si l'internaute à bien rempli le formulaire correctement
             -->

   
<body> 

    <div class= "container"><!-- .1 le formulaire -->
        <h1 class="display-4 text-center text-info">03- FORMULAIRE2 PHP</h1><hr>
        <?php
             echo '<pre>' ; print_r($_POST); echo '</pre>'; //.2

            if($_POST )//.3
            {
                echo '<div class="col-md-4 alert alert-info text-center">';
                foreach($_POST as $key => $value)
                {
                    echo "$key : $value <br>";     
                }   
                echo '</div><br>';
              

                if(iconv_strlen($_POST['Pseudo']) < 2 || iconv_strlen($_POST['Pseudo']) > 15 ) //.4
                {
                    $error1 = '<p class="text-danger font-italic">* Le Pseudo doit etre compris entre 2 et 15 caracteres</p>';
                    $error = true;
                }   

                if(empty($_POST['nom']))//.5
                {
                    $errorNom = '<p class="text-danger font-italic">* champs obligatoire </p>';
                    $error = true;
                }

                if(!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL))//.6
                {
                    $errorEmail = '<p class="text-danger font-italic">* champs obligatoire </p>';
                    $error = true;
                }

                // .7 ! is_numeric ($_POST['codepostal']) : si le code N'EST PAS (!) de type numerique
                // strlen($_POST['codepostal']) ! = 5 : si la taille du champs code postal est différente de 5.
                if(!is_numeric($_POST['codepostal']) || strlen($_POST['codepostal']) != 5)
                {
                    $errorcodepostal = '<p class="text-danger font-italic">* format de code non valide </p>';
                    $error = true;
                }
                if($_POST['password'] != $_POST ['confirmpassword']) // .8
                {
                    $errorMdp ='<p class="text-danger font-italic">* verifiez les mots de passe </p>';
                    $error = true;
                }
                /* preg_match() : une expression réguliére (regex) est toujours entouré de diéze '#' pour préciser les options
                - ^ indique le début de la chaine 
                - $ indique la fin de la chaine 
                - + est l apour dirre que les lettres / chiffres autorisés peuvent apparaitre plusieurs fois 
                - \d équivaut à [0-9]
                - {8} : limite maximum de 8 chiffres
                 */ 
                if(!preg_match('#^0[6-7]{1}\d{8}+$#' , $_POST['telephone']))// .9
                {
                    $errorPhone = '<p class="text-danger font-italic">* format incompatible </p>'; 
                    $error = true;             
                }
                /*.10 if(!isset($errorPseudo) && !isset($errorNom) && !isset($errorEmail) && 
                !isset($errorcodepostal) && !isset($errorMdp) )*/
                if(!isset($error))
                {
                    echo 'test';
                    $valid = '<div class= "col-md-6 mx-auto alert 
                    alert-sucess"> FELICITATION!!! Vous etes maintenant 
                    inscrit sur notre site !!</div>';
                }
                // si l'internaute à correctement rempli le formulaire, on affiche le message de validation
                if(isset($valid)) echo $valid; 

            }
        ?>
            <form method="post" class="mx-auto">
                    <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-5 mb-3">
                                    <label for="Pseudo">Pseudo</label>
                                    <input type="text"class="form-control" id="Pseudo" name="Pseudo" placeholder="Saisir votre Pseudo">
                                    <?php if(isset($error1)) echo $error1; /* Si la variable $error1 est bien definit
                                    , cela veut dire que nous sommes entré dans la condition IF ci-dessus, à ce moment là
                                    on affiche le contenu de la variable */ ?>
                                </div>  

                                <div class="col-md-6 mb-3">
                                    <label for="password">Mot de passe</label>
                                    <input type="text" id="password" class="form-control" name="password" placeholder="Saisir votre mot de passe">
                                    <?php if(isset($errorMdp)) echo $errorMdp; ?>
                                </div> 
                           </div>

                           <div class="form-row"> 
                                 <div class="col-md-5 mb-3">
                                    <label for="Email">Email</label>
                                    <input type="text" class="form-control" id="Email" name="Email" placeholder="Saisir votre Email">
                                    <?php if(isset($errorEmail)) echo $errorEmail; ?>
                                </div> 

                                <div class="col-md-6 mb-3">
                                    <label for="confirmpassword">Mot de passe</label>
                                    <input type="text" id="confirmpassword"  class="form-control" name="confirmpassword" placeholder="Saisir votre mot de passe"> 
                                    <?php if(isset($errorMdp)) echo $errorMdp; ?>
                                </div> 
                            </div>
                       
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="Nom">Nom</label>
                                    <input type="text" class="form-control" id="Nom" name="nom" placeholder="Saisir votre Nom">
                                    <?php if(isset($errorNom)) echo $errorNom; 
                                    ?>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="Prenom">Prénom</label>
                                    <input type="text" class="form-control" id="Prenom" name="Prenom" placeholder="Saisir votre Prénom">
                                </div>
                                <div class="col-md-4 mb-3">
                                     <label for="telephone">téléphone</label>
                                     <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Saisir votre téléphone">
                                     <?php if(isset($errorPhone)) echo $errorPhone; 
                                    ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="Adresse">Adresse</label>
                                    <input type="text" class="form-control" id="Adresse" name="Adresse" placeholder="Saisir votre Adresse">
                                </div>

                                <div class="col-md-3 mb-3">
                                     <label for="Ville">Ville</label>
                                     <input type="text" class="form-control" id="Ville" name="Ville" placeholder="Saisir votre Ville" style="background:#009688">
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label for="codepostal">code postal</label>
                                    <input type="text" class="form-control" id="codepostal" name="codepostal" placeholder="Saisir votre code postal" style="background:#009688">
                                    <?php if(isset($errorcodepostal)) echo $errorcodepostal;?>
                                </div>
                            </div>
                                <button class="col-md-11 mb-3 btn btn " type="submit" style="background:#009688">Validation</button>
                    </div> 
            </form>        
  </div>
   
</body>
        
