<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
<style>
    .test {
        height: 100vh;
        display: flex;
    }
    .contac1 {
        text-align: center!important;
        margin: 2vh;
    }

    .titrre {
        text-align: center;
        margin: 2vh;
    }

    .test2 {
        height: 75vh;
        display: flex;
        width: 30%;
    }

    .test3 {
        display: none;
    }

    .titrec {
        width: 100%;
        height: 40vh;
    }

    .num {
        margin: 0 7vh;
        width: 75%;
        height: 10vh;
    }

    .traits1 {
        width: 2%;
        border-left: 1px solid black;
        height: 120vh;
    }

    .traits2 {
        display: none;
    }

    .traitori {
        display: none;
    }

    .for {
        width: 45%;
        height: 70vh;
    }

    .radbox {
        height: 15vh;
        display: flex;
    }

    .labe {
        width: 25%;
    }

    .star {
        display: initial;
        width: 75%;
        height: 15vh;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    .checkio {
        width: 100%;
        height: 1vh;
        display: flex;
    }

    .checkio1 {
        width: 100%;
        height: 10vh;
        display: flex;
    }

    .put {
        width: 35.3%;
    }

    .put1 {
        width: 33%;
        height: 6vh;
        margin-top: 3vh;
    }

    .btn {
        margin: auto;
        width: 30%;
    }

    /* animation bouton */
    .hvr-bounce-to-right {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);

        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -moz-osx-font-smoothing: red;
        position: relative;
        -webkit-transition-property: color;
        transition-property: color;
        -webkit-transition-duration: 0s;
        transition-duration: 0s;

    }

    .hvr-bounce-to-right:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: black;
        /* regler couleur de l'animation */
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: 0 50%;
        transform-origin: 0 50%;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: 1.5s;
        transition-duration: 1.5s;
        /* regler vitesse animation */
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
        background-color: none;
    }

    .hvr-bounce-to-right:hover,
    .hvr-bounce-to-right:focus,
    .hvr-bounce-to-right:active {
        color: white;
        /* changer couleur du text dans l'animation */
        background: none;
        /* changer couleur background en dessous de l'animation */

    }

    .hvr-bounce-to-right:hover:before,
    .hvr-bounce-to-right:focus:before,
    .hvr-bounce-to-right:active:before {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
        -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        background-color: none;
    }

    /**********************************format pc responsive------------------------------------------- */
    @media screen and (min-width: 769px) and (max-width:2560px) {
        .test {
            height: 105vh;
            display: flex;
        }

        .titrre {
            text-align: center;
            margin: 2vh;
        }

        .test2 {
            width: 27%;
            height: 75vh;
            display: flex;
        }

        .test3 {
            display: none;
        }

        .titrec {
            width: 100%;
            height: 40vh;
        }

        .num {
            margin: 0 7vh;
            width: 75%;
            height: 10vh;
        }

        .traits1 {
            width: 2%;
            border-left: 1px solid black;
            height: 98vh;
            margin-right: 3vh;
        }

        .traits2 {
            display: none;
        }

        .traitori {
            display: none;
        }

        .for {
            width: 45%;
            height: 70vh;
        }

        .radbox {
            height: 15vh;
            display: flex;
        }

        .labe {
            width: 25%;
        }

        .star {
            display: initial;
            width: 75%;
            height: 15vh;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .checkio {
            width: 100%;
            height: 1vh;
            display: flex;
        }

        .checkio1 {
            width: 100%;
            height: 10vh;
            display: flex;
        }

        .put {
            width: 35.3%;
        }

        .put1 {
            width: 33%;
            height: 6vh;
            margin-top: 3vh;
        }

        .btn {
            margin: auto;
            width: 30%;
        }

        /* animation bouton */

        .hvr-bounce-to-right {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);

            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-osx-font-smoothing: red;
            position: relative;
            -webkit-transition-property: color;
            transition-property: color;
            -webkit-transition-duration: 0s;
            transition-duration: 0s;

        }

        .hvr-bounce-to-right:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: black;
            /* regler couleur de l'animation */
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-duration: 1.5s;
            transition-duration: 1.5s;
            /* regler vitesse animation */
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            background-color: none;
        }

        .hvr-bounce-to-right:hover,
        .hvr-bounce-to-right:focus,
        .hvr-bounce-to-right:active {
            color: white;
            /* changer couleur du text dans l'animation */
            background: none;
            /* changer couleur background en dessous de l'animation */

        }

        .hvr-bounce-to-right:hover:before,
        .hvr-bounce-to-right:focus:before,
        .hvr-bounce-to-right:active:before {
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
            transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
            background-color: none;
        }



        #customControlValidation1:checked~.custom-control-label::before 
        {
            color: #fff200;
            border-color: #fff200;
            background-color: #fff200;
        }

        #customControlValidation2:checked~.custom-control-label::before 
        {
            color: #00aeef;
            border-color: #00aeef;
            background-color: #00aeef;
        }


        #customControlValidation3:checked~.custom-control-label::before 
        {
            color: #00a651;
            border-color: #00a651;
            background-color: #00a651;
        }
    }

    /*-----------------------------responsive tablette------------------------------------*/
    @media all and (min-width: 451px) and (max-width: 768px) {
        p {
            margin-top: 2vh;
            margin-bottom: 1rem;
        }

        .test {
            height: 130vh;
            display: flex;
            justify-content: center;
        }

        .titrre {
            text-align: center;
            margin-top: 2vh;
        }

        .test2 {
            display: none !important;
        }

        .test3 {
            display: flex;
            flex-direction: column;
            text-align: center;
            height: 14vh;
            width: 100%;
            border-bottom: 1px solid grey;
        }

        .num {
            margin: auto;
            width: 75%;
            height: 10vh;
        }

        .traits1 {
            display: none;
        }

        .traits2 {
            width: 100%;
            border-top: 1px solid #000;
            height: 0.5vh;
            align-items: center;
        }

        .titrec {
            height: 5vh;
            text-align: center;
        }

        .traitori {
            background-color: black;
            height: 2px;
        }

        .espace {
            margin-top: 5px;
        }

        .radbox {
            height: 15vh;
            display: flex;
        }

        .labe {
            width: 25%;
        }

        .star {
            display: initial;
            width: 75%;
            height: 15vh;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .checkio {
            width: 100%;
            height: 4vh;
            display: flex;
        }

        .checkio1 {
            width: 100%;
            height: 10vh;
            display: flex;
        }

        #customControlValidation1:checked~.custom-control-label::before 
        {
            color: #fff200;
            border-color: #fff200;
            background-color: #fff200;
        }

        #customControlValidation2:checked~.custom-control-label::before 
        {
            color: #00aeef;
            border-color: #00aeef;
            background-color: #00aeef;
        }

        #customControlValidation3:checked~.custom-control-label::before 
        {
            color: #00a651;
            border-color: #00a651;
            background-color: #00a651;
        }

        .put {
            width: 33.3%;
            height: 2vh;
        }

        .put1 {
            width: 33%;
            height: 6vh;
            margin-top: 1vh;
        }

        .btn {
            margin-left: 5vh;
            width: 75%;
        }

        /* animation bouton */

        .hvr-bounce-to-right {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);

            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-osx-font-smoothing: red;
            position: relative;
            -webkit-transition-property: color;
            transition-property: color;
            -webkit-transition-duration: 0s;
            transition-duration: 0s;

        }

        .hvr-bounce-to-right:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: black;
            /* regler couleur de l'animation */
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-duration: 1.5s;
            transition-duration: 1.5s;
            /* regler vitesse animation */
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            background-color: none;
        }

        .hvr-bounce-to-right:hover,
        .hvr-bounce-to-right:focus,
        .hvr-bounce-to-right:active {
            color: white;
            /* changer couleur du text dans l'animation */
            background: none;
            /* changer couleur background en dessous de l'animation */

        }

        .hvr-bounce-to-right:hover:before,
        .hvr-bounce-to-right:focus:before,
        .hvr-bounce-to-right:active:before {
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
            transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
            background-color: none;
        }

    }

    /*-----------------------------responsive  mobile---------------------------------*/
    @media all and (max-width: 450px) {
        p {
            margin-top: 2vh;
            margin-bottom: 1rem;
        }
        
        .radbox {
            height: 15vh;
            display: flex;
        }

        .test {
            height: 130vh;
            display: flex;
        }

        .titrre {
            text-align: center;
            margin: 2vh;
        }

        .test2 {
            display: none;
        }

        .test3 {
            display: flex;
            flex-direction: column;
            text-align: center;
            height: 14vh;
            width: 100%;
            border-bottom: 1px solid grey;
        }

        .num {
            margin: auto;
            width: 75%;
            height: 10vh;
        }

        .traits1 {
            display: none;
        }

        .traits2 {
            width: 100%;
            border-top: 1px solid #000;
            height: 0;
            align-items: center;
        }

        .labe {
            width: 25%;
        }

        .star {
            display: initial;
            width: 75%;
            height: 15vh;
        }

        .for {
            width: 100%;
            height: 70vh;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .checkio {
            width: 100%;
            height: 4vh;
            display: flex;
        }

        .checkio1 {
            width: 100%;
            height: 10vh;
            display: flex;
        }

        .put {
            width: 33.3%;
            height: 2vh;
        }

        .put1 {
            width: 33.3%;
            height: 6vh;
        }

        .btn {
            width: 50%;
            margin: auto;
        }

        /* animation bouton */

        .hvr-bounce-to-right {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);

            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-osx-font-smoothing: red;
            position: relative;
            -webkit-transition-property: color;
            transition-property: color;
            -webkit-transition-duration: 0s;
            transition-duration: 0s;

        }

        .hvr-bounce-to-right:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: black;
            /* regler couleur de l'animation */
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-duration: 1.5s;
            transition-duration: 1.5s;
            /* regler vitesse animation */
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            background-color: none;
        }

        .hvr-bounce-to-right:hover,
        .hvr-bounce-to-right:focus,
        .hvr-bounce-to-right:active {
            color: white;
            /* changer couleur du text dans l'animation */
            background: none;
            /* changer couleur background en dessous de l'animation */

        }

        .hvr-bounce-to-right:hover:before,
        .hvr-bounce-to-right:focus:before,
        .hvr-bounce-to-right:active:before {
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
            transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
            background-color: none;
        }

        #customControlValidation1:checked~.custom-control-label::before 
        {
            color: #fff200;
            border-color: #fff200;
            background-color: #fff200;
        }

        #customControlValidation2:checked~.custom-control-label::before 
        {
            color: #00aeef;
            border-color: #00aeef;
            background-color: #00aeef;
        }

        #customControlValidation3:checked~.custom-control-label::before 
        {
            color: #00a651;
            border-color: #00a651;
            background-color: #00a651;
        }
    }
    
</style>


<body>



    <div class="container-fluid">

        <main class="test">
            <div class="test2">
                <div class="titrec">
                    <h2 class="contac1">Contact</h2>
                    <div class="num">
                        <p>Numero de téléphone: <br>
                            0123456789
                        </p>
                    </div>
                </div>
            </div>
            <div class="traits1"></div>
            <div class="for">
                <div class="test3">
                    <!--responsive tablette-->
                    <div class="titrec">
                        <h2 class="">Contact</h2>
                        <div class="num">
                            <p>Numero de téléphone: <br>
                                0123456789
                            </p>
                        </div>
                    </div>
                </div>
                <!--responsive tablette-->
                <div class="traits2"></div>
                <form>
                    <h2 class="titrre">Ecrivez-nous</h2>
                    <div class="form-group espace">
                        <label for="exampleInputName1">Nom*</label>
                        <input type="nom" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFirsteName1">Prenom*</label>
                        <input type="prenom" class="form-control" id="exampleInputFirstName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email*</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone1">Téléphone*</label>
                        <input type="phone" class="form-control" id="exampleInputPhone1" aria-describedby="phoneHelp">
                    </div>
                    <div class="radbox">
                        <div class="form-check labe">Activité*</div>
                        <div class="star">
                            <div class="checkio">
                                <div class="custom-control custom-radio text-center put">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation1"
                                        name="radio-stacked">
                                    <label class="custom-control-label" for="customControlValidation1"></label>
                                </div>
                                <div class="custom-control custom-radio text-center put">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation2"
                                        name="radio-stacked">
                                    <label class="custom-control-label" for="customControlValidation2"></label>
                                </div>
                                <div class="custom-control custom-radio text-center put">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation3"
                                        name="radio-stacked">
                                    <label class="custom-control-label" for="customControlValidation3"></label>
                                </div>
                            </div>
                            <div class="checkio1">
                                <p class="text-center put1">3D<br>
                                    Deratisation <br>
                                    Desinfection <br>
                                    Desinsectisation <br>
                                </p>
                                <p class="text-center put1">Nettoyage</p>
                                <p class="text-center put1">Espaces Verts</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <select class="form-control" style="display: none" id="showInDropDown1">3D
                        <option disabled="disabled" selected="selected">Default select</option>
                        <option disabled="disabled" selected="selected">Default select</option>
                        <option disabled="disabled" selected="selected">Default select</option>
                        <option disabled="disabled" selected="selected">Default select</option>
                    </select>
                    <br>
                    <select class="form-control" style="display:none" id="showInDropDown2">Nettoyage
                        <option disabled="disabled" selected="selected">Default select</option>
                        <option disabled="disabled" selected="selected">Default select</option>
                        <option disabled="disabled" selected="selected">Default select</option>
                    </select>
                    <br>
                    <select class="form-control" style="display:none" id="showInDropDown3">Espace vert
                        <option disabled="disabled" selected="selected">Default select</option>
                        <option disabled="disabled" selected="selected">Default select</option>
                        <option disabled="disabled" selected="selected">Default select</option>
                        <option disabled="disabled" selected="selected">Default select</option>
                        <option disabled="disabled" selected="selected">Default select</option>
                    </select>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn border-dark hvr-bounce-to-right">Envoyer</button>
                </form>
            </div>
        </main>
        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
            <script>
                (function () {
                    var setting = {
                        "height": 512,
                        "width": "100%",
                        "zoom": 17,
                        "queryString": "39 Rue Paul Doumer, 78130 Les Mureaux, France",
                        "place_id": "ChIJfdZqCpKS5kcRFerEh13H6cg",
                        "satellite": false,
                        "centerCoord": [48.9955122682653, 1.9106021499999848],
                        "cid": "0xc8e9c75d87c4ea15",
                        "lang": "fr",
                        "cityUrl": "/france/versailles-903",
                        "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                        "embed_id": "156020"
                    };
                    var d = document;
                    var s = d.createElement('script');
                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=156020';
                    s.async = true;
                    s.onload = function (e) {
                        window.OneMap.initMap(setting)
                    };
                    var to = d.getElementsByTagName('script')[0];
                    to.parentNode.insertBefore(s, to);
                })();
            </script><a href="https://1map.com/fr/map-embed?embed_id=156020">1 Map</a>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script type="text/javascript">
                $(function () {
                    $("#customControlValidation1").click(function () {
                        if ($(this).is(":checked")) {
                            $("#showInDropDown1").show();
                        } else {
                            $("#showInDropDown1").hide();
                        }
                    });
                });

                $(function () {
                    $("#customControlValidation2").click(function () {
                        if ($(this).is(":checked")) {
                            $("#showInDropDown2").show();
                        } else {
                            $("#showInDropDown2").hide();
                        }
                    });
                });

                $(function () {
                    $("#customControlValidation3").click(function () {
                        if ($(this).is(":checked")) {
                            $("#showInDropDown3").show();
                        } else {
                            $("#showInDropDown3").hide();
                        }
                    });
                });
            </script>
        </div>



        <?php 
require_once("include/footer.php");
?>