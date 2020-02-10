<?php
         $bdd = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO :: ERRMODE_WARNING, 
         PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));

         echo '<pre>' ; print_r($_POST); echo '</pre>';
        if($_POST) 
        {   // CONTROLES PHPH.....
            $result = $bdd->exec("INSERT INTO employes (prenom,nom,sexe,service,date_embauche,salaire) VALUES ('$_POST[Prenom]', '$_POST[Nom]',
            '$_POST[sexe]', '$_POST[service]', '$_POST[date_embauche]', '$_POST[salaire]')");
            // on va crocheter aux différent indices du  formulaire pour renseigné les valeurs de la requete SQL
            $valid = "<p class='col-md-6 mx-auto text-center'><strong class='text-info'>$result</strong> 
            employé a été inséré !!</p>";
        }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <title>07- Formulaire entreprise </title>
</head>
<body>  

<div class="Container">
<!--
    1. Créer un formulaire HTML correspondant a la table 'employés' de la BDD 'entreprise' (sauf id_employes).
    2. Controler en PHP que l'on receptionne bien toute les données saisies dans le formulaire.
    3. connexion BDD.
    4. Requet INSERTION : traitement PHP pour enregister un employes partir du formulaire.
-->

        <h1 class="display-4 text-center text-info"> 07- formulaire </h1><hr>

        <?php if(isset($valid)) echo $valid; ?> <!-- permet d'afficher le message "employé a été inséré -->

        <form method= "POST"  class="col-md-4 mx-auto text-center alert alert-success">
       

                <div class="form-group">
                    <label for="pseudo">Nom</label>
                    <input type="text" class="form-control" id="Nom" name="Nom" 
                    placeholder="Nom"> 
                </div>
                <div class="form-group">
                    <label for="Prenom">Prenom</label>
                    <input type="text" class="form-control" id="Prenom" name="Prenom"
                    placeholder="Prenom">
                </div>
                <div class="form-group">
                     <label for="sexe">sexe</label>
                        <select class="form-control" id="sexe" name="sexe">
                            <option value="m">Homme</option>
                            <option value="f">Femmme</option>
                         </select> 
                </div>

                <div class="form-group">
                    <label for="date_embauche">date_embauche</label>
                    <input type="date" class="form-control" id="date_embauche" name="date_embauche"
                    placeholder="date_embauche">
                </div>
              
                <div class="form-group">
                    <label for="service">service</label>
                    <input type="text" class="form-control" id="service" name="service" 
                    placeholder="service"> 
                </div>

                <div class="form-group">
                    <label for="salaire">salaire</label>
                    <input type="text" class="form-control" id="salaire" name="salaire"
                    placeholder="salaire">
                 </div>

                 <button type="submit" class="btn btn-primary">connexion</button>
            
        </form>
</div> 




</body>
</html>