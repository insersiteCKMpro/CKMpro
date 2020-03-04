<?php
require_once('../include/init.php');
extract($_POST);
extract($_GET); // $_GET['id_produit'] devient --> $id_produit

if(!connecteAdmin()) // Si l'internaute n'es pas ADMIN, il n'a rien a faire ici, on le redirige vers la page connexion.php
{
    // header('Location:' . URL.'../include/header.php');
}
//----------------SUPRESSION PRODUIT
if(isset($_GET['action']) && $_GET['action'] == 'suppression')
{
    //Exo : réaliser le traintement PHP permettant de supprimer un produit en fonction de l'id_produit  envoyé dans l'URL avec une requete preparee
    $deleteProduit = $bdd->prepare("DELETE FROM galerie WHERE id_produit = :id_produit");
    $deleteProduit->bindValue(':id_produit', $id_produit, PDO::PARAM_INT);
    $deleteProduit->execute();
    $_GET['action']='affichage'; // quand on supprime on reste sur la page

    $validDelete= "<p class='col-md-5 mx-auto alert-success text-center'>Le produit ID <strong>$id_produit</strong> a bien été supprimé!</p>";

}


//----------------ENREGISTREMENT PRODUIT


if($_POST)
{
    $photobdd = '';
    if(isset($_GET['action']) && $_GET['action'] == 'modification')
    {
        $photobdd = $_POST['photoActuelle'];
    }
    // Sil l'indice 'name' dans la superglobale $_FILES est différent de vide,cela veut dire que l'internaute a bien uploader une photo
    if(!empty($_FILES['photo']['name']))
    {
        // on concatene la reference saisie dans le formulaire avec le nom de la photo recupere dans la superglobale $_FILES
        $nomPhoto = $_FILES['photo']['name'];
        //echo $nomPhoto . '<hr>';

        // On definit l'URL de la photo jusqu'au dossirr 'photo' sur le serveur, c'est ce que l'on enregistrera dans la BDD
        $photobdd = URL . "img/$nomPhoto";
       // echo $photobdd . '<hr>';

       // On définit le chemin physique de la photo du dossier 'photo' sur le serveur, c'est ce que l'on utilisera pour copier la photo dans le dossier 'photo'
        $photoDossier = RACINE_SITE . "/$nomPhoto";
       // echo $photoDossier . '<hr>';
        // copy() : fonction predefinie permettant de copier la photo dans le dossier 'photo' sur le serveur
        //arguments : copy('nom_temporaire','chemin de la photo vers le dossier photo')
        //copy($_FILES['photo']['tmp_name'], $photoDossier);


        //----------- TRAITEMENT EXTENSION PHOTO
        $listExt = [1 =>'.jpg', 2=>'.png',3=>'.jpeg'];
        $positionPhoto = strpos($_FILES['photo']['name'], '.'); // o trouve a quel position se trouve le point dans le nom de la photo
        //echo $positionPhoto;
        $decoupeExt = substr($_FILES['photo']['name'], $positionPhoto); // on recup l'extension
        // echo $decoupeExt;
        // array_search() : fonction predefinie permettant de trouver a quel indice se trouve une donnée dans un tableau ARRAY
        $extension = array_search($decoupeExt,$listExt);
        //echo $extension;
        // var_dump($extension);
        // Si la position de l'extension (indice) dans le tableau ARRAY n'est pas trouvée  , array_search() retourne FALSE, on affiche un message d'erreur
        if($extension ==false)
        {
            $erreurPhoto = '<p class="font-italic text-danger">Format photo non pris en compte</p>';
            $erreur = true;
        }

         // copy() : fonction predefinie permettant de copier la photo dans le dossier 'photo' sur le serveur
         //argument : copy('nom_temporaire','chemin de la photo vers le dossier photo')
         // Si la valeur de $extension est différente de FALSE, cela veut dire que l'extenssion a bien été trouvé dans le tableau ARRAY $listExt,alors on copie la photo
        if($extension !== false)
        {
            copy($_FILES['photo']['tmp_name'],$photoDossier);
        }
    }

    if(!isset($erreur))
    {
        // EXO : réaliser le traitement PHP permettant d'insérer un produit dans la BDD avec une requete

            if(isset($_GET['action']) && $_GET['action'] == 'ajout')

        {
            $insertProduit = $bdd->prepare("INSERT INTO galerie (photo) VALUES ( :photo)");

            $validUpdate = "<p class='col-md-5 mx-auto alert-success text-center'>Le produit référence <strong></strong> a bien été modifié ! </p>";
        }
        else
        {
                // Exo : formuler la requête de modification UPDATE avec une requete préparee

                $insertProduit = $bdd->prepare("UPDATE galerie SET photo = :photo");

                $insertProduit->bindValue(':id_produit', $id_produit, PDO::PARAM_INT);
                
        }


    // Exo : realiser le traitement PHP permettant d'inserer un produiit dans la BDD avec une requete préparé


        

  
    $insertProduit->bindValue(':photo', $photobdd, PDO::PARAM_STR);
    $insertProduit->execute();

    $validInsert = "<p class='col-md-5 mx-auto alert-success text-center'>Le produit référence <strong></strong> a bien été enregistré ! </p>";
}
}
require_once('../galerie3D.php');



//echo '<pre>';print_r($_POST); echo '</pre>';

// Les données liées au fichier uploader vont se stoker directment dans la superglobale $_FILES(ne pas oublier l'attribut enctype='multipart/form-data')dans le formulaire)
//echo '<pre>';print_r($_FILES);echo '</pre>';

//Exo : réaliser le traitement PHP permettant d'afficher l'ensemble de la table 'produit', avec les entêtes des colones.Prévoir un lien modification et suppressio, pour chaques produit
?>


<ul class="col-md-4 list-group text-center mt-3 mx-auto">
<li class="list-group-item bg-primary">BACK OFFICE</li>
<li class="list-group-item "><a href="?action=affichage" class="text-dark">AFFICHAGE PRODUITS</a></li>
<li class="list-group-item "><a href="?action=ajout" class="text-dark">AJOUT PRODUIT</a></li>
</ul>



<?php

// ------------------AFFICHAGE PRODUIT
//Si l'indice 'action' est bien définie

if(isset($_GET['action']) && $_GET['action'] == 'affichage')
{

$resultat = $bdd->query("SELECT * FROM galerie");

echo '<h1 class="display-4 text-center mt-3">Affichage des produits</h1><hr>';

if(isset($validDelete)) echo $validDelete;

echo '<p class="text-center">Nombre de produit(s) dans la boutique : <span class="badge badge-info">'. $resultat->rowCount(). '</span></p>';
echo '<table class="table table-dark table table bordered text-center"><tr>';
for($i =0; $i < $resultat->columnCount();$i++)
{
    $colonne = $resultat->getColumnMeta($i);
    echo "<th>$colonne[name]</th>";
}
echo '<th>Modif</th>'; // On crééer manuellement 2 colonnes d'entetes suppléme,ntaire
echo '<th>Supp</th>';
echo '</tr>';
while($produit = $resultat->fetch(PDO::FETCH_ASSOC))
{
    //echo '<pre>'; print_r($produit);echo'<pre>';
    echo '</tr>';
    foreach($produit as $key => $value)
    {
        if($key =='photo'){
        echo "<td><img src='$value' alt='' class='img-thumbnail'></td>";
    }
    elseif($key == 'prix'){
        echo "<td>$value €</td>";
    }
        else{
            echo "<td>$value</td>";
        }


        
        
    }
    echo "<td><a href = '?action=modification&id_produit=$produit[id_produit]' class='text-info'><i class='far fa-edit'></i></a></td>"; // on crée manuelleùment 2 cellules supplémentaire pour chaque produit
    echo "<td><a href='?action=suppression&id_produit=$produit[id_produit]' class='text-info'><i class='fas fa-trash-alt' onclick='return(confirm(\"En êtes-vous certain ? \"));'></i></a></td>";
    echo '</tr>';
}
echo '</table>';
}
?>

<style>

.img-thumbnail
{
    max-width:30% !important;
}

</style>

<!-- Si l'indice 'action' est bien définit dans l'URL et que cette indice a pour valeur 'ajout', cela veut dire que l'utilisateur  -->
<?php if(isset($_GET['action']) && ($_GET['action'] == 'ajout' || $_GET['action'] == 'modification')): 

if(isset($id_produit)) // $_GET['id_produit']
{
    // On selectionne en BDD toute les donnee du produit via l'id_produit envoyé dans l'url
    $resultat = $bdd->prepare("SELECT * FROM produit WHERE id_produit = :id_produit");
    $resultat->bindValue(':id_produit',$id_produit,PDO::PARAM_INT);
    $resultat->execute();

    $produitActuel = $resultat->fetch(PDO::FETCH_ASSOC);
    //echo '<pre>' ; print_r($produitActuel);echo '</pre>';
}


$photo = (isset($produitActuel['photo'])) ? $produitActuel['photo'] : '';

?>
<h1 class="display-4 text-center text-success mt-3"><?=ucfirst($action); ?> d'un <b>Produit</b></h1><hr>



<div class="ecran">

<form method="post" enctype="multipart/form-data" class="col-md-6 mx-auto" action="">

<div class="form-group col-md-4 mx-auto">
<label for="public">Photo</label>
<div class="custom-file" >

    <input type="hidden" class="custom-file-input" id="photo" name="photoActuelle" value="<?= $photo ?>">
    <input type="file" class="custom-file-input" id="photo" name="photo" value="<?= $photo ?>">
    <label class="custom-file-label text-start" for="photo" aria-describedby="photo">Choisir Photo</label>
    <?php if(isset($erreurPhoto)) echo $erreurPhoto; ?>
    </div>
  
  <button type="submit" class="col-md-6 mt-2 btn btn-info mx-auto text-center"><?=ucfirst($action); ?> Produit</button>
  </div>
<?php if(isset($validInsert)) echo $validInsert; ?>
<?php if(isset($validUpdate)) echo $validUpdate; ?>

  <input type="hidden" name="photoActuelle" id="photoAxctuelle" value=" <?= $photo ?>">

<?php if(!empty($photo)): ?>
<em>Vous pouvez uploader une nouvelle photo si vous shouaitez la changer</em>
<img src="<?=$photo ?>" alt="<?= $titre ?>" class="col-md-12 mx-auto d-block">

<?php endif; ?>

 
</form>

</div>




















<?php endif; ?>
</div>

<?php
require_once('../include/footer.php');
?>