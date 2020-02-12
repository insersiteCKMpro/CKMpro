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
        #num {
            
        }
        #nom {

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
    
    <span class="logo">
      <img src="img/LOGO/LOGOCKMPRODEF.png" alt="logo" id="logoHome">
    </span>
    <br><br><br><br>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" style="background-color: rgba(255, 255, 255, 0.800) !important; text-align: center;">
        <a class="navbar-brand" href="#"><img style="height: 5vh; width: 5vh;" src="img/LOGO/CKMHOMEBTN.png" alt="homeLogo" id="homeLogo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <div><i class="fas fa-bars"></i></div>
      </button>
    
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample01">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3D <span class="sr-only">(current)</span></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another</a>
              <a class="dropdown-item" href="#">Something</a>
            </div>
          </li>&nbsp;&nbsp;
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nettoyage</a>
            <div class="dropdown-menu" aria-labelledby="dropdown02">
              <a class="dropdown-item" href="#">Débarras</a>
            </div>
          </li>&nbsp;&nbsp;
          <li class="nav-item">
            <a class="nav-link" href="#" id="dropdown03">Espaces Verts</a>
          </li>&nbsp;&nbsp;
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

</body>
</html>