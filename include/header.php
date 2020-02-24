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
</head>


<style>
  /* ENTÊTE FIXE STYLE--------------------------------------------code source css-----------------------------------------------------------------------*/
 .container-fluid
 {
   padding: 0 !important;
 }

 nav{
   border-bottom: 1px solid black;
 }

  .fixed-top {
    display: flex;
    justify-content: flex-end;
    margin-right: 2vh;
    font-size: 1.2em;
    background-color: white;
  }

  .logo {
    /*margin-top: 2.5em;*/
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 25vh;
  }

  /* LOGO TITRE STYLE */
  .logoTitre {
    height: 13vh;
    width: 20vw!important; 
  }

  /* NAVBAR STYLE */
  .bg-dark {
    background-color: white !important;
  }

  .navbar-dark .navbar-toggler {
    color: black;
    border-color: transparent;
  }

  .navbar-dark .navbar-nav .active>.nav-link,
  .navbar-dark .navbar-nav .nav-link.active,
  .navbar-dark .navbar-nav .nav-link.show,
  .navbar-dark .navbar-nav .show>.nav-link {
    color: black;
  }

  .navbar-dark .navbar-nav .nav-link {
    color: black !important;
    font-size: x-large;
  }

  /* LOGO HOME STYLE */
  #tailleLi {
    height: 5vh;
    width: 7%;
  }

  #tailleA {
    width: 100%;
  }

  .logoHome {
    width: 100%;
    position: relative;
    top: -0.9vh;
  }

  .navMarg {
    margin-left: 10vh;
  }

  /* DROPDOWN MENU */
  .dropdown-menu {
    left: 8vh !important;
    border: none !important;
    background-color: #ffffffb8 !important;
  }
  .boutonTel 
  {
    display: none;
  }

  /* ----------RESPONSIVE--------------------------------------------FORMAT PC-------------------------------------------------------- */

  @media screen and (min-width: 769px) and (max-width: 2560px) {

    /* ENTÊTE FIXE STYLE */
    .fixed-top {
      /*display: flex;
      justify-content: flex-end;
      margin-right: 2vh;*/
      font-size: 1.5em;
    }
    #fass /* ICONE TEL ENTÊTE FIXE STYLE */
    {             
    display: none;
    }

    /*.logo {
      margin-top: 2.5em;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 20vh;
    }*/

    /* LOGO TITRE STYLE */
    .logoTitre 
    {
      /*height: 17vh;*/
      width: 40%;
    }
      /* HOVER LIENS */
    .colorJ:hover
    {
      background-color: #fef200;
      border-radius: 5px;
    }
    .colorB:hover
    {
      background-color: RGB(37, 170, 226);
      border-radius: 5px;
    }
    .colorV:hover
    {
      background-color: #00a652;
      border-radius: 5px;
    }

    /* HOVER LIENS DROPDOWN */
    .dropdown-item01:hover 
    {
      background-color: #fef200 !important;
      border-radius: 5px !important;
      opacity: 0.5 !important;
    }

    /* hover style lien 3D */
    .dropdown-item02:hover 
    {
      background-color: #fef200 !important;
      border-radius: 5px !important;
      opacity: 0.5 !important;
    }

    /* hover style lien Nettoyage */
    .dropdown-item03:hover 
    {
      background-color: #25aae2 !important;
      border-radius: 5px !important;
      opacity: 0.5 !important;
    }

    /* hover style lien Espace Verts */
    .dropdown-item04:hover 
    {
      background-color: #00a652 !important;
      border-radius: 5px !important;
      opacity: 0.5 !important;
    }

    /* NAVBAR STYLE 
    .bg-dark {
      background-color: white !important;
    }

    .navbar-dark .navbar-toggler {
      color: black;
      border-color: transparent;
    }

    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .show>.nav-link {
      color: black;
    }

    .navbar-dark .navbar-nav .nav-link {
      color: black !important;
      font-size: x-large;
    }

    /* LOGO HOME STYLE 
    #tailleLi {
      height: 5vh;
      width: 7%;
    }

    #tailleA {
      width: 100%;
    }

    .logoHome {
      width: 100%;
      position: relative;
      top: -0.9vh;
    }

    .navMarg {
      margin-left: 10vh;
    }

    /* DROPDOWN MENU
    .dropdown-menu {
      left: 8vh;
      border: none;
    }*/

  }


  /* ---------RESPONSIVE------------------------------------------------FORMAT TABLETTE----------------------------------------------------- */

  @media screen and (min-width: 451px) and (max-width: 768px) {

    /* ENTÊTE FIXE STYLE */
    .fixed-top 
      {
        width: 50% !important;
        float: right !important;
        padding-left: 27vh !important;
        position: inherit !important;
        font-size:1.2em;
        display: block;
      }
      /* ICONE TEL ENTÊTE FIXE STYLE */
      #fas 
      {
        display: none;
      }
    /* LOGO STYLE */
    .logoTitre {
      /*height: 14vh;*/
      width: 60%;
    }

    /* logo navbar 
    .logoHome {
      width: 7vw;
      position: relative;
      top: -0.9vh;
    }
    */

    /* LOGO HOME STYLE */
    .navMarg {
      margin-left: 4vh;
    }

    /* DROPDOWN STYLE */
    .dropdown-menu {
      left: 15px !important;
    }

    /*
    b,
    strong {
      font-weight: bolder;
      display: none;
    }
    */
  }

  /* -------RESPONSIVE-------------------------------------------------FORMAT MOBILE------------------------------------------------------ */

  @media screen and (max-width: 450px) {

    /* ENTÊTE FIXE STYLE */
    .fixed-top {
      /*justify-content: space-between !important;*/
      width: 100% !important;
    }

    /* ICONE TEL ENTÊTE FIXE STYLE */
    #fas {
      display: none;
    }

    /* NUMERO */

    #num {
     /* width: 50%;*/
     /* padding-left: 4vh;*/
     display:none;
    }

    /* NOM */

    /*#nom {
      width: 35%;
    }
    */
    /* LOGO STYLE */

    .logoTitre {
      /*height: 11vh;*/
      width: 90%;
    }

    /* MENU BURGER */
    .textMenu {
      margin-bottom: 0;
    }

    .fa-bars
    {
      color: black;
    }
    
    /*
    .logoHome {
      width: 10vw;
      position: relative;
    }
    */
    #tailleLi {
      width: 10%;
    }

    .nav-item {
      margin-left: auto;
      margin-right: auto;
    }

    .nav-link {
      margin: 0;
    }

    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .show>.nav-link {
      text-align: center;
    }

    .navbar-nav .dropdown-menu {
      text-align: center;
    }

    /*
    .navbar-dark .navbar-toggler {
      color: black !important;
    }
    */
    hr
    {
      width: 10vh;
      margin: 0;
      height: 1vh;
    }
    /* Bouton téléphone  */
    .boutonTel {
      width: 8vh;
      height: 8vh;
      background-color: lightgrey;
      border: 1px solid black;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      position: fixed;
      z-index: 1;
      right: 5px;
      top: 21vh;
    }
    #lienTel {
      color: black;
      text-decoration: none;
      background-color: transparent;
    }
    #iconTel {
      font-size: 2em;
      display: block;
    }
  }

  /* ---------------------------------------------------------- */

  @media (min-width: 576px) {
    .textMenu {
      display: none;
    }
  }
</style>

<body>
  <div class="container-fluid">
    <header>
      <div class="fixed-top">
        <div id="num">
          <i class="fas fa-phone-alt" id="fass"></i> &nbsp; 0123456789 <i class="fas fa-phone-alt" id="fas"></i> &nbsp;
        </div>
        <div id="nom">
          &nbsp; CKM Boutique
        </div>
        <i class="baseline-speaker_phone"></i>
      </div>
      <div class="logo">
        <img src="include/img/LOGOCKMPRODEF.png" alt="logo" class="logoTitre">
      </div>


      <nav class="navbar navbar-expand-sm navbar-dark bg-transparent">
        <div class="mx-auto">
          <p class="textMenu">
            <strong>Menu</strong>
          </p>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
            aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
        </div>
        <div class="traitDeSeparattion2"></div>
        <div class="collapse navbar-collapse" id="navbarsExample03">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item li1" id="tailleLi">
              <a class="nav-link" id="tailleA" href="#"><img src="include/img/CKMHOMEFOOTER.png" alt="Logo Home"
                  class="logoHome"></a>
            </li>
            <hr class="mx-auto bg-dark text-center">
            <li class="nav-item dropdown li2">
              <a class="nav-link dropdown-toggle navMarg colorJ" href="#" id="dropdown03" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">3D</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdownDiv01">
                <a class="dropdown-item dropdown-item01" href="#">Dératisation</a>
                <a class="dropdown-item dropdown-item01" href="#">Désinfection</a>
                <a class="dropdown-item dropdown-item01" href="#">Désinsectisation</a>
              </div>
            </li>
            <hr class="mx-auto bg-dark text-center">
            <li class="nav-item li3">
              <a class="nav-link navMarg colorB" href="#">Nettoyage</a>
            </li>
            <hr class="mx-auto bg-dark text-center">
            <li class="nav-item li4">
              <a class="nav-link navMarg colorV" href="#" tabindex="-1" aria-disabled="true">Espaces Verts</a>
            </li>
            <hr class="mx-auto bg-dark text-center">
            <li class="nav-item dropdown li5">
              <a class="nav-link dropdown-toggle navMarg" href="#" id="dropdown03" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Galeries</a>
              <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item dropdown-item02" href="#">3D</a>
                <a class="dropdown-item dropdown-item03" href="#">Nettoyage</a>
                <a class="dropdown-item dropdown-item04" href="#">Espaces Verts</a>
              </div>
            </li>
            <hr class="mx-auto bg-dark text-center">
          </ul>
        </div>
      </nav>
      <div class="boutonTel">
        <a href="tel:+33123456789" id="lienTel"><i class="fas fa-phone-alt" id="iconTel"></i></a>
      </div>
    </header>
  </div>



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>