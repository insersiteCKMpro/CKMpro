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
    /*ENTÊTE FIXE STYLE--------------------------------------------code source css-----------------------------------------------------------------------*/
    .fixed-top {
        display: flex;
        justify-content: flex-end;
        margin-right: 2vh;
        font-size: 1.2em;
    }

    #fass {
        display: none;
    }

    .logo {
        margin-top: 2.5em;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 20vh;
    }

    /* LOGO TITRE STYLE */
    .logoTitre {
        height: 17vh;
        width: 49vw;
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
        left: 8vh;
        border: none;
    }

    /* -----------------------------------------------------FORMAT PC Responsive------------------------------------------------------- */

    @media screen and (min-width: 769px) and (max-width: 2560px) {

        /* ENTÊTE FIXE STYLE */
        .fixed-top {
            display: flex;
            justify-content: flex-end;
            margin-right: 2vh;
            font-size: 1.2em;
        }

        .logo {
            margin-top: 2.5em;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 20vh;
        }

        /* LOGO TITRE STYLE */
        .logoTitre {
            height: 17vh;
            width: 49vw;
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
            left: 8vh;
            border: none;
        }

    }


    /* ---------------------------------------------------FORMAT TABLETTE - RESPONSIVE---------------------------------------------------- */

    @media screen and (min-width: 451px) and (max-width: 768px) {

        /* ENTÊTE FIXE STYLE */

        /* ICONE TEL ENTÊTE FIXE STYLE */

        /* LOGO STYLE */
        .logoTitre {
            height: 14vh;
            width: 60vw;
        }

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
            left: 2vh;
        }

        b,
        strong {
            font-weight: bolder;
            display: none;
        }
    }

    /* --------------------------------------------------------FORMAT MOBILE-RESPONSIVE----------------------------------------------------- */

    @media screen and (max-width: 450px) {

        /* ENTÊTE FIXE STYLE */
        .fixed-top {
            justify-content: space-between !important;
            width: 100% !important;
        }

        /* ICONE TEL ENTÊTE FIXE STYLE */
        #fas {
            display: none;
        }

        /* NUMERO */

        #num {
            width: 50%;
            padding-left: 4vh;
        }

        /* NOM */

        #nom {
            width: 35%;
        }

        /* LOGO STYLE */

        .logoTitre {
            height: 11vh;
            width: 65vw;
        }

        /* MENU BURGER */
        .textMenu {
            margin-bottom: 0;
        }

        .fa,
        .fas {
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            justify-content: center;
        }

        .logoHome {
            width: 10vw;
            position: relative;
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
        }

        .navbar-dark .navbar-toggler {
            color: black !important;
        }
    }

    /* ---------------------------------------------------------responsive - portable---------------------------------------------------- */

    @media (min-width: 576px) {
        .textMenu {
            display: none;
        }
    }

    .flash

    /* Débaras*/
        {
        color: #00aeef;
    }

    section

    /*carousel Entreprise*/
        {
        width: 100%;
        height: 52vh;
    }

    .ets

    /*Entreprise*/
        {
        text-align: center;
    }

    .activités

    /*Activités*/
        {
        text-align: center;
    }

    .sectionB

    /*Activités*/
        {
        display: flex;
        /* width: 100%; */
        height: 25vh;
        justify-content: space-around;
        /* flex-direction: column; */
        display: flex;
    }

    .derat

    /*Activités*/
        {
        width: 33.3%;
        text-align: center;
    }

    .nettoyage

    /*Activités*/
        {
        width: 33.3%;
        text-align: center;
    }

    .espacevert

    /*Activités*/
        {
        width: 33.3%;
        text-align: center;
    }

    .cible {
        text-align: center;
        margin-top: 5vh;
    }

    main

    /*Professionnel Particulier*/
        {
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

    .mainh

    /*Professionnel Particulier*/
        {
        width: 100%;
        height: 36vh;
        display: flex;
    }

    .ppro {
        width: 90%;
    }

    .mainb

    /*avis*/
        {
        width: 100%;
        height: 25vh;
        display: flex;
        justify-content: space-around;
    }

    .carouL

    /*carousel avis gauche*/
        {
        height: 18vh;
        width: 30%;
    }

    .carouR

    /*carousel avis droite*/
        {
        height: 18vh;
        width: 30%;
    }

    .carousel-control-prev

    /*carousel avis droite et gauche*/
        {
        width: 10%;
        height: 18vh;
    }

    .carousel-control-next

    /*carousel avis droite et gauche*/
        {
        width: 10%;
        height: 18vh;
    }

    .sectionecom

    /*e-commerce*/
        {
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

    .sectionM

    /*Entreprise*/
        {
        width: 100%;
        height: 20vh;
    }

    /* ecran pc */
    @media screen and (min-width: 769px) and (max-width: 2560px) {

        section

        /*carousel Entreprise*/
            {
            width: 100%;
            height: 52vh;
        }

        .ets

        /*Entreprise*/
            {
            text-align: center;
        }

        .activités

        /*Activités*/
            {
            text-align: center;
        }

        .sectionB

        /*Activités*/
            {
            display: flex;
            /* width: 100%; */
            height: 35vh;
            justify-content: space-around;
            /* flex-direction: column; */
            display: flex;
        }

        .derat

        /*Activités*/
            {
            width: 33.3%;
            text-align: center;
        }

        .nettoyage

        /*Activités*/
            {
            width: 33.3%;
            text-align: center;
        }

        .espacevert

        /*Activités*/
            {
            width: 33.3%;
            text-align: center;
        }

        .cible {
            text-align: center;
            margin-top: 11vh;
        }

        main

        /*Professionnel Particulier*/
            {
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

        .mainh

        /*Professionnel Particulier*/
            {
            width: 100%;
            height: 36vh;
            display: flex;
        }

        .ppro {
            width: 90%;
        }

        .mainb

        /*avis*/
            {
            width: 100%;
            height: 25vh;
            display: flex;
            justify-content: space-around;
        }

        .carouL

        /*carousel avis gauche*/
            {
            height: 18vh;
            width: 30%;
        }

        .carouR

        /*carousel avis droite*/
            {
            height: 18vh;
            width: 30%;
        }

        .carousel-control-prev

        /*carousel avis droite et gauche*/
            {
            width: 10%;
            height: 18vh;
        }

        .carousel-control-next

        /*carousel avis droite et gauche*/
            {
            width: 10%;
            height: 18vh;
        }

        .sectionecom

        /*e-commerce*/
            {
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

        .sectionM

        /*Entreprise*/
            {
            width: 100%;
            height: 20vh;
        }
    }

    /* Sur tous types d'écran tablette, quand la largeur de la fenêtre est comprise entre 451px et 768px */
    @media all and (min-width: 451px) and (max-width: 768px) {
        .flash

        /* Débaras*/
            {
            color: #00aeef;
        }

        section

        /*carousel Entreprise*/
            {
            width: 100%;
            height: 52vh;
        }

        .sectionM

        /*Entreprise*/
            {
            width: 100%;
        }

        .ets

        /*Entreprise*/
            {
            text-align: center;
        }

        .activités

        /*Activités*/
            {
            text-align: center;
        }

        .sectionB {
            height: 52vh;
        }

        .derat

        /*Activités*/
            {
            width: 33.3%;
            text-align: center;
        }

        .nettoyage

        /*Activités*/
            {
            width: 33.3%;
            text-align: center;
        }

        .espacevert

        /*Activités*/
            {
            width: 33.3%;
            text-align: center;
        }

        .cible {
            text-align: center;
            margin: 0;
        }

        main

        /*Professionnel Particulier*/
            {
            height: 3vh;
            width: 97.5%;
            justify-content: center;
            margin-left: 1.5vh;
        }

        .mainh

        /*Professionnel Particulier*/
            {
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
    }

    /* Sur tous types d'écran telephone, quand la largeur de la fenêtre est comprise entre 450px et moins */
    @media all and (max-width: 450px) {
        .flash

        /* Débaras*/
            {
            color: #00aeef;
        }

        section

        /*carousel Entreprise*/
            {
            width: 100%;
            height: 52vh;
        }

        .sectionM {
            width: 100%;
            height: 33vh;
        }

        .ets

        /*Entreprise*/
            {
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

        .nettoyage

        /*Activités*/
            {
            width: 100%;
            text-align: center;
        }

        .espacevert

        /*Activités*/
            {
            width: 100%;
            text-align: center;
        }

        .cible {
            text-align: center;
            margin-top: 0;
        }

        main

        /*Professionnel Particulier*/
            {
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

        .mainh

        /*Professionnel Particulier*/
            {
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

        .carouR

        /*carousel avis droite*/
            {
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
    }

    header,
    nav,
    section {
        display: contents;
    }

    footer {
        background-color: white;
        border-top: 1px solid black;
    }

    .footerhaut {
        display: flex;
        justify-content: space-evenly;
        font-size: 1.5em;
    }

    .footerbas {
        display: flex;
        justify-content: center;
        font-size: 1em;
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

    /* ----------------------------------------------------------------------------------------------------- */
    /* ORDINATEUR */
    @media screen and (min-width: 769px) and (max-width: 2560px) {
        .flogo {
            width: 10%;
        }

        .footerhaut,
        .footerbas {
            font-size: 1em;
        }
    }

    /* TABLETTE */
    @media screen and (min-width: 451px) and (max-width: 768px) {
        .flogo {
            width: 20%;
        }

        .footerhaut,
        .footerbas {
            font-size: 1em;
        }
    }

    /* TELEPHONE */

    @media screen and (max-width: 450px) {
        footer {
            border-top: 1px solid black;
        }

        .flogo {
            width: 50%;
            margin-bottom: 15%;
        }

        .footerhaut {
            flex-direction: column-reverse;
        }

        .colonne2 {
            order: -1;
        }

        .footerhaut {
            align-items: center;
            text-align: center;
        }

        .colonne3 {
            width: 100%;
            margin-bottom: 10%;
            margin-top: 2vh;
        }

        .footerhaut,
        .footerbas {
            font-size: 1em;
        }
    }
</style>

<body>
    <div class="container-fluid">
        <header>
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
                <img src="img/LOGOCKMPRODEF.png" alt="logo" class="logoTitre">
            </div>


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
                            <a class="nav-link" id="tailleA" href="#"><img src="img/CKMHOMEFOOTER.png" alt="Logo Home"
                                    class="logoHome"></a>
                        </li>
                        <li class="nav-item dropdown li2">
                            <a class="nav-link dropdown-toggle navMarg colorJ" href="#" id="dropdown03"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3D</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdownDiv01">
                                <a class="dropdown-item dropdown-item01" href="#">Dératisation</a>
                                <a class="dropdown-item dropdown-item01" href="#">Désinfection</a>
                                <a class="dropdown-item dropdown-item01" href="#">Désinsectisation</a>
                            </div>
                        </li>
                        <li class="nav-item li3">
                            <a class="nav-link navMarg colorB" href="#">Nettoyage</a>
                        </li>
                        <li class="nav-item li4">
                            <a class="nav-link navMarg colorV" href="#" tabindex="-1" aria-disabled="true">Espaces
                                Verts</a>
                        </li>
                        <li class="nav-item dropdown li5">
                            <a class="nav-link dropdown-toggle navMarg" href="#" id="dropdown03" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Galeries</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown03">
                                <a class="dropdown-item dropdown-item02" href="#">3D</a>
                                <a class="dropdown-item dropdown-item03" href="#">Nettoyage</a>
                                <a class="dropdown-item dropdown-item04" href="#">Espaces Verts</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-------------------------------------------------------------Section---------------------------------------------------------------------->
        <section>
            <main>
                <marquee class="flash" behavior="" direction="">Vous avez besoin de vos deux mains libres? Nous nous
                    chargeons
                    aussi de débarraser!!</marquee>
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
                            <img src="img/debarrascarrousel.png" class="imgC" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/newimg2560x765.png" class="imgC" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/produitredim2560vw765vh.png" class="imgC" alt="...">
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
            <h1 class="ets">l'Entreprise</h1>
            <!--l'entreprise CKMpro-->
            <div class="sectionM">
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate, ab.
                    Perferendis eos repellat provident alias quam pariatur ut.
                    Fugiat impedit temporibus officiis accusamus aperiam nostrum reiciendis sequi tempora in et.
                </p>
                <p class="text-center">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nihil
                    fugiat iusto dolorum, rerum quis delectus assumenda qui quasi recusandae,
                    necessitatibus aliquid animi eum quae incidunt rem eos quisquam omnis.
                    <p>
            </div>

            <h2 class="activités">Nos Activités</h2><br>
            <!--les activités de CKMpro-->
            <div class="sectionB">
                <div class="derat">
                    <img src="img/3Dmaq.png" class="img3" alt="">
                    <h2>3D</h2>
                    <p class="dne">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                        soluta sapiente sit corrupti similique vero in repellendus
                        laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
                        Molestiae quasi magnam quos obcaecati?
                    </p>
                </div>
                <div class="nettoyage">
                    <img src="img/nettoyagemaq.png" class="img3" alt="">
                    <h2>Nettoyage</h2>
                    <p class="dne">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                        soluta sapiente sit corrupti similique vero in repellendus
                        laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
                        Molestiae quasi magnam quos obcaecati?
                    </p>
                </div>
                <div class="espacevert">
                    <img src="img/espacevertmaq.png" class="img3" alt="">
                    <h2>Espace vert</h2>
                    <p class="dne">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                        soluta sapiente sit corrupti similique vero in repellendus
                        laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
                        Molestiae quasi magnam quos obcaecati?
                    </p>
                </div>
            </div>

            <h2 class="cible">Les Cibles</h2><br>
            <!--les cibles de CKMpro-->
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
            <div class="mainb">
                <!--Les Avis -->
                <div class="carouL">
                    <!--Les Avis carousel de gauche -->
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
                    </div>
                </div>

                <div class="carouR">
                    <!--Les Avis carousel de droite -->
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

                        <img class="flogo" src="include/img/CKMHOMEFOOTER.png" width="10%">
                        <a class="ftext1" href="">3D</a>
                        <a class="ftext1" href="">Nettoyage</a>
                        <a class="ftext1" href="">Espace Verts</a>
                    </div>

                    <div class="colonne2 text-center">
                        <a class="ftext2" href="">La Boutique</a><br>
                        <a class="ftext2" href="">Contact</a><br>
                        <a class="ftext2" href="">Mention Légales</a><br>
                        <a class="ftext2" href="">Politique de Confidentialité</a><br>
                    </div>

                    <div class="colonne3 text-center">
                        <div class="snap">
                            <img class="snap" src="include/img/ckmsnapchatyellow.png" alt="" width="50%"><a
                                href="http://www.snapchat.com"></a>
                        </div>
                        <div class="fb">
                            <img class="snap" src="include/img/ckmfbblue.png" alt="" width="50%"><a
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