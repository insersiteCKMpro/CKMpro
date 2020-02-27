<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>CKMpro</title>
</head>

<style>
    /* ------------------------Css source----------------------------------- */
    /*header*/
    @import url('https://fonts.googleapis.com/css?family=Red+Hat+Display&display=swap');

    .container-fluid 
      {
        padding: 0 !important;
      }

      .fixed-top 
      {
        display: flex;
        justify-content: flex-end;
        margin-right: 2vh;
        font-size: 1.2em;
        background-color: white;
        font-family: 'Red Hat Display',serif;
      }

      .logo {
        /*margin-top: 2.5em;*/
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 25vh;
      }

      /* LOGO TITRE STYLE */
      .logoTitre {
        height: 10vh;
        margin-top: 4vh;
        width: 20vw;
      }

      .boutonTel {
        display: none;
      }

    /* ------------------------------------fin header*/
    /*--------------------------------------navbar*/
    nav {
        border-bottom: 1px solid black;
        font-family: 'Red Hat Display', serif;
        font-weight: 650;
    }

    /* NAVBAR STYLE */
    .bg-dark {
        background-color: white !important;
    }

    .navbar-dark .navbar-toggler {
        color: black;
        border-color: transparent;
    }

    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .show>.nav-link {
        color: black;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: black !important;
        font-size: x-large;
    }

    /* LOGO HOME STYLE */
    #tailleLi {
        height: 5vh;
        width: 7%;
    }

    #tailleA {
        width: 100%;
    }

    .logoHome {
        width: 100%;
        position: relative;
        top: -0.9vh;
    }

    .navMarg {
        margin-left: 10vh;
    }

    /* DROPDOWN MENU */
    .dropdown-menu {
        left: 8vh !important;
        border: none !important;
        background-color: #ffffffb8 !important;
    }

    /*----------------------------fin navbar*/

    /*------------------------------section*/
    /* Débaras*/
    .flash {
        color: #00aeef;
    }

    /*carousel Entreprise*/
    section {
        width: 100%;
        height: 52vh;
    }

    /*Entreprise*/
    .ets {
        text-align: center;
    }

    /*Activités*/
    .activités {
        text-align: center;
    }

    /*Activités*/
    .sectionB {
        display: flex;
        /* width: 100%; */
        height: 40vh;
        justify-content: space-around;
        /* flex-direction: column; */
        display: flex;
    }

    /*Activités*/
    .derat {
        width: 33.3%;
        text-align: center;
    }

    /*Activités*/
    .nettoyage {
        width: 33.3%;
        text-align: center;
    }

    /*Activités*/
    .espacevert {
        width: 33.3%;
        text-align: center;
    }

    .cible {
        text-align: center;
        margin-top: 5vh;
    }

    /*Professionnel Particulier*/
    main {
        height: 3vh;
        width: 97.5%;
        justify-content: space-between;
        margin-left: 1.5vh;
    }

    .pro {
        width: 50%;
        height: 43vh;
        margin-right: 5%;
    }

    .part {
        width: 50%;
        height: 32vh;
        margin-right: 1% !important;
    }

    /*Professionnel Particulier*/
    .mainh {
        width: 100%;
        height: 36vh;
        display: flex;
    }

    .ppro {
        width: 90%;
    }

    /*avis*/
    .mainb {
        width: 100%;
        height: 25vh;
        display: flex;
        justify-content: space-around;
    }

    /*carousel avis gauche*/
    .carouL {
        height: 18vh;
        width: 30%;
    }

    /*carousel avis droite*/
    .carouR {
        height: 18vh;
        width: 30%;
    }

    /*carousel avis droite et gauche*/
    .carousel-control-prev {
        width: 10%;
        height: 18vh;
    }

    /*carousel avis droite et gauche*/
    .carousel-control-next {
        width: 10%;
        height: 18vh;
    }

    /*e-commerce*/
    .sectionecom {
        height: 30vh;
        display: flex;
        justify-content: space-around;
    }

    .ecom {
        text-align: center;
    }

    .img1 {
        margin-top: 30px;
        width: 40vh;
        height: 15vh;
    }

    .img3 {
        width: 95%;
        height: 190px;
    }

    .img4 {
        width: 2%;
        height: 20px;
    }

    .imgC {
        width: 100%;
    }

    .imgM {
        width: 100%;
        height: 20vh;
        display: flex;
    }

    .imgl {
        width: 50%;
        height: 25vh;
    }

    .imgp {
        width: 10%;
        height: 25vh;
    }

    .fivetoile {
        width: 40%;
    }

    /*Entreprise*/
    .sectionM {
        width: 100%;
        height: 25vh;
    }

    /*------------------------------fin section*/

    /*----------------------------------footer*/
    footer {
        background-color: white;
        border-top: 1px solid black;
        font-size: 0.95em;
        font-family: 'Red Hat Display', serif;
    }

    .footerhaut {
        display: flex;
        justify-content: space-evenly;
        font-size: 0.95em;
        font-family: 'Red Hat Display', serif;
    }

    .footerbas {
        display: flex;
        justify-content: center;
        font-size: 0.95em;
        font-family: 'Red Hat Display', serif;
    }

    .colonne1 {

        width: 30%;
        align-items: center;
        color: black !important;
        text-decoration: none !important;
        display: flex;
        flex-direction: column;
        margin-top: 2%;
    }

    .ftext1 {
        text-decoration: none;
        color: black;
    }

    .ftext1:hover {
        text-decoration: none;
        color: black;
        background-color: blue;
        color: white;
    }

    .colonne2 {

        width: 30%;
        color: black !important;
        text-decoration: none !important;
        margin-top: 2%;
    }

    .ftext2 {
        text-decoration: none;
        color: black;
    }

    .ftext2:hover {
        text-decoration: none;
        color: black;
        background-color: blue;
        color: white;
    }

    .colonne3 {
        display: flex;
        align-items: center;
        width: 30%;
        justify-content: center;
        margin-top: 2%;
    }

    .insta {
        filter: drop-shadow(1px 2px 0px black);

    }

    .snap:hover {
        transition: all ease .3s .1s;
    }

    .fb:hover {
        transition: all ease .3s .1s;
    }

    .insta:hover {
        transition: all ease .3s .1s;
    }

    .ordi {
        display: none;
    }

    /*-----------------------------fin footer*/

    /*--------------------------RESPONSIVE-ecran pc---------------------------------*/
    @media screen and (min-width: 769px) and (max-width: 2560px) {

        /*---------------------------header----------------------------------------*/
        /* ENTÊTE FIXE STYLE */
        /* ENTÊTE FIXE STYLE */
        .fixed-top 
        {
          font-size: 1.5em;
          font-family: 'Red Hat Display',serif;
        }

        /* ICONE TEL ENTÊTE FIXE STYLE */
        #fass {
          display: none;
        }

        /* LOGO TITRE STYLE */
        .logoTitre {
          height: 12vh;
          width: 63%;
          display: flex;
          margin: 3vh auto 0;
        }
    }

    /*-------------------------------fin header-----------------------------------------*/

    /*----------------------------------navbar-------------------------------------------*/
    /* HOVER LIENS */
    .colorJ:hover {
        background-color: #fef200;
        border-radius: 5px;
    }

    .colorB:hover {
        background-color: RGB(37, 170, 226);
        border-radius: 5px;
    }

    .colorV:hover {
        background-color: #00a652;
        border-radius: 5px;
    }

    /* HOVER LIENS DROPDOWN */
    .dropdown-item01:hover {
        background-color: #fef200 !important;
        border-radius: 5px !important;
        opacity: 0.5 !important;
    }

    /* hover style lien 3D */
    .dropdown-item02:hover {
        background-color: #fef200 !important;
        border-radius: 5px !important;
        opacity: 0.5 !important;
    }

    /* hover style lien Nettoyage */
    .dropdown-item03:hover {
        background-color: #25aae2 !important;
        border-radius: 5px !important;
        opacity: 0.5 !important;
    }

    /* hover style lien Espace Verts */
    .dropdown-item04:hover {
        background-color: #00a652 !important;
        border-radius: 5px !important;
        opacity: 0.5 !important;
    }

    /*------------------------------fin navbar---------------------------------------*/

    /*--------------------------------section-----------------------------------------*/
    /*carousel Entreprise*/
    section {
        width: 100%;
        height: 52vh;
    }

    /*Entreprise*/
    .ets {
        text-align: center;
    }

    /*Activités*/
    .activités {
        text-align: center;
    }

    /*Activités*/
    .sectionB {
        display: flex;
        /* width: 100%; */
        height: 40vh;
        justify-content: space-around;
        /* flex-direction: column; */
        display: flex;
    }

    /*Activités*/
    .derat {
        width: 33.3%;
        text-align: center;
    }

    /*Activités*/
    .nettoyage {
        width: 33.3%;
        text-align: center;
    }

    /*Activités*/
    .espacevert {
        width: 33.3%;
        text-align: center;
    }

    .cible {
        text-align: center;
        margin-top: 11vh;
    }

    /*Professionnel Particulier*/
    main {
        height: 3vh;
        width: 97.5%;
        justify-content: space-between;
        margin-left: 1.5vh;
    }

    .pro {
        width: 50%;
        height: 43vh;
    }

    .part {
        width: 50%;
        height: 32vh;
        margin-right: 1%;
    }

    /*Professionnel Particulier*/
    .mainh {
        width: 100%;
        height: 36vh;
        display: flex;
    }

    .ppro {
        width: 90%;
    }

    /*avis*/
    .mainb {
        width: 100%;
        height: 25vh;
        display: flex;
        justify-content: space-around;
    }

    /*carousel avis gauche*/
    .carouL {
        height: 18vh;
        width: 30%;
    }

    /*carousel avis droite*/
    .carouR {
        height: 18vh;
        width: 30%;
    }

    /*carousel avis droite et gauche*/
    .carousel-control-prev {
        width: 10%;
        height: 18vh;
    }

    /*carousel avis droite et gauche*/
    .carousel-control-next {
        width: 10%;
        height: 18vh;
    }

    /*e-commerce*/
    .sectionecom {
        height: 30vh;
        display: flex;
        justify-content: space-around;
    }

    .ecom {
        text-align: center;
    }

    .img1 {
        margin-top: 30px;
        width: 40vh;
        height: 15vh;
    }

    .img3 {
        width: 95%;
        height: 190px;
    }

    .img4 {
        width: 2%;
        height: 20px;
    }

    .imgC {
        width: 100%;
        height: 279px;
    }

    .imgM {
        width: 100%;
        height: 20vh;
        display: flex;
    }

    .imgl {
        width: 50%;
        height: 25vh;
    }

    .imgp {
        width: 10%;
        height: 25vh;
    }

    .fivetoile {
        width: 40%;
    }

    .snap:hover {
        transition: all ease .3s .1s;
    }

    .fb:hover {
        transition: all ease .3s .1s;
    }

    .insta:hover {
        transition: all ease .3s .1s;
    }

    .part {
        width: 50%;
        height: 32vh;
        margin-right: 5%;
    }

    /*Entreprise*/
    .sectionM {
        width: 100%;
        height: 25vh;
    }
    /*----------------------------------fin section--------------------------------*/

    /*----------------------------------footer--------------------------------------*/
    .flogo {
        width: 10%;
    }

    .footerhaut,.footerbas {
        font-size: 0.95em;
        font-family: 'Red Hat Display', serif;
    }

    /*-----------------------------fin footer-----------------------------------------*/


    /* ------------------------RESPONSIVE-tablette--------------------------------- */
    @media screen and (min-width: 451px) and (max-width: 768px) {

        /*------------------------header*/
        /* ENTÊTE FIXE STYLE */
        .fixed-top 
        {
          width: 50% !important;
          float: right !important;
          padding-left: 27vh !important;
          position: inherit !important;
          font-size: 1.2em;
          display: block;
          font-family: 'Red Hat Display',serif;
        }

        /* ICONE TEL ENTÊTE FIXE STYLE */
        #fas {
          display: none;
        }

        /* LOGO STYLE */
        .logoTitre {
          height: 10vh;
          width: 45%;
          display: flex;
          margin: auto;
        }
        .logo
        {
          height: 14vh;
        }
    }
    /*------------------------fin header------------------------------------*/

    /*---------------------------navbar--------------------------------------*/
    /* logo navbar */
    .logoHome {
        width: 7vw;
        position: relative;
        top: -0.9vh;
    }

    /* LOGO HOME STYLE */
    .navMarg {
        margin-left: 4vh;
    }

    /* DROPDOWN STYLE */
    .dropdown-menu {
        left: 15px !important;
    }
    /*------------------------------fin navbar--------------------------------------*/

    /*--------------------------------section----------------------------------------*/
    /* Débaras*/
    .flash {
        color: #00aeef;
    }

    /*carousel Entreprise*/
    section {
        width: 100%;
        height: 52vh;
    }

    /*Entreprise*/
    .sectionM {
        width: 100%;
    }

    /*Entreprise*/
    .ets {
        text-align: center;
    }

    /*Activités*/
    .activités {
        text-align: center;
    }

    .sectionB {
        height: 52vh;
    }

    /*Activités*/
    .derat {
        width: 33.3%;
        text-align: center;
    }

    /*Activités*/
    .nettoyage {
        width: 33.3%;
        text-align: center;
    }

    /*Activités*/
    .espacevert {
        width: 33.3%;
        text-align: center;
    }

    .cible {
        text-align: center;
        margin: 0;
    }

    /*Professionnel Particulier*/
    main {
        height: 3vh;
        width: 97.5%;
        justify-content: center;
        margin-left: 1.5vh;
    }

    /*Professionnel Particulier*/
    .mainh {
        width: 100%;
        height: 40vh;
        display: flex;
    }

    .img1 {
        margin-top: 30px;
        width: 40%;
        height: 15vh;
    }

    .img3 {
        width: 90%;
        height: 190px;
    }

    .img4 {
        width: 2%;
        height: 20px;
    }

    .imgC {
        width: 100%;
        height: 279px;
    }

    .imgM {
        width: 100%;
        height: 20vh;
        display: flex;
    }
    /*-----------------------------fin section---------------------------------*/

    /*----------------------------------footer--------------------------------*/
    .flogo {
        width: 20%;
    }

    .footerhaut,
    .footerbas {
        font-size: 0.95em;
        font-family: 'Red Hat Display', serif;
    }
    /*---------------------------------fin footer--------------------------------------*/

    /* -----------------------------RESPONSIVE-mobile--------------------------------- */
    @media screen and (max-width: 450px) {

        /*--------------------------------header---------------------------------------*/
        /* ENTÊTE FIXE STYLE */
        .fixed-top 
        {
          width: 100% !important;
          font-family: 'Red Hat Display',serif;
        }

        /* ICONE TEL ENTÊTE FIXE STYLE */
        #fas {
          display: none;
        }

        /* NUMERO */
        #num {
          display: none;
        }

        /* LOGO STYLE */
        .logoTitre {
          height: 9vh;
          width: 90%;
          margin-top: 0;
        }

        /* Bouton téléphone  */
        .boutonTel {
          width: 8vh;
          height: 8vh;
          background-color: lightgrey;
          border: 1px solid black;
          border-radius: 50%;
          display: flex;
          justify-content: center;
          align-items: center;
          position: fixed;
          z-index: 1;
          right: 5px;
          top: 21vh;
        }

        #lienTel {
          color: black;
          text-decoration: none;
          background-color: transparent;
        }

        #iconTel {
          font-size: 2em;
          display: block;
        }
    }
    /*---------------------fin header-----------------------------------------*/

    /*--------------------------------------navbar-----------------------------*/
    /* MENU BURGER */
    .textMenu {
        margin-bottom: 0;
    }

    .fa-bars {
        color: black;
    }

    #tailleLi {
        width: 10%;
    }

    .nav-item {
        margin-left: auto;
        margin-right: auto;
    }

    .nav-link {
        margin: 0;
    }

    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .show>.nav-link {
        text-align: center;
    }

    .navbar-nav .dropdown-menu {
        text-align: center;
        font-family: 'Red Hat Display', serif;
    }

    hr {
        width: 10vh;
        margin: 0;
        height: 1vh;
    }
    /*-----------------------------fin navbar---------------------------------------*/

    /*-------------------------------section----------------------------------------*/
    /* Débaras*/
    .flash {
        color: #00aeef;
    }

    /*carousel Entreprise*/
    section {
        width: 100%;
        height: 52vh;
    }

    .sectionM {
        width: 100%;
        height: 100vh;
    }

    /*Entreprise*/
    .ets {
        text-align: center;
    }

    .activités {
        text-align: center;
        margin-top: 5vh;
    }

    .sectionB {
        height: 142vh;
        flex-direction: column;
        margin-top: 0;
    }

    .derat {
        width: 100%;
        text-align: center;
    }

    /*Activités*/
    .nettoyage {
        width: 100%;
        text-align: center;
    }

    /*Activités*/
    .espacevert {
        width: 100%;
        text-align: center;
    }

    .cible {
        text-align: center;
        margin-top: 0;
    }

    /*Professionnel Particulier*/
    main {
        height: 3vh;
        width: 97.5%;
        justify-content: center;
        margin-left: 1.5vh;
    }

    .pro {
        height: 43vh;
        width: 100%;
        margin-right: 4%;
    }

    .part {
        width: 100%;
        height: 32vh;
        margin-right: 5%;
    }

    /*Professionnel Particulier*/
    .mainh {
        height: 72vh;
        display: flex;
        flex-direction: column;
    }

    .mainb {
        width: 100%;
        height: 40vh;
        margin-top: 11vh;
        display: flex;
        flex-direction: column;
        text-align: inherit;
    }

    .carouL {
        height: 18vh;
        width: 100%;
    }

    /*carousel avis droite*/
    .carouR {
        margin-top: 2vh;
        height: 18vh;
        width: 100%;
    }

    .sectionecom {
        height: 28vh;
        display: flex;
        flex-direction: row;
    }

    .ecom {
        text-align: center;
        margin-top: 3vh;
    }

    .img1 {
        margin-top: 30px;
        width: 92%;
        height: 15vh;
    }

    .img3 {
        width: 92%;
        height: 190px;
    }

    .img4 {
        width: 92%;
        height: 20px;
    }

    .imgC {
        width: 100%;
        height: 279px;
    }

    .imgM {
        width: 92%;
        height: 20vh;
        display: flex;
    }

    .imgp {
        width: 25%;
        height: 25vh;
    }
    /*-----------------------------fin section-----------------------------------*/

    /*---------------------------------footer-------------------------------------*/
    footer 
    {
        border-top: 1px solid black;
        font-size: 0.95em;
        font-family: 'Red Hat Display', serif;
    }

    .flogo 
    {
        width: 50%;
        margin-bottom: 15%;
    }

    .footerhaut 
    {
        flex-direction: column-reverse;
        font-family: 'Red Hat Display', serif;
    }

    .colonne2 
    {
        order: -1;
    }

    .footerhaut 
    {
        align-items: center;
        text-align: center;
        font-size: 0.95em;
        font-family: 'Red Hat Display', serif;
    }

    .colonne3 
    {
        width: 100%;
        margin-bottom: 10%;
        margin-top: 2vh;
    }

    .footerhaut,.footerbas 
    {
        font-size: 0.95em;
        font-family: 'Red Hat Display', serif;
    }
    /*----------------------------fin footer----------------------------------------*/

    /*-------------------------------------------------------------------------------*/
    @media (min-width: 576px) {
        .textMenu {
            display: none;
            font-family: 'Red Hat Display', serif;
        }
    }
</style>

<body>
    <div class="container-fluid">
        <header>
            <!---------------------------------header----------------------->
            <div class="fixed-top">
                <div id="num">
                    <i class="fas fa-phone-alt" id="fass"></i> &nbsp; 0123456789 <i class="fas fa-phone-alt"
                        id="fas"></i> &nbsp;
                </div>
                <div id="nom">
                    &nbsp; CKM Boutique
                </div>
                <i class="baseline-speaker_phone"></i>
            </div>
            <div class="logo">
                <img src="include/img/LOGOCKMPRODEF.png" alt="logo" class="logoTitre">
            </div>
            <div class="boutonTel">
                <a href="tel:+33123456789" id="lienTel"><i class="fas fa-phone-alt" id="iconTel"></i></a>
            </div>
        </header>
        <!-----------------------------------------navbar----------------------------------------->
        <nav class="navbar navbar-expand-sm navbar-dark bg-transparent">
            <div class="mx-auto">
                <p class="textMenu">
                    <strong>Menu</strong>
                </p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
                    aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="traitDeSeparattion2"></div>
            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item li1" id="tailleLi">
                        <a class="nav-link" id="tailleA" href="homepage.php"><img src="include/img/CKMHOMEFOOTER.png"
                                alt="Logo Home" class="logoHome"></a>
                    </li>
                    <hr class="mx-auto bg-dark text-center">
                    <li class="nav-item dropdown li2">
                        <a class="nav-link dropdown-toggle navMarg colorJ" href="#" id="dropdown03"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3D</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdownDiv01">
                            <a class="dropdown-item dropdown-item01" href="3D.php">Dératisation</a>
                            <a class="dropdown-item dropdown-item01" href="3D.php#desinfection">Désinfection</a>
                            <a class="dropdown-item dropdown-item01" href="3D.php#desinsectisation">Désinsectisation</a>
                        </div>
                    </li>
                    <hr class="mx-auto bg-dark text-center">
                    <li class="nav-item li3">
                        <a class="nav-link navMarg colorB" href="nettoyage.php">Nettoyage</a>
                    </li>
                    <hr class="mx-auto bg-dark text-center">
                    <li class="nav-item li4">
                        <a class="nav-link navMarg colorV" href="espacevert.php" tabindex="-1"
                            aria-disabled="true">Espaces
                            Verts</a>
                    </li>
                    <hr class="mx-auto bg-dark text-center">
                    <li class="nav-item dropdown li5">
                        <a class="nav-link dropdown-toggle navMarg" href="#" id="dropdown03" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Galeries</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <a class="dropdown-item dropdown-item02" href="galerie3D.php">3D</a>
                            <a class="dropdown-item dropdown-item03" href="galerienettoyage.php">Nettoyage</a>
                            <a class="dropdown-item dropdown-item04" href="galerieespacevert.php">Espaces Verts</a>
                        </div>
                    </li>
                    <hr class="mx-auto bg-dark text-center">
                </ul>
            </div>
        </nav>
        <!-------------------------------------------------------------Section---------------------------------------------------------------------->
        <section>
            <main>
                <marquee class="flash" behavior="" direction="">Vous avez besoin de vos deux mains libres? Nous nous
                    chargeons
                    aussi de débarrasser!!</marquee>
                <!--le debaras en flash-->
            </main>
            <div class="sectionH">
                <!--carousel-->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="include/img/debarrascarrousel.png" class="imgC" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="include/img/newimg2560x765.png" class="imgC" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="include/img/produitredim2560vw765vh.png" class="imgC" alt="...">
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
            </div><br>
            <h1 class="ets">L'entreprise</h1><br>
            <!--l'entreprise CKMpro-->
            <div class="sectionM">
                <p class="text-center">
                    Agence de proximité à taille humaine, CKM PRO fidélise ses clients par une personnalisation du
                    service apporté et la mise en place d'une structure d'encadrement efficiente.
                    L'expérience et l'ancienneté du gérant et de ses collaborateurs contribue au développement et à la
                    bonne gestion de la société.
                    Discrétion : Professionnels, que vous soyez restaurateurs, gérants d’hôtels ou autres, il est
                    évident que la discrétion et la capacité à intervenir à des horaires qui ne gênent pas le bon
                    fonctionnement
                    de votre établissement sont primordiaux. C’est pourquoi nos contrats réservés aux professionnels et
                    particuliers tiennent compte de ces contraintes pour vous offrir un service qui soit le plus discret
                    possible.
                </p>
                <p class="text-center">
                    Réactivité / rapidité : Nous répondons aux urgences avec la même qualité et la même conscience
                    professionnelle que pour toute autre mission. Respect des délais : Le temps de travail est estimé à
                    sa juste valeur et les délais sont toujours respectés.
                    Professionnalisme : Le travail est toujours rendu impeccable malgré les conditions parfois extrêmes
                    dans lesquelles nous intervenons.
                    Sécurité /Hygiène : Toutes les mesures d'hygiène et de sécurité sont prises sur les chantiers
                    pendant l'exécution des travaux. Éliminer les nuisible est notre mission. Mais nous n’oublions pas
                    la sécurité : de vos enfants, de vous-même de vos animaux domestiques et de l’environnement.
                    Entreprise agréée et produits professionnels certifiés seront les gages d’une intervention efficace
                    en toute sécurité.
                    <p>
            </div><br>

            <h2 class="activités">Nos Activités</h2><br>
            <!--les activités de CKMpro-->
            <div class="sectionB">
                <div class="derat">
                    <img src="include/img/3Dmaq.png" class="img3" alt="">
                    <h2><br>3D</h2>
                    <br>
                    <p class="dne">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                        soluta sapiente sit corrupti similique vero in repellendus
                        laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
                        Molestiae quasi magnam quos obcaecati?
                    </p>
                </div>
                <div class="nettoyage">
                    <img src="include/img/nettoyagemaq.png" class="img3" alt="">
                    <h2><br>Nettoyage</h2>
                    <br>
                    <p class="dne">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                        soluta sapiente sit corrupti similique vero in repellendus
                        laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
                        Molestiae quasi magnam quos obcaecati?
                    </p>
                </div>
                <div class="espacevert">
                    <img src="include/img/espacevertmaq.png" class="img3" alt="">
                    <h2><br>Espaces verts</h2>
                    <br>
                    <p class="dne">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                        soluta sapiente sit corrupti similique vero in repellendus
                        laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
                        Molestiae quasi magnam quos obcaecati?
                    </p>
                </div>
            </div>

            <h2 class="cible">Qui sont nos clients ?</h2><br>
            <!--les cibles de CKMpro-->
            <main class="mainh">
                <div class="pro">
                    <img src="include/img/professionnelmaq.png" class="imgM" alt=""><br>
                    <h4 class="text-center">Professionnel</h4>
                    <P class="ppro">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem
                        praesentium suscipit non at ea, corporis aliquam sapiente ut quas accusamus culpa
                        dignissimos iusto perspiciatis.
                        <P>
                </div>
                <div class="part">
                    <img src="include/img/particuliermaq.png" class="imgM" alt=""><br>
                    <h4 class="text-center">Particulier</h4>
                    <P class="ppro">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem
                        praesentium suscipit non at ea, corporis aliquam sapiente ut quas accusamus culpa
                        dignissimos iusto perspiciatis.
                        <P>
                </div>
            </main>
            <div class="mainb">
                <!--Les Avis -->
                <div class="carouL">
                    <!--Les Avis carousel de gauche -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner text-center">
                            <div class="carousel-item active">
                                <img src="include/img/5STARS.png" class="fivetoile" alt="">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Asperiores voluptas voluptate libero, quasi adipisci vero delectus odit suscipit
                                    assumenda rerum deleniti voluptates nemo fuga mollitia unde. Quas earum ea qui!
                                </p>
                            </div>
                            <div class="carousel-item">
                                <img src="include/img/5STARS.png" class="fivetoile" alt="">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Asperiores voluptas voluptate libero, quasi adipisci vero delectus odit suscipit
                                    assumenda rerum deleniti voluptates nemo fuga mollitia unde. Quas earum ea qui!
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="carouR">
                    <!--Les Avis carousel de droite -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner text-center">
                            <div class="carousel-item active">
                                <img src="include/img/5STARS.png" class="fivetoile" alt="">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Asperiores voluptas voluptate libero, quasi adipisci vero delectus odit suscipit
                                    assumenda rerum deleniti voluptates nemo fuga mollitia unde. Quas earum ea qui!
                                </p>
                            </div>
                            <div class="carousel-item">
                                <img src="include/img/5STARS.png" class="fivetoile" alt="">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Asperiores voluptas voluptate libero, quasi adipisci vero delectus odit suscipit
                                    assumenda rerum deleniti voluptates nemo fuga mollitia unde. Quas earum ea qui!
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <h2 class="ecom">La Boutique CKM</h2><br>
            <!--ecommerce-->
            <div class="sectionecom">
                <img src="include/img/CKMPROLOGODEFBOUTIQUE.png" class="imgl" alt="">
                <img src="include/img/produitspray2.png" class="imgp" alt="">
            </div>
        </section>
        <!-----------------------------------------------------------footer-------------------------------------------------------------------->
        <footer>
            <div class="ensemblefooter">
                <div class="footerhaut text-center">
                    <div class="colonne1 text-center">

                        <a href="homepage.php"></a><img class="flogo" src="include/img/CKMHOMEFOOTER.png" width="10%">
                        <a class="ftext1" href="3D.php">3D</a>
                        <a class="ftext1" href="nettoyage.php">Nettoyage</a>
                        <a class="ftext1" href="espacevert.php">Espace Verts</a>
                    </div>

                    <div class="colonne2 text-center">
                        <a class="ftext2" href="">La Boutique</a><br>
                        <a class="ftext2" href="contact.php">Contact</a><br>
                        <a class="ftext2" href="">Mention Légales</a><br>
                        <a class="ftext2" href="">Politique de Confidentialité</a><br>
                    </div>

                    <div class="colonne3 text-center">
                        <div class="snap">
                            <img class="insta" src="include/img/ckmsnapchatyellow.png" alt="" width="50%"><a
                                href="http://www.snapchat.com"></a>
                        </div>
                        <div class="snap">
                            <img class="insta" src="include/img/ckmfbblue.png" alt="" width="50%"><a
                                href="http://www.facebook.com"></a>
                        </div>
                        <div class="snap">
                            <img class="insta" src="include/img/ckminstagramgreen.png" alt="" width="50%"><a
                                href="http://www.instagram.com"></a>
                        </div>
                    </div>
                </div>
                <div class="footerbas">
                    <div id="copyright" class="mt-5" role="contentinfo">Copyright 2020 Insersite</div>
                </div>
            </div>
        </footer>
    </div>


</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>


</html>