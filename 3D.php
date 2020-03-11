<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
?>
<style>
        /*------------------------css-source-3D---------------------------------*/
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
            font-weight: 800px;
            font-family: 'Red Hat Display', serif;
        }

        /*-----------------------resposive-3D-ecran pc--------------------------------*/
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

        /*------------------------resposive-3D-tablette--------------------------------*/
        @media screen and (max-width: 768px) and (min-width: 451px) {
            .imgligne1 {
                position: relative;
                width: 100%;
            }

            .imgligne2 .titre2 .titre3 .text2 .bg {
                width: 100%;
                font-size: 2.5rem;
                font-family: 'Red Hat Display', serif;
                font-weight: 800;
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

        /* ------------------------resposive-3D-mobile-------------------------------- */
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
                font-size: 0.8rem;
                font-family: 'Red Hat Display', serif;
                font-weight: 800px;
            }

            .bg {
                padding-bottom: 2vh;
                width: 100%;
            }

            .imgligne2 {
                width: 100%;
            }

            p {
                font-size: 0.8em;
                font-family: 'Red Hat Display', serif;
                width: 98%;
                margin: 0 auto 5vh;
            }
        }
    </style>
<div class="container-fluid">
    <div class="imgligne1">
        <img class="img1 img-fluid" src="img/nettoyagemaq.png" width="33.3%" href="#">
        <img class="img1 img-fluid" src="img/nettoyagemaq.png" width="33.3%" href="#">
        <img class="img1 img-fluid" src="img/nettoyagemaq.png" width="33.3%" href="#">
    </div>
    <div class="bg">
        <h1 class="titr1">3D</h1>
        <p class="text-justify"> 
            Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Illum sit repellat error obcaecati
            repudiandae illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque
            suscipit nobis quae! Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero
            magnam officiis velit harum magni cupiditate earum quasi consequatur maiores quisquam, porro
            exercitationem deleniti deserunt odio architecto molestias debitis possimus tenetur incidunt
            consectetur! Maiores, nulla.Exercitationem facere architecto possimus placeat ipsum.
            In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod fuga perspiciatis
            mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio.
        </p>
        <p class="text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit repellat error obcaecati
            repudiandae illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque
            suscipit nobis quae! Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero
            magnam officiis velit harum magni cupiditate earum quasi consequatur maiores quisquam, porro
            exercitationem deleniti deserunt odio architecto molestias debitis possimus tenetur incidunt
            consectetur! Maiores, nulla.Exercitationem facere architecto possimus placeat ipsum.
            In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod fuga perspiciatis
            mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio.
        </p>
    </div>

    <div class="bg" style="background-color: rgba(255, 242, 0, 0.5);" id="desinfection">
        <div class="imgligne2">
            <img class="img2 img-fluid" src="img/nettoyagemaq.png" width="50%" href="#">
            <img class="img2 img-fluid" src="img/nettoyagemaq.png" width="50%" href="#">
        </div>

        <h2 class="titr1">3D</h2>
        <p class="text2 text-justify"> 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit repellat error obcaecati
            repudiandae illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque
            suscipit nobis quae! Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero
            magnam officiis velit harum magni cupiditate earum quasi consequatur maiores quisquam, porro
            exercitationem deleniti deserunt odio architecto molestias debitis possimus tenetur incidunt
            consectetur! Maiores, nulla.Exercitationem facere architecto possimus placeat ipsum.
            In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod fuga perspiciatis
            mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio.
        </p>

        <p class="text2 text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit repellat error obcaecati
            repudiandae illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque
            suscipit nobis quae! Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero
            magnam officiis velit harum magni cupiditate earum quasi consequatur maiores quisquam, porro
            exercitationem deleniti deserunt odio architecto molestias debitis possimus tenetur incidunt
            consectetur! Maiores, nulla.Exercitationem facere architecto possimus placeat ipsum.
            In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod fuga perspiciatis
            mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio.
        </p>
    </div>

    <div class="bg" id="desinsectisation">
        <img class="imgligne3 img-fluid" src="img/produitsboutiquemaq.png" width="100%" alt="">

        <h2 class="titr1">3D</h2>
        <p class="text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit repellat error obcaecati
            repudiandae illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque
            suscipit nobis quae! Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero
            magnam officiis velit harum magni cupiditate earum quasi
            consequatur maiores quisquam, porro exercitationem deleniti deserunt odio architecto molestias
            debitis possimus tenetur incidunt consectetur! Maiores, nulla. Exercitationem facere architecto
            possimus placeat ipsum. In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod
            fuga perspiciatis mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio.
        </p>

        <p class="text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit repellat error obcaecati
            repudiandae illo? Soluta mollitia tempore, aspernatur, esse harum, vitae nostrum rem atque
            suscipit nobis quae! Voluptate, eligendi. Accusantium quibusdam veritatis laudantium libero
            magnam officiis velit harum magni cupiditate earum quasi consequatur maiores quisquam, porro
            exercitationem deleniti deserunt odio architecto molestias debitis possimus tenetur incidunt
            consectetur! Maiores, nulla.Exercitationem facere architecto possimus placeat ipsum.
            In excepturi debitis doloremque? Eos molestiae, ex natus enim iure quod fuga perspiciatis
            mollitia earum, saepe consequatur voluptatum delectus! Beatae et sit iusto odio.
        </p>
    </div>
</div>
<?php 
    require_once("include/footerj.php");
?>