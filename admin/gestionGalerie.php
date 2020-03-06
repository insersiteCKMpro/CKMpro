<?php 
require_once('../include/init.php');

// echo '<pre>'; print_r($_POST); echo '</pre>';
// echo '<pre>'; print_r($_FILES); echo '</pre>';

//---------- SUPPRESSION 
if(isset($_GET['action']) &&  $_GET['action'] == 'suppression')
{
    $data = $bdd->query("SELECT nom FROM galerie_img WHERE id_img = '$_GET[id_img]'"); // on selectionne le référence en BDD pour l'inclure dans le message de validation
    $id_img = $data->fetch(PDO::FETCH_ASSOC); 
    //echo '<pre>'; print_r($id_img); echo '</pre>';

    // Exo : Réaliser le traitement PHP permettant de supprimer un produit (requete préparée)
    $data = $bdd->prepare("DELETE FROM galerie_img WHERE id_img = :id_img");
    $data->bindValue(':id_img', $_GET['id_img'], PDO::PARAM_INT);
    $data->execute();

    $_GET['action'] = 'affichage'; // on affecte une nouvelle valeur à l'indice 'action' dans l'URL afin d'être redirigé sur l'affichage des produits 

    $valid .= '<div class="col-md-4 mx-auto alert alert-success text-center">La photo nom <strong>' . $nom['nom'] . '</strong> a bien été supprimé !</div>';

}

if($_POST)
{
    $photo_bdd = '';
    // Si l'indice 'name' est différent de vide dans la superglobale $_FILES, cela veut dire que noua avons bien uploader une image / photo 
    
    // Si on souhaite conserver la même photo en cas de modification, on affecte la valeur du champs photo caché ('hidden') dans la variable $photo_bdd, c'est dû au fait qu'un champ type 'file' ne peux pas avoir d'attribut 'value'
    if(isset($_GET['action']) && $_GET['action'] == 'modification')
    {
        $photo_bdd = $_POST['photo_actuelle'];
    }

    if(!empty($_FILES['photo']['name']))
    {

        $nom_photo = $_FILES['photo']['name'];
        //echo $nom_photo . '<hr>'; // on concatène la référence saisie dans le formulaire avec le nom de la photo via la superglobale $_FILES

        $photo_bdd = URL . "img/$nom_photo"; // on définit l'URL de la photo qui sera conservé en BDD
        //echo  $photo_bdd . '<hr>';

        $photo_dossier = RACINE_SITE . "/$nom_photo"; // on définit la chemin physique de la photo vers le dossier phot, cela nous sert pour copier la photo dans le dossier 'photo'
        //echo $photo_dossier . '<hr>';

        copy($_FILES['photo']['tmp_name'], $photo_dossier); // on copie la photo direstement dans le dossier 'photo'. La fonction copy() reçoit 2 arguments:
        // - 1: Le nom temporaire de la photo 
        // - 2: le chemin du dossier 'photo' 
    }

    // On entre dans la condition IF seulement dans le cas où l'on a cliqué sur le lien 'ajout' d'un produit et par conséquent qu'on ai transmit 'action=ajout' dans l'URL 
    if(isset($_GET['action']) && $_GET['action'] == 'ajout')
    {
        $data = $bdd->prepare("INSERT INTO galerie_img (nom,categorie,photo) VALUES (:nom,:categorie,:photo)");

        $_GET['action'] = 'affichage'; // aprés l'insertion, on renvoi vers l'affichage des produits

        $valid = '<div class="col-md-4 mx-auto alert alert-success text-center">La photo a bien été enregistré !</div>';
    }
    else
    {
        // Exo : Réaliser le traitement PHP pour la modification d'un produit
        // prepare() + UPDATE
    }
    
   
    $data->bindValue(':id_img', $_POST['id_img'], PDO::PARAM_STR);
    $data->bindValue(':categorie', $_POST['categorie'], PDO::PARAM_STR); 
    $data->bindValue(':photo', $photo_bdd, PDO::PARAM_STR);
   
    
    $data->execute();

}


require_once('../include/header.php');
?>

<!-- ------- LIENS PRODUITS -->
<ul class="col-md-4 mx-auto list-group my-4">
  <li class="list-group-item text-center"><a href="?action=affichage" class="text-dark">Affichage photo</a></li>
  <li class="list-group-item text-center"><a href="?action=ajout" class="text-dark">Ajout photo</a></li>
</ul>

<!-- ------- AFFICHAGE PRODUIT(S) -->
<?php 
// On entre dans la condition IF seulement dans le cas où l'on a cliqué sur le lien 'affichage photo' et par conséquent que l'on a envoyé 'action=affichage' dans l'URL
if(isset($_GET['action']) && $_GET['action'] == 'affichage'):

    $data = $bdd->query("SELECT * FROM galerie_img");
?>
 
    <p class="text-center"><span class="badge badge-info"><?= $data->rowCount() ?></span> photo dans la galerie</p>

    <table class="table text-center mb-4"><tr>
    <?php for($i = 0; $i < $data->columnCount(); $i++): 
          $colonne = $data->getColumnMeta($i);
          //echo '<pre>'; print_r($colonne); echo '</pre>';  
    ?>
        <th><?= ucfirst($colonne['photo']) ?></th>
    <?php endfor; ?>
        <th>Edit</th>
        <th>Supp</th>
    </tr>
    <?php while($emp = $data->fetch(PDO::FETCH_ASSOC)): 
        //echo '<pre>'; print_r($emp); echo '</pre>';  
    ?>
    <tr>
        <?php foreach($emp as $key=> $value): 
            if($key == 'photo'): // Si l'indice est 'photo', on affiche la valeur dans l'attribut 'src' d'une balise 'img' poiur que la photo s'affiche
        ?>
            <td><img src="<?= $value ?>" alt="<?= $emp['nom'] ?>" class="img-thumbnail"></td>
        <?php else: // sinon pour toute les autres valeurs, on les stock dans des cellules <td> ?>
            <td><?= $value ?></td>
        <?php 
            endif;
              endforeach; 
        ?>
        <td><a href="?action=modification&id_img=<?= $emp['id_img'] ?>"><i class="far fa-edit text-dark"></i></a></td>
        <td><a href="?action=suppression&id_img=<?= $emp['id_img'] ?>"><i class="fas fa-trash-alt text-danger"></i></a></td>
    </tr>    
    <?php endwhile; ?>
    </table> 

<?php endif; ?>     
<!-- ------- FIN AFFICHAGE PRODUIT(S) -->

<?php if(isset($_GET['action']) && ($_GET['action'] == 'ajout' || $_GET['action'] == 'modification')): // On entre dans la condition IF seulement dans le cas où l'on a cliqué sur le lien 'ajout produit' et par conséquent que l'on a envoyé 'action=ajout' dans l'URL 

if(isset($_GET['id_img'])) // on contrôle si un ID a été passé dans l'URL, si c'est le cas, c'est que nous avons cliqué sur le lien 'modification'
{
    $data = $bdd->prepare("SELECT * FROM galeire_img WHERE id_img = :id_img");
    $data->bindValue(':id_img', $_GET['id_img'], PDO::PARAM_INT);
    $data->execute();// on selectionne les informations de la photo a modifié par rapport à l'ID envoyé dans l'URL
    $img_actuel = $data->fetch(PDO::FETCH_ASSOC); // on crée un tableau ARRAY 
    //echo '<pre>'; print_r($img_actuel);echo '</pre>';
}
// On stock chaque données du produit recupéré en BDD dans une variable 
//On appel chaque variable dans les attributs 'value' de chaque champ 'input'

$categorie = (isset($img_actuel['categorie'])) ? $img_actuel['categorie'] : '';
$photo = (isset($img_actuel['photo'])) ? $img_actuel['photo'] : '';

?>

<form method="post" enctype="multipart/form-data" class="col-md-6 mx-auto">

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="taille">categories</label>
        <select id="taille" class="form-control" name="taille">
            <option value="3D" <?php if($categorie == '3D') echo 'selected' ?>>3D</option>
            <option value="net" <?php if($categorie == 'net') echo 'selected' ?>>NET</option>
            <option value="ev" <?php if($categorie == 'ev') echo 'selected' ?>>EV</option>
            <option value="g3D" <?php if($categorie == 'g3d') echo 'selected' ?>>G3D</option>
            <option value="gnet" <?php if($categorie == 'gnet') echo 'selected' ?>>GNET</option>
            <option value="gev" <?php if($categorie == 'gev') echo 'selected' ?>>GEV</option>
        </select>
    </div>
</div>
    
    <div class="form-group col-md-6">
    <label for="photo">Photo</label>
    <input type="file" class="form-control" id="photo" name="photo" value="">
    <!-- Champ caché pour la photo permettant de recupérer l'URL de la photo via l'attribut 'value' -->
    <input type="hidden" name="photo_actuelle" value="<?= $photo ?>">
    </div>
    <?php if(!empty($photo)): ?>
        <em class="mx-auto">Vous pouvez uploder une nouvelle photo si vous souaitez la changer</em><br>
        <img src="<?= $photo ?>" alt="<?= $nom ?>" class="col-md-4 offset-md-4">
    <?php endif; ?>
</div>

<button type="submit" class="btn btn-info mb-4"><?= ucfirst($_GET['action']) ?></button>
</form>

<?php 
endif;
require_once('../include/footer.php');