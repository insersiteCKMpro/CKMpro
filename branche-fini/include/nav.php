<style>
  /*-----------------------------------------------css source nav------------------- */
  header,
  nav,
  section {
    display: contents;
  }

  nav {
    border-bottom: 1px solid black;
    font-family: 'Red Hat Display', serif;
    font-weight: 650;
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
  #tailleLi 
  {
    min-height: 5vh;
    width: 7%;
  }

  #tailleA 
  {
    width: 100%;
  }

  .logoHome {
    width: 100%;
    position: relative;
    top: -0.9vh;
  }

  .navMarg {
    margin-left: 4vh;
  }

  .bg-transparent {
      background-color: transparent!important;
      display: block;
  }

  /* DROPDOWN MENU */
  .dropdown-menu {
    left: 2vh !important;
    border: none !important;
    background-color: #ffffffb8 !important;
  }

  /*-------------------------------------------responsive nav ecran pc--------------------*/
  @media screen and (min-width: 769px) and (max-width: 2560px) {

    /* HOVER LIENS */
    .colorJ:hover {
      background-color: #fef200;
      border-radius: 5px;
    }

    .colorB:hover {
      background-color: RGB(37, 170, 226);
      border-radius: 5px;
    }

    .colorV:hover {
      background-color: #00a652;
      border-radius: 5px;
    }

    /* HOVER LIENS DROPDOWN */
    .dropdown-item01:hover {
      background-color: #fef200 !important;
      border-radius: 5px !important;
      opacity: 0.5 !important;
    }

    /* hover style lien 3D */
    .dropdown-item02:hover {
      background-color: #fef200 !important;
      border-radius: 5px !important;
      opacity: 0.5 !important;
    }

    /* hover style lien Nettoyage */
    .dropdown-item03:hover {
      background-color: #25aae2 !important;
      border-radius: 5px !important;
      opacity: 0.5 !important;
    }

    /* hover style lien Espace Verts */
    .dropdown-item04:hover {
      background-color: #00a652 !important;
      border-radius: 5px !important;
      opacity: 0.5 !important;
    }

  }

  /*----------------------responsive tablette nav---------------------------------------*/
  @media screen and (min-width: 451px) and (max-width: 768px) {

    .logo {
      min-height: 18vh;
    }
    /* logo navbar */
    .logoHome {
      width: 6vw;
      position: relative;
      top: 0vh;
    }
    #tailleA 
    {
      width: 100%;
      margin-top: -1vh;
    }

    /* LOGO HOME STYLE */
    .navMarg {
      margin-left: 2vh;
    }

    /* DROPDOWN STYLE */
    .dropdown-menu {
      left: 15px !important;
    }
  }

  /*--------------------------------------responsive mobile nav--------------------*/
  @media screen and (max-width: 450px) {

    /* MENU BURGER */
    .textMenu {
      margin-bottom: 0;
      text-align: center;
    }

    .fa-bars {
      color: black;
    }

    #tailleLi 
    {
      width: 12%;
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
      font-family: 'Red Hat Display', serif;
    }

    hr {
      width: 10vh;
      margin: 0;
      min-height: 1vh;
    }
  }
  .burg {
    margin: 0 auto;
    width: 30%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

  @media (min-width: 576px) {
    .textMenu {
      display: none;
    }

    .navbar-expand-sm .navbar-nav .nav-link {
      padding-right: 0rem;
      padding-left: .5rem;
    }
  }
</style>

<body>

  <div class="container-fluid">

    <nav class="navbar navbar-expand-sm navbar-dark bg-transparent">
      <div class="burg">
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
          <li class="nav-item" id="tailleLi">
            <a class="nav-link" id="tailleA" href="index.php"><img src="include/img/CKMHOMEFOOTER.png" alt="Logo Home"
                class="logoHome"></a>
          </li>
          <hr class="mx-auto bg-dark text-center">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle navMarg colorJ" href="#" id="dropdown03" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">3D</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdownDiv01">
              <a class="dropdown-item dropdown-item01" href="3D.php">Dératisation</a>
              <a class="dropdown-item dropdown-item01" href="3D.php#desinfection">Désinfection</a>
              <a class="dropdown-item dropdown-item01" href="3D.php#desinsectisation">Désinsectisation</a>
            </div>
          </li>
          <hr class="mx-auto bg-dark text-center">
          <li class="nav-item">
            <a class="nav-link navMarg colorB" href="nettoyage.php">Nettoyage</a>
          </li>
          <hr class="mx-auto bg-dark text-center">
          <li class="nav-item">
            <a class="nav-link navMarg colorV" href="espacevert.php" tabindex="-1" aria-disabled="true">Espaces
              Verts</a>
          </li>
          <hr class="mx-auto bg-dark text-center">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle navMarg" href="#" id="dropdown03" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Galeries</a>
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a class="dropdown-item dropdown-item02" href="galerie3D.php">3D</a>
              <a class="dropdown-item dropdown-item03" href="galerienettoyage.php">Nettoyage</a>
              <a class="dropdown-item dropdown-item04" href="galerieespacevert.php">Espaces Verts</a>
            </div>
          </li>
          <hr class="mx-auto bg-dark text-center">
          <li class="nav-item">
            <a class="nav-link navMarg" href="contact.php">Contact</a>
          </li>
          <hr class="mx-auto bg-dark text-center">
        </ul>
      </div>
    </nav>
  </div>