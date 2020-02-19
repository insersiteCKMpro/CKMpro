<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>

    .footerhaut
    {
        display: flex;
        justify-content: space-evenly;
    }

.footerbas
{
    display: flex;
    justify-content: center;
}
.colonne1
{
    
    width: 30%;
    align-items: center;
    color: black !important;
    text-decoration: none !important;
    display: flex;
    flex-direction: column;
}
.ftext1
{
    text-decoration: none;
    color: black;
}
.ftext1:hover
{
    text-decoration: none;
    color: black;
    background-color: blue;
    color: white;
}

.colonne2
{
    
    width: 30%;
    color: black !important;
    text-decoration: none !important;
}
.ftext2
{
    text-decoration: none;
    color: black;
}
.ftext2:hover
{
    text-decoration: none;
    color: black;
    background-color: blue;
    color: white;
}


.colonne3 
{
    display:flex;
    align-items: center;
    width: 30%;
    justify-content: center;
}

.snap:hover
{
    transition: all ease .3s .1s;
}
.fb:hover
{
    transition: all ease .3s .1s;
}
.insta:hover
{
    transition: all ease .3s .1s;
}

/* RESPONSIVE */
/* Mobile */
@media screen and (max-width: 450px)
{
    footer
    {
        border-top: 1px solid black;
    }
.flogo
{
    width: 50%;
    margin-bottom: 15%;
}
.footerhaut
{
    flex-direction: column-reverse;
}
.colonne1
{
    margin-bottom: 5%;
}
.colonne2
{
    order:-1;
}
    .footerhaut
    {
        align-items: center;
        text-align: center;
    }
.colonne3
{
    width: 100%;
    margin-bottom: 10%;
    margin-top:2vh;
}

}

/* Tablette */
@media screen and (max-width: 768px) and (min-width: 451px)
{
    .flogo
    {
        width: 20%;
    }
    
}

/* Ordi */
@media screen and (max-width: 2560px) and (min-width: 769px)
{
    .flogo
    {
        width: 10%;
    }
}

</style>
<body>

    <footer class="mgn">
        <div class="ensemblefooter">
            <div class="footerhaut text-center">
                    <div class="colonne1 text-center">
                        
                        <img class="flogo" src="img/CKMHOMEFOOTER.png" width="10%" height="30%">
                        <a class="ftext1" href="">3D</a>
                        <a class="ftext1" href="">Nettoyage</a>
                        <a class="ftext1" href="">Espace Verts</a>
                    </div>
            
                    <div class="colonne2 text-center">
                        <a class="ftext2" href="">La Boutique</a><br>
                        <a class="ftext2" href="">Contact</a><br>
                        <a class="ftext2" href="">Mention Légales</a><br>
                        <a class="ftext2" href="">Politique de Confidentialité</a><br>
                    </div>
            
                    <div class="colonne3 text-center">
                        <div class="snap">
                            <a href="http://snapchat.com" target="_blank"><img src="img/ckmsnapchat.png" width="50%" height="50%"></a>
                        </div>

                        <div class="fb">
                            <a href="http://facebook.com" target="_blank"><img src="img/ckmfbblue.png" width="50%" height="50%"></a>
                        </div>

                        <div class="insta">
                            <a href="http://instagram.com" target="_blank"><img src="img/ckminstagramgreen.png" width="50%" height="50%"></a>
                    </div>
            </div>
                </div>
            
                <div class="footerbas">
                <div id="copyright" class="mt-5" role="contentinfo">Copyright 2020 Insersite</div>
                </div>
            
            </div>
            
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>