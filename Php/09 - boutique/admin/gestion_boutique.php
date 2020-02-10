<?php
require_once('../include/init.php');
require_once('../include/header.php');
?>

<!--
    1. realiser un formulaire HTML correspondant a la table 'produit' de la BDD 'boutique' (sauf id_produit)
    3. controler en PHP que l'on receptionne bien les données du  formulaire.
-->
<h1 class="display-4 text-info text-center mt-2">Gestion de la boutique</h1><hr>

<form method="post" class='col-md-6 mx-auto'>

        <div class="form-group">
            <label for="reference">Référence</label>
            <input type="text" class="form-control" id="reference" name="reference" placeholder="Entrer reference" value="">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="categorie">Catégorie</label>
                <input type="password" class="form-control" id="categorie" name="categorie" placeholder="Entrer categorie">
            </div>
            <div class="form-group col-md-6">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrer titre">
            </div>
        </div>

        <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Entrer description" value="">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="couleur">Couleur</label>
                <input type="text" class="form-control" id="couleur" name="couleur" placeholder="Entrer couleur">
            </div>
            <div class="form-group col-md-6">
                <label for="taille">Taille</label>
                <select id="taille" class="form-control" name="taille">
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="public">Public</label>
                <select id="public" class="form-control" name="public">
                    <option value="m">Homme</option>
                    <option value="f">Femme</option>
                    <option value="mixte">Mixte</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
        </div>

        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="prix">Prix</label>
                    <input type="text" class="form-control" id="prix" name="prix" placeholder="Entrer prix">
                </div>
                <div class="form-group col-md-6">
                    <label for="stock">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock" placeholder="Entrer stock">
                </div>
        </div>

        <button type="submit" class="btn btn-info mb-4">Enregistrer</button>

</form>

<?php 
require_once('../include/footer.php');
?>
