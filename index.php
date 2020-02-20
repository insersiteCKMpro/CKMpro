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
    /*-------------------------------------------------------------------------------header--------------------------------------------------------------------*/
    /* class de la div qui contient l'image logo titre */
    .logo {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 25vh;
    }

    /* image logo titre */
    .logo #logoHome {
        width: 25%;
    }

    /* class de la div qui contient le num et le nom */
    .fixed-top {
        display: flex;
        justify-content: flex-end;
        margin-right: 2vh;
    }

    /* class de la div qui contient l'image logo titre  */
    .lienImageLogoHome {
        padding-bottom: 10px;
    }

    /* li qui contient le lien et l'image logo Home  */
    #homeLogo {
        width: 50%;
        height: 50%;
        margin: 0 20px;
    }

    .fixed-top {
        display: flex;
        justify-content: flex-end;
        margin-right: 2vh;
        font-size: 1.2em;
    }

    .navbar {
        display: block;
    }

    .navbar-expand-lg .navbar-nav {
        justify-content: center;
    }

    /* bouton menu burger */
    .navbar-toggler {
        border: 0;
    }

    /* li qui contient les liens (3D, Nettoyage, Espaces Verts, Galeries */
    .nav-item1 {
        padding-left: 30px;
    }

    /* liste nav qui contient tout mes li */
    .navbar-nav {
        align-items: center;
        display: flex;
        flex-direction: row;
    }

    .rounded {
        border-radius: .25rem !important;
    }

    /* Séparation entre les liens (Menu burger déroulant)  */
    .trait1,
    .trait2,
    .trait3,
    .trait4,
    .trait5 {
        width: 40%;
        height: 1px;
        background-color: black;
        padding-left: 30px;
    }

    /* Séparation entre le header et le main */
    .trait6 {
        width: 100%;
        height: 1px;
        background-color: black;
    }

    .dropdown-item {
        font-size: 1.8em;
    }

    .navbar-light .navbar-nav .nav-link {
        color: black;
    }

    /* lien du déroulant */
    .dropdown-item1 {
        color: black;
        text-decoration: none;
        background-color: transparent;
    }

    /* hover style '3D' */
    #dropdown1:hover {
        background-color: #fef200;
        border-radius: 5px;
        /* opacity: 0.2; */
    }

    /* hover style 'Netrtoyage' */
    #navNettoyage:hover {
        background-color: RGB(37, 170, 226);
        border-radius: 5px;
    }

    /* hover style 'Espaces Verts' */
    #dropdown03:hover {
        background-color: #00a652;
        border-radius: 5px;
    }

    /* hover style lien 3D */
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

    /* hover style lien 3D */
    .dropdown-item03:hover {
        background-color: #fef200 !important;
        border-radius: 5px !important;
        opacity: 0.5 !important;
    }

    .dropdownDiv01 {
        display: grid;
    }

    .navbar {
        display: none;
    }

    .navbar-expand-lg .navbar-nav {
        justify-content: center;
        font-size: 4vh;
    }

    .boutonTel {
        display: none;
    }

    /* RESPONSIVE-------------------------------------------------------------------------------------------------------------- */


    /* FORMAT PC */
    @media screen and (min-width: 769px) and (max-width: 2560px) {

        /* On cache l'icone telephone */
        #fass {
            display: none;
        }

        /* On cache le text 'Menu' sur le bouton */
        .textMenu {
            display: none;
        }

        /* On cache les traits */
        .trait {
            display: none;
        }

        /* style du déroulant de la nav */
        .dropdown-menu {
            justify-content: center;
            border: 0;
            background-color: transparent;
        }

        /* On cache les traits */
        .navbar-toggle {
            display: none;
        }

        .logo #logoHome {
            width: 40%;
        }

        .fixed-top {
            font-size: 1.5em;
        }

    }


    /* FORMAT TABLETTE */

    @media screen and (min-width: 451px) and (max-width: 768px) {

        /* class de la div qui contient le num et le nom */
        .fixed-top {
            width: 50% !important;
            float: right !important;
            padding-left: 10vh !important;
            position: inherit !important;
        }

        /* icone téléphone */
        #fas {
            display: none;
        }

        /* On cache le text 'Menu' sur le bouton */
        .textMenu {
            display: none;
        }

        /* On cache les traits */
        .trait {
            display: none;
        }

        .navbar-nav {

            display: flex;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
            flex-direction: row;
        }

        .justify-content-md-center {
            justify-content: center !important;
            display: flex !important;
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            display: none;
        }

        #homeLogo {
            margin-right: 30px;
        }

        .navbar-expand-lg .navbar-nav {
            justify-content: center;
            font-size: 3vh;
        }

        .logo #logoHome {
            width: 60%;
        }

        .fixed-top {
            font-size: 1.2em;
        }
    }

    /* FORMAT MOBILE  */
    @media screen and (max-width: 450px) {

        /* class de la div qui contient le num et le nom */
        .fixed-top {
            justify-content: space-between !important;
            display: none;
            width: 100% !important;
        }

        /* image logo titre */
        .logo #logoHome {
            width: 90%;
        }

        /* numéro */
        #num {
            width: 50%;
            padding-left: 4vh;
        }

        /* nom d'entreprise */
        #nom {
            width: 35%;
        }

        /* icone téléphone */
        #fas {
            display: none;
        }

        /* li qui contient les liens (3D, Nettoyage, Espaces Verts, Galeries */
        .nav-item1 {
            padding-left: 0;
        }

        .navbar {
            display: flex;
            flex-direction: column;
        }

        .navbar-nav {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .ordi {
            display: none;
        }

        .burger {
            background: url(CKMpro/img/burger.png) no-repeat;
            background-size: cover;
            width: 20%;
        }

        .ml-auto,
        .mx-auto {
            margin-left: auto !important;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer;
            display: flex;
            justify-content: center;
        }

        #homeLogo {
            margin: 30px 20px 0;
            padding-left: 50px;
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

    /*--------------------------------------------------------------------------fin du header--------------------------------------------------------------------*/
    /*---------------------------------------------------------------------------section-------------------------------------------------------------------------*/
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

    .espacevert {
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

    .footerhaut {
        display: flex;
        justify-content: space-evenly;
    }

    .footerbas {
        display: flex;
        justify-content: center;
    }

    .colonne1 {
        width: 30%;
        align-items: center;
        color: black !important;
        text-decoration: none !important;
        display: flex;
        flex-direction: column;
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

    .flogo {
        width: 30%;
    }

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

        .footerhaut {
            display: flex;
            justify-content: space-evenly;
        }

        .footerbas {
            display: flex;
            justify-content: center;
        }

        .colonne1 {
            width: 30%;
            align-items: center;
            color: black !important;
            text-decoration: none !important;
            display: flex;
            flex-direction: column;
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

        .flogo {
            width: 30%;
        }

    }

    /* Sur tous types d'écran tablette, quand la largeur de la fenêtre est comprise entre 451px et 768px */
    @media all and (min-width: 451px) and (max-width: 768px) {
        .fixed-top

        /*header*/
            {
            display: flex;
            justify-content: flex-end;
            width: 80%;
        }

        .logo

        /*header*/
            {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40vh;
        }

        nav

        /*header*/
            {
            width: 100%;
            display: flex;
            justify-content: center;
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

        .flogo {
            width: 40%;
        }

    }

    /* Sur tous types d'écran telephone, quand la largeur de la fenêtre est comprise entre 450px et moins */
    @media all and (max-width: 450px) {
        .fixed-top

        /*header*/
            {
            display: flex;
            justify-content: flex-end;
            width: 80%;
        }

        .logo

        /*header*/
            {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40vh;
        }

        nav

        /*header*/
            {
            width: 100%;
            display: flex;
            justify-content: center;
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
    }

    /*--------------------------------------------------------------------------------fin section---------------------------------------------------------------------*/
    /*---------------------------------------------------------------------------------footer--------------------------------------------------------------------------*/
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
                <img src="img/LOGOCKMPRODEF.png" alt="logo" id="logoHome">
            </div>

            <div class="ordi navbar-expand-lg navbar-light rounded mobil">
                <div class="mx-auto">
                    <p class="textMenu"><strong>Menu</strong></p>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarsExample01"
                        aria-controls="navbarsExample01" aria-label="Toggle navigation">
                        <div><i class="fas fa-bars"></i></div>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-md-center">
                    <ul class="navbar-nav">
                        <li class="nav-item1 lienImageLogoHome">
                            <a class="navbar-brand1" href="#"><img src="img/CKMHOMEBTN.png" alt="homeLogo"
                                    id="homeLogo"></a>
                        </li>
                        <div class="trait trait1"></div>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3D</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdownDiv01">
                                <a class="dropdown-item dropdown-item01" href="#">Dératisation</a>
                                <a class="dropdown-item dropdown-item02" href="#">Désinfection</a>
                                <a class="dropdown-item dropdown-item03" href="#">Désinsectisation</a>
                            </div>
                        </li>
                        <div class="trait trait2"></div>
                        <li class="nav-item1 active">
                            <a class="nav-link" href="#" id="navNettoyage" data-toggle="dropdown">Nettoyage</a>
                        </li>
                        <div class="trait trait3"></div>
                        <li class="nav-item1 active">
                            <a class="nav-link" href="#" id="dropdown03">Espaces Verts</a>
                        </li>
                        <div class="trait trait4"></div>
                        <li class="nav-item1 active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Galeries</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04" id="dropdownDiv02">
                                <a class="dropdown-item dropdown-item01" href="#">3D</a>
                                <a class="dropdown-item dropdown-item02" href="#">Nettoyage</a>
                                <a class="dropdown-item dropdown-item03" href="#">Espaces Verts</a>
                            </div>
                        </li>
                        <div class="trait trait5"></div>
                    </ul>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light rounded">
                <div class="mx-auto">
                    <p class="textMenu"><strong>Menu</strong></p>
                    <a class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarsExample01"
                        aria-controls="navbarsExample01" aria-label="Toggle navigation">
                        <div><i class="fas fa-bars"></i></div><img src="img/burger.png" class="burger" alt="">
                    </a>
                </div>

                <div class="" id="navbarsExample01">
                    <ul class="navbar-nav">
                        <li class="nav-item1 lienImageLogoHome">
                            <a class="navbar-brand1" href="#"><img src="img/CKMHOMEBTN.png" alt="homeLogo"
                                    id="homeLogo"></a>
                        </li>
                        <div class="trait trait1"></div>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3D</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdownDiv01">
                                <a class="dropdown-item dropdown-item01" href="#">Dératisation</a>
                                <a class="dropdown-item dropdown-item02" href="#">Désinfectionn</a>
                                <a class="dropdown-item dropdown-item03" href="#">Désinsectisation</a>
                            </div>
                        </li>

                        <div class="trait trait2"></div>

                        <li class="nav-item1 active">
                            <a class="nav-link" href="#" id="navNettoyage" data-toggle="dropdown">Nettoyage</a>
                        </li>
                        <div class="trait trait3"></div>

                        <li class="nav-item1 active">
                            <a class="nav-link" href="#" id="dropdown03">Espaces Verts</a>
                        </li>
                        <div class="trait trait4"></div>

                        <li class="nav-item1 active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Galeries</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04" id="dropdownDiv02">
                                <a class="dropdown-item dropdown-item01" href="#">3D</a>
                                <a class="dropdown-item dropdown-item02" href="#">Nettoyage</a>
                                <a class="dropdown-item dropdown-item03" href="#">Espaces Verts</a>
                            </div>
                        </li>
                        <div class="trait trait5"></div>

                    </ul>
                </div>

            </nav>
            <div class="trait6"></div>
            <div class="boutonTel">
                <a href="tel:+33123456789" id="lienTel"><i class="fas fa-phone-alt" id="iconTel"></i></a>
            </div>
        </header>
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
                <img src="img/CKMPROLOGODEFBOUTIQUE.png" class="imgl" alt="">
                <img src="img/produitspray2.png" class="imgp" alt="">
            </div>
        </section>

        <footer>
            <div class="ensemblefooter">
                <div class="footerhaut text-center">
                    <div class="colonne1 text-center">

                        <img class="flogo" src="img/CKMHOMEFOOTER.png" width="10%">
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
                            <img class="snap" src="img/ckmsnapchatyellow.png" alt="" width="50%"><a
                                href="http://www.snapchat.com"></a>
                        </div>
                        <div class="fb">
                            <img class="snap" src="img/ckmfbblue.png" alt="" width="50%"><a
                                href="http://www.facebook.com"></a>
                        </div>
                        <div class="snap">
                            <img class="insta" src="img/ckminstagramgreen.png" alt="" width="50%"><a
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