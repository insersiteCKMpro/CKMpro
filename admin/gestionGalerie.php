<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <title>CKMpro</title>
</head>

<style>
.img-thumbnail 
{
    max-width: 30% !important;
}
</style>

<?php

require_once('../include/init.php');
extract($_POST);
extract($_GET); // $_GET['id_img'] devient --> $id_img

//------------------------------SUPRESSION PRODUIT---------------------------------------------
if(isset($_GET['action']) &&  $_GET['action'] == 'suppression')
{
    $data = $bdd->query("SELECT photo FROM galerie_img WHERE id_img = '$_GET[id_img]'"); 
    $data = $bdd->prepare("DELETE FROM galerie_img WHERE id_img = :id_img");
    $data->bindValue(':id_img', $_GET['id_img'], PDO::PARAM_INT);
    $data->execute();

    $_GET['action']='affichage'; // quand on supprime on reste sur la page
    $validDelete= "<p class='col-md-3 mx-auto alert-success text-center'>La photo a bien été supprimé!</p>";
}
//---------------------------------ENREGISTREMENT PHOTO----------------------------------------
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
 
        //----------- TRAITEMENT EXTENSION PHOTO
        $listExt = [1 =>'.jpg', 2=>'.png',3=>'.jpeg'];
        $positionPhoto = strpos($_FILES['photo']['name'], '.');  
        //echo $positionPhoto;
        $decoupeExt = substr($_FILES['photo']['name'], $positionPhoto); 
        // echo $decoupeExt;

        $extension = array_search($decoupeExt,$listExt);
        if($extension ==false)
        {
            $erreurPhoto = '<p class="font-italic text-danger">Format photo non pris en compte</p>';
            $erreur = true;
        }
        if($extension !== false)
        {
            copy($_FILES['photo']['tmp_name'],$photoDossier);
        }
    }

    if(!isset($erreur))
    {
            if(isset($_GET['action']) && $_GET['action'] == 'ajout')
        {
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

    $validInsert = "<p class='col-md-3 mx-auto alert-success text-center'>L'image a bien été enregistré !</p>";
}

}        //echo '<pre>';print_r($_POST); echo '</pre>';

?>
<ul class="col-md-4 list-group text-center mt-3 mx-auto">
    <li class="list-group-item "><a href="?action=affichage" class="text-dark">Affichage images</a></li>
    <li class="list-group-item "><a href="?action=ajout" class="text-dark">Ajout images</a></li>
</ul>
<?php

// ------------------------------AFFICHAGE PRODUIT----------------------------------------------

if(isset($_GET['action']) && $_GET['action'] == 'affichage')
{

$resultat = $bdd->query("SELECT * FROM galerie_img");

echo '<h1 class="display-4 text-center mt-3">Affichage des images</h1><hr>';

if(isset($validDelete)) echo $validDelete;

        echo '<p class="text-center">Nombre d\'image(s) dans la boutique : <span class="badge badge-info">'. $resultat->rowCount(). '</span></p>';
        echo '<table class="table-dark table bordered text-center"><tr>';
        for($i =1; $i < $resultat->columnCount();$i++)
        {
            $colonne = $resultat->getColumnMeta($i);
            echo "<th>$colonne[name]</th>";
        }
        echo '<th>Modif</th>'; 
        echo '<th>Supp</th>';
        echo '</tr>';
        while($galerie_img = $resultat->fetch(PDO::FETCH_ASSOC))
        {
            //echo '<pre>'; print_r($galerie_img);echo'<pre>';
            echo '</tr>';
            foreach($galerie_img as $key => $value)
            {
                if($key =='photo'){
                echo "<td><img src='$value' alt='' class='img-thumbnail'></td>";
                echo "<td>$value</td>";
            }
                
            }
            echo "<td><a href='?action=modification&id_img=$galerie_img[id_img]' class='text-info far fa-edit'</a></td>"; 
            echo "<td><a href='?action=suppression&id_img=$galerie_img[id_img]' class='text-info fas fa-trash-alt'</a></td>";
            
        }
        echo '</tr>';
        echo '</table>';
        }
        ?>



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
<h1 class="display-4 text-center text-success mt-3"><b><?=ucfirst($action);?> Image</b></h1>

<hr>

<div class="ecran">
    <form method="post" enctype="multipart/form-data" class="col-md-6 mx-auto"action="">
        <div class="form-group col-md-6 text-center mx-auto">
            <label for="public">Photo</label>
            <div class="custom-file">
                <input type="hidden" class="custom-file-input" id="photo" name="photoActuelle" value="<?= $photo ?>">
                <input type="file" class="custom-file-input" id="photo" name="photo" value="<?= $photo ?>">
                <label class="custom-file-label text-start" for="photo" aria-describedby="photo">Choisir Photo</label>
                <?php if(isset($erreurPhoto)) echo $erreurPhoto; ?>
            </div>
            <div class="form-group">
                <label for="galerie" class="mt-3">Selectionner votre galerie</label>
                <select class="form-control" id="galerie" name="galerie" placeholder="selectionner votre galerie">
                    <option value="NET" <?php  if($galerie == 'NET')  echo 'selected'?>>NET</option>
                    <option value="EV"  <?php  if($galerie == 'EV')   echo 'selected'?>>EV</option>
                    <option value="G3D" <?php  if($galerie == 'G3D')  echo 'selected'?>>G3D</option>
                    <option value="GNET"<?php  if($galerie == 'GNET') echo 'selected'?>>GNET</option>
                    <option value="GEV" <?php  if($galerie == 'GEV')  echo 'selected'?>>GEV</option>
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