<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
?>

<head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<body>
<style>
    .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
        width: 100%;
        padding-right: 0;
        padding-left: 0;
        margin-right: auto;
        margin-left: auto;
    }

    .test {
        margin-bottom: 3vh;
        display: flex;
    }
    .contac1 {
        text-align: center!important;
        margin: 0 2vh;

    }

    .titrre {
        text-align: center;
        margin: 2vh;
    }

    .test2 {
        display: flex;
        width: 30%;
    }

   .titrec {
        width: 100%;

    }

    .num {
        margin: 0 7vh;
        width: 75%;
    }

    .traits1 {
        width: 2%;
        border-left: 1px solid black;

    }

    .traits2 {
        display: none;
    }

    .traitori {
        display: none;
    }

    .for {
        width: 45%;
    }

    .form-check {
        position: relative;
        display: block;
        padding-left: 0;
    }

    .radbox {
        height: 15vh;
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
        background-color: #00a651;
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
    .pdc
    {
        margin: 2vh;
    }
    .input-group
    {
        margin-top: 2vh;
    }

    /**********************************format pc responsive------------------------------------------- */
    @media screen and (min-width: 769px) and (max-width:2560px) {
        .test {
            display: flex;
        }

        .titrre {
            text-align: center;
            margin: 2vh;
        }

        .test2 {
            width: 27%;
            display: flex;
        }

        .titrec {
            width: 100%;
            margin: 2vh 0;
        }

        .num {
            margin: 3vh 5vh;
            width: 75%;
        }

        .traits1 {
            width: 2%;
            border-left: 1px solid black;

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
            margin: 2vh 0;
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
            background-color: #00a651;
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
            display: flex;
            flex-direction: column;
        }

        .titrre {
            text-align: center;

            margin-top: 2vh;
        }

        .test2 {
            width: 62%;
            display: flex;
            margin: 2vh auto;

        }

        .num {
            margin: auto;
            width: 75%;
        }

        .traits1 {
            display: none;
        }

        .traits2 {
            width: 100%;
            border-top: 1px solid #000;
            height: 0.5vh;
            align-items: center;
            display: flex;
        }
        .text-center {
            margin: 0;
        }

        .titrec {
            text-align: center;
        }

        .traitori {
            background-color: black;
            height: 2px;
        }
        .for {
            width: 45%;
            margin: 0 auto;
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
            background-color: #00a651;
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
            height: 30vh;
        }
        
        .test {
            display: flex;
            flex-direction: column;
        }

        .text-center {
            text-align: center!important;
            margin-bottom: 2vh;
        }

        .test2 {
            width: 100%;
            display: flex;
        }

        .titrec {
            text-align: center;
        }

        .titrre {
            text-align: center;
            margin: 2vh;
        }

        .traits1 {
            display: none;
        }

        .traits2 {
            width: 85%;
            border-top: 1px solid #000;
            margin: auto;
            height: 0.5vh;
            display: flex;
            align-items: center;
        }

        .num {
            margin: auto;
            width: 75%;
        }

        .labe {
            width: 100%;
            margin-bottom: 2vh;
        }

        .star {
            display: initial;
            width: 75%;
            height: 15vh;
        }

        .for {
            width: 90%;
            margin: 5vh auto;
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
            width: 30%;
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
            background-color: #00a651;
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
    @media (min-height: 801px) and (max-height: 820px){
        .test {
            display: flex;
            flex-direction: column;
        }
        .radbox {
            height: 22vh;
        }
    }

    @media (max-height: 425px) {
        p {
            margin: auto;
        }
        
        .radbox {
            height: 40vh;
        }

        .put1 {
            width: 33%;
            height: 6vh;
            margin-top: 7vh;
        }

        .test {
            display: flex;
            flex-direction: column;
        }

        .text-center {
            text-align: center!important;
            margin-bottom: 2vh;
        }

        .test2 {
            width: 100%;
            display: flex;
        }

        .titrec {
            text-align: center;
        }

        .titrre {
            text-align: center;
            margin: 2vh;
        }

        .traits1 {
            display: none;
        }

        .traits2 {
            width: 85%;
            border-top: 1px solid #000;
            margin: auto;
            height: 0.5vh;
            display: flex;
            align-items: center;
        }

        .num {
            margin: 5vh auto;
            width: 75%;
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
            width: 90%;
            margin: 8vh auto;
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
            width: 30%;
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
            background-color: #00a651;
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

    @media (min-height: 600px) and (max-height: 800px) {
    p {
        margin-top: 2vh;
        margin-bottom: 1rem;
    }

    .radbox {
        height: 25vh;
    }

    .test {
        display: flex;
        flex-direction: column;
    }

    .titrre {
        text-align: center;

        margin-top: 2vh;
    }

    .test2 {
        width: 62%;
        display: flex;
        margin: 2vh auto 0 auto;

    }

    .num {
        margin: 3vh auto;
        width: 75%;
    }

    .traits1 {
        display: none;
    }

    .traits2 {
        width: 100%;
        border-top: 1px solid #000;
        height: 0.5vh;
        align-items: center;
        display: flex;
    }
    .text-center {
        margin: 0;
    }

    .titrec {
        text-align: center;
    }

    .traitori {
        background-color: black;
        height: 2px;
    }
    .for {
        width: 75%;
        margin: 0 auto;
    }

    .espace {
        margin-top: 5px;
    }

    .radbox {
        height: 22vh;
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
        margin: auto;
        width: 40%;
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
        background-color: #00a651;
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
</style>

<?php
    // 1. Contrôler en PHP que l'on receptionne bien toute les données saisies dans le formulaire.
    // echo '<pre>'; print_r($_POST); echo '</pre>';

    // 2. CONNEXION BDD :
    $bdd = new PDO('mysql:host=localhost;dbname=CKMpro', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


    if($_POST)
    {
        extract($_POST);

        // echo '<pre>'; print_r($_POST); echo '</pre>';
        
        // DECLARATION DES VARIABLES
            // 1. RASSEMBLE LES DONNEES D'UN TABLEAU ARRAY EN STRING
        if(isset($_POST['categorie']))
        {
            $categorie = implode(' ', (array)$_POST['categorie']);
        }
        else
        {
            $categorie = '';
        }
        $question3D = implode(' ', $_POST['question3D']);
        $questionNet = implode(' ', $_POST['questionNet']);
        $questionEV = implode(' ', $_POST['questionEV']);

            // 2. EMPÊCHER LES FAILLES XSS
        $name = htmlspecialchars($_POST['nom']);
        $surname = htmlspecialchars($_POST['prenom']);
        $mail = htmlspecialchars($_POST['email']);
        $number = htmlspecialchars($_POST['telephone']);
        $description = htmlspecialchars($_POST['description']);
        if(isset($_POST['confidentialite']))
        {
            $confidentialite = $_POST['confidentialite'];
        }
        else
        {
            $confidentialite = '';
        }
        $email = $_POST['email'];

        // 3. TEST INSERTION DANS LA BDD 

        // Insertion bdd bouton radio :
        // $data = $bdd->exec("INSERT INTO contact (categorie) VALUES ('$categorie')"); INSERTION UNIQUEMENT DES BOUTONS RADIO*

        // Insertion de tout les champs :
        // $data = $bdd->exec("INSERT INTO contact (nom, prenom, email, telephone, categorie, question3D, questionNet, questionEV, description) VALUE ('$name', '$surname', '$mail', '$number', '$categorie', '$question3D', '$questionNet', '$questionEV', '$description')");


        // 4. TRAITEMENT DES ERREURS
            // Nom
        if(empty($_POST['nom']))
        {
            $erreurNom =  "<p class='text-danger font-italic'>* Champs obligatoire </p>";
            $erreur = true;
        }
        else
        {
            if(!preg_match('#^[a-zA-Z0-9._-]{2,20}+$#',$_POST['nom']))
            {
                $erreurNomCaractere = "<p class='text-danger font-italic'>* Caractères autorisés : [a-z et A-Z] (entre 2 et 20 caractères)</p>";
                $erreur = true;
            }
        }
            // Prénom
        if(empty($_POST['prenom']))
        {
            $erreurPrenom =  "<p class='text-danger font-italic'>* Champs obligatoire </p>";
            $erreur = true;
        }
        else
        {
            if(!preg_match('#^[a-zA-Z0-9._-]{2,20}+$#',$_POST['prenom']))
            {
                $erreurPrenomCaractere = "<p class='text-danger font-italic'>* Caractères autorisés : [a-z et A-Z]</p>";
                $erreur = true;
            }
        }
            // Email
        if(empty($_POST['email']))
        {
            $erreurEmail =  "<p class='text-danger font-italic'>* Champs obligatoire </p>";
            $erreur = true;
        }
        else
        {
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
                $erreurEmailCaractere = "<p class='text-danger font-italic'>* Format email invalide </p>";
                $erreur = true;
            }
        }
            // Téléphone
        if(!empty($_POST['telephone']))
        {
            if(!preg_match('#^0[6-7]{1}\d{8}+$#', $_POST['telephone']) || !is_numeric($_POST['telephone']) || iconv_strlen($_POST['telephone']) !== 10)
            {
                $erreurTelephone = '<p class="text-danger font-italic">* Le numero de téléphone n\'est pas correct</p>';
                $erreur = true;
            }
        }
            // Catégorie 
        if(empty($categorie)) 
        {
            $erreurCategorie = '<p class="text-danger font-italic">* Catégorie obligatoire</p>';
            $erreur = true;
        }

        // 5. SI L'INTERNAUTE A CORRECTEMENT REMPLI LE FORMULAIRE, ON AFFICHE LE MESSAGE DE VALIDATION
        if(!isset($erreurNom) || !isset($erreurPrenom) || !isset($erreurEmail) || !isset($erreurCategorie))
        {
            if($confidentialite == "on")
            {    

                // 6. PREPARATION ET INSERTION DANS LA BDD
                $data = "INSERT INTO contact (nom, prenom, email, telephone, categorie, question3D, questionNet, questionEV, description, confidentialite) VALUE ('$name', '$surname', '$mail', '$number', '$categorie', '$question3D', '$questionNet', '$questionEV', '$description', '$confidentialite')";
                
                $stmt = $bdd->prepare($data);
                $stmt->bindParam(':nom', $names, PDO::PARAM_STR);
                $stmt->bindParam(':prenom', $surname, PDO::PARAM_STR);
                $stmt->bindParam(':email', $mail, PDO::PARAM_STR);
                $stmt->bindParam(':telephone', $number, PDO::PARAM_INT);
                $stmt->bindParam(':categorie', $categorie, PDO::PARAM_STR);
                $stmt->bindParam(':question3D', $question3D, PDO::PARAM_STR);
                $stmt->bindParam(':questionNet', $questionNet, PDO::PARAM_STR);
                $stmt->bindParam(':questionEV', $questionEV, PDO::PARAM_STR);
                $stmt->bindParam(':description', $description, PDO::PARAM_STR);
                $stmt->bindParam(':confidentialite', $confidentialite, PDO::PARAM_STR);
                $stmt->execute(array
                (
                    ':nom' => $name, 
                    ':prenom' => $surname, 
                    ':email' => $mail,
                    ':telephone' => $number, 
                    ':categorie' => $categorie, 
                    ':question3D' => $question3D,
                    ':questionNet' => $questionNet, 
                    ':questionEV' => $questionEV, 
                    ':description' => $description,
                    ':confidentialite' => $confidentialite
                ));

                // MESSAGE DE VALIDATION
                $valid = '<p class="alert alert-success text-center col-md-6 mx-auto">Votre message à bien été envoyé, <br>nous vous recontacterons dans les plus brefs délais.<br> Merci de votre confiance. <br><br><a href="index.php"><button class="btn bg-info col-md-3 text-light">Page d\'accueil</button></a></p>';
            
                // 7. MAIL A L'ADMINISTRATEUR
                if(isset($_POST['submit']))
                {
                    $header = "MINE-Version: 1.0\r\n";
                    $header .= 'FROM: ' . $email . '<support@gmail.com>' . "\n";
                    $header .= 'Content-Type:text/html; charset="utf-8"' . "\n";
                    $header .= 'Content-Transfert-Encoding: 8bit';

                    $message = '

                            <div class="container-fluid">
                                <table class="table table-striped table-dark">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Prenom :
                                                <td>' . $_POST['prenom'] . '</td>
                                            </th>
                                            <th scope="row">Nom :
                                                <td>' . $_POST['nom'] . '</td>
                                            </th>
                                            <th scope="row">Email :
                                                <td>' . $_POST['email'] . '</td>
                                            </th>
                                            <th scope="row">Telephone :
                                                <td>' . $_POST['telephone'] . '</td>
                                            </th>
                                            <th scope="row">Catégorie :
                                                <td>' . $categorie . '</td>
                                            </th>
                                            <th scope="row">Question :
                                                <td>' . $question3D . '</td>
                                                <td>' . $questionNet . '</td>
                                                <td>' . $questionEV . '</td>
                                            </th>
                                            <th scope="row">Description :
                                                <td>' . $_POST['description'] . '</td>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        

                    ';
                    mail("usertest.sendmail1@gmail.com", "Salut test", $message, $header);
                }
            }
            else
            {
                echo '<p class="alert alert-danger text-center col-md-6 mx-auto">Votre message n\'a pas été envoyé, veuillez accepeté les politiques de confidentialité</p>';
            }
        }
        else
        {
            echo '<p class="alert alert-danger text-center col-md-6 mx-auto">Votre message n\'a pas été envoyé, veuillez remplir tout les champs obligatoire</p>';
        }
    
        if(isset($valid)) echo $valid;

    }               
?>

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
                    <div class="traits2"></div>
                </div>
                <div class="traits1"></div>
            </div>
            <div class="for">
                <h2 class="text-center">Ecrivez-nous</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputName1">Nom*</label>
                        <input type="text" class="form-control" aria-describedby="nameHelp" id="nom" name="nom">
                        <?php if(isset($erreurNom)) echo $erreurNom; // Erreur nom ?>
                        <?php if(isset($erreurNomCaractere)) echo $erreurNomCaractere; // Erreur nom Caractère ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFirsteName1">Prenom*</label>
                        <input type="text" class="form-control" id="prenom" name="prenom">
                        <?php if(isset($erreurPrenom)) echo $erreurPrenom; // Erreur prenom ?>
                        <?php if(isset($erreurPrenomCaractere)) echo $erreurPrenomCaractere; // Erreur prenom Caractère ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email*</label>
                        <input type="text" class="form-control"aria-describedby="emailHelp" id="email" name="email" placeholder="saisir votre email">
                        <?php if(isset($erreurEmail)) echo $erreurEmail; // Erreur email ?>
                        <?php if(isset($erreurEmailCaractere)) echo $erreurEmailCaractere; // Erreur email Caractère ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone1">Téléphone</label>
                        <input type="phone" class="form-control" aria-describedby="phoneHelp" id="telephone" name="telephone" placeholder="saisir votre téléphone">
                        <?php if(isset($erreurTelephone)) echo $erreurTelephone; // Erreur téléphone ?>
                    </div>
                    <div class="radbox">
                    <?php if(isset($erreurCategorie)) echo $erreurCategorie; // Erreur catégorie 3D ?>
                        <div class="form-check labe">Catégorie*</div>
                        <div class="star">
                            <div class="checkio">
                                <div class="custom-control custom-radio text-center put">

                                    <input type="checkbox" class="custom-control-input" id="customControlValidation1" name="categorie[]" value="3D">
                                    <label class="custom-control-label" for="customControlValidation1"></label>
                                </div>
                                <div class="custom-control custom-radio text-center put">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation2" name="categorie[]" value="nettoyage">
                                    <label class="custom-control-label" for="customControlValidation2"></label>
                                </div>
                                <div class="custom-control custom-radio text-center put">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation3" name="categorie[]" value="espacesVerts">

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

                    <select class="form-control" style="display:none" id="showInDropDown1" name="question3D[]">3D
                        <option>3D</option>
                        <option value="question3D1">Question 3D 1</option>
                        <option value="question3D2">Question 3D 2</option>
                        <option value="question3D3">Question 3D 3</option>
                    </select>
                    <br>
                    <select class="form-control" style="display:none" id="showInDropDown2" name="questionNet[]">Nettoyage
                        <option>Nettoyage</option>
                        <option value="questionNettoyage1">Question Nettoyage 1</option>
                        <option value="questionNettoyage2">Question Nettoyage 2</option>
                        <option value="questionNettoyage3">Question Nettoyage 3</option>
                    </select>
                    <br>
                    <select class="form-control" style="display:none" id="showInDropDown3" name="questionEV[]">Espaces verts
                        <option>Espaces verts</option>
                        <option value="questionEspacesVerts1">Question Espaces Verts 1</option>
                        <option value="questionEspacesVerts2">Question Espaces Verts 2</option>
                        <option value="questionEspacesVerts3">Question Espaces Verts 3</option>

                    </select>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="description" name="description" rows="5" placeholder="saisir votre description"></textarea>
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <input type="checkbox" name="confidentialite" id="confidentialite" aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <p class="pdc">J'accepte les <a href="politiqueConfidentialite.php">politiques de confidentialité</a>.</p>
                    </div>

                    <br>
                    <button type="submit" class="btn border-success hvr-bounce-to-right" value="mailform" name="submit">Envoyer</button>
                </form>
            </div>
        </main>
        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3">
            </div>
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
        </div>
      

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<?php 
require_once("include/footer.php");
?>