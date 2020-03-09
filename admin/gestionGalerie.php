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
//--------------------------ENREGISTREMENT PHOTO
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
        $nomPhoto = $_POST[':galerie'] . '-'. $_FILES['photo']['name'];
        //echo $nomPhoto . '<hr>';

        // On definit l'URL de la photo jusqu'au dossirr 'photo' sur le serveur, c'est ce que l'on enregistrera dans la BDD
        $photobdd = URL . "img/$nomPhoto";
       // echo $photobdd . '<hr>';

       // On définit le chemin physique de la photo du dossier 'photo' sur le serveur, c'est ce que l'on utilisera pour copier la photo dans le dossier 'photo'
        $photoDossier = RACINE_SITE . "/$nomPhoto";
       // echo $photoDossier . '<hr>';
        // copy() : fonction predefinie permettant de copier la photo dans le dossier 'photo' sur le serveur
        //arguments : copy('nom_temporaire','chemin de la photo vers le dossier photo')
        copy($_FILES['photo']['tmp_name'], $photoDossier);


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

    
    
        if(isset($_GET['action']) && $_GET['action'] == 'ajout')
        {
        $insertPhoto = $bdd->prepare("INSERT INTO galerie_img (photo) VALUES ( :photo)");
        $insertPhoto->bindValue(':photo', $photobdd, PDO::PARAM_STR);
        $insertPhoto->execute();
        $validInsert = "<p class='col-md-5 mx-auto alert-success text-center'>L'image a bien été enregistré ! </p>";
        }
        else
        {
        
            $data = $bdd->prepare("UPDATE galerie_img SET photo = :photo,galerie = :galerie WHERE id_img = :id_img");

            $data->bindValue(':id_img', $_GET['id_img'], PDO::PARAM_STR);
            $_GET['action']='affichage'; // quand on supprime on reste sur la page
            $validUpdate = "<p class='col-md-5 mx-auto alert-success text-center'>L'image a bien été MODIFIER ! </p>";
        }
           
           $data->bindValue(':photo', $photo, PDO::PARAM_STR);
           $data->bindValue(':galerie', $galerie, PDO::PARAM_STR);
           $data->execute();
        
}

        //echo '<pre>';print_r($_POST); echo '</pre>';

?>
<ul class="col-md-4 list-group text-center mt-3 mx-auto">
    <li class="list-group-item "><a href="?action=affichage" class="text-dark">AFFICHAGE IMAGES</a></li>
    <li class="list-group-item "><a href="?action=ajout" class="text-dark">AJOUT </a><b>+</b></li>
</ul>
<?php

// --------------------------------------------------------------------AFFICHAGE PRODUIT

if(isset($_GET['action']) && $_GET['action'] == 'affichage')
{

$data = $bdd->query("SELECT * FROM galerie_img");

echo '<h1 class="display-4 text-center mt-3">Affichage des images</h1><hr>';

if(isset($validDelete)) echo $validDelete;

echo '<p class="text-center">Nombre d\'image(s) dans la boutique : <span class="badge badge-info">'. $data->rowCount(). '</span></p>';
echo '<table class="table-dark mx-auto text-center"><tr>';
for($i =0; $i < $data->columnCount();$i++)
{
    $colonne = $data->getColumnMeta($i);
    echo "<th>$colonne[name]</th>";
}
echo '<th>Modif</th>'; 
echo '<th>Supp</th>';
echo '</tr>';
while($emp = $data->fetch(PDO::FETCH_ASSOC))
{
    echo '</tr>';
    foreach($emp as $key => $value)
    {
        if($key =='photo'){
        echo "<td><img src='$value' alt='' $emp[galerie] class='img-thumbnail'></td>";
        
    }
    else
    echo "<td>$value</td>";
    }
    echo "<td><a href='?action=modification&id_img=$emp[id_img]' class='text-info far fa-edit'></a></td>"; 
    echo "<td><a href='?action=suppression&id_img=$emp[id_img]' class='text-info fas fa-trash-alt'></a></td>";
    echo '</tr>';
}
echo '</table>';

}
?>

<style>
    .img-thumbnail {
        max-width: 15% !important;
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



$galerie = (isset($img_actuel['galerie'])) ? $img_actuel['galerie'] : '';
$photo = (isset($img_actuel['photo'])) ? $img_actuel['photo'] : '';

?>
<h1 class="display-4 text-center text-success mt-3"><?=ucfirst($action); ?> d'une <b>Image</b></h1>
<hr>


<div class="ecran">

    <form method="post" enctype="multipart/form-data" class="col-md-6 mx-auto" action="">

        <div class="form-group col-md-4 text-center mx-auto border">
            <label for="public">Photo</label>

            <div class="custom-file mx-auto border border-dark rounded">
                <input type="hidden" class="custom-file mx-auto border" id="photo" name="photoActuelle" value="<?= $photo ?>">
                <input type="file" class="custom-file mx-auto" id="photo" name="photo" value="<?= $photo ?>">
                <!-- <label class="custom-file mx-auto" for="photo" aria-describedby="photo"></label> -->
                <?php if(isset($erreurPhoto)) echo $erreurPhoto; ?>
            </div>
                <div class="form-group col-md-6">
                <label for="galerie">Galerie</label>
                <select id="galerie" class="form-control col-md-4 mx-auto" name="galerie" placeholder="Entrer Galerie" value="<?=$galerie?>">
                    <option value="3D"<?php if ($galerie == '3D') echo 'selected' ?>>3D</option>
                    <option value="NET"<?php if ($galerie == 'NET') echo 'selected' ?>>NET</option>
                    <option value="EV"<?php if ($galerie == 'EV') echo 'selected' ?>>EV</option>
                    <option value="G3D"<?php if ($galerie == 'G3D') echo 'selected' ?>>G3D</option>
                    <option value="GNET"<?php if ($galerie == 'GNET') echo 'selected' ?>>GNET</option>
                    <option value="GEV"<?php if ($galerie == 'GEV') echo 'selected' ?>>GEV</option>
                </select>
                </div>
        <button type="submit" class="col-md-6 mt-2 btn btn-info mx-auto text-center"><?=ucfirst($action);?> Image</button>


        
        <?php if(isset($validInsert)) echo $validInsert; ?>
        <?php if(isset($validUpdate)) echo $validUpdate; ?>
        <?php if(isset($validDelete)) echo $validDelete; ?>

        <!-- Champ caché pour la photo permettant de recupérer l'URL de la photo via l'attribut 'value' -->
        <input type="hidden" name="photoActuelle" id="photoAxctuelle" value=" <?= $photo ?>">

        <?php if(!empty($photo)): ?>
        <em>Vous pouvez uploader une nouvelle photo si vous shouaitez la changer</em>
        <img src="<?=$photo ?>" alt="<?= $titre ?>" class="col-md-12 mx-auto d-block">
        <?php endif; ?>

    </form>

</div>

<?php 
endif; ?>