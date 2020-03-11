

<?php
require_once('../include/init.php');
extract($_POST);
extract($_GET);


//echo '<pre>';print_r($_GET); echo '</pre>';
//echo '<pre>';print_r($_POST); echo '</pre>';

//----------------SUPRESSION PRODUIT

if(isset($_GET['action']) &&  $_GET['action'] == 'suppression')
{
    $data = $bdd->query("SELECT photo FROM galerie_img WHERE id_img = '$_GET[id_img]'"); // on selectionne le référence en BDD pour l'inclure dans le message de validation
    $ref = $data->fetch(PDO::FETCH_ASSOC);

    $data = $bdd->prepare("DELETE FROM galerie_img WHERE id_img = :id_img");
    $data->bindValue(':id_img', $_GET['id_img'], PDO::PARAM_INT);
    $data->execute();

    $_GET['action']='affichage'; // valeur de l'indice action pour rediriger sur affichage image

    $validDelete='<p class="col-md-5 mx-auto alert-success text-center">
    La photo' . $ref['galerie'] . 'a bien été supprimé!</p>';
}
//--------------------------ENREGISTREMENT PHOTO
if($_POST)
{
    $_photo_bdd = '';
    if(isset($_GET['action']) && $_GET['action'] == 'modification')
    {
        $photo_bdd = $_POST['photo_actuelle'];
    }
    if(!empty($_FILES['photo']['name']))
    {
        // on concatene la reference saisie dans le formulaire avec le nom de la photo recupere dans la superglobale $_FILES
        $nom_photo = $_FILES['photo']['name'];
        //echo $nom_photo . '<hr>';

        // On definit l'URL de la photo jusqu'au dossier 'photo' sur le serveur, c'est ce que l'on enregistrera dans la BDD
        $photo_bdd = URL . "img/$nom_photo";
        // echo $photo_bdd . '<hr>';

        $photo_dossier = RACINE_SITE . "/$nom_photo";// On définit le chemin physique de la photo du dossier 'photo' sur le serveur, c'est ce que l'on utilisera pour copier la photo dans le dossier 'photo'
        // echo $photo_dossier . '<hr>';
        
        copy($_FILES['photo']['tmp_name'], $photo_dossier);
    }

        if(isset($_GET['action']) && $_GET['action'] == 'ajout')
        {
        $data = $bdd->prepare("INSERT INTO galerie_img ( photo , galerie) VALUES ( :photo, :galerie)");

        $_GET['action'] = 'affichage' ;

        $validInsert= '<p class="col-md-5 mx-auto alert-success text-center">L\'image de la galerie a bien été ajouté ! </p>';

        }
        else
        {
            $data = $bdd->prepare("UPDATE galerie_img SET photo = :photo,galerie = :galerie WHERE id_img = :id_img");

            $data->bindValue(':id_img', $_GET['id_img'], PDO::PARAM_STR);

            $_GET['action']='affichage'; // quand on supprime on reste sur la page
            
            $validModif='<p class="col-md-5 mx-auto alert-success text-center"> 
            L\'image a bien été modifié !</p>';
        }
        $data->bindValue(':photo' , $photo_bdd, PDO::PARAM_STR);
        $data->bindValue(':galerie' , $_POST['galerie'], PDO::PARAM_STR);
    
        $data->execute();
    
}

require_once("../include/header.php");

?>

<ul class="col-md-4 list-group text-center mt-3 mx-auto">
    <li class="list-group-item "><a href="?action=affichage" class="text-dark">AFFICHAGE IMAGES</a></li>
    <li class="list-group-item "><a href="?action=ajout" class="text-dark">AJOUT </a></li>
</ul>


<!-----------------AFFICHAGE PRODUIT----------------------------->
<?php
if(isset($_GET['action']) && $_GET['action'] == 'affichage')
{

$resultat = $bdd->query("SELECT * FROM galerie_img");

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
    echo "<td><a href = '?action=modification&id_img=$galerie_img[id_img]' class='text-info'><i class='far fa-edit'></i></a></td>"; // on crée manuelleùment 2 cellules supplémentaire pour chaque produit
    echo "<td><a href='?action=suppression&id_img=$galerie_img[id_img]' class='text-info'><i class='fas fa-trash-alt' onclick='return(confirm(\"En êtes-vous certain ? \"));'></i></a></td>";
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

if(isset($_GET['id_img'])) // $_GET['id_img']
{
    // On selectionne en BDD toute les données de la photo via l'id_img envoyé dans l'url
    $data = $bdd->prepare("SELECT * FROM galerie_img WHERE id_img = :id_img");
    $data->bindValue(':id_img',$_GET['id_img'], PDO::PARAM_INT);
    $data->execute();

    $img_actuel = $data->fetch(PDO::FETCH_ASSOC);
    echo '<pre>' ; print_r($img_actuel); echo '</pre>';
}
$photo = (isset($img_actuel['photo'])) ? $img_ctuel['photo'] : '';
$galerie = (isset($img_actuel['galerie'])) ? $imgActuel['galerie'] : '';
?>

<h1 class="display-4 text-center text-success mt-3"><?=ucfirst($_GET['action']) ?> d'une image </h1>
<?php $valid?>
<hr>


<div class="ecran">

    <form method="post" enctype="multipart/form-data" class="col-md-6 mx-auto" action="">

        <div class="form-group col-md-4 text-center mx-auto border">
            <label for="photo">Photo</label>
            <input type="file" class="custom-file mx-auto" id="photo" name="photo" >
            <input type="hidden" class="custom-file mx-auto border" id="photo" name="photo_actuelle" value="<?=$photo?>">
        </div>
        <?php if(!empty($photo)): ?>
        <em>Vous pouvez uploader une nouvelle photo si vous shouaitez la changer</em>
        <img src="<?=$photo ?> <?=$galerie ?>" class="col-md-12 mx-auto d-block">
        <?php endif; ?>

            <div class="form-group col-md-6 mx-auto text-center mt-3">
                <label for="galerie">Galerie</label>
                <select id="galerie" class="form-control col-md-8 mx-auto text-center" name="galerie" placeholder="Entrer Galerie" value="<?=$galerie?>">
                    <option value="3D"<?php if ($galerie == '3D') echo 'selected' ?>>3D</option>
                    <option value="NET"<?php if ($galerie == 'NET') echo 'selected' ?>>NET</option>
                    <option value="EV"<?php if ($galerie == 'EV') echo 'selected' ?>>EV</option>
                    <option value="G3D"<?php if ($galerie == 'G3D') echo 'selected' ?>>G3D</option>
                    <option value="GNET"<?php if ($galerie == 'GNET') echo 'selected' ?>>GNET</option>
                    <option value="GEV"<?php if ($galerie == 'GEV') echo 'selected' ?>>GEV</option>
                </select>
            </div>
    
        <button type="submit" class="col-md-6 mt-2 btn btn-info mx-auto text-center">
            <?=ucfirst($action);?> Image</button>
    </form>

</div>
<?php endif; ?>
<?php require_once('../include/footer.php');?>
        <!--
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
        }-->