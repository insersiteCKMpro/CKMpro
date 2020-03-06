<!--
    ?php defined('_JEXEC') or die;
if (($this->error->getCode()) == '404') {
    header("HTTP/1.0 404 Not Found");
    echo file_get_contents(JURI::root().'page-404');
    exit;}
  ?>
  -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur 404</title>
    <link rev="made" href="mailto:postmaster@localhost">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        
        .btn
        {
            border: 3px solid black;
            font-weight: bold;
        }
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
                background-color: #00a651;
            }
        @media screen and (min-width: 1441px) and (max-width: 2560px)
        { 
            .click {
                display: flex !important;
                width: 8%;
                margin: auto;
                position: relative !important;
            }
        }
        @media screen and (min-width: 1025px) and (max-width: 1440px)
        { 
            .click {
                display: flex !important;
                width: 18%;
                margin: auto;
                position: relative !important;
            }
        }
        @media screen and (min-width: 769px) and (max-width: 1024px)
        { 
            .click {
                display: flex !important;
                width: 19%;
                margin: auto;
                position: relative !important;
            }
        }
        @media screen and (min-width: 451px) and (max-width: 768px)
        { 
            .click {
                display: flex !important;
                width: 25%;
                margin: auto;
                position: relative !important;
            }
        }
        @media screen and (max-width: 450px)
        { 
            .click {
                display: flex !important;
                width: 45%;
                margin: auto;
                position: relative !important;
            }
        }
        
    </style>
</head>

<body>
    <h1 style="text-align:center"> RATS'S Alors!!! CKMpro introuvable </h1>

    <video muted width="100%" autoplay>
        <source src="img/404 ANIM-V3.mp4" type="video/mp4">
    </video>

    <div class="click">
        <a href="index.php" class="text-center"><button type="button" class="btn hvr-bounce-to-right">Retourner à la Vitrine</button></a>
    </div>
</body>
</html>