<?php 
    require_once("include/header.php");
    require_once("include/nav.php")
?>
<style>
        /* ------------------------css-source-nettoyage--------------------------------- */
        .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
            width: 100%;
            padding-right: 0;
            padding-left: 0;
            margin-right: auto;
            margin-left: auto;
        }
        .titr1{
            margin: 4vh auto;
            display: flex;
            justify-content: center;
        }

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

        p {
            font-size: 1.3em;
            font-family: 'Red Hat Display', serif;
            width: 75%;
            margin: 0 auto 5vh;
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
                font-family: 'Red Hat Display', serif;
            }

            .bg {
                width: 100%;
                padding-bottom: 2vh;
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
                padding-bottom: 2vh;
            }

            .imgligne2 {
                width: 100%;
            }

            p {
                font-size: 1.3em;
                font-family: 'Red Hat Display', serif;
                width: 80%;
                margin: 0 auto 5vh;
            }
        }

        /* ------------------------responsive-nettoyage-mobile-------------------------------- */
        @media screen and (max-width: 450px) {
            .imgligne1 {
                position: relative;
                width: 100%;
            }

            .para1 {
                display: flex;
                flex-direction: column;
            }

            .imgligne2 .titre2 .titre3 .text2 .bg {
                width: 100%;
                font-size: 2.5rem;
                font-weight: 800;
                font-family: 'Red Hat Display', serif;
            }

            .bg {
                width: 100%;
                padding-bottom: 2vh;
            }

            .imgligne2 {
                width: 100%;
            }

            p {
                font-size: 1.5em;
                font-family: 'Red Hat Display', serif;
                width: 80%;
                margin: 0 auto 5vh;
            }
        }
    </style>
<div class="container-fluid">
    <div class="imgligne1">
        <img class="img1" src="img/nettoyagemaq.png" width="33.3%" href="#">
        <img class="img1" src="img/nettoyagemaq.png" width="33.3%" href="#">
        <img class="img1" src="img/nettoyagemaq.png" width="33.3%" href="#">
    </div>
    <div class="bg">
        <h1 class="titr1">Nettoyage</h1><br>
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
        </p>
    </div>
    <div class="bg" style="background-color: rgba(0, 174, 239, 0.5);">
        <div class="imgligne2">
            <img class="img2" src="img/nettoyagemaq.png" width="50%" href="#">
            <img class="img2" src="img/nettoyagemaq.png" width="50%" href="#">
        </div>

        <h2 class="titr1" id="debarras">Debarras</h2>
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
        </p>
    </div>
    <div class="bg">
        <img class="imgligne3" src="img/produitsboutiquemaq.png" height="100%" width="100%" alt="">

        <h2 class="titr1">Nettoyage</h2><br>
        <p class="text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae
            illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! 
            Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni 
            cupiditate earum quasi consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto 
            molestias debitis possimus tenetur incidunt consectetur! Maiores, nulla. Exercitationem facere architecto 
            possimus placeat ipsum. In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod fuga 
            perspiciatis mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio
        </p>

        <p class="text-justify">         
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit repellat error obcaecati repudiandae
            illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque suscipit nobis quae! 
            Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero magnam officiis velit harum magni 
            cupiditate earum quasi consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto 
            molestias debitis possimus tenetur incidunt consectetur! Maiores, nulla. Exercitationem facere architecto 
            possimus placeat ipsum. In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod fuga 
            perspiciatis mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio
        </p>
    </div>
</div>
<?php 
    require_once("include/footerb.php");
?>