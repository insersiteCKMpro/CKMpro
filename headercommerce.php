<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <title>CKMpro-Page-Secondaire</title>
</head>

<style>
header
{
    /* background-color:red; */
    max-height:auto;
}
.lignehaut 
{
    display:flex;
    justify-content:flex-end;
    /* background-color:green; */
    height:3vh;
    margin-top:2vh;
    font-size:1.5em;
}
.vitrine
{
    margin-left:1%;
    margin-right:1%;

}
.info
{
    display:flex;
}
.tel
{
    margin-left:-2%;
    height:100%;
}
.deuxlogo .logoboutique
{
    display:flex;
    justify-content:center;
    position:relative;
}
.deuxlogo .logoclick
{
    display:flex;
    justify-content:center;
    position:absolute;
    left:10%;
    top:15%;
}

.deuxlogo
{
    display:block;
}
.clickco
{
    width:100%;
}

    /* RESPONSIVE */

    /* ECRAN 4K */
    @media screen and (max-width: 2560px) and (min-width: 1439px) 
    {

.lignehaut
{
    font-size:1.3em;
}

.clickco
{
    width:100%;
}
.logo
{
    width:46%;
}

    }

 /* PC */
 @media screen and (max-width: 1440px) and (min-width: 1023px) 
 {
    .clickco
{
    width:100%;
}
.clicko
{
    width:70%;
    right:30%;
    position:relative;
    
}

    }

    @media screen and (max-width: 1024px) and (min-width: 767px) 
{
    .logo
{
    display:flex;
    justify-content:center;
    position:relative;
    width:47%;
    margin-top:6%;
}
.deuxlogo .logoclick

{
    display: flex;
    justify-content: center;
    position: absolute;
    left: 10%;
    top: 20%;
    width: 11%;
}
.lignehaut
{
    font-size: 1.3em ;
}


}

    /*TABLETTE*/
    @media screen and (max-width: 768px) and (min-width: 424px) {
        .lignehaut
        {
            display:flex;
            flex-direction:column;
            height:10vh;
            align-items:flex-end;
        }

        .info {
    margin-right: 1%;
    display: flex;
    margin-left: 7%;
}

.tel {
    margin-left: -9%;
    height: 50%;
}
.num
{
    margin-left:10%;
}
    }



  /* telephone */
    @media screen and (max-width: 425px) {
        .vitrine
        {
            margin-left:17%;
        }
        .logo
        {
            width:65%;
            position:absolute;
        }
        .lignehaut
        {
            font-size:0.9em;
            margin-bottom:5%;
            width:100%;
            display:flex;
            flex-direction:row;
            height:4vh;
        }
        .clickco
        {
            display:none;
        }
        .tel
        {
            margin-right:3%;
            height:20%;
        }
        .num
        {
            margin-right:5%;
        }
        .info
{
    display:flex;
    margin-right:25%;
}

    }
</style>

<header>
<div class="container-fluid"></div>

<div class="lignehaut">

<div class="info">
<img class="tel" src="img/telephonedesktop.png" alt="">
<p class="num"> 01.25.74.89.12</p>
</div>
<p class="vitrine"> CKM Pro Vitrine</p>
</div>

<div class="deuxlogo">

<div class="logoclick">
<img class="clickco" src="img/click.png" alt="">
</div>

<div class="logoboutique">
<img class="logo"src="img/CKMPROLOGODEFBOUTIQUE.png" alt="">
</div>

</div>
</header>

</div>
</html>