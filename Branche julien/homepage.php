<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
?>

<style>
    /*-----------------------------------------------code source section-----------------------------------------*/
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
        width: 100%;
        justify-content: space-between;
    }

    .pro {
        width: 50%;
        height: 43vh;
    }

    .part {
        width: 50%;
        height: 32vh;
    }

    .mainh

    /*Professionnel Particulier*/
        {
        width: 100%;
        height: 36vh;
        display: flex;
    }

    .ppro {
        text-align: center;
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
        width: 90%;
    }

    /*carousel avis droite*/
    .carouR {
    width: 90%;
    display: flex;
    margin: auto;
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

    .sectionM

    /*Entreprise*/
        {
        width: 100%;
        height: 20vh;
    }

    /*-------------------------------------------------section-ecran pc--------------------------------------- */
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
            width: 100%;
            justify-content: space-between;
        }

        .pro {
            width: 50%;
            height: 50vh;
        }

        .part {
            width: 50%;
            height: 50vh;
            margin: 0 3%;
        }

        .mainh

        /*Professionnel Particulier*/
            {
            width: 100%;
            height: 70vh;
            display: flex;
        }

        .ppro {
            text-align: center;
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
            width: 100%;
        }

        .carouR

        /*carousel avis droite*/
            {
            height: 18vh;
            width: 100%;
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
            margin-top: 5vh;
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
            display: flex;
            margin: auto;
        }

        .imgl {
            width: 50%;
            height: 25vh;
        }

        .imgp {
            width: 10%;
            height: 25vh;
            margin-top: 0;
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

        .sectionM

        /*Entreprise*/
            {
            width: 100%;
            height: 20vh;
        }
    }

    /* --------------------------------------------section tablette----------------------------------------------*/
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
        .dne {
            width: 90%
        }

        .cible {
            text-align: center;
            margin: 0;
        }

        main

        /*Professionnel Particulier*/
            {
            height: 3vh;
            width: 100%;
            justify-content: center;
        }

        .mainh

        /*Professionnel Particulier*/
            {
            width: 100%;
            height: 62vh;
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
            display: flex;
        }
    }

    /* -------------------------------------------------------section-portable-----------------------------------------*/
    @media all and (max-width: 450px) {
        body {
            width: 100%
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
            width: 100%;
            justify-content: center;
        }

        .pro {
            height: 65vh;
            width: 95%;
            display: flex;
            flex-direction: column;
            margin: auto;
            border: 0.5px solid gray;
        }

        .part {
            height: 65vh;
            width: 95%;
            display: flex;
            flex-direction: column;
            margin: 5vh auto;
            border: 0.5px solid gray;

        }

        .ppro {
            text-align: center
        }
        .mainh

        /*Professionnel Particulier*/
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
    }
</style>

<div class="container-fluid">
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
                <img src="include/img/3Dmaq.png" class="img3" alt="">
                <h2>3D</h2>
                <p class="dne">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                    soluta sapiente sit corrupti similique vero in repellendus
                    laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
                    Molestiae quasi magnam quos obcaecati?
                </p>
            </div>
            <div class="nettoyage">
                <img src="include/img/nettoyagemaq.png" class="img3" alt="">
                <h2>Nettoyage</h2>
                <p class="dne">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                    soluta sapiente sit corrupti similique vero in repellendus
                    laboriosam. Ipsum, praesentium aut tenetur in dolore autem?
                    Molestiae quasi magnam quos obcaecati?
                </p>
            </div>
            <div class="espacevert">
                <img src="include/img/espacevertmaq.png" class="img3" alt="">
                <h2>Espace vert</h2>
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
                <img src="include/img/professionnelmaq.png" class="imgM img-fluid" alt="">
                <h4 class="text-center">Professionnel</h4>
                <P class="ppro">
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
                                    <img src="include/img/5STARS.png" class="fivetoile" alt="">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Asperiores voluptas voluptate libero, quasi adipisci vero delectus odit
                                        suscipit
                                        assumenda rerum deleniti voluptates nemo fuga mollitia unde. Quas earum
                                        ea qui!
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <img src="include/img/5STARS.png" class="fivetoile" alt="">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Asperiores voluptas voluptate libero, quasi adipisci vero delectus odit
                                        suscipit
                                        assumenda rerum deleniti voluptates nemo fuga mollitia unde. Quas earum
                                        ea qui!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="part">
                <img src="include/img/particuliermaq.png" class="imgM img-fluid" alt="">
                <h4 class="text-center">Particulier</h4>
                <P class="ppro">
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



</div>
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