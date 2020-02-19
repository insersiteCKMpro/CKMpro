<?php
require_once("header.php");
?>
<style>
  @media screen and (min-width: 769px) and (max-width: 2560px){
    .carousel{
      width: 100%
    }
    .fixed-top /*header*/
    {
      display: flex;
      justify-content: flex-end;
      width: 80%;
    }
    .logo  /*header*/
    {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40vh;
    }
    nav  /*header*/
    {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .flash /* Débaras*/
    {
        color: #00aeef;
    }
    section /*carousel Entreprise*/
    {
        width: 100%;
        height: 52vh;	
    }
    .ets /*Entreprise*/
    {
    text-align: center;
    }
    .activités /*Activités*/
    {
        text-align: center;
    }
    .sectionB /*Activités*/   
    {
            display: flex;
            /* width: 100%; */
            height: 52vh;
            justify-content: space-around;
            /* flex-direction: column; */
            display: flex;
    }

    .derat /*Activités*/
    {
        width: 19.3%;
        text-align: center;
    }
    .nettoyage /*Activités*/
    {
        width: 19.3%;
        text-align: center;
    }
    .espacevert /*Activités*/
    {
        width: 19.3%;
        text-align: center;
    }
    .cible
    {
        text-align: center;
    }
    main /*Professionnel Particulier*/
    {
        height: 3vh;
        width: 97.5%;
        justify-content: center;
        margin-left: 1.5vh;
    }
    .pro
    {
      width: 50%;
        height: 43vh;
        margin-right: 5%;
    }
    .part
    {
        width: 50%;
        height: 32vh;
        margin-right: 5%;
    }
    .mainh /*Professionnel Particulier*/
    {
        width: 100%;
        height: 36vh;
        display: flex;
    }
    .ppro
    {
        width: 90%;
    }
    .mainb  /*avis*/
    {
        width: 100%;
        height: 24vh;
        display: flex;
        justify-content: space-around;
    }
    .carouL /*carousel avis gauche*/
    {
        height: 18vh;
        width: 30%;
    }
    .carouR /*carousel avis droite*/
    {
        height: 18vh;
        width: 30%;
    }
    .carousel-control-prev /*carousel avis droite et gauche*/
    {
        width: 10%;
        height: 18vh;
    }
    .carousel-control-next /*carousel avis droite et gauche*/
    {
        width: 10%;
        height: 18vh;
    }

    .sectionecom /*e-commerce*/
    {
        height: 50vh;
        display: flex;
        justify-content: center;
        /* height: 50vh; */
        flex-direction: column;
    }
    .ecom
    {
        text-align: center;

    }
    .img1
    {
        margin-top: 30px;
        width: 40vh;
        height: 15vh;
    }
    .img3
    {
        width: 210px;
        height: 190px;  
    }
    .img4
    {
        width: 2%;
        height: 20px;
    }
    .imgC
    {
        width: 100%;
        height: 279px;
    }
    .imgM 
    {
        width: 100%;
        height: 20vh;
        display: flex;
    }
    .imgl
    {
        width: 50%;
        height: 25vh;
    }
    .imgp
    {
        width: 25%;
        height: 25vh;
    }
    .fivetoile
    {
        width: 40%;
    }
    .footerhaut
    {
        display: flex;
        justify-content: space-evenly;
    }
    .footerbas
    {
        display: flex;
        justify-content: center;
    }
    .colonne1
    {
        width: 30%;
        align-items: center;
        color: black !important;
        text-decoration: none !important;
        display: flex;
        flex-direction: column;
    }
    .ftext1
    {
        text-decoration: none;
        color: black;
    }
    .ftext1:hover
    {
        text-decoration: none;
        color: black;
        background-color: blue;
        color: white;
    }
    .colonne2
    {
        width: 30%;
        color: black !important;
        text-decoration: none !important;
    }
    .ftext2
    {
        text-decoration: none;
        color: black;
    }
    .ftext2:hover
    {
        text-decoration: none;
        color: black;
        background-color: blue;
        color: white;
    }
    .colonne3 
    {
        display:flex;
        align-items: center;
        width: 30%;
        justify-content: center;
    }
    .snap:hover
    {
        transition: all ease .3s .1s;
    }
    .fb:hover
    {
        transition: all ease .3s .1s;
    }
    .insta:hover
    {
        transition: all ease .3s .1s;
    }
    .part
    {
        width: 50%;
        height: 32vh;
        margin-right: 5%;
    }
    .sectionM /*Entreprise*/
    {
        width: 100%;
    }    
    .flogo
    {
        width: 30%;
    }
    
}
/* Sur tous types d'écran tablette, quand la largeur de la fenêtre est comprise entre 451px et 768px */
@media all and (min-width: 451px) and (max-width: 768px){
    .fixed-top /*header*/
    {
        display: flex;
        justify-content: flex-end;
        width: 80%;
    }
    .logo  /*header*/
    {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40vh;
    }
    nav  /*header*/
    {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .flash /* Débaras*/
    {
        color: #00aeef;
    }
    section /*carousel Entreprise*/
    {
        width: 100%;
        height: 52vh;	
    }
    .sectionM /*Entreprise*/
    {
        width: 100%;
    }
    .ets /*Entreprise*/
    {
        text-align: center;
    }
    .activités /*Activités*/
    {
        text-align: center;
    }
    .sectionB /*Activités*/
    {
         height: 41vh;
    }
    .derat /*Activités*/
    {
        width: 33.3%;
        text-align: center;
    }
    .nettoyage /*Activités*/
    {
        width: 33.3%;
        text-align: center;
    }
    .espacevert /*Activités*/
    {
        width: 33.3%;
        text-align: center;
    }
    .cible
    {
        text-align: center;
    }
    main /*Professionnel Particulier*/
    {
        height: 3vh;
        width: 97.5%;
        justify-content: center;
        margin-left: 1.5vh;
    }
    .mainh /*Professionnel Particulier*/
    {
        width: 100%;
        height: 40vh;
        display: flex;
    }
    .img1
    {
        margin-top: 30px;
        width: 40%;
        height: 15vh;
    }
    .img3
    {
        width: 21%;
        height: 190px;  
    }
    .img4
    {
        width: 2%;
        height: 20px;
    }
    .imgC
    {
        width: 100%;
        height: 279px;
    }
    .imgM 
    {
        width: 100%;
        height: 20vh;
        display: flex;
    }
    .flogo
    {
        width: 40%;
    }
    
}
/* Sur tous types d'écran telephone, quand la largeur de la fenêtre est comprise entre 450px et moins */
@media all and (max-width: 450px) {
    .fixed-top /*header*/
    {
        display: flex;
        justify-content: flex-end;
        width: 80%;
    }
    .logo  /*header*/
    {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40vh;
    }
    nav  /*header*/
    {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .flash /* Débaras*/
    {
        color: #00aeef;
    }
    section /*carousel Entreprise*/
    {
        width: 100%;
        height: 52vh;	
    }
    .sectionM /*Entreprise*/
    {
        width: 100%;
    }
    .ets /*Entreprise*/
    {
    text-align: center;
    }
    .activités /*Activités*/
    {
        text-align: center;
    }
    .sectionB /*Activités*/
    {
        height: 331vh;
        flex-direction: column;
    }
    .derat /*Activités*/
    {
        width: 19.3%;
        text-align: center;
    }
    .nettoyage /*Activités*/
    {
        width: 19.3%;
        text-align: center;
    }
    .espacevert /*Activités*/
    {
        width: 19.3%;
        text-align: center;
    }
    .cible
    {
        text-align: center;
    }
    main /*Professionnel Particulier*/
    {
        height: 3vh;
        width: 97.5%;
        justify-content: center;
        margin-left: 1.5vh;
    }
    .pro
    {
        height: 43vh;
        margin-right: 5%;
    }
    .part
    {
        width: 50%;
        height: 32vh;
        margin-right: 5%;
    }
    .mainh /*Professionnel Particulier*/
    {
        height: 72vh;
        display: flex;
        flex-direction: column;
    }
    .mainb  /*avis*/
    {
        width: 50%;
        height: 56vh;
        display: flex;
        flex-direction: column;
        text-align: inherit;
    }
    .sectionecom /*e-commerce*/
    {
        height: 98vh;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
    .ecom
    {
        text-align: center;
    }
    .img1
    {
        margin-top: 30px;
        width: 4%;
        height: 15vh;
    }
    .img3
    {
        width: 21%;
        height: 190px;  
    }
    .img4
    {
        width: 2%;
        height: 20px;
    }
    .imgC
    {
        width: 100%;
        height: 279px;
    }
    .imgM 
    {
        width: 50%;
        height: 20vh;
        display: flex;
    }
    footer
    {
        border-top: 1px solid black;
    }
    .flogo
    {
        width: 50%;
        margin-bottom: 15%;
    }
    .footerhaut
    {
        flex-direction: column-reverse;
    }
    .colonne2
    {
        order:-1;
    }
    .footerhaut
    {
        align-items: center;
        text-align: center;
        }
    .colonne3
    {
        width: 100%;
        margin-bottom: 10%;
        margin-top:2vh;
    }
}
</style>
  <div class="container-fluid">
    <section>
      <main>
        <marquee class="flash" behavior="" direction="">Vous avez besoin de vos deux mains libres? Nous nous chargeons
          aussi de débarraser!!</marquee> <!--le debaras en flash-->
      </main>
      <div class="sectionH"> 
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/debarrascarrousel.png" class="imgC" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/3Dmaq.png" class="imgC" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/produitsboutimaq.png" class="imgC" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <h1 class="ets">l'Entreprise</h1>  <!--l'entreprise CKMpro-->
      <div class="sectionM">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate, ab.
          Perferendis eos repellat provident alias quam pariatur ut.
          Fugiat impedit temporibus officiis accusamus aperiam nostrum reiciendis sequi tempora in et.
        </p>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nihil
          fugiat iusto dolorum, rerum quis delectus assumenda qui quasi recusandae,
          necessitatibus aliquid animi eum quae incidunt rem eos quisquam omnis.
          <p>
      </div>

      <h2 class="activités">Nos Activités</h2><br> <!--les activités de CKMpro-->
      <div class="sectionB"> 
        <div class="derat">3D
          <img src="img/3Dmaq.png" class="img3" alt="">
          <p class="dne">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
            soluta sapiente sit corrupti similique vero in repellendus
            laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
            Molestiae quasi magnam quos obcaecati?
          </p>
        </div>
        <div class="nettoyage">Nettoyage
          <img src="img/nettoyagemaq.png" class="img3" alt="">
          <p class="dne">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
            soluta sapiente sit corrupti similique vero in repellendus
            laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
            Molestiae quasi magnam quos obcaecati?
          </p>
        </div>
        <div class="espacevert">Espace vert 
          <img src="img/espacevertmaq.png" class="img3" alt="">
          <p class="dne">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
            soluta sapiente sit corrupti similique vero in repellendus
            laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
            Molestiae quasi magnam quos obcaecati?
          </p>
        </div>
      </div>

      <h2 class="cible">Les Cibles</h2><br>  <!--les cibles de CKMpro-->
      <main class="mainh">
        <div class="pro">
          <img src="img/professionnelmaq.png" class="imgM" alt="">
          <h4 class="text-center">Professionnel</h4>
          <P class="ppro">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem
            praesentium suscipit non at ea, corporis aliquam sapiente ut quas accusamus culpa
            dignissimos iusto perspiciatis.
          <P>
        </div>
        <div class="part">
          <img src="img/particuliermaq.png" class="imgM" alt="">
          <h4 class="text-center">Particulier</h4>
          <P class="ppro">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem
            praesentium suscipit non at ea, corporis aliquam sapiente ut quas accusamus culpa
            dignissimos iusto perspiciatis.
          <P>
        </div>
      </main>
      <div class="mainb"> <!--Les Avis -->
        <div class="carouL">  <!--Les Avis carousel de gauche -->
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner text-center">
              <div class="carousel-item active">
                <img src="img/5STARS.png" class="fivetoile" alt="">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Asperiores voluptas voluptate libero, quasi adipisci vero delectus odit suscipit
                  assumenda rerum deleniti voluptates nemo fuga mollitia unde. Quas earum ea qui!
                </p>
              </div>
              <div class="carousel-item">
                <img src="img/5STARS.png" class="fivetoile" alt="">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Asperiores voluptas voluptate libero, quasi adipisci vero delectus odit suscipit
                  assumenda rerum deleniti voluptates nemo fuga mollitia unde. Quas earum ea qui!
                </p>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      
        <div class="carouR"> <!--Les Avis carousel de droite Testi -->
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner text-center">
              <div class="carousel-item active">
                <img src="img/5STARS.png" class="fivetoile"alt="">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Asperiores voluptas voluptate libero, quasi adipisci vero delectus odit suscipit
                  assumenda rerum deleniti voluptates nemo fuga mollitia unde. Quas earum ea qui!
                </p>
              </div>
              <div class="carousel-item">
                <img src="img/5STARS.png" class="fivetoile" alt="">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Asperiores voluptas voluptate libero, quasi adipisci vero delectus odit suscipit
                  assumenda rerum deleniti voluptates nemo fuga mollitia unde. Quas earum ea qui!
                </p>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>    
      <h2 class="ecom">La Boutique CKM</h2><br> <!--ecommerce-->
      <div class="sectionecom">
        <img src="img/CKMPROLOGODEFBOUTIQUE.png" class="imgl"alt="">
        <img src="img/produitspray2.png" class="imgp"alt="">
      </div>

    </section>
  </div>