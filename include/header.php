<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
      crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>CKMpro</title>
    
    <style>
      /* ------------------------Css source-header------------------------------------- */
      @import url('https://fonts.googleapis.com/css?family=Red+Hat+Display&display=swap');

      .fixed-top 
      {
        display: flex;
        justify-content: flex-end;
        font-size: 1.2em;
        float: right !important;
        background-color: white;
        font-family: 'Red Hat Display',serif;
  
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
        height: 10vh;
        margin-top: 4vh;
        width: 20vw;
      }

      .boutonTel {
        display: none;
      }

      .boutonBtq {
        display: none;
      }

      /* ------------------------RESPONSIVE-header-ecran pc--------------------------------- */
      @media screen and (min-width: 769px) and (max-width: 2560px) {
        /* ENTÊTE FIXE STYLE */
        .fixed-top {
          float: right !important;
          font-size: 1.2em;
          font-family: 'Red Hat Display',serif;
        }

        /* ICONE TEL ENTÊTE FIXE STYLE */
        #fas 
        {
          display: none;
        }

        /* LOGO TITRE STYLE */
        .logoTitre {
          height: 12vh;
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
          font-family: 'Red Hat Display',serif;
        }

        /* ICONE TEL ENTÊTE FIXE STYLE */
        #fas
        {
          display: none;
        }

        /* LOGO STYLE */
        .logoTitre {
          height: 10vh;
          width: 45%;
          display: flex;
          margin: auto;
        }
        .logo
        {
          height: 14vh;
        }
      }
      /* ------------------------RESPONSIVE-header-mobile--------------------------------- */      
      @media screen and (max-width: 450px) {
        /* ENTÊTE FIXE STYLE */
        .fixed-top {
          float: right !important;
          font-size: 1.2em;
          font-family: 'Red Hat Display',serif;
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
          height: 9vh;
          width: 90%;
          margin: 0 auto;
          display: flex;
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

        /* Bouton boutique  */
        .boutonBtq {
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
          top: 41vh;
        }

        #lienTel 
        {
          color: black;
          text-decoration: none;
          background-color: transparent;
        }
        #lienBtq
        {
          color: black;
          text-decoration: none;
          background-color: transparent;
        }

        #iconTel 
        {
          font-size: 2em;
          display: block;
        }
        #iconBtq 
        {
          font-size: 2em;
          display: block;
        }
      }
      /* ----------------------------------------------------------*/
      @media (min-width: 576px) {
        .textMenu 
        {
          display: none;
          font-family: 'Red Hat Display',serif;
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
          <a href="index.php"><img src="include/img/LOGOCKMPRODEF.png" alt="logo" class="logoTitre"></a></div>
        <div class="boutonTel"><a href="tel:+33123456789" id="lienTel"><i class="fas fa-phone-alt" id="iconTel"></i></a>
        
        <div class="boutonbtq"><a href="../boutique/index.php" id="lienBtq"><i class="fasss fa-phone-alt" id="iconBtq"></i></a>
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