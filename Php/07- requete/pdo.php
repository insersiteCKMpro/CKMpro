<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> 07- requete : PDO </title>
</head>
<body>
    <div class="container">

    <h2 class="display-4 text-center text-info">01- Connexion BDD </h2>


    <?php
    echo "PDO est une class prédéfinie en PHP qui contient ses propres propriétés (variables) et methodes (fonctions) qui permet de se connecter
    a une BDD et de formuler et d'executer des requtes SQL";

    $bdd = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO :: ERRMODE_WARNING, 
    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
    // arguments : 1(serveur + BDD) | 2 (identifiant) | 3 (mdp) | 4 (options PDO)

    echo '<pre>' ; var_dump($bdd); echo '</pre><hr>';
    echo '<pre>' ; var_dump(get_class_methods($bdd)); echo '</pre><hr>';

    echo "exec() est une methode (fonction) issue de la classe PDO permettant de formuler et d'executer des requetes SQL, c'est un arguments, c'est a dire 
    entre les parenthéses que l'on formule la requetee SQL<hr>"; 
    echo "exec() est prévu pour des requetes ne retournant pas de jeu de résultats (INSER/ UPDATE / DELETE) <hr>";
    echo "exec() retourne le nombre d'insertion / modification / suppresion 
    affectée par les requetes SQL<hr>";
    // exo : formuler la requete SQL permettant de vous inserer dans la table 'employes' de la BDD 'ENTREPRISE'
    //$valid ='';
    if(isset($insert))// permet de bloquer l'insertion, si on deconnecte la ligne ci-dessus, on entre dans la condition d'INSERT s'execute
    {
    $result = $bdd->exec("INSERT INTO employes (prenom, nom, sexe, service, 
    date_embauche, salaire)VALUES ('Sébastien', 'Safourcade', 'm', 'PDG', '2019-11-12', 150000)");

    echo"nombre d'enregistrement affectépar l'INSERT : <strong> class=
    'text-info'>$result</strong>";
    }

    // exo : Réaliser le traitement php afin  modifier le salaire de l'employes 350 par 1200€
    $result = $bdd->exec("UPDATE employes SET salaire = 1200 WHERE id_employes = 350");

    echo "<hr>Nombre d'enregistrement affecté par l'UPDATE : <strong class='text-info'>$result</strong>";

    // exo : realiser le traitement PHP afin de supprimer l'employé ID 350
    $result = $bdd->exec("DELETE FROM employes WHERE id_employes = 350");

    echo "<hr>Nombre de suppression affecté par DELETE : <strong class='text-info'>$result</strong>";

    echo '<hr><h2 class="display-4 text-center text-info">03 - PDO : QUERY - 
    SELECT + FETCH_ASSOC (1 seul resultat)</h2><hr>';

    // EXO : formuler la requte SQL permettant de selectionner toute les informations de l'employés ID 415
    $result = $bdd->query("");

    $result = $bdd->query("SELECT * FROM employes WHERE id_employes = 415");

    echo '<pre>' ; var_dump($result); echo '</pre><hr>';
    echo '<pre>' ; print_r(get_class_methods($result)); echo '</pre><hr>';
     //$employe = $result->fetch(PDO :: FETCH_ASSOC);
     //$employe = $result->fetch(PDO :: FETCH_NUM);
     //$employe = $result->fetch(PDO :: FETCH_OBJ);
     

    $employe = $result->fetch(PDO :: FETCH_ASSOC);
    echo '<pre>' ; print_r($employe); echo '</pre>';

    // Exo : afficher les données de l'employe 415 avec un affichage conventionnel

    echo '<div class="col-md-4 mx-auto alert alert-info text-center mt-4">';
    foreach($employe as $key => $value)
    {
            echo "$key :  <strong>$value</strong><br>";
    }
    echo '</div>';

    echo '<hr>$bdd represente un objet [1] isssu de la classe prédéfinie PDO ';
    echo "<hr> Quand on execute une requete de selection via la methode QUERY() sur l'objet PDO : ";
    echo "<hr>Succés : on obtient un autre objet [2] issu dse la classe PDOtatement. Cet objet a donc des methodes (fonctions) et des 
    propriétés (variables) différentes !";
    echo "<hr>Echec : boolean FALSE ! ";
    echo '<hr>$result est le resultat inexploitable - $employe est le resultat exploitable (grace a la methode FETCH)';
    echo '<hr>query() est une methode (fonction) issu de la class PDO permettant de formuler et d\' executer des requetes SQL de selection (mais aussi INSERT / UPDATE / DELETE)';
    ECHO '<hr>fetch() est une methode issue de la classe PDOtatement qui
    permet de rendre le resultat exploitable sous forme de tableau  ARRAY | FETCH_ASSOC : permet d\'avoir comme indice du tableau array, le nom du 
    champs /colonne de la table employe';
    echo "<hr>PDO::FETCH_OBJ : retourne u objet issu de la classe stdClass(classe standart de PHP) avec des indices comme propriétes public de 
    l'objet";
    echo "<hr> il n'est pas possible d'associer plusieurs fois la méme methode sur le méme résultat.";

    echo "<hr><p class='text-info'> EXO : afficher le nom, prenom, service, date_embauche de l'employé 491 dans une liste ul li:</p>";

    /* mon exo $result = $bdd->query("SELECT nom, prenom, service, date_embauche FROM employes WHERE id_employes = 491");
    $employe = $result->fetch(PDO :: FETCH_ASSOC);
    
     echo '<div  class="col-md-4 mx-auto alert alert-info text-center mt-4">';
     foreach($employe as $key => $value)
     {
            echo " $key : <strong>$value</strong><br>";
     }
     echo '</div>';*/
    $result = $bdd->query("SELECT nom, prenom, service, date_embauche FROM employes WHERE id_employes = 491");

    echo '<pre>' ; var_dump($bdd); echo '</pre>';

    $emp = $result->fetch(PDO :: FETCH_ASSOC);

    echo '<pre>' ; print_r($emp); echo '</pre>';
    
    echo '<ul  class="col-md-4 mx-auto text-center list-group">';

    foreach($emp as $key => $value)
    {
        echo "<li class='list-group-item'> $key : <strong>$value</strong></li>";
    }
    echo '</ul>';


    echo  '<hr><h2 class="display-4 text-center text-info"> 04 - PDO : QUERY - 
    WHILE -SELECT - FETCH_ASSOC(plusieurs résultats)</h2></hr>';

    $data = $bdd->query("SELECT * FROM employes");
    echo '<pre>' ; var_dump($data); echo '</pre>';

    echo "<hr>Nombre d'employes dans l'entreprise:<strong class='text-info'>".$data->rowCount()."</strong><hr>";

    while($emps = $data->fetch(PDO ::FETCH_ASSOC))
    {
       // echo '<pre>' ; print_r($emps); echo '</pre>'; 
       echo '<div class="col-md-3 mx-auto alert alert-success text-center mt-4">';
            echo "Nom : <strong>$emps[nom]</strong><br>";
            echo "Prénom : <strong>$emps[prenom]</strong><br>";
            echo "Service : <strong>$emps[service]</strong><br>";
            echo "Salaire : <strong>$emps[salaire]</strong><br>";
       echo '</div>';     
    }

    echo  '<hr><h2 class="display-4 text-center text-info"> 05 - PDO : QUERY - 
    WHILE -SELECT - FETCH_ALL + FETCH_ASSOC </h2></hr>';

    $data = $bdd->query("SELECT * FROM employes"); // $data est un objet
    //PDOtatement

    $emps = $data->fetchAll(PDO::FETCH_ASSOC); // $emps est un  tableau multidimensionnel 
    echo '<pre>' ; print_r($emps); echo '</pre>';

    echo '<hr>fetcAll() retourne un tableau multidimmensionnel avec chaque tableau AARAY de chaque eemploye indexé numériquement<hr>';
    echo '$emps représente le tableau multidimmensionnel qui contient tous les employés';
    echo 'pic class="text-info"> EXO : afficher sucessivement les données de chaque employés en passant par le tableau multi"$emps"
     a l\'aide de boucle foreach : </p>';

     foreach($emps as $key => $tab)
    {
        echo '<div class="col-md-6 mx-auto alert alert-info text-center 
        mt-4">';
        foreach($tab as $key2 => $value)
        {
            echo "$key2 : <strong>$value</strong><br>";
        }
        echo '</div>';        
    }
         
    echo  '<hr><p class="text-info"> exo AFFICHER la listez des bases de données  </h2></hr>';

   $data = $bdd->query("SHOW DATABASES");
   echo '<pre>' ; print_r($data); echo '</pre>';

   echo '<ul class="list-group">';
   while($base = $data->fetch(PDO ::FETCH_ASSOC))
   {
         echo "<li class='list-group-item'>$base[Database]</li>";
   }
   echo '</ul>';

   echo  '<hr><h2 class="display-4 text-center text-info"> 06 - PDO : QUERY - TABLE </h2></hr>';

   echo "affichage de la table 'employes de la BDD 'entreprise' <hr>";

   $data = $bdd->query("SELECT * FROM employes ");

   echo '<table class= "table table-borderer text-center"><tr>';
                    //7 
   for($i = 0; $i < $data->columnCount(); $i++)
   {
       $colonne = $data->getColumnMeta($i);// getColumnMeta() permet de recolter les informations de chaque colonne
       //$colonne receptionnne un tableau ARRAY pour une colonne par tour de boucle 
       echo '<pre>' ; print_r($colonne); echo '</pre>';
       echo "<th>$colonne[name]</th>";// on va crocheter l'indice [name] de chaque tableau ARRAY pour afficher le nom de la colonnne 
   }
   echo '</tr>';
   while($donnees = $data-> fetch(PDO::  FETCH_ASSOC))
   {
        //echo '<pre>' ; print_r($donnees); echo '</pre>';
        echo '<tr>' ; 
        foreach($donnees as $value)
        {
            echo "<td>$value</td>"; // on affiche les valeurs des tableaux dans les cellules du tableau 
        }
        echo '</tr>';

   }
   echo '</table>';

   // la classe PDO permet de se connecter a une BDD et formmuler et executer des requettes SQL

   //class PDO
   /*{
       public function query() {}
       public function exec() {}
   }

   // La classe PDOStatement permet d'explooiter et de manipuler les données selectionnés dans la BDD.
   */
    ?>

</div>
    
</body>
</html>