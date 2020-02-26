<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous">
    <title>CKMpro</title>
    </head>
    
<style>
     header, nav, section 
    {
    display: contents;
    }
    footer {
        background-color: rgba(0, 166, 81, 0.5);
        border-top: 1px solid black;
    }

    .footerhaut {
        display: flex;
        justify-content: space-evenly;
        font-size: 1.5em;
    }

    .footerbas {
        display: flex;
        justify-content: center;
        font-size: 1em;
    }

    .colonne1 {

        width: 30%;
        align-items: center;
        color: black !important;
        text-decoration: none !important;
        display: flex;
        flex-direction: column;
        margin-top: 2%;
    }

    .ftext1 {
        text-decoration: none;
        color: black;
    }

    .ftext1:hover {
        text-decoration: none;
        color: black;
        background-color: blue;
        color: white;
    }

    .colonne2 {

        width: 30%;
        color: black !important;
        text-decoration: none !important;
        margin-top: 2%;
    }

    .ftext2 {
        text-decoration: none;
        color: black;
    }

    .ftext2:hover {
        text-decoration: none;
        color: black;
        background-color: blue;
        color: white;
    }

    .colonne3 {
        display: flex;
        align-items: center;
        width: 30%;
        justify-content: center;
        margin-top: 2%;
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

    .ordi {
        display: none;
    }
    .insta
    {
        filter: drop-shadow(1px 2px 0px black);
        
    }

    /* ----------------------------------------------------------------------------------------------------- */
    /* ORDINATEUR */
    @media screen and (min-width: 769px) and (max-width: 2560px) {
        .flogo {
            width: 80%;
        }

        .footerhaut,
        .footerbas {
            font-size: 1em;
        }
    }

    /* TABLETTE */
    @media screen and (min-width: 451px) and (max-width: 768px) {
        .flogo {
            width: 70%;
        }

        .footerhaut,
        .footerbas {
            font-size: 1em;
        }
    }

    /* TELEPHONE */

    @media screen and (max-width: 450px) {
        footer {
            border-top: 1px solid black;
        }

        .flogo {
            width: 70%;
            margin-bottom: 15%;
        }

        .footerhaut {
            flex-direction: column-reverse;
        }

        .colonne2 {
            order: -1;
        }

        .footerhaut {
            align-items: center;
            text-align: center;
        }

        .colonne3 {
            width: 100%;
            margin-bottom: 10%;
            margin-top: 2vh;
        }

        .footerhaut,
        .footerbas {
            font-size: 1em;
        }
    }
</style>
    <footer>
        <div class="ensemblefooter">
            <div class="footerhaut text-center">
                <div class="colonne1 text-center">

                    <a href="homepage.php"><img class="flogo" src="include/img/CKMHOMEFOOTER.png" width="100%"></a>
                    <a class="ftext1" href="3D.php">3D</a>
                    <a class="ftext1" href="nettoyage.php">Nettoyage</a>
                    <a class="ftext1" href="espacevert.php">Espace Verts</a>
                </div>

                <div class="colonne2 text-center">
                    <a class="ftext2" href="">La Boutique</a><br>
                    <a class="ftext2" href="contact.php">Contact</a><br>
                    <a class="ftext2" href="">Mention Légales</a><br>
                    <a class="ftext2" href="">Politique de Confidentialité</a><br>
                </div>

                <div class="colonne3 text-center">
                    <div class="snap">
                        <img class="insta" src="include/img/ckmsnapchatyellow.png" alt="" width="50%"><a
                            href="http://www.snapchat.com"></a>
                    </div>
                    <div class="fb">
                        <img class="insta" src="include/img/ckmfbblue.png" alt="" width="50%"><a
                            href="http://www.facebook.com"></a>
                    </div>
                    <div class="snap">
                        <img class="insta" src="include/img/ckminstagramgreen.png" alt="" width="50%"><a
                            href="http://www.instagram.com"></a>
                    </div>
                </div>
            </div>
            <div class="footerbas">
                <div id="copyright" class="mt-5" role="contentinfo">Copyright 2020 Insersite</div>
            </div>
        </div>
    </footer>
    </body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>