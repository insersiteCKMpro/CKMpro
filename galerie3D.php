<html>
<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
?>

<style>
  .telep {
    display: none;
  }

  /*------------------------------------------------------------------------code source---------------------------------------------------------------------*/
  
  .container-fluid
  {
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
  }

  .imgg1 {
    width: 100%;
    display: flex;
    height:40vh;
  }

  .imgg2 {
    width: 100%;
    display: flex;
    margin: 3vh auto;
    height:80vh;
    margin:2.5vh;
  }

  .imgg3 {
    width: 100%;
    display: flex;
    height:80vh;
    margin:2.5vh;
  }

  .imgg4 {
    width: 100%;
    display: flex;
    margin: 3vh auto;
    height:40vh;
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
  .emplacement1
  {
    height:40vh;
    width:60%;
    display:flex;
    align-items:center;
    justify-content:center;
  }
  .deuximages
  {
    display:flex;
    flex-direction:space-between;
    width:60%;
    height:80vh;
    margin:5vh auto;
  }
  .emplacement2
  {
    height:80vh;
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:5vh;

  }
  .emplacement3
  {
    height:80vh;
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:5vh;
 
  }
  .emplacement4
  {
    height:40vh;
    width:60%;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-top:10vh;
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

    .emplacement1
  {
    height:40vh;
    width:60%;
    display:flex;
    align-items:center;
    justify-content:center;
  }
  .deuximages
  {
    display:flex;
    flex-direction:space-between;
    width:60%;
  }
  .emplacement2
  {
    height:80vh;
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
  
  }
  .emplacement3
  {
    height:80vh;
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
  
  }
  .emplacement4
  {
    height:40vh;
    width:60%;
    display:flex;
    align-items:center;
    justify-content:center;
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

    .emplacement1
  {
    height:40vh;
    width:60%;
    display:flex;
    align-items:center;
    justify-content:center;
  }
  .deuximages
  {
    display:flex;
    flex-direction:space-between;
    width:57.5%;
    height:80vh;
  }
  .emplacement2
  {
    height:80vh;
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
  
  }
  .emplacement3
  {
    height:80vh;
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
  
  }
  .emplacement4
  {
    height:40vh;
    width:60%;
    display:flex;
    align-items:center;
    justify-content:center;
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
    .deuximages
    {
      display:flex;
      flex-direction:column;
    }

    .imgg1 {
      width: 100%;
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
      width: 100%;
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

    .emplacement1
  {
    height:40vh;
    width:60%;
    display:flex;
    align-items:center;
    justify-content:center;
  }
  .deuximages
  {
    display:flex;
    flex-direction:space-between;
    width:57.5%;
    height:80vh;
    
  }
  .emplacement2
  {
    height:80vh;
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
  
  }
  .emplacement3
  {
    height:80vh;
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
  
  }
  .emplacement4
  {
    height:40vh;
    width:60%;
    display:flex;
    align-items:center;
    justify-content:center;
  }
  }
/* ----------------------------------------------------------- */
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
<!-- _____________________________VISUEL SUR LA PAGE----------------------------------------------------------------- -->
<section>
  <div class="container-fluid">

    
      
      <div class="emplacement1 border border-dark mx-auto text-center">
      <img src="https://ironcodestudio.com/wp-content/uploads/2015/03/css-remove-horizontal-scrollbar.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow imgg1">
      </div>
      
      <div class="deuximages">

        <div class="emplacement2 mx-auto text-center">
      <img src="https://media.gettyimages.com/photos/cropped-image-of-person-eye-picture-id942369796?s=612x612" onclick="openModal();currentSlide(2)" 
      class="hover-shadow imgg2">
      </div>

      <div class="emplacement3 mx-auto text-center">
      <img src="https://media.gettyimages.com/photos/cropped-image-of-person-eye-picture-id942369796?s=612x612" onclick="openModal();currentSlide(3)" 
      class="hover-shadow imgg3">
      </div>
  
      </div>
      
      <div class="emplacement4 border border-dark mx-auto text-center mb-5">
      <img src="https://ironcodestudio.com/wp-content/uploads/2015/03/css-remove-horizontal-scrollbar.jpg" onclick="openModal();currentSlide(4)" 
      class="hover-shadow imgg4">
      </div>

    <!-- The Modal/Lightbox -->
    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      
<!-- _____________________________VISUEL DU ZOOM----------------------------------------------------------------- -->
        <div class="mySlides">
          <div class="numbertext">1 / 4</div>
          <img src="https://ironcodestudio.com/wp-content/uploads/2015/03/css-remove-horizontal-scrollbar.jpg" class="mySlides1" src="<?=$emplacement ?>" value="<?='1' ?>">
          </div>
       

        <div class="mySlides">
          <div class="numbertext">2 / 4</div>
          <img src="https://media.gettyimages.com/photos/cropped-image-of-person-eye-picture-id942369796?s=612x612" class="mySlides2">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 4</div>
          <img src="https://media.gettyimages.com/photos/cropped-image-of-person-eye-picture-id942369796?s=612x612" class="mySlides3">
        </div>

        <div class="mySlides">
          <div class="numbertext">4 / 4</div>
          <img src="https://ironcodestudio.com/wp-content/uploads/2015/03/css-remove-horizontal-scrollbar.jpg" class="mySlides4">
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
        <!-- _____________________________VISUEL DES IMAGES EN BAS QUAND ON ZOOM----------------------------------------------------------------- --> 
          <img class="demo1" src="https://ironcodestudio.com/wp-content/uploads/2015/03/css-remove-horizontal-scrollbar.jpg " 
          onclick="currentSlide(1)">
        
          </div>
          
          <div class="column">
            <img class="demo2" src="https://media.gettyimages.com/photos/cropped-image-of-person-eye-picture-id942369796?s=612x612" id="2" onclick="currentSlide(2)" alt="Rat">
          </div>

          <div class="column">
            <img class="demo3" src="https://media.gettyimages.com/photos/cropped-image-of-person-eye-picture-id942369796?s=612x612" id="3" onclick="currentSlide(3)" alt="Spray">
          </div>

          <div class="column">
            <img class="demo4" src="https://ironcodestudio.com/wp-content/uploads/2015/03/css-remove-horizontal-scrollbar.jpg" id="4" onclick="currentSlide(4)" alt="Savon">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
    require_once("include/footerj.php");
?>