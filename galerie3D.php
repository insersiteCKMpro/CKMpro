<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title h1 mb-5">Bienvenue dans la Galerie CKMPRO</h1>
        </div>

        <div class="align-items-center mx-auto text-center mb-5">
            <button class="btn btn-default filter-button" data-filter="all">Toutes Catégories</button>
            <button class="btn filter-button Background-Jaune" data-filter="Categorie3D ">3D</button>
            <button class="btn filter-button Background-Bleu" data-filter="CategorieNettoyage">Nettoyage</button>
            <button class="btn filter-button Background-Vert" data-filter="CategorieEV">Espaces Verts</button>
        </div>
        <br/>

        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="gallery_product p-0 rounded col-lg-4 col-md-4 col-sm-4 col-xs-12 filter Categorie3D zoom border border-secondary">
                <img src="img/Galerie/3D/3D-cafard.jpg" class="img-responsive">
            </div>

            <div class="gallery_product p-0 rounded col-lg-4 col-md-4 col-sm-4 col-xs-12 filter Categorie3D zoom border border-secondary">
                <img src="img/Galerie/3D/3D-produit.jpg" class="img-responsive">
            </div>

            <div class="gallery_product p-0 rounded col-lg-4 col-md-4 col-sm-4 col-xs-12 filter Categorie3D zoom border border-secondary">
                <img src="img/Galerie/3D/3D-rat.jpg" class="img-responsive">
            </div>

            <div class="gallery_product p-0 rounded col-lg-4 col-md-4 col-sm-4 col-xs-12 filter CategorieNettoyage zoom border border-secondary">
                <img src="img/Galerie/NET/NET-Homme-Karcher.jpg" class="img-responsive">
            </div>

            <div class="gallery_product p-0 rounded col-lg-4 col-md-4 col-sm-4 col-xs-12 filter CategorieNettoyage zoom border border-secondary">
                <img src="img/Galerie/NET/NET-Homme-Terrasse-Nettoyage.jpg" class="img-responsive">
            </div>

            <div class="gallery_product p-0 rounded col-lg-4 col-md-4 col-sm-4 col-xs-12 filter CategorieNettoyage zoom border border-secondary">
                <img src="img/Galerie/NET/NET-Homme-Karcher-Terrase.jpg" class="img-responsive">
            </div>

            <div class="gallery_product p-0 rounded col-lg-4 col-md-4 col-sm-4 col-xs-12 filter CategorieEV zoom border border-secondary">
                <img src="img/Galerie/EV/EV-Service-Taillage-Haie.jpg" class="img-responsive">
            </div>

            <div class="gallery_product p-0 rounded col-lg-4 col-md-4 col-sm-4 col-xs-12 filter CategorieEV zoom border border-secondary">
                <img src="img/Galerie/EV/EV-Entretient-Espace-Vert.jpg" class="img-responsive">
            </div>

            <div class="gallery_product p-0 rounded col-lg-4 col-md-4 col-sm-4 col-xs-12 filter CategorieEV zoom border border-secondary">
                <img src="img/Galerie/EV/EV-Taille-Haie-Jardin.jpg" class="img-responsive">
            </div>

        </div>
    </div>
    </div>
</section>

<script>

$(document).ready(function(){

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    }
    else
    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});


</script>

<div class="Background-Jaune">
<?php 
    require_once("include/footer.php");
?>
</div>