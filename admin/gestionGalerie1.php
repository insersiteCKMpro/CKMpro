<?php
require_once('../include/init.php');

extract($_POST);
extract($_GET);

<<<<<<< HEAD:admin/gestionGalerie1.php
echo '<pre>';print_r($_GET); echo '</pre>';
echo '<pre>';print_r($_POST); echo '</pre>';
=======

>>>>>>> 24f3cca8eee968ff94974e7baf89ada1778d647f:admin/gestionGalerie.php

//----------------SUPRESSION PRODUIT

if(isset($_GET['action']) &&  $_GET['action'] == 'suppression')
{
    $data = $bdd->query("SELECT galerie FROM galerie_img WHERE id_img = '$_GET[id_img]'"); // on selectionne la photo en BDD pour l'inclure dans le message de validation
    $ref = $data->fetch(PDO::FETCH_ASSOC);

    $data = $bdd->prepare("DELETE FROM galerie_img WHERE id_img = :id_img");
    $data->bindValue(':id_img', $_GET['id_img'], PDO::PARAM_INT);
    $data->execute();

    $_GET['action'] ='affichage'; // valeur de l'indice action pour rediriger sur affichage image

    $validDelete ='<div class="col-md-6 mx-auto alert alert-success text-center">
<<<<<<< HEAD:admin/gestionGalerie1.php
    Le produit ref<strong>' . $ref['galerie'] . '</strong> a bien été supprimé !!</strong></div>';
=======
    Le produit de la galerie <strong>' . $ref['galerie'] . '</strong> a bien été supprimé !!</strong></div>';
>>>>>>> 24f3cca8eee968ff94974e7baf89ada1778d647f:admin/gestionGalerie.php
}
//--------------------------ENREGISTREMENT PHOTO
if($_POST)
{
    $_photo_bdd = '';
    if(isset($_GET['action']) && $_GET['action'] == 'modification')
    {
        $photo_bdd = $_POST['photo_actuel'];
    }
    if(!empty($_FILES['photo']['name']))
    {
        // on concatene la reference saisie dans le formulaire avec le nom de la photo recupere dans la superglobale $_FILES
        $nom_photo = $_POST['galerie'] .'-'.  $_FILES['photo']['name'];
        //echo $nom_photo . '<hr>';

        // On definit l'URL de la photo jusqu'au dossier 'photo' sur le serveur, c'est ce que l'on enregistrera dans la BDD
        $photo_bdd = URL . "img/$nom_photo";
        // echo $photo_bdd . '<hr>';

        $photo_dossier = RACINE_SITE . "img/$nom_photo";// On définit le chemin physique de la photo du dossier 'photo' sur le serveur, c'est ce que l'on utilisera pour copier la photo dans le dossier 'photo'
        // echo $photo_dossier . '<hr>';
        
        copy($_FILES['photo']['tmp_name'], $photo_dossier);
    }

        if(isset($_GET['action']) && $_GET['action'] == 'ajout')
        {
        $data = $bdd->prepare("INSERT INTO galerie_img (photo , galerie) VALUES (:photo, :galerie)");

        $_GET['action'] = 'affichage' ;


        $validInsert='<div class="col-md-6 mx-auto alert alert-success text-center"> Le produit ref <strong>' . $_POST['galerie'] . '</strong> a bien été rajouté !!</strong></div>';
        }
        else
        {
            $data = $bdd->prepare("UPDATE galerie_img SET photo = :photo,galerie = :galerie WHERE id_img = :id_img");

            $data->bindValue(':id_img', $_GET['id_img'], PDO::PARAM_INT);

            $_GET['action'] ='affichage'; // quand on supprime on reste sur la page
            
            $validDelete='<div class="col-md-4 mx-auto alert alert-success text-center"> La photo de la galerie <strong>' . $_POST['galerie'] . '</strong> a bien été modifié !!</strong></div>';
        }
        $data->bindValue(':photo' , $photo_bdd, PDO::PARAM_STR);

        $data->bindValue(':galerie' , $_POST['galerie'], PDO::PARAM_STR);
    
        $data->execute();
       
}

require_once('../include/header.php');
?>

<ul class="col-md-4 list-group text-center mt-3 mx-auto">
    <li class="list-group-item "><a href="?action=affichage" class="text-dark">AFFICHAGE IMAGES</a></li>
    <li class="list-group-item "><a href="?action=ajout" class="text-dark">AJOUT </a></li>
</ul>


<!---------------AFFICHAGE PRODUIT----------------------------->
<?php

if(isset($_GET['action']) && $_GET['action'] == 'affichage')
{

<<<<<<< HEAD:admin/gestionGalerie1.php
    <h1 class="display-4 text-center mt-3">Affichage des Images</h1><hr>
        <?php $validInsert; ?>
        <?php $validUpdate; ?>
        <?php $validDelete;?>
    


    <p class="text-center"><span class="badge badge-info"><?= $data->rowCount()?></span> image(s) dans les galeries : <p>
    
    <table class="table-dark mx-auto text-center col-md-12"><tr>
    <?php for($i =0; $i < $data->columnCount(); $i++):
        $colonne = $data->getColumnMeta($i);
        //echo '<pre> ; print_r($colonne) ; echo '</pre>'
    ?>
        <th><?= ucfirst($colonne['name']) ?></th>
    <?php endfor; ?>
        <th>Modif</th>
        <th>Supp</th>
    </tr>
    <?php while($emp= $data->fetch(PDO :: FETCH_ASSOC));//$galerie_img 
    ?>
    <tr>
    <?php foreach($data as $key => $value): //$data
        if($key =='photo'):
    ?>        

        <td><img src="<?$value ?>"  alt=" <?=$emp['galerie'] ?> 
        "class="img-thumbnail"></td>
                
        <?php else:
        
        ?>

            <td><?=$value ?></td> <!--$key-->
                
        <?php 
        endif; 
        endforeach; 
        ?>

           <!-- /* 
           <?php echo '<pre>' ; var_dump($_GET); echo '</pre>'; ?>
            
            <?php echo '<pre>' ; 
            var_dump($_POST); echo '</pre>'; ?>*/-->

        <td><a href="?action=modification&id_img=<?= $emp['id_img'] ?>"><i class="text-info far fa-edit"></i></a></td>
        <td><a href="?action=suppression&id_img=<?= $emp['id_img'] ?>"><i class="text-info fas fa-trash-alt"></i></a></td>
        </tr>
 
        </table>

     


=======
$resultat = $bdd->query("SELECT * FROM galerie_img");

echo '<h1 class="display-4 text-center mt-3">Affichage des produits</h1><hr>';

if(isset($validDelete)) echo $validDelete;

echo '<p class="mx-auto text-center">Nombre de produit(s) dans la boutique : <span class="badge badge-info">'. $resultat->rowCount(). '</span></p>';
echo '<table class="table table-dark table table bordered text-center col-md-6 mx-auto"><tr>';
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
>>>>>>> 24f3cca8eee968ff94974e7baf89ada1778d647f:admin/gestionGalerie.php

<?php if(isset($_GET['action']) && ($_GET['action'] == 'ajout' || $_GET['action'] == 'modification')): 

if(isset($_GET['id_img'])) // $_GET['id_img']
{
    // On selectionne en BDD toute les données de la photo via l'id_img envoyé dans l'url
    $data = $bdd->prepare("SELECT * FROM galerie_img WHERE id_img = :id_img");
    $data->bindValue(':id_img',$_GET['id_img'], PDO ::PARAM_INT);
    $data->execute();

    $img_actuel = $data->fetch(PDO ::FETCH_ASSOC);
<<<<<<< HEAD:admin/gestionGalerie1.php
    echo '<pre>' ; print_r($img_actuel); echo '</pre>';
=======

>>>>>>> 24f3cca8eee968ff94974e7baf89ada1778d647f:admin/gestionGalerie.php
}
$photo = (isset($img_actuel['photo'])) ? $img_actuel['photo'] : '';
$galerie = (isset($img_actuel['galerie'])) ? $img_actuel['galerie'] : '';

?>

<<<<<<< HEAD:admin/gestionGalerie1.php
<h1 class="display-4 text-center text-success mt-3"><?=ucfirst($_GET['action']) ?> d'une image </h1><hr>
=======
<h1 class="display-4 text-center text-success mt-3"><?=ucfirst($_GET['action']) ?> d'une image </h1>
>>>>>>> 24f3cca8eee968ff94974e7baf89ada1778d647f:admin/gestionGalerie.php

<hr>


<<<<<<< HEAD:admin/gestionGalerie1.php
    <form method="post" enctype="multipart/form-data" class="col-md-6 mx-auto">
=======
<div class="ecran mx-auto text-center mb-3">

    <form method="post" enctype="multipart/form-data" class="col-md-3 mx-auto rounded border border-dark">
>>>>>>> 24f3cca8eee968ff94974e7baf89ada1778d647f:admin/gestionGalerie.php

        <div class="form-group col-md-9 text-center mx-auto">
            <label for="photo">Photo</label>
<<<<<<< HEAD:admin/gestionGalerie1.php
            <input type="file" class="custom-file mx-auto" id="photo" name="photo" value="">
=======
            <input type="file" class="custom-file mx-auto border" id="photo" name="photo" value="">
>>>>>>> 24f3cca8eee968ff94974e7baf89ada1778d647f:admin/gestionGalerie.php
            <input type="hidden" class="custom-file mx-auto border" id="photo" name="photo_actuel" value="<?=$photo?>">
        </div>

        <?php if(!empty($photo)): ?>
        <em>Vous pouvez uploader une nouvelle photo si vous shouaitez la changer</em><br>
        <img src="<?=$photo ?>" alt="<?=$galerie ?>" class="col-md-12 mx-auto d-block">
        <?php endif; ?>

            <div class="form-group col-md-6 mx-auto text-center mt-3">
                <label for="galerie">Galerie</label>
                <select id="galerie" class="form-control col-md-5 mx-auto text-center" name="galerie" placeholder="Entrer Galerie" value="<?=$galerie?>">
                    <option value="3D"<?php if ($galerie == '3D') echo 'selected' ?>>3D</option>
                    <option value="NET"<?php if ($galerie == 'NET') echo 'selected' ?>>NET</option>
                    <option value="EV"<?php if ($galerie == 'EV') echo 'selected' ?>>EV</option>
                    <option value="G3D"<?php if ($galerie == 'G3D') echo 'selected' ?>>G3D</option>
                    <option value="GNET"<?php if ($galerie == 'GNET') echo 'selected' ?>>GNET</option>
                    <option value="GEV"<?php if ($galerie == 'GEV') echo 'selected' ?>>GEV</option>
                </select>
            </div>
<<<<<<< HEAD:admin/gestionGalerie1.php
       
        <button type="submit" class="col-md-6 mt-2 btn btn-info mx-auto text-center">
=======
    
        <button type="submit" class="col-md-4 mt-2 mb-3 btn btn-info mx-auto text-center">
>>>>>>> 24f3cca8eee968ff94974e7baf89ada1778d647f:admin/gestionGalerie.php
            <?= ucfirst($_GET['action']);?> Image</button>
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
<<<<<<< HEAD:admin/gestionGalerie1.php
        <style>
            .img-thumbnail { max-width: 15% !important;}
        </style>
=======
>>>>>>> 24f3cca8eee968ff94974e7baf89ada1778d647f:admin/gestionGalerie.php
