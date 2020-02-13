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
          .logo {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 25vh;
          }
          .logo #logoHome {
            width: 25%;
          }
          .fixed-top {
            display: flex;
            justify-content: flex-end;
            margin-right: 2vh;
          }
          .lienImageLogoHome {
            padding-bottom: 15px;
          }
          #homeLogo {
            width: 30px;
            height: 22px;
          }
          .navbar-toggler {
            border: 0;
          }
          .nav-item1 {
            padding-left: 30px;
          }
          .navbar-nav {
            align-items: center;
          }
          .trait1, .trait2, .trait3, .trait4, .trait5 {
            width: 40%;
            height: 1px;
            background-color: black;
            padding-left: 30px;
          }
          .trait6 {
            width: 100%;
            height: 1px;
            background-color: black;
          }
          .dropdown-item1 {
            color: black;
            text-decoration: none;
            background-color: transparent;
          }
          #colorY:hover {
            background-color: yellow;
            opacity: 0.2;
          }
          #navbarsExample01 .navbar-nav #linav3D .dropdown01:hover {
            background-color: yellow !important;
            border-radius: 5px !important;
            opacity: 0.5 !important;
          }
          @media screen and (max-width: 450px) {
            .fas {
              display: none;
            }
          }
          @media screen and (min-width: 769px) and (max-width: 2560px) {
            #fass {
              display: none;
            }
            .textMenu {
              display: none;
            }
            .trait {
              display: none;
            }
            .show {
              display: grid;
              justify-content: center;
              border: 0;
              background-color: transparent;
            }
          }
          @media screen and (min-width: 450px) and (max-width: 768px) {
            .fixed-top {
              width: 50% !important;
              float: right !important;
              padding-left: 10vh !important;
              position: inherit !important;
              display: block !important;
            }
            #fas {
              display: none;
            }
            .textMenu {
              display: none;
            }
            .trait {
              display: none;
            }
            
          }
          @media screen and (max-width: 450px) {
            .fixed-top {
              justify-content: space-between !important;
              display: flex !important;
              width: 100% !important;
            }
            .logo #logoHome {
              width: 90%;
            }
            #num {
              width: 50%;
              padding-left: 4vh;
            }
            #nom {
              width: 35%;
            }
            #fas {
              display: none;
            }
            .nav-item1 {
              padding-left: 0;
            }
          }

            /* --------------COLLAPSE------------------ */
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
            }


      
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
      <img src="img/LOGO/LOGOCKMPRODEF.png" alt="logo" id="logoHome">
      </div>
    
    <nav class="navbar navbar-expand-lg navbar-light rounded">

      <div class="mx-auto">
        <p class="textMenu"><strong>Menu</strong></p>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
          <div><i class="fas fa-bars"></i></div>
        </button>
      </div>
    
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample01">
        <ul class="navbar-nav">
          <li class="nav-item1 lienImageLogoHome">
            <a class="navbar-brand1" href="#"><img src="img/LOGO/CKMHOMEBTN.png" alt="homeLogo" id="homeLogo"></a>
          </li>
          <div class="trait trait1"></div>

          <li class="nav-item1 active dropdown" id="linav3D">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3D <span class="sr-only">(current)</span></a>
            <div id="dropdown01" class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item1" href="#">Action</a>
              <a class="dropdown-item1" href="#">Another</a>
              <a class="dropdown-item1" href="#">Something</a>
            </div>
          </li>
          <div class="trait trait2"></div>

          <li class="nav-item1 active">
            <a class="nav-link" href="#" id="navNettoyage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nettoyage</a>
          </li>
          <div class="trait trait3"></div>

          <li class="nav-item1 active">
            <a class="nav-link" href="#" id="dropdown03">Espaces Verts</a>
          </li>
          <div class="trait trait4"></div>

          <li class="nav-item1 active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeries</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item1" href="#">3D</a>
              <a class="dropdown-item1" href="#">Nettoyage</a>
              <a class="dropdown-item1" href="#">Espaces Verts</a>
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