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
            height: 50vh;
          }
          #num {
            position: absolute;
            left: 80%;
          }
          #nom {
            position: absolute;
            top: 2vh;
            left: 80%;
          }
          .navbar {
            background-color: rgba(255, 255, 255, 0.800) !important; text-align: center;
            top: 55%;
          } 
          #homeLogo {
            height:3vh;
            width:4vh;
            position: absolute;
            left: 38%;
            top: 0.8vh;
          }
          #logoHome {
            width: 40vh;
            height: 9.5vh;
            position: relative;
          }
          #dropdown01 {
            position: inherit;
          }
          .nav-item {
            padding-left: 15px;
          }
          @media screen and (max-width: 1271px) and (min-width: 1024px) 
          {
              #num {

              }
              #nom {

              }
          }
      
    </style>

</head>
<body>
    <header style="height: 50vh;">
    <span class="fixed-top"><span id="num"><i class="fas fa-phone-alt"></i>&nbsp; 0123456789 &nbsp;</span><span id="nom">&nbsp; CKM Boutique</span><i class="baseline-speaker_phone"></i></span>
    
    <div class="logo">
      <img src="img/LOGO/LOGOCKMPRODEF.png" alt="logo" id="logoHome">
      </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <a class="navbar-brand" href="#"><img src="img/LOGO/CKMHOMEBTN.png" alt="homeLogo" id="homeLogo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <div><i class="fas fa-bars"></i></div>
      </button>
    
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample01">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3D <span class="sr-only">(current)</span></a>
            <div id="dropdown01" class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item1" href="#">Action</a>
              <a class="dropdown-item1" href="#">Another</a>
              <a class="dropdown-item1" href="#">Something</a>
            </div>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="nav-item">
            <a class="nav-link" href="#" id="navNettoyage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nettoyage</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="nav-item">
            <a class="nav-link" href="#" id="dropdown03">Espaces Verts</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galerie</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="#">3D</a>
              <a class="dropdown-item" href="#">Nettoyage</a>
              <a class="dropdown-item" href="#">Espaces Verts</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>