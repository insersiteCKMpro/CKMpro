<?php
require_once('../include/init.php');
extract($_POST);
extract($_GET); // $_GET['id_img'] devient --> $id_img


// condition si on es admin
if(!connecteAdmin()) // Si l'internaute n'es pas ADMIN, il n'a rien a faire ici, on le redirige vers la page connexion.php
{
    // header('Location:' . URL.'../include/header.php');
}

//----------------SUPRESSION PRODUIT

if(isset($_GET['action']) &&  $_GET['action'] == 'suppression')
{
    $data = $bdd->query("SELECT photo FROM galerie_img WHERE id_img = '$_GET[id_img]'"); // on selectionne le référence en BDD pour l'inclure dans le message de validation
    $id_img = $data->fetch(PDO::FETCH_ASSOC);

    $data = $bdd->prepare("DELETE FROM galerie_img WHERE id_img = :id_img");
    $data->bindValue(':id_img', $_GET['id_img'], PDO::PARAM_INT);
    $data->execute();

    $_GET['action']='affichage'; // quand on supprime on reste sur la page

    $validDelete= "<p class='col-md-5 mx-auto alert-success text-center'>La photo a bien été supprimé!</p>";
}
//-----------------------------------------------------------------ENREGISTREMENT PHOTO
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
        if($extension ==false)
        {
            $erreurPhoto = '<p class="font-italic text-danger">Format photo non pris en compte</p>';
            $erreur = true;
        }
         //argument : copy('nom_temporaire','chemin de la photo vers le dossier photo')
        if($extension !== false)
        {
            copy($_FILES['photo']['tmp_name'],$photoDossier);
        }
    }

    if(!isset($erreur))
    {
            if(isset($_GET['action']) && $_GET['action'] == 'ajout')
        {
            // $insertProduit = $bdd->prepare("INSERT INTO galerie_img VALUES ( :photo)");
        $insertProduit = $bdd->prepare("INSERT INTO galerie_img (photo) VALUES ( :photo)");
        $insertProduit->bindValue(':photo', $photobdd, PDO::PARAM_STR);
        $insertProduit->execute();
            
        }
        else
        {
                $insertProduit = $bdd->prepare("UPDATE galerie_img (photo) SET photo = :photo");
                $insertProduit->bindValue(':photo', $photobdd, PDO::PARAM_STR);
                $insertProduit->execute();
        }
    $validInsert = "<p class='col-md-5 mx-auto alert-success text-center'>L'image a bien été enregistré ! </p>";
}

}        //echo '<pre>';print_r($_POST); echo '</pre>';

?>
<ul class="col-md-4 list-group text-center mt-3 mx-auto">
    <li class="list-group-item "><a href="?action=affichage" class="text-dark">AFFICHAGE PRODUITS</a></li>
    <li class="list-group-item "><a href="?action=ajout" class="text-dark">AJOUT PRODUIT</a></li>
</ul>
<?php

// --------------------------------------------------------------------AFFICHAGE PRODUIT

if(isset($_GET['action']) && $_GET['action'] == 'affichage')
{

$resultat = $bdd->query("SELECT * FROM galerie_img");

echo '<h1 class="display-4 text-center mt-3">Affichage des images</h1><hr>';

if(isset($validDelete)) echo $validDelete;

echo '<p class="text-center">Nombre d\'image(s) dans la boutique : <span class="badge badge-info">'. $resultat->rowCount(). '</span></p>';
echo '<table class="table table-dark table table bordered text-center"><tr>';
for($i =0; $i < $resultat->columnCount();$i++)
{
    $colonne = $resultat->getColumnMeta($i);
    echo "<th>$colonne[name]</th>";
}
echo '<th>Modif</th>'; 
echo '<th>Supp</th>';
echo '</tr>';
while($galerie_img = $resultat->fetch(PDO::FETCH_ASSOC))
{
    //echo '<pre>'; print_r($produit);echo'<pre>';
    echo '</tr>';
    foreach($galerie_img as $key => $value)
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
    echo "<td><a href='?action=modification&id_img=$galerie_img[id_img]' class='text-info'><i class='far fa-edit'></i></a></td>"; 
    echo "<td><a href='?action=suppression&id_img=$galerie_img[id_img]' class='text-info'><i class='fas fa-trash-alt ></i></a></td>";
    echo '</tr>';
}
echo '</table>';
}
?>

<style>
    .img-thumbnail {
        max-width: 30% !important;
    }
</style>

<!-- Si l'indice 'action' est bien définit dans l'URL et que cette indice a pour valeur 'ajout', cela veut dire que l'utilisateur  -->
<?php if(isset($_GET['action']) && ($_GET['action'] == 'ajout' || $_GET['action'] == 'modification')): 

if(isset($id_img)) // $_GET['id_img']
{
    // On selectionne en BDD toute les donnee du produit via l'id_img envoyé dans l'url
    $resultat = $bdd->prepare("SELECT * FROM galerie_img WHERE id_img = :id_img");
    $resultat->bindValue(':id_img',$id_img,PDO::PARAM_INT);
    $resultat->execute();

    $produitActuel = $resultat->fetch(PDO::FETCH_ASSOC);
    //echo '<pre>' ; print_r($produitActuel);echo '</pre>';
}


$nom = (isset($img_actuel['nom'])) ? $img_actuel['nom'] : '';
$categorie = (isset($img_actuel['categorie'])) ? $img_actuel['categorie'] : '';
$photo = (isset($img_actuel['photo'])) ? $img_actuel['photo'] : '';

?>
<h1 class="display-4 text-center text-success mt-3"><?=ucfirst($action); ?> d'un <b>Produit</b></h1>
<hr>


<div class="ecran">

    <form method="post" enctype="multipart/form-data" class="col-md-6 mx-auto" action="">

        <div class="form-group col-md-4 mx-auto">
            <label for="public">Photo</label>
            <div class="custom-file">

                <input type="hidden" class="custom-file-input" id="photo" name="photoActuelle" value="<?= $photo ?>">
                <input type="file" class="custom-file-input" id="photo" name="photo" value="<?= $photo ?>">
                <label class="custom-file-label text-start" for="photo" aria-describedby="photo">Choisir Photo</label>
                <?php if(isset($erreurPhoto)) echo $erreurPhoto; ?>
            </div>
            <button type="submit" class="col-md-6 mt-2 btn btn-info mx-auto text-center"><?=ucfirst($action);?>Produit</button>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="categorie">categorie</label>
                <select id="categories" class="form-control" name="categorie">
                    <option value="3D"  <?php if($categorie == '3D') echo 'selected' ?>>3D</option>
                    <option value="NET" <?php if($categorie == 'NET') echo 'selected' ?>>NET</option>
                    <option value="EV"  <?php if($categorie == 'EV') echo 'selected' ?>>EV</option>
                    <option value="G3D" <?php if($categorie == 'G3D') echo 'selected' ?>>G3D</option>
                    <option value="GNET"<?php if($categorie == 'GNET') echo 'selected' ?>>GNET</option>
                    <option value="GEV" <?php if($categorie == 'GEV') echo 'selected' ?>>GEV</option>
                </select>
            </div>
        </div>


        <?php if(isset($validInsert)) echo $validInsert; ?>
        <?php if(isset($validUpdate)) echo $validUpdate; ?>
        <?php if(isset($validDelete)) echo $validDelete; ?>

        <!-- Champ caché pour la photo permettant de recupérer l'URL de la photo via l'attribut 'value' -->
        <input type="hidden" name="photoActuelle" id="photoAxctuelle" value=" <?= $photo ?>">

        <?php if(!empty($photo)): ?>
        <em>Vous pouvez uploader une nouvelle photo si vous shouaitez la changer</em>
        <img src="<?=$photo ?>" alt="<?= $titre ?>" class="col-md-12 mx-auto d-block">
        <?php endif; ?>


        <button type="submit" class="btn btn-info mb-4"><?= ucfirst($_GET['action']) ?></button>


    </form>

</div>

<?php 
endif; ?>