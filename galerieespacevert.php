<html>
<?php 
    require_once('include/init.php');
    require_once("include/header.php");
    require_once("include/nav.php");
?>

<style>
  .telep {
    display: none;
  }

  /*------------------------------------------------------------------------code source---------------------------------------------------------------------*/
  .colon1 {
    display: flex;
    flex-direction: column;
  }

  .colon2 {
    display: flex;
    flex-direction: row;
    width: 55.5%;
    margin: auto;
  }

  .colum {
    width: 100%;
  }

  .imgg1 {
    width: 50%;
    display: flex;
    margin: 3vh auto;
  }

  .imgg2 {
    width: 80%;
    display: flex;
    margin: 3vh auto;
  }

  .imgg3 {
    width: 80%;
    display: flex;
    margin: 3vh auto;
  }

  .imgg4 {
    width: 50%;
    display: flex;
    margin: 3vh auto;
  }

  .demo1 {
    width: 100%;
    height: 10vh;
    margin: auto;
    display: flex;
  }

  .demo2 {
    width: 30%;
    height: 10vh;
    margin: auto;
    display: flex;
  }

  .demo3 {
    width: 30%;
    height: 10vh;
    margin: auto;
    display: flex;
  }

  .demo4 {
    width: 100%;
    height: 10vh;
    margin: auto;
    display: flex;
  }

  .mySlides1 {
    width: 100%;
    height: 60vh;
    margin: 7vh auto;
    display: flex;
  }

  .mySlides2 {
    width: 75%;
    height: 75vh;
    margin: auto;
    display: flex;
  }

  .mySlides3 {
    width: 75%;
    height: 75h;
    margin: auto;
    display: flex;
  }

  .mySlides4 {
    width: 100%;
    height: 60vh;
    margin: 7vh auto;
    display: flex;
  }

  /*------------------------------------------------------------------------Responsive PC---------------------------------------------------------------------*/
  @media screen and (min-width:769px) and (max-width: 2560px) {
    .demo1 {
      width: 100%;
      height: 10vh;
      margin: auto;
      display: flex;
    }

    .demo2 {
      width: 30%;
      height: 10vh;
      margin: auto;
      display: flex;
    }

    .demo3 {
      width: 30%;
      height: 10vh;
      margin: auto;
      display: flex;
    }

    .demo4 {
      width: 100%;
      height: 10vh;
      margin: auto;
      display: flex;
    }

    .mySlides1 {
      width: 100%;
      height: 60vh;
      margin: 7vh auto;
      display: flex;
    }

    .mySlides2 {
      width: 75%;
      height: 75vh;
      margin: auto;
      display: flex;
    }

    .mySlides3 {
      width: 75%;
      height: 75vh;
      margin: auto;
      display: flex;
    }

    .mySlides4 {
      width: 100%;
      height: 60vh;
      margin: 7vh auto;
      display: flex;
    }
  }

  /*------------------------------------------------------------------------Responsive Tab---------------------------------------------------------------------*/
  @media screen and (min-width: 451px) and (max-width: 769px) {
    .demo1 {
      width: 100%;
      height: 10vh;
      margin: auto;
      display: flex;
    }

    .demo2 {
      width: 30%;
      height: 10vh;
      margin: auto;
      display: flex;
    }

    .demo3 {
      width: 30%;
      height: 10vh;
      margin: auto;
      display: flex;
    }

    .demo4 {
      width: 100%;
      height: 10vh;
      margin: auto;
      display: flex;
    }

    .mySlides1 {
      width: 100%;
      height: 60vh;
      margin: 7vh auto;
      display: flex;
    }

    .mySlides2 {
      width: 73%;
      height: 75vh;
      margin: auto;
      display: flex;
    }

    .mySlides3 {
      width: 73%;
      height: 75vh;
      margin: auto;
      display: flex;
    }

    .mySlides4 {
      width: 100%;
      height: 60vh;
      margin: 7vh auto;
      display: flex;
    }
  }

  /*------------------------------------------------------------------------Responsive Mobil---------------------------------------------------------------------*/
  @media screen and (max-width: 450px) {

    .colon1 {
      display: flex;
      flex-direction: column;
    }

    .colon2 {
      display: flex;
      flex-direction: column;
      width: 55.5%;
      margin: auto;
    }

    .colum {
      width: 100%;
    }

    .imgg1 {
      width: 80%;
      display: flex;
      margin: 3vh auto;
    }

    .imgg2 {
      width: 80%;
      display: flex;
      margin: 3vh auto;
    }

    .imgg3 {
      width: 80%;
      display: flex;
      margin: 3vh auto;
    }

    .imgg4 {
      width: 80%;
      display: flex;
      margin: 3vh auto;
    }

    .demo1 {
      width: 100%;
      height: 10vh;
      margin: auto;
      display: flex;
    }

    .demo2 {
      width: 90%;
      height: 10vh;
      margin: auto;
      display: flex;
    }

    .demo3 {
      width: 90%;
      height: 10vh;
      margin: auto;
      display: flex;
    }

    .demo4 {
      width: 100%;
      height: 10vh;
      margin: auto;
      display: flex;
    }

    .mySlides1 {
      width: 100%;
      height: 25vh;
      margin: 28vh auto;
      display: flex;
    }

    .mySlides2 {
      width: 100%;
      height: 75vh;
      margin: auto;
      display: flex;
    }

    .mySlides3 {
      width: 100%;
      height: 75vh;
      margin: auto;
      display: flex;
    }

    .mySlides4 {
      width: 100%;
      height: 25vh;
      margin: 28vh auto;
      display: flex;
    }
  }

  .row>.column {
    padding: 0 8px;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Create four equal columns that floats next to eachother */
  .column {
    float: left;
    width: 25%;
  }

  /* The Modal (background) */
  .modal {
    display: none;
    position: fixed;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: black;
  }

  /* Modal Content */
  .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
  }

  /* The Close Button */
  .close {
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 3em;
    font-weight: bold;
    color: #fff !important;
  }

  .close:hover,
  .close:focus {
    color: #fff;
    text-decoration: none;
    cursor: pointer;
  }

  /* Hide the slides by default */
  .mySlides {
    display: none;
    height: 75vh;
    margin: auto;
  }

  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 2em;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 1em;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* Caption text */
  .caption-container {
    text-align: center;
    background-color: black;
    padding: 2px 16px;
    color: white;
  }

  img.demo {
    opacity: 0.6;
  }

  .active,
  .demo:hover {
    opacity: 1;
  }

  img.hover-shadow {
    transition: 0.3s;
  }

  .hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
</style>


<section>

<?php
  $galPDOStatement = $bdd->query("SELECT DISTINCT galerie FROM galerie_img");
  ?>
  <div class="list-group ">

  <?php while($galerie = $galPDOStatement->fetch(PDO::FETCH_ASSOC)):
  //echo '<pre>';print_r($category);echo '</pre>';
  ?>

    <a href="?galerie=<?= $galerie['galerie']?>" class="list-group-item"><?= $galerie['galerie']?></a><br>

  <?php endwhile; ?>
  </div>
  
  <div class="container-fluid">
    <div class="IMGHAUT">
    <div class="emplacement1">
      <a href='#'><img src="<?= $galerie['galerie']?>" class="img-1" onclick="openModal();currentSlide(1)" class="hover-shadow imgg1" >
    </div>
    </div>
    <div class="IMGMILIEU">
      <div class="emplacement2">
        <a href="#"><img src="" class="img-2" onclick="openModal();currentSlide(2)" class="hover-shadow imgg2">
      </div>
      <div class="emplacement3">
      <a href="#"><img src="" class="img-3" onclick="openModal();currentSlide(3)" class="hover-shadow imgg3">
      </div>
    </div>
    <div class="IMGBAS">
      <div class="emplacement4">
      <a href="#"><img src="" class="img-4" onclick="openModal();currentSlide(1)" class="hover-shadow imgg4">
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
// Si l'indice categorie est definit dans l'URL, cela veut dire que l'utilisateur a cliqué sur un lien d'une categorie,donc on selectionne tout les produits lies a la categorie dans l4URL
if(isset($_GET['galerie']))
{
    $data =$bdd->prepare("SELECT * FROM galerie_img WHERE galerie = :galerie");
    $data->bindValue(':galerie',$_GET['galerie'], PDO::PARAM_STR);
}
else // Sinon si l'indice categorie n'est pas presente dans l'url, au premier chargement de l apage l'utilsateur n'a cliquer sur aucun lien categorie, on selectionne touts les produits
{
    $data = $bdd->prepare("SELECT * FROM galerie_img");
    //echo '<pre>';print_r($data);echo '</pre>';
}
echo '<pre>';print_r($galerie);echo '</pre>';
$data->execute();
echo '<pre>';print_r($galerie);echo '</pre>';
?>
<?php while($galerie =$data->fetch(PDO::FETCH_ASSOC)):?>


<div class="col-lg-4 col-md-6 mb-4">

    <div class="IMGHAUT">
      <div class="emplacement1"><?= $galerie['emplacement'] . '1'?>
          <a href="#"><img class="img1" src="<?= $galerie['galerie']?>" alt=""></a>
        </div>
    </div>  

      <div class="IMGMILIEU">
        <div class="emplacement2"><?= $galerie['emplacement'] . '2'?>
          <a href="#"><img class="img2" src="<?= $galerie['photo']?>" alt=""></a>
        </div>
      
        <div class="emplacement3"><?= $galerie['emplacement'] . '3'?>
          <a href="#"><img class="img3" src="<?= $galerie['photo']?>" alt=""></a>
        </div>
      </div>

      <div class="IMBAS">
      <div class="emplacement4"><?= $galerie['emplacement'] . '4'?>
          <a href="#"><img class="img4" src="<?= $galerie['photo']?>" alt=""></a>
        </div>
    </div> 
</div>


  </div>
</div>

<?php endwhile; ?>
<script>
  // Open the Modal
  function openModal() {
    document.getElementById("myModal").style.display = "block";
  }

  // Close the Modal
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }

  var slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
      slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
  }
</script>
<?php 
    require_once("include/footerv.php");
?>