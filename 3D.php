<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
?>

<body>
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
            height: 45vh;
        }

        p.text-center {
            font-size: 2em;
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

            p.text-center {
                font-size: 1em;
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

            p.text-center {
                font-size: 1em;
            }
        }
    </style>

    <div class="imgligne1">
        <img class="img1" src="include/img/nettoyagemaq.png" width="33.3%" href="#">
        <img class="img1" src="include/img/nettoyagemaq.png" width="33.3%" href="#">
        <img class="img1" src="include/img/nettoyagemaq.png" width="33.3%" href="#">
    </div>

    <h1 class="text-center mt-5">3D</h1>
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

    <div class="bg" style="background-color: rgba(255, 242, 0, 0.5);">
        <div class="imgligne2">
            <img class="img2" src="include/img/nettoyagemaq.png" width="50%" href="#">
            <img class="img2" src="include/img/nettoyagemaq.png" width="50%" href="#">
        </div>


        <h2 class="titre2 text-center col-md-12">3D</h2>
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

    <img class="imgligne3" src="include/img/produitsboutiquemaq.png" height="100%" width="100%" alt="">

    <h2 class="text-center mt-5">3D</h2>
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

<?php 
    require_once("include/footerj.php");
?>
