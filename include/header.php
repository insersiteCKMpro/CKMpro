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
.container-fluid
 {
   padding: 0 !important;
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
  .boutonTel 
  {
    display: none;
  }
  /* ----------RESPONSIVE- ecran pc header-------------------------------------------FORMAT PC-------------------------------------------------------- */
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
/*
.logo {
  margin-top: 2.5em;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 20vh;
 */

    /* LOGO TITRE STYLE */
    .logoTitre 
    {
      /*height: 17vh;*/
      width: 40%;
    }
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
