<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <title>CKMpro</title>
</head>
<body>
    
</body>
</html>

<?php
require_once('../include/init.php');
extract($_POST);
extract($_GET); // $_GET['id_img'] devient --> $id_img


//------------------------------Suppresion photo-----------------------------------

if(isset($_GET['action']) &&  $_GET['action'] == 'suppression')
{
    $data = $bdd->query("SELECT id_img FROM galerie_img WHERE id_img = '$_GET[id_img]'");

    $id_img = $data->fetch(PDO::FETCH_ASSOC);

    $data = $bdd->prepare("DELETE FROM galerie_img WHERE id_img = :id_img");
    $data->bindValue(':id_img', $_GET['id_img'], PDO::PARAM_INT);
    $data->execute();

    $_GET['action']='affichage'; 

    $validDelete= "<p class='col-md-5 mx-auto alert-success text-center'>La photo a bien été supprimé!</p>";
}
//-----------------------------ENREGISTREMENT PHOTO------------------------------------
if($_POST)
{
    $photobdd = '';
    if(isset($_GET['action']) && $_GET['action'] == 'modification')
    {
        $photobdd = $_POST['photoActuelle'];
    }

    if(!empty($_FILES['photo']['name']))
    {
        $nomPhoto = $_FILES['photo']['name'];
        //echo $nomPhoto . '<hr>';

        $photobdd = URL . "img/$nomPhoto";
       // echo $photobdd . '<hr>';

        $photoDossier = RACINE_SITE . "/$nomPhoto";
       // echo $photoDossier . '<hr>';

        // copy() : fonction predefinie permettant de copier la photo dans le dossier 'photo' sur le serveur
        //arguments : copy('nom_temporaire','chemin de la photo vers le dossier photo')
        //copy($_FILES['photo']['tmp_name'], $photoDossier);


        //----------- TRAITEMENT EXTENSION PHOTO
        $listExt = [1 =>'.jpg', 2=>'.png',3=>'.jpeg'];
        $positionPhoto = strpos($_FILES['photo']['name'], '.'); 
        //echo $positionPhoto;
        $decoupeExt = substr($_FILES['photo']['name'], $positionPhoto); 
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
        
        $insertPhoto = $bdd->prepare("INSERT INTO galerie_img (photo) VALUES ( :photo)");
        $insertPhoto->bindValue(':photo', $photobdd, PDO::PARAM_STR);
        $insertPhoto->execute();
            
        }
        else
        {
        $insertPhoto = $bdd->prepare("UPDATE galerie_img (id_img) SET photo = :id-img");
        $insertPhoto->bindValue(':photo', $photobdd, PDO::PARAM_INT);
        $insertPhoto->execute();
        }
<<<<<<< HEAD
        // if(add($galerie))
        //  if(isset($_GET['select']) && $_get
        // 'choices'=> ['Galerie'=>'Galerie','Entretien'=>'Entretien','Eq'=>'Equipement'],

=======
        // if(add($categorie))

        //     if(isset($_GET['select']) && $_get
        //     'choices'  => [
        //         'Papeterie' => 'Papeterie',
        //         'Entretien' => 'Entretien',
        //         'Eq' => 'Equipement'
        //     ],




>>>>>>> 08478a32b3f76b9b3574716e1d73cc6c77761f04
    $validInsert = "<p class='col-md-5 mx-auto alert-success text-center'>L'image a bien été enregistré ! </p>";
}

}        //echo '<pre>';print_r($_POST); echo '</pre>';

?>
<ul class="col-md-4 list-group text-center mt-3 mx-auto">
<<<<<<< HEAD
    <li class="list-group-item "><a href="?action=affichage" class="text-dark">AFFICHAGE IMAGES</a></li>
    <li class="list-group-item "><a href="?action=ajout" class="text-dark">AJOUT </a><b>+</b></li>
</ul>
<?php

// ---------------------------------AFFICHAGE Photo------------------------------------
=======
    <li class="list-group-item "><a href="?action=affichage" class="text-dark">AFFICHAGE PRODUITS</a></li>
    <li class="list-group-item "><a href="?action=ajout" class="text-dark">AJOUT PRODUIT</a></li>
</ul>
<?php

// --------------------------------------------------------------------AFFICHAGE PRODUIT
>>>>>>> 08478a32b3f76b9b3574716e1d73cc6c77761f04

if(isset($_GET['action']) && $_GET['action'] == 'affichage')
{

$resultat = $bdd->query("SELECT * FROM galerie_img");

echo '<h1 class="display-4 text-center mt-3">Affichage des images</h1><hr>';

if(isset($validDelete)) echo $validDelete;

echo '<p class="text-center">Nombre d\'image(s) dans la boutique : <span class="badge badge-info">'. $resultat->rowCount(). '</span></p>';
echo '<table class="table-dark table bordered text-center"><tr>';
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
    echo '</tr>';
    foreach($galerie_img as $key => $value)
    {
        if($key =='photo'){
        echo "<td><img src='$value' alt='' class='img-thumbnail'></td>";
        echo "<td>$value</td>";
    }

    }
    echo "<td><a href='?action=modification&id_img=$galerie_img[id_img]' class='text-info far fa-edit'></a></td>"; 
    echo "<td><a href='?action=suppression&id_img=$galerie_img[id_img]' class='text-info fas fa-trash-alt'></a></td>";

}
echo '</tr>';
echo '</table>';
}
?>

<style>
    .img-thumbnail {
        max-width: 30% !important;
    }
</style>


<?php if(isset($_GET['action']) && ($_GET['action'] == 'ajout' || $_GET['action'] == 'modification')): 

if(isset($id_img)) // $_GET['id_img']
{
    // On selectionne en BDD toute les donnee du produit via l'id_img envoyé dans l'url
    $resultat = $bdd->prepare("SELECT * FROM galerie_img WHERE id_img = :id_img");
    $resultat->bindValue(':id_img',$id_img,PDO::PARAM_INT);
    $resultat->execute();

    $imgActuel = $resultat->fetch(PDO::FETCH_ASSOC);
    //echo '<pre>' ; print_r($produitActuel);echo '</pre>';
}

$galerie = (isset($img_actuel['galerie'])) ? $img_actuel['galerie'] : '';
$photo = (isset($img_actuel['photo'])) ? $img_actuel['photo'] : '';

?>
<h1 class="display-4 text-center text-success mt-3"><?=ucfirst($action); ?> d'une <b>Image</b></h1>
<hr>


<div class="ecran">

    <form method="post" enctype="multipart/form-data" class="col-md-6 mx-auto" action="">

<<<<<<< HEAD
        <div class="form-group col-md-4 text-center mx-auto border">
            <label for="public">Photo</label>

            <div class="custom-file mx-auto border border-dark rounded">
                <input type="hidden" class="custom-file mx-auto border" id="photo" name="photoActuelle" value="<?= $photo ?>">
                <input type="file" class="custom-file mx-auto" id="photo" name="photo" value="<?= $photo ?>">

                <?php if(isset($erreurPhoto)) echo $erreurPhoto; ?></div>

                <label for="selection" class="mt-3">Galerie</label>
                <select id="categories" class="form-control col-md-4 mx-auto" name="selection" placeholder="Entrer catégories">
                    <option value="3D"  <?php  echo 'selected' ?>>3D</option>
                    <option value="NET" <?php  echo 'selected' ?>>NET</option>
                    <option value="EV"  <?php  echo 'selected' ?>>EV</option>
                    <option value="G3D" <?php  echo 'selected' ?>>G3D</option>
                    <option value="GNET"<?php  echo 'selected' ?>>GNET</option>
                    <option value="GEV" <?php  echo 'selected' ?>>GEV</option>
                </select>

        <button type="submit" class="col-md-6 mt-2 btn btn-info mx-auto text-center"><?=ucfirst($action);?> Image</button>
=======
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
                <label for="selection">select</label>
                <select id="categories" class="form-control" name="selection" placeholder="Entrer catégories">
                    <option value="3D"  <?php if($value == '3D') echo 'selected' ?>>3D</option>
                    <option value="NET" <?php if($value == 'NET') echo 'selected' ?>>NET</option>
                    <option value="EV"  <?php if($value == 'EV') echo 'selected' ?>>EV</option>
                    <option value="G3D" <?php if($value == 'G3D') echo 'selected' ?>>G3D</option>
                    <option value="GNET"<?php if($value == 'GNET') echo 'selected' ?>>GNET</option>
                    <option value="GEV" <?php if($value == 'GEV') echo 'selected' ?>>GEV</option>
                </select>
            </div>
        </div>



>>>>>>> 08478a32b3f76b9b3574716e1d73cc6c77761f04

        <?php if(isset($validInsert)) echo $validInsert; ?>
        <?php if(isset($validUpdate)) echo $validUpdate; ?>
        <?php if(isset($validDelete)) echo $validDelete; ?>

        <input type="hidden" name="photoActuelle" id="photoAxctuelle" value=" <?= $photo ?>">

        <?php if(!empty($photo)): ?>
        <em>Vous pouvez uploader une nouvelle photo si vous shouaitez la changer</em>
        <img src="<?=$photo ?>" alt="<?= $titre ?>" class="col-md-12 mx-auto d-block">
        <?php endif; ?>

    </form>

</div>

<?php 
endif; ?>