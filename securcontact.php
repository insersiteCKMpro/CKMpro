<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
    //require_once("include/contact.js"); a tester pour le moment appeler a la ligne 1196 src="../include/contact.js

    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Enregistrer les erreurs dans un fichier de log
    ini_set('log_errors', 1);
    // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
    ini_set('error_log', dirname(__file__) . 'log_error_php.txt');
    // Afficher les erreurs et les avertissements
    error_reporting(E_ALL);
?>

<style>
    .container-fluid,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl {
        width: 100%;
        padding-right: 0;
        padding-left: 0;
        margin-right: auto;
        margin-left: auto;
    }

    .test {
        margin-bottom: 3vh;
        display: flex;
    }

    .contac1 {
        text-align: center !important;
        margin: 0 2vh;

    }

    .titrre {
        text-align: center;
        margin: 2vh;
    }

    .test2 {
        display: flex;
        width: 30%;
    }

    .titrec {
        width: 100%;

    }

    .num {
        margin: 0 7vh;
        width: 75%;
    }

    .traits1 {
        width: 0%;
        border-left: 1px solid black;
        margin-right: 2vh;
    }

    .traits2 {
        display: none;
    }

    .traitori {
        display: none;
    }

    .for {
        width: 45%;
    }

    .form-check {
        position: relative;
        display: block;
        padding-left: 0;
    }

    .labeL {
        width: 25%;
    }

    .categorie {
        display: initial;
        width: 75%;
        height: 15vh;
    }

    form {
        display: flex;
        flex-direction: column;

    }

    .put {
        width: 35.3%;
    }

    .put1 {
        width: 33%;
        height: 6vh;
        margin-top: 3vh;
    }

    .btn {
        margin: auto;
        width: 30%;
    }

    /* animation bouton */
    .hvr-bounce-to-right {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);

        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -moz-osx-font-smoothing: red;
        position: relative;
        -webkit-transition-property: color;
        transition-property: color;
        -webkit-transition-duration: 0s;
        transition-duration: 0s;

    }

    .hvr-bounce-to-right:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #00a651;
        /* regler couleur de l'animation */
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: 0 50%;
        transform-origin: 0 50%;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: 1.5s;
        transition-duration: 1.5s;
        /* regler vitesse animation */
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
        background-color: none;
    }

    .hvr-bounce-to-right:hover,
    .hvr-bounce-to-right:focus,
    .hvr-bounce-to-right:active {
        color: white;
        /* changer couleur du text dans l'animation */
        background: none;
        /* changer couleur background en dessous de l'animation */

    }

    .hvr-bounce-to-right:hover:before,
    .hvr-bounce-to-right:focus:before,
    .hvr-bounce-to-right:active:before {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
        -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        background-color: none;
    }

    div.input-group-prepend-text {
        display: flex;
    }

    /**********************************format pc responsive------------------------------------------- */
    @media screen and (min-width: 769px) and (max-width:2560px) {
        .test {
            display: flex;
        }

        .titrre {
            text-align: center;
            margin: 2vh;
        }

        .test2 {
            width: 27%;
            display: flex;
        }

        .titrec {
            width: 100%;
            margin: 2vh 0;
        }

        .num {
            margin: 3vh 5vh;
            width: 75%;
        }

        .traits1 {
            width: 0%;
            border-left: 1px solid black;
            margin-right: 2vh;
        }

        .traits2 {
            display: none;
        }

        .traitori {
            display: none;
        }

        .for {
            width: 45%;
            margin: 2vh 0;
        }

        .label {
            width: 25%;
        }

        .categorie {
            display: initial;
            width: 75%;
            height: 15vh;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-left: 12em;
        }

        .put {
            width: 35.3%;
        }

        .put1 {
            width: 33%;
            height: 6vh;
            margin-top: 3vh;
        }

        .btn {
            margin: auto;
            width: 30%;
        }

    }

    /*-----------------------------responsive tablette------------------------------------*/
    @media all and (min-width: 451px) and (max-width: 768px) {
        p {
            margin-top: 2vh;
            margin-bottom: 1rem;
        }

        .test {
            display: flex;
            flex-direction: column;
        }

        .titrre {
            text-align: center;
            margin-top: 2vh;
        }

        .test2 {
            width: 62%;
            display: flex;
            margin: 2vh auto;
        }

        .num {
            margin: auto;
            width: 75%;
        }

        .traits1 {
            display: none;
        }

        .traits2 {
            width: 100%;
            border-top: 1px solid #000;
            height: 0.5vh;
            align-items: center;
            display: flex;
        }

        .text-center {
            margin: 0;
        }

        .titrec {
            text-align: center;
        }

        .traitori {
            background-color: black;
            height: 2px;
        }

        .for {
            width: 45%;
            margin: 0 auto;
        }

        .espace {
            margin-top: 5px;
        }

        .radbox {
            height: 15vh;
            display: flex;
        }

        .label {
            width: 25%;
        }

        .categorie {
            display: initial;
            width: 75%;
            height: 15vh;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 93%;
        }

        .put {
            width: 33.3%;
            height: 2vh;
        }

        .put1 {
            width: 33%;
            height: 6vh;
            margin-top: 1vh;
        }

        .btn {
            margin-left: 5vh;
            width: 75%;
        }

    }

    /*-----------------------------responsive  mobile---------------------------------*/
    @media all and (max-width: 450px) {
        p {
            margin-top: 2vh;
            margin-bottom: 1rem;
        }

        .test {
            display: flex;
            flex-direction: column;
        }

        .text-center {
            text-align: center !important;
            margin-bottom: 2vh;
        }

        .test2 {
            width: 100%;
            display: flex;
        }

        .titrec {
            text-align: center;
        }

        .titrre {
            text-align: center;
            margin: 2vh;
        }

        .traits1 {
            display: none;
        }

        .traits2 {
            width: 85%;
            border-top: 1px solid #000;
            margin: auto;
            height: 0.5vh;
            display: flex;
            align-items: center;
        }

        .num {
            margin: auto;
            width: 75%;
        }

        .label {
            width: 100%;
            margin-bottom: 2vh;
        }

        .categorie {
            display: initial;
            width: 75%;
            height: 15vh;
        }

        .for {
            width: 90%;
            margin: 5vh auto;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-left: 1em;
            margin-right: 1em;
            width:80%;
        }

        .put {
            width: 33.3%;
            height: 2vh;
        }

        .put1 {
            width: 33.3%;
            height: 6vh;
        }

        .btn {
            width: 30%;
            margin: auto;
        }


    }

    @media (min-height: 801px) and (max-height: 820px) {
        .test {
            display: flex;
            flex-direction: column;
        }
    }

    @media (max-height: 425px) {
        p {
            margin: auto;
        }

        .put1 {
            width: 33%;
            height: 6vh;
            margin-top: 7vh;
        }

        .test {
            display: flex;
            flex-direction: column;
        }

        .text-center {
            text-align: center !important;
            margin-bottom: 2vh;
        }

        .test2 {
            width: 100%;
            display: flex;
        }

        .titrec {
            text-align: center;
        }

        .titrre {
            text-align: center;
            margin: 2vh;
        }

        .traits1 {
            display: none;
        }

        .traits2 {
            width: 85%;
            border-top: 1px solid #000;
            margin: auto;
            height: 0.5vh;
            display: flex;
            align-items: center;
        }

        .num {
            margin: 5vh auto;
            width: 75%;
        }

        .label {
            width: 25%;
        }

        .categorie {
            display: initial;
            width: 75%;
            height: 15vh;
        }

        .for {
            width: 90%;
            margin: 8vh auto;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .put {
            width: 33.3%;
            height: 2vh;
        }

        .put1 {
            width: 33.3%;
            height: 6vh;
        }

        .btn {
            width: 30%;
            margin: auto;
        }

    }

    @media (min-height: 600px) and (max-height: 800px) {
        p {
            margin-top: 2vh;
            margin-bottom: 1rem;
        }

        .test {
            display: flex;
            flex-direction: column;
        }

        .titrre {
            text-align: center;

            margin-top: 2vh;
        }

        .test2 {
            width: 62%;
            display: flex;
            margin: 2vh auto 0 auto;

        }

        .num {
            margin: 3vh auto;
            width: 75%;
        }

        .traits1 {
            display: none;
        }

        .traits2 {
            width: 100%;
            border-top: 1px solid #000;
            height: 0.5vh;
            align-items: center;
            display: flex;
        }

        .text-center {
            margin: 0;
        }

        .titrec {
            text-align: center;
        }

        .traitori {
            background-color: black;
            height: 2px;
        }

        .for {
            width: 75%;
            margin: 0 auto;
        }

        .espace {
            margin-top: 5px;
        }

        .label {
            width: 25%;
        }

        .categorie {
            display: initial;
            width: 75%;
            height: 15vh;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 90%;
        }

        .put {
            width: 33.3%;
            height: 2vh;
        }

        .put1 {
            width: 33%;
            height: 6vh;
            margin-top: 1vh;
        }

        .btn {
            margin: auto;
            width: 40%;
        }
    }
</style>

<?php 
require_once("include/init.php");
?>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="" />
    <script type="text/javascript" src="contact.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz
        0W1" crossorigin="anonymous"></script>
</head>

<?php

if($_POST) 
{

    // insertion bdd 
    if(!empty($_POST["send"])) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $telephone = $_POST["telephone"];
        $message = $_POST["message"];
        // $type_db_msg = "success";


        //Connexion a la Base de donnée
        $connexion = mysqli_connect("localhost", "root", "", "ckmpro") or die("Erreur de connexion: " . mysqli_error($connexion)); 

        $result = mysqli_query($connexion, "INSERT INTO contact (nom, prenom, email, telephone,  message) VALUES ('" . $nom. "', '" . $prenom. "','" . $email. "','" . $telephone. "','" . $message. "')");
    
        if($result)
        {
            $db_msg = "Vos informations de contact sont enregistrées avec succès.";
            $type_db_msg = "success";
        }else{
            $db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
            $type_db_msg = "error";
        }
    } 


  

    extract($_POST);

    // . EMPÊCHER LES FAILLES XSS
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
	$email = htmlspecialchars($_POST["email"]);
    $telephone = htmlspecialchars($_POST["telephone"]);
    $message = htmlspecialchars($_POST["message"]);
    // $email_msg = $_POST['send'];

    //  . TRAITEMENT DES ERREURS
    // Nom    "/^[A-Za-z0-9 .'-]+$/"; Prend les caractères alphanumériques + le point et le tiret 6
    if(empty($_POST['nom'])) 
    {
        $erreurNom =  "<p class='text-danger font-italic'>* Champs obligatoire </p>";
        $erreur = true;  
    }
    else
    {
        if(!preg_replace("#^[a-zA-Z]+$#", '', $_POST['nom']))
        {
            $erreurNomCaractere = "<p class='text-danger font-italic'>* Caractères non autorisés </p>" ;
            $erreur = true; 
        }
    }
    

    // Prenom
    if(empty($_POST['prenom'])) 
    {
        $erreurPrenom =  "<p class='text-danger font-italic'>* Champs obligatoire </p>";
        $erreur = true;  
    }
    else
    {
        if(!preg_replace("~^[-’' ]+|[- ]+$| +(?=['’-])| \K +|-\K(?: +|-+)|’\K’+|'\K'+~uS", '', $_POST['prenom']))
        {
            $erreurPrenomCaractere = "<p class='text-danger font-italic'>* Caractères non autorisés </p>" ;
            $erreur = true; 
        }
    }

    // Email
    if(empty($_POST['email']))
    {
        $erreurEmail =  "<p class='text-danger font-italic'>* Champs obligatoire </p>";
        $erreur = true;
    }
    else
    {
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $erreurEmailCaractere = "<p class='text-danger font-italic'>* Format email invalide </p>";
            $erreur = true;
        }
    }

    // Téléphone a tester preg_match('#(0|\+33)[1-9]( *[0-9]{2}){4}#'
    if(isset($_POST['telephone']))
    {
        if(!preg_match('#(0|\+33)[1-9]( *[0-9]{2}){4}#', $_POST['telephone']) || !is_numeric($_POST['telephone']) || iconv_strlen($_POST['telephone']) !== 10)
        {
            $erreurTelephone = '<p class="text-danger font-italic">* Le numero de téléphone n\'est pas correct </p>';
            $erreur = true;
        }
    }

    // // Message   ('#^0[0-9]{1}\d{8}+$#'
    // if(empty($_POST['message'])) 
    // {
    //     $erreurmessage =  "<p class='text-danger font-italic'>* Champs obligatoire </p>";
    //     $erreur = true;  
    // }
    // else
    // {
    //     if(!preg_match("~^[-’' ]+|[- ]+$| +(?=['’-])| \K +|-\K(?: +|-+)|’\K’+|'\K'+~uS", '', $_POST['message']))
    //     {
    //         $erreurMessageCaractere = "<p class='text-danger font-italic'>* Caractères non autorisés </p>" ;
    //         $erreur = true; 
    //     }
    // }

    // envoie d'un mail 
    if(!isset($erreur)) {

    // editer deux lignes pour : le mail de reception  et le sujet par defaut du mail 
    $email_to = "test-mail@insersite-prezweb.fr";
    $email_subject = "Demande d'informations CKMPRO";

    // message de validation d'envoie mail
    $valid = '<p class="bg-success text-white text-center mx-auto"> Merci de nous avoir contacté, nous reviendrons vers vous dans les plus brefs délais</p>' ;

    $nom = $_POST['nom']; // required
    $prenom = $_POST['prenom']; // required
    $email = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $message = $_POST['message']; // required
 
    $error_message = "";

    $email_message = "Détail.\n\n";
    $email_message .= "Nom: ".$nom."\n";
    $email_message .= "Prenom: ".$prenom."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Telephone: ".$telephone."\n";
    $email_message .= "Message: ".$message."\n";
 
    // creation de l'email administrateur
    $headers = 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);

    

 }
 if(isset($valid)) echo $valid;
} 
?>


<div class="container-fluid">
    <main class="test">
        <div class="test2">
            <div class="titrec">
                <h2 class="contac1 pt-2">Contact</h2>
                <div class="num">
                    <p>Numéro de téléphone: <br>
                        0123456789
                    </p>
                </div>
                <div class="traits2"></div>
            </div>
            <div class="traits1"></div>
        </div>

        <!--REQUEST_URI a essayer a la place'PHP_SELF'-->
        <form id="form" enctype="multipart/form-data" method="post" name="contact_form"
            action="<?php echo $_SERVER['REQUEST_URI']; ?>">

            <h2 class="text-center pt-4">Ecrivez-nous</h2>

            <div class="form">
                <label for="Nom">Nom*</label>
                <input type="text" id="nom" name="nom" placeholder="Nom" class="form-control"required>
                <?php if(isset($erreurNom)) echo $erreurNom; // Erreur nom ?>
                <?php if(isset($erreurNomCaractere)) echo $erreurNomCaractere; // Erreur nom Caractère ?> 
            </div>
            <div class="form">
                <label for="Prenom">Prénom*</label>
                <input type="text" id="prenom" name="prenom" placeholder="Prénom" class="form-control" required>
                <?php if(isset($erreurPrenom)) echo $erreurPrenom; // Erreur prenom ?>
                <?php if(isset($erreurPrenomCaractere)) echo $erreurPrenomCaractere; // Erreur prenom Caractère ?>
            </div>
            <div class="form">
                <label for="Email">Email*<span id="info" class="info"></span></label>
                <input type="text" id="email" name="email" placeholder="Email" class="form-control"required >
                <?php if(isset($erreurEmail)) echo $erreurEmail; // Erreur email ?>
                <?php if(isset($erreurEmailCaractere)) echo $erreurEmailCaractere; // Erreur email Caractère ?> 
            </div>
            <div class="form">
                <label for="Telephone">Téléphone<span id="info" class="info"></span></label>
                <input type="phone" id="telephone" name="telephone" placeholder="Téléphone" class="form-control"> 
                <?php if(isset($erreurTelephone)) echo $erreurTelephone; // Erreur téléphone ?>
            </div>

            <div class="form" style="padding-bottom: 1.5em;">
                <label for="Email">Votre message :<span id="info" class="info"></span></label>
                <textarea id="message" name="message" class="form-control" placeholder="Message..." row="5"></textarea>
            </div>

            <div class="input-group-prepend-text">
                <input type="checkbox" name="confidentialite" id="confidentialite"
                    style="margin-top: 0.4em; margin-right: 0.2em;" aria-label="Checkbox for following text input"
                    value="" required>
                <p>J'accepte les <a href="politiqueConfidentialite.php">Politiques de confidentialité</a>.</p>
            </div>

            <input type="submit" name="send" id="submit" value="Envoyer le message" />

            <div id="statusMessage">
                <?php if (! empty($db_msg)) { ?>
                <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
                <?php } ?>
                <?php if (! empty($mail_msg)) { ?>
                <p class='<?php echo $type_email_msg; ?>Message'><?php echo $email_msg; ?></p>
                <?php } ?>
            </div>

        </form>
    </main>
</div>


<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3">
    </div>
    <script>
        (function () {
            var setting = {
                "height": 512,
                "width": "100%",
                "zoom": 17,
                "queryString": "39 Rue Paul Doumer, 78130 Les Mureaux, France",
                "place_id": "ChIJfdZqCpKS5kcRFerEh13H6cg",
                "satellite": false,
                "centerCoord": [48.9955122682653, 1.9106021499999848],
                "cid": "0xc8e9c75d87c4ea15",
                "lang": "fr",
                "cityUrl": "/france/versailles-903",
                "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                "embed_id": "156020"
            };
            var d = document;
            var s = d.createElement('script');
            s.src = 'https://1map.com/js/script-for-user.js?embed_id=156020';
            s.async = true;
            s.onload = function (e) {
                window.OneMap.initMap(setting)
            };
            var to = d.getElementsByTagName('script')[0];
            to.parentNode.insertBefore(s, to);
        })();
    </script><a href="https://1map.com/fr/map-embed?embed_id=156020">1 Map</a>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</body>

<?php 
require_once("include/footer.php");
?>