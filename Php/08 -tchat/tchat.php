<?php
            // 2.
            $bdd = new PDO('mysql:host=localhost;dbname=tchat', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, 
            PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));

            /* 4. c'est mis en commentaire pour voir faire fonctionner  
            //echo '<pre>' ; print_r($_POST); echo '</pre>';
            foreach ($_POST as $key => $value)
            {
                $_POST[$key] = strip_tags($value);
                // $_POST['pseudo']= strip_tags(<style>body{display:none;</style>);
            }
            */


        if($_POST) 
        // on passe en revue tous les champs du formulaire, on execute la fonction strips_tags() sur chaque donnée saisie
        {   
            foreach ($_POST as $key => $value) 
            {
                  $_POST[$key] = htmlspecialchars($value);
                 //$_POST['pseudo']= strip_tags(<style>body{display:none;</style>);
            }
            //$result = $bdd->exec("INSERT INTO commentaire (pseudo, dateEnregistrement, message)
            //VALUES ('$_POST[pseudo]', NOW(), '$_POST[message]')"); 
            
            // 1ere requete
            //$req = "INSERT INTO commentaire (pseudo, dateEnregistrement, message) 
            //VALUES ('$_POST[pseudo]', NOW(), '$_POST[message]')";
            
            // $result = $bdd->exec($req);

            //echo $req;
            // 2eme requete INSERT : PREPARE()
            $data = $bdd->prepare("INSERT INTO commentaire (pseudo, dateEnregistrement, message) VALUES (:pseudo, NOW(),:message)");
            // prepare()  : fonction prédéfinie de la class PDO qui permet de preparer les requetes 
            // Si nous avons une requete recurente, que nous devons formuler plusieurs fois et l'executer autnat de fois que l'on veut
            // prepare() pare aux injections SQL
            // :pseudo -< marqueur nominatif, on peut le comparer à une boite qui permettra d'enfermer une valeur 


            // echo '<pre>';  var_dump($data) ; echo '<pre>';
            //bindValue(): méthode issue de la classe PDOStatement qui permet d'associer une valuer aux marqueurs (:pseudo | :message)
            //bindValue()('nom_du_marqueur','valeur_marqueur', type_marqueur(string/integer etc...))

            $data->bindValue(':pseudo', $_POST['pseudo'], PDO ::PARAM_STR);
            $data->bindValue(':message', $_POST['message'], PDO ::PARAM_STR);
            //bindValue() : methode issue

            $data->execute();  // permet d'executer la requete préparée.

            // $valid = "<p class='col-md-6 mx-auto text-center'><span class= badge badge-info'>$result</span>message bien posté !!</p><hr>";

        }

        // .6 
        $data = $bdd->query("SELECT pseudo, DATE_FORMAT(dateEnregistrement, '%d/%m/%Y')
         AS 'dateFr', DATE_FORMAT(dateEnregistrement, '%H:%i:%s') AS 'heureFr',
          message FROM commentaire ORDER BY dateEnregistrement DESC LIMIT 0,10");

        echo "<hr><h4 class='col-md-6 mx-auto text-center'><span class='badge badge-info'>" . 
        $data->rowCount() . "</span> commentaire(s)</h4><hr>";

        /*
        faille de sécurité XSS : 
        <script>
        var point = true; 
        while(point == true)
        alert ("je tai eu !! jai plante ton site !!"
        )
        </script>

        Faille 2 :
        <style>
        body{display: none;}
        </style>

        Pour parer au failles XSS, il existe des fonctions prédéfinies tel que:
        - strip_tags() : supprime les balises HTML et PHP d'une chaine 
        - htmlentities() : convertit tous les caractéres éligibles en entités HTML
        - htmlspecialchars() : Convertit les caractéres spéciaux en entités HTML, rend inofensive les balises HTML
        
        - INJECTIONS SQL : (dans le champs message)
        ok'); DELETE FROM commentaire;( 
        Pour parer aux injections SQL, on preparer la requete SQL et declare ds marqueurs qui vont enfermer les valeurs saisies     
    
        */ 
        while($com = $data->fetch(PDO ::FETCH_ASSOC))
        {
            //echo '<pre>' ; print_r($com); echo '</pre>';
            echo '<div class="col-md-8 mx-auto alert alert-secondary">';
                echo "<div class='font-italic text-center'>Posté par <strong>$com[pseudo]</strong>, le $com[dateFr] à $com[heureFr] </div><hr>";
                echo "<div>$com[message]</div>";
            echo '</div>';    
        }

    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> 08 - TCHAT  : PHP </title>
</head>
<body>
    <div class="container">
        <h2 class="display-4 text-center text-info">08- TCHAT PHP </h2><hr>
    
        <form method="POST" action="" class="col-md-4 offset-md-4 -text-center">
        <div class="form-group">
            <label for="pseudo">pseudo</label>
            <input class="form-control" type="text" id="pseudo" name="pseudo" 
            placeholder="Entre ton pseudo"> 
        </div>

        <div class="form-group">
            <label for="message">message</label>
            <textarea class="form-control" rows ="9" type="text" id="message" name="message"
            placeholder=" tape ton mesaage"></textarea>
        </div>
        <button type="submit" class="COL-12 btn btn-success">connexion</button>
        </form>

    </div>
    <?php
    /* 
    EXERCICE : Espace de dialogue (TCHAT)
    1. Modélisation et création 
            BDD : TCHAT
            table : commentaire
                    id_commentaire  //  PK AI INT (3)
                    pseudo          //  VARCHAR (20)
                    message         //  TEXT 
                    dateEnregistrement // DATETIME
    2. Connexion à la BDD
    3. Création du  formulaire HTML (pour l'ajout de message)
    4. Contrôle en PHP que l'on receptionne bien toutes les données saisies dans le formulaire.
    5. Requete SQL d'enregistrement (INSERT : pseudo , dateEnregistrement, message)
    6. affichage des messages (requete SELECT (table commenatire) + traitement PHP pour afficher sur la page WEB)
    */
    ?>
        
</body>