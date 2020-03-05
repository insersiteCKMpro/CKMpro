<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
?>

<style>
    /*--------------------------------------------code source section----------------------------------*/
    .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
        width: 100%;
        padding-right: 0;
        padding-left: 0;
        margin-right: auto;
        margin-left: auto;
    }
        
    p{
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

    .pact{
        width: 95%;
        margin: 0 auto;
    }
    /* Débaras*/
    marquee.flash:hover {
        font-size: x-large;
        min-height: 5.5vh;
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
        min-height: 5vh;
        display: flex;
        padding-top: 0.5%;
        transition: 1s;
    }

    /*carousel Entreprise*/
    section {
        width: 100%;
        min-height: 52vh;
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
        min-height: 68vh;
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
        min-height: 1vh;
        width: 100%;
        justify-content: space-between;
    }

    .pro {
        width: 50%;
        min-height: 43vh;
    }

    .part {
        width: 50%;
        min-height: 43vh;
    }

    .part {
        width: 50%;
        min-height: 32vh;
    }

    /*Professionnel Particulier*/
    .mainh {
        width: 100%;
        min-height: 36vh;
        display: flex;
    }

    .ppro {
        text-align: center;
    }

    /*avis*/
    .mainb {
        width: 100%;
        min-height: 25vh;
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
        min-height: 18vh;
    }

    /*carousel avis droite et gauche*/
    .carousel-control-next {
        width: 10%;
        min-height: 18vh;
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
        width: 50%;
    }

    .imgp {
        width: 10%;
    }

    .fivetoile {
        width: 30%;
    }

    /*---------------------------------------------section-ecran pc----------------------------------- */
    @media screen and (min-width: 769px) and (max-width: 2560px) {

        marquee.flash:hover {
            font-size: x-large;
            min-height: 5.5vh;
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
            min-height: 5vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
        }
        /*carousel Entreprise*/
        section {
            width: 100%;
            min-height: 52vh;
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
            min-height: 75vh;
            justify-content: space-around;
            display: flex;
            margin-left: 3vh;
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
        }

        /*Professionnel Particulier*/
        main {
            width: 100%;
            justify-content: space-between;
        }

        .pro {
            width: 50%;
            min-height: 50vh;
            margin: 0 3%;
        }

        .part {
            width: 50%;
            min-height: 50vh;
            margin: 0 3%;
        }

        /*Professionnel Particulier*/
        .mainh {
            width: 100%;
            min-height: 80vh;
            display: flex;
        }

        /*avis*/
        .mainb {
            width: 100%;
            min-height: 25vh;
            display: flex;
        }

        /*carousel avis gauche*/
        .carouL {
            width: 100%;
        }

        /*carousel avis droite*/
        .carouR {
            min-height: 18vh;
            width: 100%;
        }

        /*carousel avis droite et gauche*/
        .carousel-control-prev {
            width: 10%;
            min-height: 18vh;
        }

        /*carousel avis droite et gauche*/
        .carousel-control-next {
            width: 10%;
            min-height: 18vh;
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
            width: 50%;
        }

        .imgp {
            width: 10%;
        }

        .fivetoile {
            width: 30%;
        }
    }

    /* ---------------------------------------section tablette----------------------------------------*/
    @media all and (min-width: 451px) and (max-width: 768px) {
        p{
            width: 80%;
            margin: 2vh auto;
        }
        .pact{
            width: 95%;
            margin: 0 auto;
        }

        marquee.flash:hover {
        font-size: x-large;
        min-height: 5.5vh;
        background-color:  rgb(0, 174, 239);
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
            min-height: 4vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
            color: #00a651;
        }

        /*carousel Entreprise*/
        section {
            width: 100%;
            min-height: 52vh;
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
            min-height: 62vh;
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
        }

        /*Professionnel Particulier*/
        main {
            min-height: 3vh;
            width: 100%;
            justify-content: center;
        }


        /*Professionnel Particulier*/
        .mainh {
            width: 100%;
            min-height: 75vh;
            display: FLEX;
            JUSTIFY-CONTENT: space-around;
        }

        .img1 {
            margin-top: 30px;
            width: 40%;
            min-height: 15vh;
        }

        .pro {
            width: 48%
        }

        .part {
            width: 48%
        }

        .img3 {
            width: 90%;
        }

        .img4 {
            width: 2%;
            min-height: 20px;
        }

        .imgC {
            width: 100%;
            min-height: 279px;
        }

        .imgM {
            display: flex;
            margin-top: 0.4px;
        }
    }

    /* -------------------------------------------------section-portable------------------------------*/
    @media all and (max-width: 450px) {
        
        p{
            width: 90%;
            margin: 1vh auto;
        }


        body {
            width: 100%
        }

        marquee.flash:hover {
            font-size: x-large;
            min-height: 5.5vh;
            background-color:  rgb(0, 174, 239);
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
            min-height: 4vh;
            display: flex;
            padding-top: 0.5%;
            transition: 1s;
            color: #00a651;
        }

        /*carousel Entreprise*/
        section {
            width: 100%;
            min-height: 52vh;
        }

        /*Entreprise*/
        .ets {
            text-align: center;
        }

        .activités {
            text-align: center;
            margin-top: 1vh;
        }

        .sectionB {
            min-height: 210vh;
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
            text-align: center;
        }

        /*Professionnel Particulier*/
        main {
            min-height: 3vh;
            width: 100%;
            justify-content: center;
        }

        .pro {
            min-height: 70vh;
            width: 95%;
            display: flex;
            flex-direction: column;
            margin: 2vh auto;
            border: 0.5px solid gray;
        }
        .part {
            min-height: 70vh;
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
            min-height: 150vh;
            display: flex;
            flex-direction: column;
        }

        .mainb {
            width: 100%;
            min-height: 23vh;
            display: flex;
            flex-direction: column;
            text-align: inherit;
        }

        .carouL {
            min-height: 18vh;
            width: 100%;
        }

        /*carousel avis droite*/
        .carouR {
            margin-top: 2vh;
            min-height: 18vh;
            width: 100%;
            margin: 0;
        }

        .sectionecom {
            display: flex;
            flex-direction: row;
            JUSTIFY-CONTENT: space-around
        }

        .ecom {
            text-align: center;
            margin-top: 3vh;
        }

        .img1 {
            margin-top: 30px;
            width: 92%;
            min-height: 15vh;
        }

        .img3 {
            width: 100%;
            display: flex;
            margin: auto;
        }

        .img4 {
            width: 92%;
            min-height: 20px;
        }

        .imgC {
            width: 100%;
            min-height: 279px;
        }

        .imgM {
            display: flex;
            margin: 0.5px;
        }

        .imgl {
            width: 50%;
            min-height: 10vh;
            display: flex;
            margin: auto 0;
        }

        .imgp {
            width: 25%;
            min-height: 20vh;
            display: flex;
            margin: auto 0;
        }
    }
    @media (min-width: 576px) {
        .textMenu {
            display: none;
            font-family: 'Red Hat Display', serif;
        }
    }

</style>

<div class="container-fluid">
    <section>
        
        <a href="nettoyage.php#debarras" class="marki">
            <marquee class="flash infinite" behavior="" direction="">Vous avez besoin de vos deux mains libres? Nous nous chargeons aussi de débarrasser!!</marquee>
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
                        <img src="include/img/debarrascarrousel.png" class="imgC img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="include/img/newimg2560x765.png" class="imgC img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="include/img/produitredim2560vw765vh.png" class="imgC img-fluid" alt="...">
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
                <img src="include/img/3Dmaq.png" class="img3" alt="">
                <h2><br>3D</h2>
                <br>
                <p class="text-justify pact">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                    soluta sapiente sit corrupti similique vero in repellendus
                    laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
                    Molestiae quasi magnam quos obcaecati?
                </p>
            </div><br>
            <div class="nettoyage">
                <img src="include/img/nettoyagemaq.png" class="img3 img-fluid" alt="">
                <h2><br>Nettoyage</h2>
                <br>
                <p class="text-justify pact">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                    soluta sapiente sit corrupti similique vero in repellendus
                    laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
                    Molestiae quasi magnam quos obcaecati?
                </p>
            </div><br>
            <div class="espacevert">
                <img src="include/img/espacevertmaq.png" class="img3 img-fluid" alt="">
                <h2><br>Espaces verts</h2>
                <br>
                <p class="text-justify pact">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                    soluta sapiente sit corrupti similique vero in repellendus
                    laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
                    Molestiae quasi magnam quos obcaecati?
                </p>
            </div><br>
        </div>

        <h2 class="cible">Qui sont nos clients ?</h2><br>
        <!--les cibles de CKMpro-->
        <main class="mainh">
            <div class="pro">
                <img src="include/img/professionnelmaq.png" class="imgM img-fluid" alt=""><br>
                <h4 class="text-center">Professionnel</h4>
                <P class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem
                    praesentium suscipit non at ea, corporis aliquam sapiente ut quas accusamus culpa
                    dignissimos iusto perspiciatis.
                    <P>
                        <div class="mainb">
                            <!--Les Avis -->
                            <div class="carouL">
                                <!--Les Avis carousel de gauche -->
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner text-center">
                                        <div class="carousel-item active">
                                            <img src="include/img/5STARS.png" class="fivetoile" alt=""><br>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                                                exercitationem
                                                praesentium suscipit non at ea, corporis aliquam sapiente ut quas
                                                accusamus culpa
                                                dignissimos iusto perspiciatis.
                                            </p>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="include/img/5STARS.png" class="fivetoile" alt=""><br>
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
                <img src="include/img/particuliermaq.png" class="imgM img-fluid" alt=""><br>
                <h4 class="text-center">Particulier</h4>
                <P class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem
                    praesentium suscipit non at ea, corporis aliquam sapiente ut quas accusamus culpa
                    dignissimos iusto perspiciatis.
                    <P>
                        <div class="carouR">
                            <!--Les Avis carousel de droite -->
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner text-center">
                                    <div class="carousel-item active">
                                        <img src="include/img/5STARS.png" class="fivetoile img-fluid" alt="">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Asperiores voluptas voluptate libero, quasi adipisci vero
                                            delectus odit suscipit
                                            assumenda rerum deleniti voluptates nemo fuga mollitia unde.
                                            Quas earum ea qui!
                                        </p>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="include/img/5STARS.png" class="fivetoile img-fluid" alt="">
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
            <img src="include/img/CKMPROLOGODEFBOUTIQUE.png" class="imgl img-fluid" alt="">
            <img src="include/img/produitspray2.png" class="imgp img-fluid" alt="">
        </div>

    </section>

</div>

<?php 
	require_once("include/footer.php");
    ?>