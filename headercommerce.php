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

/* tel+num+ckmboutique */
.lignehaut  
{
    display:flex;
    background-color:red;
    height:3vh;
    justify-content:flex-end;
    font-size:2.5vh;
}
.info
{
    display:flex;
    background-color:yellow;
    height:3vh;
    justify-content:flex-end;
    font-size:2.5vh;
}
/* img du tel */
.tel
{
    width:100%;
}
/* numero de tel */
p.num 
{
    display:flex;
    margin-left:2%;
}
/* div du rond clickandcollect */
.image1
{
    background-color:purple;
    width:33.3%;
    height:20vh;
    display:flex;
    justify-content:center;
    align-items:flex-end;

}
/* div du logo ckmboutique */
.image2
{
    background-color:orange;
    width:33.3%;
    height:25vh;
    align-items:flex-end;
    display:flex;
}
/* div qui englobe la div image 1 et 2 */
.imageall
{
    background-color:pink;
    display:flex;
    align-items:flex-end;
    height:25vh;
}
/* juste l'image qui est dans la div image1 */
.img1
{
    width:25%;
}
/* juste l'image qui est dans la div image2 */
.img2
{
    width:100%;
    height:100%;
}


    /* RESPONSIVE */

/* ECRAN 4K */
    @media screen and (max-width: 2560px) and (min-width: 1441px) {



}

/* PC */
    @media screen and (max-width: 1440px) and (min-width: 769px) {
.img1
{
    width:30%;
}

.image1
{
    width:23.3%;
}
.image2
{
    width:53.3%;
}
.img1
{
    width:45%;
}

    }

/*TABLETTE*/
    @media screen and (max-width: 768px) and (min-width: 451px) {

.lignehaut {
    display: flex;
    background-color: red;
    height: 9vh;
    justify-content: flex-end;
    font-size: 2.5vh;
    flex-direction: column;
}
.info {
    display: flex;
    background-color: yellow;
    height: 3vh;
    justify-content: flex-end;
    font-size: 2.5vh;
    flex-direction: row;
}
.tel {
    width: 3%;
}
.numm
{
    display:flex;
    flex-direction:row-reverse;
}
.image1
{
    width:23.3%;
}
.image2
{
    width:53.3%;
}
.img1
{
    width:70%;
}


}

/* telephone */
    @media screen and (max-width: 450px){

        .image1
{
    display:none;
}
.image2
{
    width:80%;
}
.imageall
{
    display:flex;
    justify-content:center;
}

    }
</style>

<header>
<div class="container-fluid">

<div class="lignehaut">

<div class="info">
<img class="tel img-fluid" src="img/telephonedesktop.png" alt="">
<p class="num"> 01.25.74.89.12</p>
</div>
<p class="numm"> CKM Pro Vitrine</p>
</div>

<div class="imageall">

<div class="image1">
<img class="img1 img-fluid"src="img/ClickAndCollect.png" alt="">
</div>

<div class="image2">
<img class="img2 img-fluid" src="img/CKMPROLOGODEFBOUTIQUE.png" alt="">
</div>

</div>
</header>


</div>
</html>