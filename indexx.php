<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
?>

<style>
    /*--------------------------------------------code source section----------------------------------*/
    .container-fluid,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl {
        width: 100%;
        padding-right: 0;
        padding-left: 0;
        margin-right: auto;
        margin-left: auto;
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    p {
        width: 75%;
        margin: 2vh auto;
    }

    .carousel-control-prev {
        left: 0;
        margin: auto;
    }

    .carousel-control-next {
        right: 0;
        margin: auto;
    }

    .pact {
        width: 95%;
        margin: 0 auto;
    }

    /* Débaras*/
    marquee.flash:hover {
        font-size: x-large;
        height: 5.5vh;
        background-color: rgb(0, 174, 239);
        color: #fff200;
        transition: 1s;
        display: flex;
        padding-top: 0.25%;
    }

    .marki {
        /* padding: .2em; */
        /* background-color: #fcf8e3; */
        display: flex;
        font-size: large;
    }

    .flash {
        color: #00a651;
        height: 5vh;
        display: flex;
        padding-top: 0.5%;
        transition: 1s;
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
        justify-content: space-around;
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

    /*Professionnel Particulier*/
    main {
        width: 100%;
        justify-content: space-between;
    }

    .pro, .part {
        width: 74%;
    }

    /*Professionnel Particulier*/
    .mainh {
        width: 100%;
        display: flex;
    }

    .ppro {
        text-align: center;
    }

    /*avis*/
    .mainb {
        width: 100%;
        display: flex;
    }

    /*carousel avis gauche*/
    .carouL {
        width: 90%;
    }

    /*carousel avis droite*/
    .carouR {
        width: 90%;
        display: flex;
        margin: auto;
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
        margin: 5vh 0;
        display: flex;
        justify-content: space-around;
        
    }

    .ecom {
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .img1 {
        margin-top: 30px;
        width: 40vh;
    }

    .img3 {
        width: 95%;
    }

    .img4 {
        width: 2%;
    }

    .imgC {
        width: 100%;

    }

    .imgM {
        display: flex;
    }

    .imgl {
        width: 100%;
    }

    .imgp {
        width: 100%;

    }

    .fivetoile {
        width: 30%;
    }

    /*---------------------------------------------section-ecran pc----------------------------------- */
    @media screen and (min-width: 769px) and (max-width: 2560px) {

        marquee.flash:hover {
            font-size: x-large;
            height: 5.5vh;
            background-color: rgb(0, 174, 239);
            color: #fff200;
            transition: 1s;
            display: flex;
            padding-top: 0.25%;
        }

        .marki {
            /* padding: .2em; */
            /* background-color: #fcf8e3; */
            display: flex;
            font-size: large;
        }

        .flash {
            color: #00a651;
            height: 5vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
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
            justify-content: space-around;
            display: flex;
            margin: 0 0 5vh 2.5vh;
        }

        /*Activités*/
        .derat {
            width: 30%;
            text-align: center;
        }

        /*Activités*/
        .nettoyage {
            width: 30%;
            text-align: center;
        }

        /*Activités*/
        .espacevert {
            width: 30%;
            text-align: center;
        }

        .cible {
            text-align: center;
            margin-bottom: 5vh;
        }

        /*Professionnel Particulier*/
        main {
            width: 100%;
            justify-content: space-between;
        }

        .pro, .part {
            width: 50%;
            margin: 0 3%;
        }

        /*Professionnel Particulier*/
        .mainh {
            width: 100%;
            display: flex;
            margin-bottom: 6vh;
        }

        /*avis*/
        .mainb {
            width: 100%;
            display: flex;
        }

        /*carousel avis gauche*/
        .carouL {
            width: 100%;
        }

        /*carousel avis droite*/
        .carouR {
            width: 100%;
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
            margin: 5vh 0;
            display: flex;
            justify-content: space-around;
            width:  100%;
            
           
        }
        .colonneG {
            width: 100%;
            display:flex;
            justify-content: center;
            margin-left: 10%;

        }
        .colonneD {
            width: 100%;
            display:flex;
            justify-content: center;
           
        }

        .ecom {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .img1 {
            margin-top: 30px;
            width: 40vh;
        }

        .img3 {
            width: 95%;
        }

        .img4 {
            width: 2%;
        }

        .imgC {
            width: 100%;
        }

        .imgM {
            display: flex;
            margin: auto;
        }

        .imgl {
            width: 80%;
        }

        .imgp {
           
            width: 228px;
        }

        .fivetoile {
            width: 30%;
        }
    }

    /* ---------------------------------------section petit PC----------------------------------------*/
    @media screen and (min-width: 769px) and (max-width: 1024px) {

        .sectionB {
            justify-content: space-around;
            display: flex;
            margin: 0 0 5vh 2.5vh;
        }

        /*Activités*/
        .derat {
            width: 30%;
            text-align: center;
        }

        /*Activités*/
        .nettoyage {
            width: 30%;
            text-align: center;
        }

        /*Activités*/
        .espacevert {
            width: 30%;
            text-align: center;
        }

        .cible {
            text-align: center;
            margin-bottom: 5vh;
        }

        /*Professionnel Particulier*/
        main {
            width: 100%;
            justify-content: space-between;
        }

        .pro, .part {
            width: 50%;
            margin: 0 3%;
        }

        /*Professionnel Particulier*/
        .mainh {
            width: 100%;
            display: flex;
            margin-bottom: 6vh;
        }

        /*avis*/
        .mainb {
            width: 100%;
            display: flex;
        }

        /*carousel avis gauche*/
        .carouL {
            width: 100%;
        }

        /*carousel avis droite*/
        .carouR {
            width: 100%;
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
            margin: 5vh 0;
            display: flex;
            justify-content: space-around;
            
        }

        .ecom {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .img1 {
            margin-top: 30px;
            width: 40vh;
        }

        .img3 {
            width: 95%;
        }

        .img4 {
            width: 2%;
        }

        .imgC {
            width: 100%;
        }

        .imgM {
            display: flex;
            margin: auto;
        }

        .imgl {
            width: 100%;
        }

        .imgp {
            width: 30%;
        }

        .fivetoile {
            width: 30%;
        }
    }

    /* ---------------------------------------section tablette----------------------------------------*/
    @media all and (min-width: 451px) and (max-width: 768px) {
        p {
            width: 80%;
            margin: 2vh auto;
        }

        .pact {
            width: 95%;
            margin: 0 auto;
        }

        marquee.flash:hover {
            font-size: x-large;
            height: 5.5vh;
            background-color: rgb(0, 174, 239);
            color: #fff200;
            transition: 1s;
            display: flex;
            padding-top: 0.5%;
        }

        .marki {
            /* padding: .2em; */
            /* background-color: #fcf8e3; */
            display: flex;
            font-size: large;
        }

        .flash {
            height: 4vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
            color: #00a651;
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

        .sectionB {
            margin: 0 0 5vh 1vh;
        }

        /*Activités*/
        .derat {
            width: 30.3%;

        }

        /*Activités*/
        .nettoyage {
            width: 30.3%;

        }

        /*Activités*/
        .espacevert {
            width: 30.3%;
        }

        .cible {
            text-align: center;
            margin-bottom: 3vh;
        }

        /*Professionnel Particulier*/
        main {
            width: 100%;
            justify-content: center;
        }


        /*Professionnel Particulier*/
        .mainh {
            width: 100%;
            display: FLEX;
            justify-content: space-around;
            margin-bottom: 6vh;
        }

        .img1 {
            margin-top: 30px;
            width: 40%;
            height: 15vh;
        }

        .pro, .part {
            width: 48%
        }

        .img3 {
            width: 90%;
        }

        .img4 {
            width: 2%;
        }

        .imgC {
            width: 100%;
        }

        .imgM {
            display: flex;
            margin-top: 0.4px;
            width:100%;
        }

        .fivetoile {
            width: 55%;
        }
        /* section ecom */
        .sectionecom{
            display: flex;
            width: 100%;
        }
        .colonneD{
            margin-right: 15%;
            
        }
        .colonneG{
            margin-left: 10%;
        }
        .imgp{
            width: 60%;
        }
        .imgl{
            width: 60%;
        }
    }

    /* -------------------------------------------------section-mobile-----------------------------*/
    @media all and (max-width: 450px) {

        p {
            width: 90%;
            margin: 1vh auto;
        }


        body {
            width: 100%
        }

        marquee.flash:hover {
            font-size: x-large;
            height: 5.5vh;
            background-color: rgb(0, 174, 239);
            color: #fff200;
            transition: 1s;
            display: flex;
            padding-top: 1%;
        }

        .marki {
            /* padding: .2em; */
            /* background-color: #fcf8e3; */
            display: flex;
            font-size: large;
        }

        .flash {
            height: 4vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
            color: #00a651;
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

        .activités {
            text-align: center;
            margin: 3vh;
        }

        .sectionB {
            flex-direction: column;
            margin-bottom: 3vh;
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
        }

        /*Professionnel Particulier*/
        main {
            width: 100%;
            justify-content: center;
        }

        .pro, .part {
            width: 95%;
            display: flex;
            flex-direction: column;
            margin: 2vh auto;
            border: 0.5px solid gray;
        }

        .ppro {
            text-align: center
        }

        .mainh {
            display: flex;
            flex-direction: column;
            margin-bottom: 6vh;
        }

        .mainb {
            width: 100%;
            display: flex;
            flex-direction: column;
            text-align: inherit;
        }

        .carouL {
            width: 100%;
        }

        /*carousel avis droite*/
        .carouR {
            margin-top: 2vh;
            width: 100%;
            margin: 0;
        }

        .sectionecom {
            display: flex;
            flex-direction: row;
            JUSTIFY-CONTENT: space-around;
            margin-left: 10%;
        }

        .colonneD{
            margin-left: -30%;
        }

        .ecom {
            text-align: center;
            margin-top: 3vh;
        }

        .img1 {
            margin-top: 30px;
            width: 92%;
        }

        .img3 {
            width: 100%;
            display: flex;
            margin: auto;
        }

        .img4 {
            width: 92%;
        }

        .imgC {
            width: 100%;
        }

        .imgM {
            display: flex;
            margin: 0.5px;
        }

        .imgl {
            width: 50%;
            display: flex;
            margin: auto 0;
        }

        .imgp {
            width: 51%;
            display: flex;
            margin: auto 0;
        }

        .fivetoile {
            width: 65%;
        }

        .pact {
            width: 90%;
        }
    }

    @media screen and (min-height: 556px) and (max-heigh: 596px) {
        .textMenu {
            display: none;
            font-family: 'Red Hat Display', serif;
        }

        p {
            width: 90%;
            margin: 1vh auto;
        }


        body {
            width: 100%
        }

        marquee.flash:hover {
            font-size: x-large;
            height: 5.5vh;
            background-color: rgb(0, 174, 239);
            color: #fff200;
            transition: 1s;
            display: flex;
            padding-top: 1%;
        }

        .marki {
            /* padding: .2em; */
            /* background-color: #fcf8e3; */
            display: flex;
            font-size: large;
        }

        .flash {
            height: 4vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
            color: #00a651;
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

        .activités {
            text-align: center;
            margin: 3vh;
        }

        .sectionB {
            flex-direction: column;
            margin-bottom: 3vh;
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
        }

        /*Professionnel Particulier*/
        main {
            width: 100%;
            justify-content: center;
        }

        .pro,
        .part {
            height: 100vh;
        }

        .ppro {
            text-align: center
        }

        .mainh {
            display: flex;
            flex-direction: column;
            margin-bottom: 6vh;
        }

        .mainb {
            width: 100%;
            display: flex;
            flex-direction: column;
            text-align: inherit;
        }

        .carouL {
            width: 100%;
        }

        /*carousel avis droite*/
        .carouR {
            margin-top: 2vh;
            width: 100%;
            margin: 0;
        }

        .sectionecom {
            display: flex;
            flex-direction: row;
            JUSTIFY-CONTENT: space-around;
        }

        .ecom {
            text-align: center;
            margin-top: 3vh;
        }

        .img1 {
            margin-top: 30px;
            width: 92%;
        }

        .img3 {
            width: 100%;
            display: flex;
            margin: auto;
        }

        .img4 {
            width: 92%;
        }

        .imgC {
            width: 100%;
        }

        .imgM {
            display: flex;
            margin: 0.5px;
        }

        .imgl {
            width: 50%;
            display: flex;
            margin: auto 0;
        }

        .imgp {
            width: 50%;
            display: flex;
            margin: auto 0;
        }

        .fivetoile {
            width: 65%;
        }

        .pact {
            width: 90%;
        }
    }

    /* Format iphone 6, 7, 8+ */
    @media (min-height: 730px) and (max-height: 740px) {
        p {
            width: 90%;
            margin: 1vh auto;
        }


        body {
            width: 90 %;
        }

        marquee.flash:hover {
            font-size: x-large;
            height: 5.5vh;
            background-color: rgb(0, 174, 239);
            color: #fff200;
            transition: 1s;
            display: flex;
            padding-top: 1%;
        }

        .marki {
            /* padding: .2em; */
            /* background-color: #fcf8e3; */
            display: flex;
            font-size: large;
        }

        .flash {
            height: 4vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
            color: #00a651;
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

        .activités {
            text-align: center;
            margin: 3vh;
        }

        .sectionB {
            flex-direction: column;
            margin-bottom: 3vh;
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
        }

        /*Professionnel Particulier*/
        main {
            width: 100%;
            justify-content: center;
        }

        .pro,
        .part {
            height: 80vh;
        }

        .ppro {
            text-align: center;
        }

        .mainh {
            display: flex;
            flex-direction: column;
            margin-bottom: 6vh;
        }

        .mainb {
            width: 100%;
            display: flex;
            flex-direction: column;
            text-align: inherit;
        }

        .carouL {
            width: 100%;
        }

        /*carousel avis droite*/
        .carouR {
            margin-top: 2vh;
            width: 100%;
            margin: 0;
        }

        .sectionecom {
            display: flex;
            flex-direction: row;
            JUSTIFY-CONTENT: space-around;
        }

        .ecom {
            text-align: center;
            margin-top: 3vh;
        }

        .img1 {
            margin-top: 30px;
            width: 92%;
        }

        .img3 {
            width: 100%;
            display: flex;
            margin: auto;
        }

        .img4 {
            width: 92%;
        }

        .imgC {
            width: 100%;
        }

        .imgM {
            display: flex;
            margin: 0.5px;
        }

        .imgl {
            width: 50%;
            display: flex;
            margin: auto 0;
        }

        .imgp {
            width: 25%;
            display: flex;
            margin: auto 0;
        }

        .fivetoile {
            width: 65%;
        }

        .pact {
            width: 90%;
        }

    }

    /* Format iphone 6, 7, 8 */
    @media (max-height: 670px) and (min-height: 660px) {
        
        p {
            width: 90%;
            margin: 1vh auto;
        }

        body {
            width: 100%;
        }

        marquee.flash:hover {
            font-size: x-large;
            height: 5.5vh;
            background-color: rgb(0, 174, 239);
            color: #fff200;
            transition: 1s;
            display: flex;
            padding-top: 1%;
        }

        .marki {
            /* padding: .2em; */
            /* background-color: #fcf8e3; */
            display: flex;
            font-size: large;
        }

        .flash {
            height: 4vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
            color: #00a651;
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

        .activités {
            text-align: center;
            margin: 3vh;
        }

        .sectionB {
            flex-direction: column;
            margin: 0 0 3vh 0;
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
            padding-bottom: 5%;
        }

        /*Professionnel Particulier*/
        main {
            width: 100%;
            justify-content: center;
        }

        .pro,
        .part {
            height: 85vh;
        }

        .ppro {
            text-align: center;
        }

        .mainb {
            width: 100%;
            display: flex;
            flex-direction: column;
            text-align: inherit;
        }

        .carouL {
            height: 18vh;
            width: 100%;
            margin-bottom: 1vh;
        }

        /*carousel avis droite*/
        .carouR {
            margin-top: 1vh;
            height: 18vh;
            width: 100%;
            margin: 0;
        }

        .sectionecom {
            display: flex;
            flex-direction: row;
            JUSTIFY-CONTENT: space-around;
        }

        .ecom {
            text-align: center;
            margin-top: 3vh;
        }

        .img1 {
            margin-top: 30px;
            width: 92%;
        }

        .img3 {
            width: 100%;
            display: flex;
            margin: auto;
        }

        .img4 {
            width: 92%;
        }

        .imgC {
            width: 100%;
        }

        .imgM {
            display: flex;
            margin: 0.5px;
        }

        .imgl {
            width: 50%;
            display: flex;
            margin: auto 0;
        }

        .imgp {
            width: 25%;
            display: flex;
            margin: auto 0;
        }

        .fivetoile {
            width: 65%;
        }

        .pact {
            width: 90%;
        }
    }

    @media (max-height: 430px) and (min-height: 360px) {
        p {
            width: 90%;
            margin: 1vh auto;
        }

        body {
            width: 100%
        }

        marquee.flash:hover {
            font-size: x-large;
            height: 5.5vh;
            background-color: rgb(0, 174, 239);
            color: #fff200;
            transition: 1s;
            display: flex;
            padding-top: 1%;
        }

        .marki {
            /* padding: .2em; */
            /* background-color: #fcf8e3; */
            display: flex;
            font-size: large;
        }

        .flash {
            height: 4vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
            color: #00a651;
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

        .activités {
            text-align: center;
            margin: 3vh;
        }

        .sectionB {
            margin: 0 0 10vh 0;
            display: flex;
            flex-direction: column;
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
            padding-bottom: 3%;
        }

        .mainh {
            width: 100%;
            display: FLEX;
            justify-content: space-around;
            margin-bottom: 6vh;
            flex-direction: column;
        }

        .pro, .part {
            width: 100%;
            margin: 5vh 0;
        }

        /*Professionnel Particulier*/
        main {
            width: 100%;
            justify-content: center;
        }

        .ppro {
            text-align: center;
        }

        .mainb {
            width: 100%;
            display: flex;
            flex-direction: column;
            text-align: inherit;
        }

        .carouL {
            width: 100%;
        }

        /*carousel avis droite*/
        .carouR {
            margin-top: 2vh;
            width: 100%;
            margin: 0;
        }

        .sectionecom {
            display: flex;
            flex-direction: row;
            JUSTIFY-CONTENT: space-around;
        }

        .ecom {
            text-align: center;
            margin-top: 3vh;
        }

        .img1 {
            margin-top: 30px;
            width: 92%;
        }

        .img3 {
            width: 100%;
            display: flex;
            margin: auto;
        }

        .img4 {
            width: 92%;
        }

        .imgC {
            width: 100%;
        }

        .imgM {
            display: flex;
           
        }

        .imgl {
            width: 50%;
            display: flex;
            
        }

        .imgp {
            width: 50%;
            display: flex;
            margin: auto 0;
        }

        .fivetoile {
            width: 30%;
        }

        .pact {
            width: 90%;
        }
    }

    @media (max-height: 359px) and (min-height: 310px) {
        p {
            width: 90%;
            margin: 1vh auto;
        }

        body {
            width: 100%
        }

        marquee.flash:hover {
            font-size: x-large;
            height: 5.5vh;
            background-color: rgb(0, 174, 239);
            color: #fff200;
            transition: 1s;
            display: flex;
            padding-top: 1%;
        }

        .marki {
            /* padding: .2em; */
            /* background-color: #fcf8e3; */
            display: flex;
            font-size: large;
        }

        .flash {
            height: 4vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
            color: #00a651;
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

        .activités {
            text-align: center;
            margin: 3vh;
        }

        .sectionB {
            margin-bottom: 10vh;
            display: flex;
            flex-direction: column;
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
            padding-bottom: 10%;
        }

        /*Professionnel Particulier*/
        main {
            width: 100%;
            justify-content: center;
        }

        .pro, .part {
            height: 190vh;
            width: 100%;
        }

        .ppro {
            text-align: center;
        }

        .mainh {
            flex-direction: column;
        }

        .mainb {
            width: 100%;
            display: flex;
            flex-direction: column;
            text-align: inherit;
        }

        .carouL {
            height: 18vh;
            width: 100%;
            margin-top: 5vh;
        }

        /*carousel avis droite*/
        .carouR {
            margin-top: 2vh;
            width: 100%;
            margin-top: 5vh;
        }

        .sectionecom {
            display: flex;
            flex-direction: row;
            JUSTIFY-CONTENT: space-around;
        }

        .ecom {
            text-align: center;
            margin-top: 3vh;
        }

        .img1 {
            margin-top: 30px;
            width: 92%;
        }

        .img3 {
            width: 100%;
            display: flex;
            margin: auto;
        }

        .img4 {
            width: 92%;
        }

        .imgC {
            width: 100%;
        }

        .imgM {
            display: flex;
            margin: 0.5px;
        }

        .imgl {
            width: 50%;
            display: flex;
            margin: auto 0;
        }

        .imgp {
            width: 50%;
            display: flex;
            margin: auto 0;
        }

        .fivetoile {
            width: 30%;
        }

        .pact {
            width: 90%;
        }
    }

    @media screen and (min-height: 800px) and (max-height: 820px) {
        p {
            width: 90%;
            margin: 1vh auto;
        }

        body {
            width: 100%;
        }

        marquee.flash:hover {
            font-size: x-large;
            height: 5.5vh;
            background-color: rgb(0, 174, 239);
            color: #fff200;
            transition: 1s;
            display: flex;
            padding-top: 1%;
        }

        .marki {
            /* padding: .2em; */
            /* background-color: #fcf8e3; */
            display: flex;
            font-size: large;
        }

        .flash {
            height: 4vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
            color: #00a651;
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

        .activités {
            text-align: center;
            margin: 3vh;
        }

        .sectionB {
            margin: 0 0 10vh 1vh;
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
            padding-bottom: 10%;
        }

        /*Professionnel Particulier*/
        main {
            width: 100%;
            justify-content: center;
        }

        .pro,
        .part {
            height: 70vh;
        }

        .ppro {
            text-align: center;
        }

        .mainb {
            width: 100%;
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
            margin: 0;
        }

        .sectionecom {
            display: flex;
            flex-direction: row;
            JUSTIFY-CONTENT: space-around;
        }

        .ecom {
            text-align: center;
            margin-top: 3vh;
        }

        .img1 {
            margin-top: 30px;
            width: 92%;
        }

        .img3 {
            width: 100%;
            display: flex;
            margin: auto;
        }

        .img4 {
            width: 92%;
        }

        .imgC {
            width: 100%;
        }

        .imgM {
            display: flex;
            margin: 0.5px;
        }

        .imgl {
            width: 50%;
            display: flex;
            margin: auto 0;
        }

        .imgp {
            width: 25%;
            display: flex;
            margin: auto 0;
        }

        .fivetoile {
            width: 65%;
        }

        .pact {
            width: 90%;
        }
    }

    @media screen and (min-height: 1360px) and (max-height: 1370px) {
        p {
            width: 90%;
            margin: 1vh auto;
        }

        body {
            width: 100%;
        }

        marquee.flash:hover {
            font-size: x-large;
            height: 5.5vh;
            background-color: rgb(0, 174, 239);
            color: #fff200;
            transition: 1s;
            display: flex;
            padding-top: 1%;
        }

        .marki {
            /* padding: .2em; */
            /* background-color: #fcf8e3; */
            display: flex;
            font-size: large;
        }

        .flash {
            height: 4vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
            color: #00a651;
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

        .activités {
            text-align: center;
            margin: 3vh;
        }

        .sectionB {
            margin: 0 0 5vh 0;
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

        .mainh {
            width: 100%;
            display: flex;
            margin-bottom: none;
        }

        /*Professionnel Particulier*/
        main {
            width: 100%;
            justify-content: center;
        }

        .ppro {
            text-align: center
        }

        .mainb {
            width: 100%;
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
            margin: 0;
        }

        .sectionecom {
            display: flex;
            flex-direction: row;
            JUSTIFY-CONTENT: space-around;
        }

        .ecom {
            text-align: center;
        }

        .img1 {
            margin-top: 30px;
            width: 92%;
        }

        .img3 {
            width: 100%;
            display: flex;
            margin: auto;
        }

        .img4 {
            width: 92%;
        }

        .imgC {
            width: 100%;
        }

        .imgM {
            display: flex;
            margin: 0.5px;
        }

        .imgl {
            width: 50%;
            display: flex;
            margin: auto 0;
        }

        .imgp {
            width: 25%;
            display: flex;
            margin: auto 0;
        }

        .fivetoile {
            width: 65%;
        }

        .pact {
            width: 90%;
        }
    }

    @media screen and (min-height: 1020px) and (max-height: 1030px) {
        p {
            width: 90%;
            margin: 1vh auto;
        }

        body {
            width: 100%;
        }

        marquee.flash:hover {
            font-size: x-large;
            height: 5.5vh;
            background-color: rgb(0, 174, 239);
            color: #fff200;
            transition: 1s;
            display: flex;
            padding-top: 1%;
        }

        .marki {
            /* padding: .2em; */
            /* background-color: #fcf8e3; */
            display: flex;
            font-size: large;
        }

        .flash {
            height: 4vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
            color: #00a651;
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

        .activités {
            text-align: center;
            margin: 3vh;
        }

        .sectionB {
            margin: 0 0 5vh 1vh;
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

        /*Professionnel Particulier*/
        main {
            width: 100%;
            justify-content: center;
        }

        .ppro {
            text-align: center;
        }

        .mainb {
            width: 100%;
            display: flex;
            flex-direction: column;
            text-align: inherit;
        }

        .carouL {
            width: 100%;
        }

        /*carousel avis droite*/
        .carouR {
            margin-top: 2vh;
            width: 100%;
            margin: 0;
        }

        .sectionecom {
            display: flex;
            flex-direction: row;
            JUSTIFY-CONTENT: space-around;
            margin-left: 10%;
        }

        .ecom {
            text-align: center;
            margin-top: 3vh;
        }

        .img1 {
            margin-top: 30px;
            width: 92%;
        }

        .img3 {
            width: 100%;
            display: flex;
            margin: auto;
        }

        .img4 {
            width: 92%;
        }

        .imgC {
            width: 100%;
        }

        .imgM {
            display: flex;
            margin: 0.5px;
        }

        .imgl {
            width: 50%;
            display: flex;
            margin: auto 0;
        }

        .imgp {
            width: 25%;
            display: flex;
            margin: auto 0;
        }

        .fivetoile {
            width: 65%;
        }

        .pact {
            width: 90%;
        }
    }
</style>

<div class="container-fluid">
    <section>

        <a href="nettoyage.php#debarras" class="marki">
            <marquee class="flash infinite" behavior="" direction="">Vous avez besoin de vos deux mains libres? Nous
                nous chargeons aussi de débarrasser!!</marquee>
        </a>
        <!--le debaras en flash-->
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
                        <img src="img/Homepage_img_1_carrousel.jpg" class="imgC img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Taille_haie.jpg" class="imgC img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Net_img_6.jpg" class="imgC img-fluid" alt="...">
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
            <p class="text-justify">
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
            <p class="text-justify">
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
        </div><br>

        <h2 class="activités">Nos Activités</h2><br>
        <!--les activités de CKMpro-->
        <div class="sectionB">
            <div class="derat">
            <h2><br>3D</h2><br>
                <img src="img/Home_page_3D_img-V2.jpg" class="img3 img-fluid" alt="">
                
                <br>
                <p class="text-justify pact mt-4 mb-4">
                    Il est important de ne pas laisser le problème de l’invasion par les nuisibles s’éterniser car vous
                    pourriez être confrontés à des dégradations d’ordres matériels ou alimentaires (stocks de
                    nourriture…), ainsi qu’à des souillages divers à cause des déjections des rats souris.
                </p>
            </div><br>
            <div class="nettoyage">
            <h2><br>Nettoyage</h2><br>
                <img src="img/Home_page_net_img.jpg" class="img3 img-fluid" alt="">
                <br>
                <p class="text-justify pact mt-4 mb-4">
                CKM Pro s’occupe de redonner un coup de jeune à toutes vos surfaces. Nos équipes interviennent sur tous types de surfaces, qu’elles soient internes ou externes, et s’adaptent en fonction de chaque besoin.
                </p>
            </div><br>
            <div class="espacevert">
            <h2><br>Espaces verts</h2><br>
                <img src="img/Home_page_EV_img.jpg" class="img3 img-fluid" alt="">
                <br>
                <p class="text-justify pact mt-4 mb-4">
                Traiter les espaces verts en profondeur est non négligeable. Cela permet d’éviter au maximum la présence de nuisibles, qui ont un impact directe pour l’intégralité de la plantation. 
                </p>
            </div><br>
        </div>

        <h2 class="cible">Qui sont nos clients ?</h2>
        <!--les cibles de CKMpro-->
        <main class="mainh">
            <div class="pro">
                <img src="img/Home_page_pro.jpg" class="imgM img-fluid" alt=""><br>
                <h4 class="text-center">Professionnel</h4>
                <P class="text-justify">
                Propriétaires de logements collectifs, restaurateurs, paysagistes… Ils nous font confiance pour mener à bien leurs différents projets et surtout pour rendre leurs situations plus confortables. 
                <P>
                <div class="mainb">
                    <!--Les Avis -->
                    <div class="carouL">
                        <!--Les Avis carousel de gauche -->
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner text-center">
                                <div class="carousel-item active">
                                    <img src="img/5STARS.png" class="fivetoile img-fluid" alt=""><br>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                                        exercitationem
                                        praesentium suscipit non at ea, corporis aliquam sapiente ut quas
                                        accusamus culpa
                                        dignissimos iusto perspiciatis.
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/5STARS.png" class="fivetoile img-fluid" alt=""><br>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                                        exercitationem
                                        praesentium suscipit non at ea, corporis aliquam sapiente ut quas
                                        accusamus culpa
                                        dignissimos iusto perspiciatis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="part">
                <img src="img/Home_page_part.jpg" class="imgM img-fluid" alt=""><br>
                <h4 class="text-center">Particulier</h4>
                <P class="text-justify">
                Que ce soit pour le jardin, le grenier ou encore le jardin, nous rendons service à plusieurs particuliers. 
                <P>
                <div class="carouR">
                    <!--Les Avis carousel de droite -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner text-center">
                            <div class="carousel-item active">
                                <img src="img/5STARS.png" class="fivetoile img-fluid" alt="">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Asperiores voluptas voluptate libero, quasi adipisci vero
                                    delectus odit suscipit
                                    assumenda rerum deleniti voluptates nemo fuga mollitia unde.
                                    Quas earum ea qui!
                                </p>
                            </div>
                            <div class="carousel-item">
                                <img src="img/5STARS.png" class="fivetoile img-fluid" alt="">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Asperiores voluptas voluptate libero, quasi adipisci vero
                                    delectus odit suscipit
                                    assumenda rerum deleniti voluptates nemo fuga mollitia unde.
                                    Quas earum ea qui!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <h2 class="ecom">La Boutique CKM</h2>
        <!--ecommerce-->
        <div class="sectionecom">
            <div class="colonneG">
            <img src="img/CKMPROLOGODEFBOUTIQUE.png" class="imgl img-fluid" alt="">
            </div>
            <div class="colonneD">
            <img src="img/Homepage_img_digrain.png" class="imgp img-fluid" alt="">
            </div>
        </div>

    </section>

</div>

<?php 
	require_once("include/footer.php");
    ?>
   