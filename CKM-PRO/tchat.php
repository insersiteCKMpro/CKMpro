<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> Avis </title>
</head>
<body>
    <div class="container">
        <h2 class="display-4 text-center text-info">Vos avis </h2><hr>
    
        <form method="POST" action="" class="col-md-4 offset-md-4 -text-center">
        <div class="form-group">
            <label for="pseudo">pseudo</label>
            <input class="form-control" type="text" id="pseudo" name="pseudo" 
            placeholder="Entre ton pseudo"> 
        </div>

        <div class="form-group">
            <label for="message">message</label>
            <textarea class="form-control" rows ="9" type="text" id="message" name="message"
            placeholder=" tape ton mesaage"></textarea>
        </div>
        <button type="submit" class="COL-12 btn btn-success">connexion</button>
        </form>

    </div>
    