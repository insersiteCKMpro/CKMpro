<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <title>CKMpro</title>

  <style>
    /* ------------------------Css source-header------------------------------------- */
    @import url('https://fonts.googleapis.com/css?family=Red+Hat+Display&display=swap');
    body{
      width: 100%;
      background:white;
      max-height:auto;
    }
    header
    {
      background:white;
      height:20vh;
    }



    /* Menu */

    #menu
    {
      background:#333;
      height:5vh;
      width:80%;
      text-align:center;
    }

#menu ul {
	margin:0px;
	padding:0px;
  list-style:none;
}

#menu ul li {

	width:27%;
	height:5vh;
	margin:10px 20px;
	padding:5px;
	float:left;
	font-size:20px;
	text-align:center;
  background:url(menu.png) no-repeat;
  display:flex;
}

#menu ul li:hover {
	background:url(menuh.png) no-repeat;
}

#menu ul li a {
	color:#FFF;
  text-decoration:none;
  display:flex;
}

#menu ul li#return {
	width:30px;
	margin-right:0px;
	background:url(return.png) no-repeat;
}

/* Contenu de la page */

#content {
	width:95%;
	margin:0px auto;
}

/* Affichage de la liste des images */

#images {
	margin:0px;
	padding:0px;
	list-style:none;
	background:#333;
}

#images li {
	margin:10px;
	float:left;
}

#images li img {
	padding:2px;
	background:#111;
	border:1px solid #333;
}

#images li #erreur {
	padding:10px;
	background:#333;
	border:1px solid #CCC;
	font-weight:bold;
}

/* Pied de page */



    .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
        width: 100%;
        padding-right: 0;
        padding-left: 0;
        margin-right: auto;
        margin-left: auto;
    }

    .fixed-top {
      display: flex;
      justify-content: flex-end;
      font-size: 1.2em;
      float: right !important;
      background-color: white;
      font-family: 'Red Hat Display', serif;

    }

    .logo {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* LOGO TITRE STYLE */
    .logoTitre {
      margin-top: 4vh;
      width: 20vw;
    }

    .boutonTel {
      display: none;
    }

    .boutonbtq {
      display: none;
    }

    /* ------------------------RESPONSIVE-header-ecran pc--------------------------------- */
    @media screen and (min-width: 769px) and (max-width: 2560px) {

      /* ENTÊTE FIXE STYLE */
      .fixed-top {
        float: right !important;
        font-size: 1.2em;
        font-family: 'Red Hat Display', serif;
      }

      /* ICONE TEL ENTÊTE FIXE STYLE */
      #fas 
      {
        display: none;
      }

      /* LOGO TITRE STYLE */
      .logoTitre {
        width: 63%;
        display: flex;
        margin: 3vh auto 0;
      }
    }

    /* ------------------------RESPONSIVE-header-tablette--------------------------------- */
    @media screen and (min-width: 451px) and (max-width: 768px) {

      /* ENTÊTE FIXE STYLE */
      .fixed-top {
        float: right !important;
        font-size: 1.2em;
        font-family: 'Red Hat Display', serif;
      }

      /* ICONE TEL ENTÊTE FIXE STYLE */
      #fas 
      {
        display: none;
      }

      /* LOGO STYLE */
      .logoTitre {
        width: 45%;
        display: flex;
        margin: auto;
      }

      .logo {
        height: 14vh;
      }
    }

    /* ------------------------RESPONSIVE-header-mobile--------------------------------- */
    @media screen and (max-width: 450px) {

      .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
        width: 100%;
        padding-right: 0;
        padding-left: 0;
        margin-right: auto;
        margin-left: auto;
      }
      .text-center{
        margin: 0;
      }

      /* ENTÊTE FIXE STYLE */
      .fixed-top {
        float: right !important;
        font-size: 1.2em;
        font-family: 'Red Hat Display', serif;
        display: none;
      }

      /* ICONE TEL ENTÊTE FIXE STYLE */
      #fas 
      {
        display: none;
      }

      /* NUMERO */
      #num 
      {
        display: none;
      }

      /* LOGO STYLE */
      .logoTitre {
        width: 90%;
        margin: 0 auto;
        display: flex;
        margin-top:10vh;
      }

      /* Bouton téléphone  */
      .boutonTel {
        width: 7vh;
        height: 7vh;
        background-color: white;
        border: 3px solid black;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        z-index: 1;
        right: 80px;
        top: 1vh;
      }

      /* Bouton boutique  */
      .boutonbtq {
        width: 7vh;
        height: 7vh;
        background-color: white;
        border: 3px solid black;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        z-index: 1;
        right: 10px;
        top: 1vh;
      }

      #lienTel,
      #lienBtq 
      {
        color: black;
        text-decoration: none;
        background-color: transparent;
      }

      #iconTel,
      #iconBtq 
      {
        font-size: 2em;
        display: block;
      }

      .fa-phone-alt:before {
        content: "\f879";
      }
      
      .logoHome {
        padding-bottom: 20%;
      }

    }

    @media screen and (max-height: 450px) {
      .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
        width: 100%;
        padding-right: 0;
        padding-left: 0;
        margin-right: auto;
        margin-left: auto;
      }
      .text-center{
        margin: 0;
      }

      /* ENTÊTE FIXE STYLE */
      .fixed-top {
        float: right !important;
        font-size: 1.2em;
        font-family: 'Red Hat Display', serif;
        display: none;
      }

      .logo{
        height: 30vh !important;
      }

      /* ICONE TEL ENTÊTE FIXE STYLE */
      #fas 
      {
        display: none;
      }

      /* NUMERO */
      #num 
      {
        display: none;
      }

      /* LOGO STYLE */
      .logoTitre {
        width: 50%;
        margin: 10vh auto 0;
        display: flex;
      }

      /* Bouton téléphone  */
      .boutonTel {
        width: 13vh;
        height: 13vh;
        background-color: white;
        border: 3px solid black;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        z-index: 1;
        right: 80px;
        top: 1vh;
      }

      /* Bouton boutique  */
      .boutonbtq {
        width: 13vh;
        height: 13vh;
        background-color: white;
        border: 3px solid black;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        z-index: 1;
        right: 10px;
        top: 1vh;
      }

      #lienTel,
      #lienBtq 
      {
        color: black;
        text-decoration: none;
        background-color: transparent;
      }

      #iconTel,
      #iconBtq 
      {
        font-size: 1.5em;
        display: block;
      }

      .fa-phone-alt:before {
        content: "\f879";
      }
      
      .logoHome {
        padding-bottom: 20%;
      }

    }
  </style>
<body>
  <div class="container-fluid">
    <header>
      <div class="fixed-top">
        <div id="num"><i class="fas fa-phone-alt" id="fass"></i>&nbsp;
          0123456789 <i class="fas fa-phone-alt" id="fas"></i>&nbsp;
        </div>
        <div id="nom">&nbsp;
          CKM Boutique </div><i class="baseline-speaker_phone"></i>
      </div>
      <div class="logo">
        <a href="../index.php"><img src="../img/LOGOCKMPRODEF.png" alt="logo" class="logoTitre img-fluid"></a>
      </div>
      <div class="boutonTel">
        <a href="tel:+33123456789" id="lienTel"><i class="fas fa-phone-alt" id="iconTel"></i></a>
      </div>
      <div class="boutonbtq">
        <a href="../boutique/index.php" id="lienBtq"><img src="../img/panier-ckm-mobilemodulle.png" class="img-fluid"
            id="iconBtq"></i></a>
      </div>
    </header>
  </div>