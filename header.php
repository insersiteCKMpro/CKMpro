<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <title>Header</title>

    <style>
    /*  */
          /* class de la div qui contient l'image logo titre */
          .logo {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 25vh;
          }
          /* image logo titre */
          .logo #logoHome {
            width: 25%;
          }
          /* class de la div qui contient le num et le nom */
          .fixed-top {
            display: flex;
            justify-content: flex-end;
            margin-right: 2vh;
          }
          /* class de la div qui contient l'image logo titre  */
          .lienImageLogoHome {
            padding-bottom: 10px;
          }
          /* li qui contient le lien et l'image logo Home  */
          #homeLogo {
            width: 50%;
            height: 50%;
            margin: 0 20px;
          }
          .fixed-top 
          {
            display: flex;
            justify-content: flex-end;
            margin-right: 2vh;
            font-size: 1.2em;
          }
          .navbar
          {
            display:block;
          }
          .navbar-expand-lg .navbar-nav {
            justify-content:center;
          }
          /* bouton menu burger */
          .navbar-toggler {
            border: 0;
          }
          /* li qui contient les liens (3D, Nettoyage, Espaces Verts, Galeries */
          .nav-item1 {
            padding-left: 30px;
          }
          /* liste nav qui contient tout mes li */
          .navbar-nav {
            align-items: center;
            display:flex;
            flex-direction:row;

          }
          .rounded 
          {
            border-radius: .25rem!important;
          }
          /* Séparation entre les liens (Menu burger déroulant)  */
          .trait1, .trait2, .trait3, .trait4, .trait5 {
            width: 40%;
            height: 1px;
            background-color: black;
            padding-left: 30px;
          }
          /* Séparation entre le header et le main */
          .trait6 {
            width: 100%;
            height: 1px;
            background-color: black;
          }
          .dropdown-item
          {
            font-size:1.8em;
          }
          .navbar-light .navbar-nav .nav-link 
          {
            color:black;
          }
          /* lien du déroulant */
          .dropdown-item1 {
            color: black;
            text-decoration: none;
            background-color: transparent;
          }

          /* hover style '3D' */
          #dropdown1:hover {
            background-color: #fef200;
            border-radius: 5px;
            /* opacity: 0.2; */
          }
          /* hover style 'Netrtoyage' */
          #navNettoyage:hover {
            background-color: RGB(37, 170, 226);
            border-radius: 5px;
          }
          /* hover style 'Espaces Verts' */
          #dropdown03:hover {
            background-color: #00a652;
            border-radius: 5px;
          }

          /* hover style lien 3D */
          .dropdown-item01:hover {
            background-color: #fef200 !important;
            border-radius: 5px !important;
            opacity: 0.5 !important;
          }
          /* hover style lien 3D */
          .dropdown-item02:hover {
            background-color: RGB(37, 170, 226) !important;
            border-radius: 5px !important;
            opacity: 0.5 !important;
          }
          /* hover style lien 3D */
          .dropdown-item03:hover {
            background-color: #00a652 !important;
            border-radius: 5px !important;
            opacity: 0.5 !important;
          }
          .dropdownDiv01 {
            display: grid;
          }
          .navbar
          {
            display: none;
          }
          .navbar-expand-lg .navbar-nav 
          {
            justify-content: center;
            font-size: 4vh;
          }

          /* FORMAT MOBILE MAXIMUM */
          @media screen and (max-width: 450px) {
            /* On cache l'icone telephone */
            .fas {
              display: none;
            }
            /* class de la div qui contient le num et le nom */
            .fixed-top {
              justify-content: space-between !important;
              display: flex !important;
              width: 100% !important;
            }
            /* image logo titre */
            .logo #logoHome {
              width: 90%;
            }
            /* numéro */
            #num {
              width: 50%;
              padding-left: 4vh;
            }
            /* nom d'entreprise */
            #nom {
              width: 35%;
            }
            /* icone téléphone */
            #fas {
              display: none;
            }
            /* li qui contient les liens (3D, Nettoyage, Espaces Verts, Galeries */
            .nav-item1 {
              padding-left: 0;
            }
            .navbar
            {
              display:flex;
              flex-direction:column;
            }
            .navbar-nav
            {
              display:flex;
              flex-direction:column;
              justify-content:center;
            }
            .ordi
            {
              display:none;
            }
            .burger
            {
              background:url(CKMpro/img/burger.png) no-repeat;
              background-size:cover;
              width:20%;
            }
            .ml-auto, .mx-auto 
            {
              margin-left: auto!important;
              display: flex;
              flex-direction: column;
              align-items: center;
            }
            [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) 
            {
              cursor: pointer;
              display: flex;
              justify-content: center;
            }
            #homeLogo
            {
              margin:30px 20px 0;
            }
                      }

          /* FORMAT LAPTOP [MIN FORMAT TABLETTE | MAX FORMAT 4K] */
          @media screen and (min-width: 769px) and (max-width: 2560px) {
            /* On cache l'icone telephone */
            #fass {
              display: none;
            }
            /* On cache le text 'Menu' sur le bouton */
            .textMenu {
              display: none;
            }
            /* On cache les traits */
            .trait {
              display: none;
            }
            /* style du déroulant de la nav */
            .dropdown-menu{
              justify-content: center;
              border: 0;
              background-color: transparent;
            }
            /* On cache les traits */
            .navbar-toggle {
              display: none;
            }
            .logo #logoHome 
            {
              width: 40%;
            }
          }
          /* FORMAT TABLETTE [MIN FORMAT MOBILE | MAX FORMAT TABLETTE] */
          @media screen and (min-width: 451px) and (max-width: 1160px) {
            /* class de la div qui contient le num et le nom */
            .fixed-top {
              width: 50% !important;
              float: right !important;
              padding-left: 10vh !important;
              position: inherit !important;
              display: block !important;
            }
            /* icone téléphone */
            #fas {
              display: none;
            }
            /* On cache le text 'Menu' sur le bouton */
            .textMenu {
              display: none;
            }
            /* On cache les traits */
            .trait {
              display: none;
            }  
            .navbar-nav 
            {

              display: flex;
              padding-left: 0;
              margin-bottom: 0;
              list-style: none;
              flex-direction: row;
            }
            .justify-content-md-center 
            {
              justify-content: center!important;
              display: flex !important;
            }
            [type=button], [type=reset], [type=submit], button 
            {
              -webkit-appearance: button;
              display: none;
            }
            #homeLogo
            {
              margin-right:30px;
            }
            .navbar-expand-lg .navbar-nav 
            {
              justify-content: center;
              font-size: 3vh;
            }
            .logo #logoHome {
    width: 60%;
}
          }

            /* --------------GERER LE POINT DE RUPTURE DU MENU BURGER------------------
            @media screen and (max-width: 768px) {
              .navbar {
                float: none;
              }
              .navbar-toggle {
                display: block;
              }
              .navbar-collapse {
                border-top: 1px solid transparent;
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
              }
              .navbar-collapse.collapse {
                display: none !important;
              }
              .navbar-nav {
                float: none !important;
                margin: 7.5px -15px;
              }
              .navbar-nav>li>a {
                padding-top: 10px;
                padding-bottom: 10px;
              }
              .navbar-text{
                float: none;
                margin: 15px 0;
              }
              .navbar-collapse.collapse.in {
                display: block !important;
              }
              .collapsing {
                overflow: hidden !important;
              }
            } */
    </style>

</head>
<body>
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
        <img src="img/LOGOCKMPRODEF.png" alt="logo" id="logoHome">
      </div>



      <div class="ordi navbar-expand-lg navbar-light rounded mobil">
        <div class="mx-auto">
          <p class="textMenu"><strong>Menu</strong></p>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01"  aria-label="Toggle navigation">
            <div><i class="fas fa-bars"></i></div>
          </button>
        </div>
        <div class="collapse navbar-collapse justify-content-md-center">
          <ul class="navbar-nav">
            <li class="nav-item1 lienImageLogoHome">
              <a class="navbar-brand1" href="#"><img src="img/CKMHOMEBTN.png" alt="homeLogo" id="homeLogo"></a>
            </li>
            <div class="trait trait1"></div>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3D</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdownDiv01">
                <a class="dropdown-item dropdown-item01" href="#">Dératisation</a>
                <a class="dropdown-item dropdown-item02" href="#">Désinfectionn</a>
                <a class="dropdown-item dropdown-item03" href="#">Désinsectisation</a>
              </div>
            </li>
            <div class="trait trait2"></div>
            <li class="nav-item1 active">
              <a class="nav-link" href="#" id="navNettoyage" data-toggle="dropdown">Nettoyage</a>
            </li>
            <div class="trait trait3"></div>
            <li class="nav-item1 active">
              <a class="nav-link" href="#" id="dropdown03">Espaces Verts</a>
            </li>
            <div class="trait trait4"></div>
            <li class="nav-item1 active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeries</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04" id="dropdownDiv02">
                <a class="dropdown-item dropdown-item01" href="#">3D</a>
                <a class="dropdown-item dropdown-item02" href="#">Nettoyage</a>
                <a class="dropdown-item dropdown-item03" href="#">Espaces Verts</a>
              </div>
            </li>
            <div class="trait trait5"></div>
          </ul>
        </div>
      </div>

      
    
      <nav class="navbar navbar-expand-lg navbar-light rounded">

        <div class="mx-auto">
          <p class="textMenu"><strong>Menu</strong></p>
          <a class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01"  aria-label="Toggle navigation">
            <div><i class="fas fa-bars"></i></div><img src="img/burger.png" class="burger" alt="">
          </a>
        </div>
    
        <div class="" id="navbarsExample01">
          <ul class="navbar-nav">
            <li class="nav-item1 lienImageLogoHome">
              <a class="navbar-brand1" href="#"><img src="img/CKMHOMEBTN.png" alt="homeLogo" id="homeLogo"></a>
            </li>
            <div class="trait trait1"></div>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3D</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdownDiv01">
                <a class="dropdown-item dropdown-item01" href="#">Dératisation</a>
                <a class="dropdown-item dropdown-item02" href="#">Désinfectionn</a>
                <a class="dropdown-item dropdown-item03" href="#">Désinsectisation</a>
              </div>
            </li>

            <div class="trait trait2"></div>

            <li class="nav-item1 active">
              <a class="nav-link" href="#" id="navNettoyage" data-toggle="dropdown">Nettoyage</a>
            </li>
            <div class="trait trait3"></div>

            <li class="nav-item1 active">
              <a class="nav-link" href="#" id="dropdown03">Espaces Verts</a>
            </li>
            <div class="trait trait4"></div>



            <li class="nav-item1 active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeries</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04" id="dropdownDiv02">
                <a class="dropdown-item dropdown-item01" href="#">3D</a>
                <a class="dropdown-item dropdown-item02" href="#">Nettoyage</a>
                <a class="dropdown-item dropdown-item03" href="#">Espaces Verts</a>
              </div>
            </li>
            <div class="trait trait5"></div>

          </ul>
        </div>

    </nav>

    <div class="trait6"></div>
  
  </header>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>