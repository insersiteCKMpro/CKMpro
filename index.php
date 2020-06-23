<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
?>

<body>
  <div class="container-fluid">

    <!-- ------------------------------------------TEXT EN MOUVEMENT -->

    <marquee behavior="" direction="">---------------------------------------EN
      ATTENTE----------------------------------</marquee>

    <!-- --------------------------------------------------------------->


    <!-- ------------------------------------------CAROUSEL------------------------------------- -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Homepage_img_1_carrousel.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Taille_haie.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Net_img_6.jpg" class="d-block w-100" alt="...">
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
    <!-- -------------------------------------------------------------------------------------------- -->


    <div class="row text-center mx-auto">

      <div class="col-md-9 mx-auto">
        <!-- --------------------------------------TITRE------------------------------------------------------ -->
        <h1 class="text-center mt-5 mb-5">L'entreprise</h1>
        <hr>
        <!-- ---------------------------------------DESCRIPTION----------------------------------------------------- -->
        <p class="text-justify h5 mb-5">
          Agence de proximité à taille humaine, CKM PRO fidélise ses clients par une personnalisation du service
          apporté et la mise en place d'une structure d'encadrement efficiente.
          L'expérience et l'ancienneté du gérant et de ses collaborateurs contribue au développement et à la bonne
          gestion de la société.
          Discrétion : Professionnels, que vous soyez restaurateurs, gérants d’hôtels ou autres, il est évident
          que la discrétion et la capacité à intervenir à des horaires qui ne gênent pas le bon fonctionnement
          de votre établissement sont primordiaux. C’est pourquoi nos contrats réservés aux professionnels et
          particuliers tiennent compte de ces contraintes pour vous offrir un service qui soit le plus discret
          possible.
        </p>
        <p class="text-justify h5">
          Réactivité / rapidité : Nous répondons aux urgences avec la même qualité et la même conscience
          professionnelle que pour toute autre mission. Respect des délais : Le temps de travail est estimé à sa
          juste valeur et les délais sont toujours respectés.
          Professionnalisme : Le travail est toujours rendu impeccable malgré les conditions parfois extrêmes dans
          lesquelles nous intervenons.
          Sécurité /Hygiène : Toutes les mesures d'hygiène et de sécurité sont prises sur les chantiers pendant
          l'exécution des travaux. Éliminer les nuisible est notre mission. Mais nous n’oublions pas la sécurité :
          de vos enfants, de vous-même de vos animaux domestiques et de l’environnement.
          Entreprise agréée et produits professionnels certifiés seront les gages d’une intervention efficace en
          toute sécurité.
          <p>

      </div>
    </div>
    <!-- --------------------------------------TITRE------------------------------------------------------ -->
    <h1 class="text-center mt-5 mb-5">Nos Activités</h1>

    <!-- ---------------------------------------3 DOMAINES----------------------------------------------------- -->
    <div class="row text-center mx-auto">
      <!-- -----------------------------------------1----------------------------------------------------- -->
      <div class="col-md-4">
        <div class="h1">3D</div>
        <img class="img-fluid" src="img/test1.jpg" alt="Nettoyage de Terrasse" title="homme qui nettoie le sol">

        <p class="mt-3 h5 col-md-12 mx-auto">Il est important de ne pas laisser le problème de l’invasion par les
          nuisibles s’éterniser car vous pourriez être confrontés à des dégradations d’ordres matériels ou
          alimentaires (stocks de nourriture…), ainsi qu’à des souillages divers à cause des déjections des rats souris.
        </p>
      </div>

      <!-- ---------------------------------------2----------------------------------------------------- -->
      <div class="col-md-4">
        <div class="h1">Nettoyage</div>
        <img class="img-fluid" src="img/test2.jpg" alt="Nettoyage de Terrasse" title="homme qui nettoie le sol">
        <p class="mt-3 h5 col-md-12 mx-auto">CKM Pro s’occupe de redonner un coup de jeune à toutes vos
          surfaces. Nos équipes interviennent sur tous types de surfaces, qu’elles soient internes ou externes, et
          s’adaptent en fonction de chaque besoin.</p>
      </div>

      <!-- ---------------------------------------3----------------------------------------------------- -->
      <div class="col-md-4">
        <div class="h1">Espaces Verts</div>
        <img class="img-fluid" src="img/test3.jpg" alt="Nettoyage de Terrasse" title="homme qui nettoie le sol">
        <p class="mt-3 h5  col-md-12 mx-auto">Traiter les espaces verts en profondeur est non négligeable.
          Cela permet d’éviter au maximum la présence de nuisibles, qui ont un impact directe pour l’intégralité de la
          plantation.</p>
      </div>

    </div>

    <!-- --------------------------------------TITRE------------------------------------------------------ -->
    <h1 class="text-center mt-5 mb-5">Qui sont nos clients ?</h1>
    <!-- -------------------------------------- PARTIE PRO ET PARTICULIER------------------------------------------------------ -->


    <div class="row mx-auto d-flex">
      <!-- DIV DES DEUX CARD -->

      <!-- --------------------------------------------CONTENU 1 -->

      <div class="col-md-6 col-sm-12 mx-auto text-center vh-5">
      <!-- img -->
        <img class="col-md-12" src="img/Home_page_pro.jpg" alt="">
        <!-- titre -->
        <h1 class="text-center mb-5 mt-5">Professionnel</h1>
        <!-- descritpion -->
        <p class="h4 col-md-11 mx-auto mb-4">Propriétaires de logements collectifs, restaurateurs,
          paysagistes… Ils nous font confiance pour mener à bien leurs différents projets et surtout pour rendre leurs
          situations plus confortables.</p>
<!-- carousel -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="col-lg-3 team text-center mx-auto">
                <img class="img-circle" src="img/team01.jpg" height="90" width="90">
                <h4>Liz Stewart</h4>
                <h5><i>Product Manager</i></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>

            <div class="carousel-item">
              <div class="col-lg-3 team text-center mx-auto">
                <img class="img-circle" src="img/team02.jpg" height="90" width="90">
                <h4>Brad Casey</h4>
                <h5><i>Front-end Developer</i></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

              </div>
            </div>

            <div class="carousel-item">
              <div class="col-lg-3 team text-center mx-auto">
                <img class="img-circle" src="img/team03.jpg" height="90" width="90">
                <h4>Pamela Chow</h4>
                <h5><i>Web Designer</i></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>

            <div class="carousel-item">
              <div class="col-lg-3 team text-center mx-auto">
                <img class="img-circle" src="img/team04.jpg" height="90" width="90">
                <h4>Tim Gates</h4>
                <h5><i>Back-end Guru</i></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- ---------------------------------------------->


      <!-- --------------------------------------------CONTENU 2 -->
      <div class="col-md-6 col-sm-12 mx-auto text-center vh-5">
      <!-- image -->
        <img class="col-md-12" src="img/Home_page_part.jpg" alt="">
        <!-- titre -->
        <h1 class="text-center mb-5 mt-5">Particulier</h1>
        <!-- description -->
        <p class="h4 col-md-11 mx-auto mb-5">Que ce soit pour le jardin, le grenier ou encore le jardin,
          nous rendons
          service à plusieurs particuliers.</p>
<!-- carousel -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="col-lg-3 team text-center mx-auto">
                <img class="img-circle" src="img/team01.jpg" height="90" width="90">
                <h4>Liz Stewart</h4>
                <h5><i>Product Manager</i></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                
              </div>
            </div>

            <div class="carousel-item">
              <div class="col-lg-3 team text-center mx-auto">
                <img class="img-circle" src="img/team02.jpg" height="90" width="90">
                <h4>Brad Casey</h4>
                <h5><i>Front-end Developer</i></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

              </div>
            </div>

            <div class="carousel-item">
              <div class="col-lg-3 team text-center mx-auto">
                <img class="img-circle" src="img/team03.jpg" height="90" width="90">
                <h4>Pamela Chow</h4>
                <h5><i>Web Designer</i></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>

            <div class="carousel-item">
              <div class="col-lg-3 team text-center mx-auto">
                <img class="img-circle" src="img/team04.jpg" height="90" width="90">
                <h4>Tim Gates</h4>
                <h5><i>Back-end Guru</i></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- ---------------------------------------------->

    </div> <!-- FIN DIV DES DEUX BLOC CARD -->

    <!------------------------------------------- PARTIE BOUTIQUE -->

    <h1 class="text-center mt-5 mb-5">La Boutique CKM</h1>
    <div class="row mx-auto col-md-9">
      <img class="col-md-6" src="img/CKMPROLOGODEFBOUTIQUE.png" alt="">
      <img class="col-md-6 d-none d-sm-block" src="img/ratest.png" alt="">
    </div>
    <p>
						<a href="index.html#"><i class="icon-facebook"></i></a>
						<a href="index.html#"><i class="icon-twitter"></i></a>
						<a href="index.html#"><i class="icon-envelope"></i></a>

					</p>

  </div>
</body>



<?php 
    require_once("include/footer.php");
?>