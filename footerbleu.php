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
    
    footer
    {
        background-color: rgba(0, 174, 239, 0.5);
    }
    .footerhaut
    {
        display: flex;
        justify-content: space-evenly;
        font-size:1.5em;
    }


.footerbas
{
    display: flex;
    justify-content: center;
    font-size:1em;
}
.colonne1
{
    
    width: 30%;
    align-items: center;
    color: black !important;
    text-decoration: none !important;
    display: flex;
    flex-direction: column;
    margin-top:2%;
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
    margin-top:2%;
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
    margin-top:2%;
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
.ordi
{
    display:none;
}
@media screen and (max-width: 375px)
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
.footerhaut , .footerbas
{
    font-size:1em;
}

}
@media screen and (max-width: 425px)
{
    .flogo
    {
        width: 40%;
    }
    .footerhaut , .footerbas
{
    font-size:1em;
}
}
@media screen and (max-width: 768px)
{
    .flogo
    {
        width: 30%;
    }
    .footerhaut , .footerbas
{
    font-size:1em;
}
}
    
</style>
<body>
    <main>

    </main>

    <footer>
        <div class="ensemblefooter">
            <div class="footerhaut text-center">
                    <div class="colonne1 text-center">
                        
                        <img class="flogo" src="img/CKMHOMEFOOTER.png" width="10%">
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
                            <img class="snap" src="img\ckmsnapchat.png" alt="" width="50%"><a href="http://www.snapchat.com"></a>
                        </div>

                        <div class="fb">
                            <img class="snap" src="img\ckmfb.png" alt="" width="50%"><a href="http://www.snapchat.com"></a>
                        </div>

                        <div class="snap">
                            <img class="snap" src="img\ckminstagram.png" alt="" width="50%"><a href="http://www.snapchat.com"></a>
                        </div>
            </div>
                </div>
            
                <div class="footerbas">
                <div id="copyright" class="mt-5" role="contentinfo">Copyright 2020 Insersite</div>
                </div>
            
            </div>
            
    </footer>