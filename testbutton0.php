


                <header>

<?php
require_once("header.php")
?>

</header>

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
        height:45vh;
    }
    p.text-center
    {
        font-size:2em;
    }

    .btn--5 {
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.button-mat:before {
    content: "";
    display: block;
    background: #401aff;
    position: absolute;
    width: 200%;
    height: 500%;
    border-radius: 100%;
    transition: 0.36s cubic-bezier(0.4, 0, 1, 1);
}

.btn--5:before {
    transform: translate(-120%, -50%) translateZ(0);
}
.button {
    padding: 2rem 7rem;
    background: white;
    text-align: center;
    display: inline-block;
    font-size: 1.7rem;
    text-transform: uppercase;
    font-weight: 700;
    position: relative;
    will-change: transform;
}

.button-mat {
    color: #5533ff;
    border: 0px transparent;
    border-radius: 0.3rem;
    transition: 0.3s ease-in-out;
    transition-delay: 0.35s;
    overflow: hidden;
}



.hvr-sweep-to-right {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    position: relative;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
}


[class^="hvr-"] {
    margin: .4em;
    padding: 1em;
    cursor: pointer;
    background: #e1e1e1;
    text-decoration: none;
    color: #666;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}


.hvr-sweep-to-right:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #2098D1;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 0 50%;
    transform-origin: 0 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}

p, [class^="hvr-"] {
    font-family: 'Roboto', sans-serif;
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
        p.text-center
    {
        font-size:1em;
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
        p.text-center
    {
        font-size:1em;
    }

    }
    
</style>



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

                <div class="bg" style="background-color: rgba(255, 242, 0, 0.5);">
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


                    <button class="button button-mat btn--5">
<div class="pseudo-text">button</div>
</button>

<a href="#" class="hvr-sweep-to-right">Sweep To Right</a>


                <footer>

<?php
require_once("footerjaune.php")
?>
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