<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styleps.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CKMpro</title>
</head>
<style>
    .imgligne1 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .imgligne2 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .imgligne3 {
        background-color: red;
    }




    /* RESPONSIVE */

    /*TABLETTE*/
    @media screen and (max-width: 768px) and (min-width: 451px) {
        .imgligne1 {
            position: relative;
            width: 100%;
        }

        .imgligne2 .titre2 .text2 .bg {
            width: 100%;
        }

        .bg {
            width: 100%;
        }

        .imgligne2 {
            width: 100%;
        }



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

        .navbar-expand-lg .navbar-nav {
            justify-content: center;
            font-size: 1.5vh;
            display: flex;
            flex-direction: row;
            width: 100%;
        }


    }

    /* PC */


    @media screen and (max-width: 2560px) and (min-width: 769px) {
        .imgligne1 {
            position: relative;
            width: 100%;
        }

        .imgligne2 .titre2 .text2 .bg {
            width: 100%;
        }

        .bg {
            width: 100%;
        }

        .imgligne2 {
            width: 100%;
        }


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

    /* telephone */
    @media screen and (max-width: 450px) {
        .imgligne1 {
            position: relative;
            width: 100%;
        }

        .imgligne2 .titre2 .text2 .bg {
            width: 100%;
        }

        .bg {
            width: 100%;
        }

        .imgligne2 {
            width: 100%;
        }







    }
</style>

<body>

    <div class="container-fluid">

        <header>

            <body>
                <header>



                </header>

                <nav class="BarreNav mt-5">

                </nav>

                <div class="imgligne1">
                    <img class="img1" src="img/nettoyagemaq.png" width="33.3%" href="#">
                    <img class="img1" src="img/nettoyagemaq.png" width="33.3%" href="#">
                    <img class="img1" src="img/nettoyagemaq.png" width="33.3%" href="#">
                </div>

                <h1 class="text-center mt-5">Titre H1</h1>
                <p class="text-center mx-auto col-md-6 mt-3 border-dark rounded mb-3 text-justify">Lorem ipsum dolor sit
                    amet
                    consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae illo? Soluta mollitia
                    tempore,
                    aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! Voluptate, eligendi.
                    Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni cupiditate earum
                    quasi
                    consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto molestias
                    debitis
                    possimus tenetur incidunt consectetur! Maiores, nulla.
                    Exercitationem facere architecto possimus placeat ipsum. In excepturi debitis doloremque? Eos
                    molestiae, ex
                    natus enim iure quod fuga perspiciatis mollitia earum, saepe consequatur voluptatum delectus! Beatae
                    et sit
                    iusto odio.</p>
                <p class="text-center mx-auto col-md-6 mt-3 border-dark rounded mb-3 text-justify">Lorem ipsum dolor sit
                    amet
                    consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae illo? Soluta mollitia
                    tempore,
                    aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! Voluptate, eligendi.
                    Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni cupiditate earum
                    quasi
                    consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto molestias
                    debitis
                    possimus tenetur incidunt consectetur! Maiores, nulla.
                    Exercitationem facere architecto possimus placeat ipsum. In excepturi debitis doloremque? Eos
                    molestiae, ex
                    natus enim iure quod fuga perspiciatis mollitia earum, saepe consequatur voluptatum delectus! Beatae
                    et sit
                    iusto odio.</p>

                <div class="bg" style="background-color: rgba(0, 174, 239, 0.5);">
                    <div class="imgligne2">
                        <img class="img2" src="img/nettoyagemaq.png" width="50%" href="#">
                        <img class="img2" src="img/nettoyagemaq.png" width="50%" href="#">
                    </div>


                    <h2 class="titre2 text-center col-md-12">Titre H2</h2>
                    <p class="text2 text-center mx-auto col-md-6 border-dark rounded text-justify">Lorem ipsum dolor sit
                        amet consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae illo? Soluta
                        mollitia
                        tempore, aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! Voluptate,
                        eligendi.
                        Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni cupiditate
                        earum
                        quasi consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto
                        molestias
                        debitis possimus tenetur incidunt consectetur! Maiores, nulla.
                        Exercitationem facere architecto possimus placeat ipsum. In excepturi debitis doloremque? Eos
                        molestiae,
                        ex natus enim iure quod fuga perspiciatis mollitia earum, saepe consequatur voluptatum delectus!
                        Beatae
                        et sit iusto odio.</p>

                    <p class="text2 text-center mx-auto col-md-6 border-dark rounded text-justify">Lorem ipsum dolor sit
                        amet consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae illo? Soluta
                        mollitia
                        tempore, aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! Voluptate,
                        eligendi.
                        Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni cupiditate
                        earum
                        quasi consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto
                        molestias
                        debitis possimus tenetur incidunt consectetur! Maiores, nulla.
                        Exercitationem facere architecto possimus placeat ipsum. In excepturi debitis doloremque? Eos
                        molestiae,
                        ex natus enim iure quod fuga perspiciatis mollitia earum, saepe consequatur voluptatum delectus!
                        Beatae
                        et sit iusto odio.</p>
                </div>

                <img class="imgligne3" src="img/produitsboutiquemaq.png" height="100%" width="100%" alt="">

                <h2 class="text-center mt-5">Titre H2</h2>
                <p class="text-center mx-auto col-md-6 mt-3 border-dark rounded mb-3 text-justify">Lorem ipsum dolor sit
                    amet
                    consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae illo? Soluta mollitia
                    tempore,
                    aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! Voluptate, eligendi.
                    Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni cupiditate earum
                    quasi
                    consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto molestias
                    debitis
                    possimus tenetur incidunt consectetur! Maiores, nulla.
                    Exercitationem facere architecto possimus placeat ipsum. In excepturi debitis doloremque? Eos
                    molestiae, ex
                    natus enim iure quod fuga perspiciatis mollitia earum, saepe consequatur voluptatum delectus! Beatae
                    et sit
                    iusto odio.</p>

                <p class="text-center mx-auto col-md-6 mt-3 border-dark rounded mb-3 text-justify mb-5">Lorem ipsum
                    dolor sit
                    amet
                    consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae illo? Soluta mollitia
                    tempore,
                    aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! Voluptate, eligendi.
                    Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni cupiditate earum
                    quasi
                    consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto molestias
                    debitis
                    possimus tenetur incidunt consectetur! Maiores, nulla.
                    Exercitationem facere architecto possimus placeat ipsum. In excepturi debitis doloremque? Eos
                    molestiae, ex
                    natus enim iure quod fuga perspiciatis mollitia earum, saepe consequatur voluptatum delectus! Beatae
                    et sit
                    iusto odio.</p>


                <footer>


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