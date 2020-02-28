
<?php defined('_JEXEC') or die;
if (($this->error->getCode()) == '404') {
    header("HTTP/1.0 404 Not Found");
    echo file_get_contents(JURI::root().'page-404');
    exit;}
  ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<head>
<title>Objet non trouvé!</title>
<link rev="made" href="mailto:postmaster@localhost">
<style type="text/css">
    body { color: #000000; background-color: #FFFFFF; }
    a:link { color: #0000CC; }
    p, address {margin-left: 3em;}
</style>
</head>
<body>
<h1 style="text-align:center"> RATS'S Alors!!! CKMpro introuvable </h1>
<p>
    <a href="img/404 ANIM-V2.mp4">Oups!! deratise toi</a>
</p>
<p>
  Revenez chez Nous 
</p>
<p><a href="http://localhost/CKMpro/">Revenez chez CKMpro</a></p>
</body>
</html>