<?php
require_once('include/init.php');
require_once('include/header.php');
?>

<style>
body
{
    background-image: linear-gradient(to right bottom, #c4a347, #da8953, #de736e, #cd688c, #a968a5, #826bac, #556ca9, #1e6b9d, #006687, #005f6f, #085658, #204c44)!important;
}
}
.d-block
{
    border-radius:10%;
    text-align:center;
    font-size:2em;
    border:5px solid black;
}
.list-group-item 
{
    border-radius:30%;
    padding:20%;
    text-align:center;
    font-size:1.5em;
    background-color: #B13131;
    color:black;
    border:5px solid black;
}

.list-group-item:first-child
{
    border-radius:30%;
    
}
.h-100
{
    background-color:transparent;
    border:2px solid black;
}
.card-img, .card-img-top
{
    height:500px;
    width:100%;
}


</style>

<h1 class="text-center display-4 text-black my-3"><ins>Bienvenue dans les galeries CKMpro</ins></h1><hr>


<div class="row">

<div class="col-lg-3">

  <h1 class="my-4 text-black text-center"><ins>galerieEV</ins></h1><br>

  <div class="container-fluid">
    <div class="IMGHAUT">
    <div class="emplacement1">
      <a href='galerieespacevert.php'><img class="img-1"  onclick="openModal();currentSlide(1)" class="hover-shadow imgg1" >
    </div>
    </div>
    <div class="IMGMILIEU">
      <div class="emplacement2">
        <a href="#"><img class="img-2" onclick="openModal();currentSlide(2)" class="hover-shadow imgg2">
      </div>
      <div class="emplacement3">
      <a href="#"><img class="img-3" onclick="openModal();currentSlide(3)" class="hover-shadow imgg3">
      </div>
    </div>
    <div class="IMGBAS">
      <div class="emplacement4">
      <a href="#"><img class="img-4" onclick="openModal();currentSlide(1)" class="hover-shadow imgg4">
      </div>
    </div>

    <!-- The Modal/Lightbox -->
    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">

        <div class="mySlides">
          <div class="numbertext">1 / 4</div>
          <img src="img1" class="mySlides1">
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 4</div>
          <img src="img2" class="mySlides2">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 4</div>
          <img src="img3" class="mySlides3">
        </div>

        <div class="mySlides">
          <div class="numbertext">4 / 4</div>
          <img src="img4" class="mySlides4">
        </div>

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Caption text -->
        <div class="caption-container">
          <p id="caption"></p>
        </div>

        <!-- Thumbnail image controls -->
        <div class="row">
          <div class="column">
            <img class="demo1" src="img1" onclick="currentSlide(1)" alt="Bonhomme">
          </div>

          <div class="column">
            <img class="demo2" src="img2" onclick="currentSlide(2)" alt="Rat">
          </div>

          <div class="column">
            <img class="demo3" src="img3" onclick="currentSlide(3)" alt="Spray">
          </div>

          <div class="column">
            <img class="demo4" src="img4" onclick="currentSlide(4)" alt="Savon">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



  
  <?php
  $galPDOStatement =  $bdd->query("SELECT DISTINCT galerie FROM galerie_img");
  ?>
  <div class="list-group ">

  <?php while($galerie = $galPDOStatement->fetch(PDO::FETCH_ASSOC)):
 
 ?>


    <a href="galerieespacevert.php?galerie=<?= $galerie['GEV']?>" class="list-group-item"><?= $galerie['GEV']?></a><br>
    

    <?php endwhile; ?>
  </div>

</div>
<!-- /.col-lg-3 -->

<div class="col-lg-9">

 

  <div class="row">
<?php
// Si l'indice categorie est definit dans l'URL, cela veut dire que l'utilisateur a cliqué sur un lien d'une categorie,donc on selectionne tout les produits lies a la categorie dans l4URL
if(isset($_GET['id_img']))
{
    $data =$bdd->prepare("SELECT * FROM galerie_img WHERE id_img = :id_img");
    $data->bindValue (':id_img',$_GET['id_img'], PDO::PARAM_INT);
    $data->execute();
}

$galerie = $data->fetch(PDO ::FETCH_ASSOC);


?>
<?php while($galerie =$data->fetch(PDO::FETCH_ASSOC)):?>

    <div class="IMGHAUT">
        <div class="emplacement1">
            <a href="#"><img class="img1" src="<?= $galerie['photo']?>" alt=""></a>
        </div>
    </div>

    <div class="IMGMILIEU">
      <div class="emplacement2">
        <a href="#"><img class="img2" src="<?= $galerie['photo']?>" alt=""></a>
      </div>
      <div class="emplacement3">
        <a href="#"><img class="img3" src="<?= $galerie['photo']?>" alt=""></a>
      </div>
    </div>

    <div class="IMGBAS">
        <div class="emplacement4">
            <a href="#"><img class="img4" src="<?= $galerie['photo']?>" alt=""></a>
        </div>
    </div>

      <?php endwhile; ?>

  </div>

</div>

</div>

<?php
require_once('include/footer.php');
?>