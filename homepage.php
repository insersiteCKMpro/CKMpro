<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
?>

<style>
    /*-----------------------------------------------code source section-----------------------------------------*/
/* Débaras*/
marquee.flash:hover
{
    font-size: 2em;
    height: 6.1vh;
    background-color: rgba(0, 174, 239, 0.5);
    margin-bottom: 5%;
    color: #fff200;
    /* align-content: center; */
    /* display: flex; */
}
.flash
    {
        color: #00a651;
    }

    /*carousel Entreprise*/
    section
    {
        width: 100%;
        height: 52vh;
    }

    /*Entreprise*/
    .ets
    {
        text-align: center;
    }

    /*Activités*/
    .activités
    {
        text-align: center;
    }

    /*Activités*/
    .sectionB
    {
        /* width: 100%; */
        height: 34vh;
        justify-content: space-around;
        /* flex-direction: column; */
        display: flex;
    }

    /*Activités*/
    .derat
    {
        width: 33.3%;
        text-align: center;
    }

    /*Activités*/
    .nettoyage
    {
        width: 33.3%;
        text-align: center;
    }

    /*Activités*/
    .espacevert
    {
        width: 33.3%;
        text-align: center;
    }

    /*Professionnel Particulier*/
    main
    {
        height: 3vh;
        width: 100%;
        justify-content: space-between;
    }

    .propart {
        width: 50%;
        height: 43vh;
    }

    .part 
    {
        width: 50%;
        height: 32vh;
    }

    /*Professionnel Particulier*/
    .mainh
        {
        width: 100%;
        height: 36vh;
        display: flex;
    }

    .ppro 
    {
        text-align: center;
    }

    /*avis*/
    .mainb
    {
        width: 100%;
        height: 25vh;
        display: flex;
        justify-content: space-around;
    }

    /*carousel avis gauche*/
    .carouL
    {
        width: 90%;
    }

    /*carousel avis droite*/
    .carouR 
    {
        width: 90%;
        display: flex;
        margin: auto;
    }

    /*carousel avis droite et gauche*/
    .carousel-control-prev
    {
        width: 10%;
        height: 18vh;
    }

    /*carousel avis droite et gauche*/
    .carousel-control-next
    {
        width: 10%;
        height: 18vh;
    }

    /*e-commerce*/
    .sectionecom
    {
             height: 39vh;
            margin-top: 12vh;
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
        display: flex;
    }

    .imgl {
        width: 50%;
        height: 25vh;
    }

    .imgp {
        width: 10%;
        height: 20vh;
        margin-top: 3vh
    }

    .fivetoile {
        width: 40%;
    }

    /*-------------------------------------------------section-ecran pc--------------------------------------- */
    @media screen and (min-width: 769px) and (max-width: 2560px) {
        /*carousel Entreprise*/
        section
        {
            width: 100%;
            height: 52vh;
        }

        /*Entreprise*/
        .ets
        {
            text-align: center;
        }

        /*Activités*/
        .activités
        {
            text-align: center;
        }

        /*Activités*/
        .sectionB
        {
            /* width: 100%; */
            height: 33vh;
            justify-content: space-around;
            /* flex-direction: column; */
            display: flex;
        }

        /*Activités*/
        .derat
        {
            width: 30%;
            text-align: center;
            display: flow-root;
        }

        /*Activités*/
        .nettoyage
            {
                width: 30%;
                text-align: center;
                display: flow-root;
            }

        /*Activités*/
        .espacevert
            {
                width: 30%;
                text-align: center;
                display: flow-root;
            }

        .cible {
    
            margin-top: 15vh;
            text-align: center;
        }

        /*Professionnel Particulier*/
        main
            {
            height: 3vh;
            width: 100%;
            justify-content: space-between;
        }

        .propart {
            width: 50%;
            height: 50vh;
            margin: 0 3%;
        }

        /*Professionnel Particulier*/
        .mainh
            {
                width: 100%;
                height: 75vh;
                display: flex;
            }

        /*avis*/
        .mainb
            {
            width: 100%;
            height: 25vh;
            display: flex;
            justify-content: space-around;
        }

        /*carousel avis gauche*/
        .carouL
        {
            width: 100%;
        }

        /*carousel avis droite*/
        .carouR
        {
            height: 18vh;
            width: 100%;
        }

        /*carousel avis droite et gauche*/
        .carousel-control-prev
        {
            width: 10%;
            height: 18vh;
        }

        /*carousel avis droite et gauche*/
        .carousel-control-next
        {
            width: 10%;
            height: 18vh;
        }

        /*e-commerce*/
        .sectionecom
        {
            height: 39vh;
            margin-top: 12vh;
            display: flex;
            justify-content: space-around;
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
            width: 95%;
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
            margin-top: 1.5%;
        }

        .imgM 
        {
            display: flex;
            margin: auto;
        }

        .imgl 
        {
            width: 50%;
            height: 25vh;
        }

        .imgp 
        {
            width: 10%;
            height: 25vh;
            margin-top: 0;
        }

        .fivetoile 
        {
            width: 40%;
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
        /*Entreprise*/
        .sectionM
        {
            width: 75%;
            height: 32
vh;
            /*display: flex;*/
            margin: 0 auto;
            display: flow-root;
        }
        
    }
    /* --------------------------------------------section tablette----------------------------------------------*/
    @media all and (min-width: 451px) and (max-width: 768px) {
        /* Débaras*/
        .flash
        {
            color: #00aeef;
        }

        /*carousel Entreprise*/
        section
            {
            width: 100%;
            height: 52vh;
        }

        /*Entreprise*/
        .sectionM
            {
            width: 100%;
        }

        /*Entreprise*/
        .ets
        {
            text-align: center;
        }

        /*Activités*/
        .activités
            {
            text-align: center;
        }

        .sectionB 
        {
            height: 52vh;
        }

        /*Activités*/
        .derat
            {
            width: 30.3%;
            
        }

        /*Activités*/
        .nettoyage
        {
            width: 30.3%;
            
        }

        /*Activités*/
        .espacevert
        {
            width: 30.3%;
        }

        .cible {
            text-align: center;
            margin: 0;
        }

        /*Professionnel Particulier*/
        main
            {
            height: 3vh;
            width: 100%;
            justify-content: center;
        }

        .mainh
        /*Professionnel Particulier*/
            {
                width: 100%;
                height: 57vh;
                display: FLEX;
                JUSTIFY-CONTENT: space-around;
            }

        .img1 {
            margin-top: 30px;
            width: 40%;
            height: 15vh;
        }
        .propart
        {
            width: 48%
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
            display: flex;
        }
    }

    /* -------------------------------------------------------section-portable-----------------------------------------*/
    @media all and (max-width: 450px) {
        body 
        {
            width: 100%
        }
        
        /* Débaras*/
        .flash
            {
            color: #00aeef;
        }

        /*carousel Entreprise*/
        section
            {
            width: 100%;
            height: 52vh;
        }

        .sectionM 
        {
            width: 100%;
            height: 94vh;
        }

        /*Entreprise*/
        .ets
            {
            text-align: center;
        }

        .activités {
            text-align: center;
            margin-top: 5vh;
        }

        .sectionB {
            height: 160vh;
            flex-direction: column;
            margin-top: 0;
        }

        .derat {
            width: 100%;
            text-align: center;
        }

        /*Activités*/
        .nettoyage
            {
            width: 100%;
            text-align: center;
        }

        /*Activités*/
        .espacevert
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
            width: 100%;
            justify-content: center;
        }

        .propart {
            height: 70vh;
            width: 95%;
            display: flex;
            flex-direction: column;
            margin: auto;
            border: 0.5px solid gray;
        }

        .ppro {
            text-align: center
        }

        .mainh
            {
            height: 135vh;
            display: flex;
            flex-direction: column;
        }

        .mainb {
            width: 100%;
            height: 20vh;
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
            height: 25vh;
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
            height: 15vh;
        }

        .img3 {
            width: 100%;
            height: 20vh;
            display: flex;
            margin: auto;
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
            display: flex;
        }
        .imgl {
            width: 50%;
            height: 10vh;
            display: flex;
            margin: auto 0;
        }

        .imgp {
            width: 25%;
            height: 20vh;
            display: flex;
            margin: auto 0;
        }
    
    @media (min-width: 576px) {
        .textMenu 
        {
            display: none;
            font-family: 'Red Hat Display', serif;
        }
    }

    }
</style>

<div class="container-fluid">
    <section>
        <main>
            <a href="nettoyage.php#debarras" > <marquee class="flash" behavior="" direction="">Vous avez besoin de vos deux mains libres? Nous nous
                chargeons aussi de débarrasser!!</marquee></a>
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
            <p class="text-justify">
            Agence de proximité à taille humaine, CKM PRO fidélise ses clients par une personnalisation du service apporté et la mise en place d'une structure d'encadrement efficiente. 
            L'expérience et l'ancienneté du gérant et de ses collaborateurs contribue au développement et à la bonne gestion de la société.   
            Discrétion : Professionnels, que vous soyez restaurateurs, gérants d’hôtels ou autres, il est évident que la discrétion et la capacité à intervenir à des horaires qui ne gênent pas le bon fonctionnement 
            de votre établissement sont primordiaux. C’est pourquoi nos contrats réservés aux professionnels et particuliers tiennent compte de ces contraintes pour vous offrir un service qui soit le plus discret possible.  
            </p>
            <p class="text-justify">
            Réactivité / rapidité : Nous répondons aux urgences avec la même qualité et la même conscience professionnelle que pour toute autre mission.   Respect des délais :   Le temps de travail est estimé à sa juste valeur et les délais sont toujours respectés.   
            Professionnalisme : Le travail est toujours rendu impeccable malgré les conditions parfois extrêmes dans lesquelles nous intervenons.   
            Sécurité /Hygiène :  Toutes les mesures d'hygiène et de sécurité sont prises sur les chantiers pendant l'exécution des travaux. Éliminer les nuisible est notre mission.   Mais nous n’oublions pas la sécurité : de vos enfants, de vous-même de vos animaux domestiques et de l’environnement.     
            Entreprise agréée et produits professionnels certifiés seront les gages d’une intervention efficace en toute sécurité.  
            <p>
        </div><br>

        <h2 class="activités">Nos Activités</h2><br>
        <!--les activités de CKMpro-->
        <div class="sectionB">
            <div class="derat">
                <img src="include/img/3Dmaq.png" class="img3" alt="">
                <h2><br>3D</h2>
                <br><p class="text-justify">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                    soluta sapiente sit corrupti similique vero in repellendus
                    laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
                    Molestiae quasi magnam quos obcaecati?
                </p>
            </div><br>
            <div class="nettoyage">
                <img src="include/img/nettoyagemaq.png" class="img3" alt="">
                <h2><br>Nettoyage</h2>
                <br><p class="text-justify">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                    soluta sapiente sit corrupti similique vero in repellendus
                    laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
                    Molestiae quasi magnam quos obcaecati?
                </p>
            </div><br>
            <div class="espacevert">
                <img src="include/img/espacevertmaq.png" class="img3" alt="">
                <h2><br>Espaces verts</h2>
                <br><p class="text-justify">
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
            <div class="propart">
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
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem
                                    praesentium suscipit non at ea, corporis aliquam sapiente ut quas accusamus culpa
                                    dignissimos iusto perspiciatis.
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <img src="include/img/5STARS.png" class="fivetoile" alt=""><br>
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem
                                    praesentium suscipit non at ea, corporis aliquam sapiente ut quas accusamus culpa
                                    dignissimos iusto perspiciatis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="propart">
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
                                <img src="include/img/5STARS.png" class="fivetoile" alt="">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Asperiores voluptas voluptate libero, quasi adipisci vero
                                    delectus odit suscipit
                                    assumenda rerum deleniti voluptates nemo fuga mollitia unde.
                                    Quas earum ea qui!
                                </p>
                            </div>
                            <div class="carousel-item">
                                <img src="include/img/5STARS.png" class="fivetoile" alt="">
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
        <img src="include/img/CKMPROLOGODEFBOUTIQUE.png" class="imgl" alt="">
        <img src="include/img/produitspray2.png" class="imgp" alt="">
    </div>

    </section>

    </div>

<?php 
	require_once("include/footer.php");
    ?>