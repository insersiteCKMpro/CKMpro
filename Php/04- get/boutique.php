<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>04- GET boutique </title>
    <style>

    </style>
</head>
<body>
    <div class="container">
        <h1 class="display-4 text-center" >04- Bienvenue dans notre boutique</h1><br/>

        <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                 <img src="img/biere.jpg" alt="">
                    <div class="card-body">
                                <p class="card-text">une biere pour les bonhommes</p>
                            <div class="d-flex justify-content-center align-items-center">
                                 <div class="btn-group">
                                    <a href="fiche_produit.php?id=1&article=biere&couleur=ambrée&prix=15" 
                                    class="btn btn-sm btn-outline-secondary">Détails du produit</a>
                                 </div>    
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                 <img src="img/lachti.jpg" alt="">
                    <div class="card-body">
                                <p class="card-text">une biere pour les chti's</p>
                            <div class="d-flex justify-content-center align-items-center">
                                 <div class="btn-group">
                                 <a href="fiche_produit.php?id=2&article=biere&couleur=blonde&prix=5" 
                                    class="btn btn-sm btn-outline-secondary">Détails du produit</a>
                                 </div>    
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                 <img src="img/lacorse.jpg" alt="">
                    <div class="card-body">
                                <p class="card-text">une bierre pour les Corses</p>
                            <div class="d-flex justify-content-center align-items-center">
                                 <div class="btn-group">
                                 <a href="fiche_produit.php?id=3&article=biere&couleur=corsé&prix=25" 
                                    class="btn btn-sm btn-outline-secondary">Détails du produit</a>
                                    <!-- <a href='page_destination?indice=valeur&indive=valeur&indice=valeur"><a/>
                                    la superglobale $_Get permet de receptionner les paramétres affichés dans array-->
                                 </div>    
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>