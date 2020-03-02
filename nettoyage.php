<html>

<?php 
    require_once("include/header.php");
    require_once("include/nav.php")
?>

<body>

    <style>
        /* ------------------------css-source-nettoyage--------------------------------- */
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

        p {
            font-size: 1.5em;
            font-family: 'Red Hat Display', serif;
            width: 75%;
            margin: 0 auto;
        }

        .titre2,
        .titre3 {
            font-size: 2.5rem;
            font-weight: 800;
            font-family: 'Red Hat Display', serif;
        }

        /* ------------------------responsive-nettoyage-ecran pc-------------------------------- */
        @media screen and (max-width: 2560px) and (min-width: 769px) {
            .imgligne1 {
                position: relative;
                width: 100%;
            }

            .imgligne2 .titre2 .titre3 .text2 .bg {
                width: 100%;
                font-size: 2.5rem;
                font-weight: 800;
                font-family: 'Red Hat Display', serif;
            }

            .bg {
                width: 100%;
            }

            .imgligne2 {
                width: 100%;
            }
        }

        /* ------------------------responsive-nettoyage-tablette-------------------------------- */
        @media screen and (max-width: 768px) and (min-width: 451px) {
            .imgligne1 {
                position: relative;
                width: 100%;
            }

            .imgligne2 .titre2 .titre3 .text2 .bg {
                width: 100%;
                font-size: 2.5rem;
                font-weight: 800;
                font-family: 'Red Hat Display', serif;
            }

            .bg {
                width: 100%;
            }

            .imgligne2 {
                width: 100%;
            }

            p {
                font-size: 1.5em;
                font-family: 'Red Hat Display', serif;
                width: 75%;
                margin: 0 auto;
            }
        }

        /* ------------------------responsive-nettoyage-mobile-------------------------------- */
        @media screen and (max-width: 450px) {
            .imgligne1 {
                position: relative;
                width: 100%;
            }

            .imgligne2 .titre2 .titre3 .text2 .bg {
                width: 100%;
                font-size: 2.5rem;
                font-weight: 800;
                font-family: 'Red Hat Display', serif;
            }

            .bg {
                width: 100%;
            }

            .imgligne2 {
                width: 100%;
            }

            p {
                font-size: 1.5em;
                font-family: 'Red Hat Display', serif;
                width: 75%;
                margin: 0 auto;
            }

        }
    </style>


    <div class="imgligne1">
        <img class="img1" src="include/img/nettoyagemaq.png" width="33.3%" href="#">
        <img class="img1" src="include/img/nettoyagemaq.png" width="33.3%" href="#">
        <img class="img1" src="include/img/nettoyagemaq.png" width="33.3%" href="#">
    </div>

    <h1 class="text-center mt-5">Nettoyage</h1><br>
    <p class="text-justify">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae
        illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! 
        Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni 
        cupiditate earum quasi consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto 
        molestias debitis possimus tenetur incidunt consectetur! Maiores, nulla. Exercitationem facere architecto 
        possimus placeat ipsum. In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod fuga 
        perspiciatis mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio
    </p>

    <p class="text-justify"> Lorem ipsum dolor sit amet
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae
        illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! 
        Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni 
        cupiditate earum quasi consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto 
        molestias debitis possimus tenetur incidunt consectetur! Maiores, nulla. Exercitationem facere architecto 
        possimus placeat ipsum. In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod fuga 
        perspiciatis mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio
    </p><br>

    <div class="bg" style="background-color: rgba(0, 174, 239, 0.5);">
        <div class="imgligne2">
            <img class="img2" src="include/img/nettoyagemaq.png" width="50%" href="#">
            <img class="img2" src="include/img/nettoyagemaq.png" width="50%" href="#">
        </div>

        <h2 class="titre2 text-center mt-5" id="debarras">Debarras</h2><br>
        <p class="text2 text-justify">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae
        illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! 
        Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni 
        cupiditate earum quasi consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto 
        molestias debitis possimus tenetur incidunt consectetur! Maiores, nulla. Exercitationem facere architecto 
        possimus placeat ipsum. In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod fuga 
        perspiciatis mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio
        </p>

        <p class="text2 text-justify">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae
        illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! 
        Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni 
        cupiditate earum quasi consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto 
        molestias debitis possimus tenetur incidunt consectetur! Maiores, nulla. Exercitationem facere architecto 
        possimus placeat ipsum. In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod fuga 
        perspiciatis mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio
        </p><br>

    </div>

    <img class="imgligne3" src="include/img/produitsboutiquemaq.png" height="100%" width="100%" alt="">

    <h2 class="titre3 text-center mt-5">Nettoyage</h2><br>
    <p class="text-justify">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae
        illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! 
        Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni 
        cupiditate earum quasi consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto 
        molestias debitis possimus tenetur incidunt consectetur! Maiores, nulla. Exercitationem facere architecto 
        possimus placeat ipsum. In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod fuga 
        perspiciatis mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio
    </p>

    <p class="text-justify mb-5">         
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae
        illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! 
        Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni 
        cupiditate earum quasi consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto 
        molestias debitis possimus tenetur incidunt consectetur! Maiores, nulla. Exercitationem facere architecto 
        possimus placeat ipsum. In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod fuga 
        perspiciatis mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio
    </p>

    </div>

</body>

<?php 
    require_once("include/footerb.php");
?>

</html>