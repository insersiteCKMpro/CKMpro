<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>01 - entrainement PHP</title>
</head>
<body>
    <div class="container">
        <h2 class="display-4 text-center text-info">Ecriture et affichage</h2><hr>
        <!-- nous pouvons écrire du HTML dans un fichier ayant l'extension PHP, l'inverse n'est pas possible -->

        <?php // ouverture de la balise PHP

        echo 'Bonjour'; // echo est une instruction d'affichage que l'on peut traduire par 'affiche moi' 
        echo '<br>'; // Nous pouvons également y associé du HTML
        echo 'Bonjour'; 

        echo '<hr><h2 class="display-4 text-center text-info"> Commentaires PHP</h2><hr>';
        ?> <!-- fermeture de la balise PHP -->

        <strong>Bonjour</strong><!-- il est également possible de fermer et de ré-ouvrir php pour mélanger du code HTML & PHP -->

        <?= "Vivement l'apéro!!!!" ?><!-- raccourci, le = remplace le echo -->

    <?php 
        echo 'texte'; // commentaire sur une seule ligne
        echo 'texte'; /* 
        commentaire sur 
        plusieurs lignes
        */
        echo 'Texte'; # commentaire sur une seule ligne
        print 'texte'; // print est une autre instruction d'affichage, pas de réelle défférence entre print & echo 
        // Chaque instruction en PHP se termine toujours par un point virgule ';' c'est le délimiteur 
        // Vous n'etes pas obligé de fermer PHP avec '? > et vous pouvez plusieurs fois fermer / ouvrir des passages PHP

        echo '<hr><h2 class="display-4 text-center text-info"> Variables : TYPES / AFFECTATIONS EN PHP</h2><hr>';

        // Une variable est une espace nommé permettant de conserver une valeur 
        // Déclaration d'une variable toujours avec le signe '$'
        // $2a --> /!\ erreur | $a2 ---> ok !! 
        // caractéres autoirisés : A-Z | _ | pas d'accent | 

        $a = 127;

        // gettype()est une fonction prédéfinie permettant de voir le type d'une variable (prochain chapitre) 
                           
        echo gettype ($a); // un entier : type integer
        echo '<br>';

        $b = 1.5;
        echo gettype ($b); // un nombre à virgule : type DOUBLE
        echo '<br>';

        $c = 'une chaine de caractéres';
        echo gettype($c); // une chaine de caracteree  : type String
        echo '<br>';

        $d = '127';
        echo gettype($d); // une chaine de caractere (c'est un entier entre guillemets )  : type String
        echo '<br/>';

        $e = true; // ou  FALSE 
        echo gettype($e); // TYPE BOLEAN
        echo '<br/>';

        // Types de vrariables : integer / double / string / bolean 

        echo '<hr><h2 class="display-4 text-center text-info"> Concatenations </h2><hr>';

        $x = " bonjour";
        $y = " tout le monde";
        echo $x . $y . '<br>'; // point de concatenation que l'on peut traduire par 'suivie de'
        echo " $x  $y <br> " ; // meme chose mais sans concatenation,  entre guilleùmets les variables sont évaluées
        echo ' $x $y <br>' ; // entre simple cote '' les variables ne sont  pas evoluées, c'est une chaines de caractéres

        echo 'Hey ! '. $x . $y . '<br>'; // concaténation texte et variable 
        echo 'Hey ! ', $x , $y , '<br>'; // concaténation  avec virgule (la virgule et le point de concatenation sont similaires)
        echo 'aujourd\'hui' ; // ici nous avons une apostrophe dans la chaine de caractéres,  pour eviter les erreurs, on utilise un caractére d'echappement, la anti slash '\' pour preciser que le caractéres est une apostrophe


        echo '<hr><h2 class="display-4 text-center text-info"> Concatenations lors de l\'affectations  </h2><hr>';

        $prénom1 = "Malik";
        $prénom1 = "cedric";
        echo $prénom1. '<br>'; // affiche "cedric", est une variable comme son nom l'indiaque peu tvarier donc cela remplace "Malik" PAR  "CEDRIC"

        //----------------------------------------------------------------------------------------------------------------------------------
        $prenom2  = "alix";
        $prenom2 .= "Eric";
        echo $prenom2 . '<br>'; // affiche "alix Eric",  cela ajoute sans remplacer la valeur précédente grace à l'operateur '.='

        echo '<hr><h2 class="display-4 text-center text-info"> Constante et constante magique </h2><hr>';
        // Une constante tout comme une variable permeet de conserver une valeur mais comme son nom l'indique elle est CONSTANTES ! c'est a dire que l'on ne pourra pas cha,nger sa valeur durant l"execution du script

        define("CAPITALE" , "PARIS");
        // define ("NOM_DE_LA _CONSTANTE" , "VALEUR_DE_LA _CONSTANTE");
        // Une constante, par convention se declare toujours en majuscule 
        echo CAPITALE . '<br>'; // affichage du contenu de la constante

        // define("CAPITALE" , "ROME");/!\ ERREUR!  il n'est pas possible de re-declarer une constante déjà definit

        // Constante magiques
        echo __FILE__ . '<br>'; // chemin complet vers le fichier 'entrainement.php'

        echo __LINE__ . '<br>'; // affiche le numéro de la ligne ou la con=sta,nte magique est e=xecutés 

        // echo _FUNCTION_ . <br> ; // affiche nle nom de la fonctio,n da,ns laquelle nous sommes 
        // _class_ | _METHOD_ 

        echo '<hr><h2 class="display-4 text-center text-info"> Exercices variables </h2><hr>';

        /* EXO : afficher vert-jaune-rouge (avec les tirets) en placant chaque couleur dans une variable et 
        mettez chaque mot avec la bonne couleur */ 
        //<div class="alert alert-success" role="alert">v
        //<div class="alert alert-warning" role="alert">j
        //<div class="alert alert-danger" role="alert">r

       
        echo '<hr><span class="text-success"> vert </span> - <span class="text-warning"> jaune </span> - <span class="text-danger"> rouge </span></hr>';
        /*
        $v = '<span class="text-sucess">vert</span>';
        $j = '<span class="text-sucess">Jaune</span>';
        $r = '<span class="text-sucess">rouge</span>';
        echo $v . '-' . $j . '-' . $r . '<br>' ;
        */

        echo '<hr><h2 class="display-4 text-center text-info"> Opérateur arithmétiques  </h2><hr>';
        $a = 10; $b = 5;
        echo $a + $b . '<br>'; // 15
        echo $a - $b . '<br>'; // 5
        echo $a * $b . '<br>'; // 50
        echo $a / $b . '<br>'; // 2 
        echo $a % $b . '<br>'; // modulo affiche 0

        // operation / affectation 
        $a = 10; $b = 5;
        $a += $b; // equivaut à $a = $a + $b 
        echo  $a . '<br>'; // affiche 15

        $a -= $b; // equivaut à $a = $a - $b 
        echo $a . '<br>'; // affiche 10 

        // $a *= $b;
        // $a /= $b;
        // contexte :  pratique pour faire des calculs sur un panier 


        echo '<hr><h2 class="display-4 text-center text-info"> Structures conditionnels (if / else) - Opérateurs de comparaisons </h2><hr>';
        // site de reference php : https://www.php.net
        /*
        =       affectattion
        ==      comparaison de la valeur
        ===     comparaison de la valeur et du type
        <       strictement  superieur 
        >       strictement  inferieur 
        <=      inferieur ou egal à
        >=      superieur ou egal à 
        !       n'est pas 
        !=      différent de
        && AND  ET 
        || OR   OU
        XOR     ou  exclusif 
        */

        // Isset & empty
        $var1 = 0;
        $var2 = "";

        if(empty($var1))
        {
            echo '0, vide ou non definit<br>';
        }

        if(empty($var2)) // si var2 est bien defini
        {
            echo '0, vide ou non definit<br>';
        }
        // EMPTY test si la variable contient,l a valeur de 0, si elle est vide ou si elle est non definit.
        // Contexte :  empty permettra de tester par exemple, si un champs d'un formulaire est laissé vide.

        // ISSET() : permet de tester l'existance d'une variable et si elle est différenrte de NULL
        if(isset($var2))
        {
            echo "var2 exixte mais est definie par rien <br>";
        }

        // IF / ELSE / ELSEIF 
        $a = 10; $b = 5; $c = 2;
        if($a > $b) // si la condition IF renvoir TRUE, alors le code entre les accolades sera executé
        {
            echo "A est bien supérieur à B<br>";
        }
        else /* sinon dans tout les autres cas, si la condition IF n'est pas vérifiée renvoi FALSE,
        on tombe dans la condition ELSE qui est le cas par  défaut, et le code entre les accolades s'excute */
        {
                echo "Non c'est B  qui est supérieur à A<br>"; // instruction si la condition IF renvoie FALSE 
        }

        $a = 10; $b = 5; $c = 2;
        if($a == 10)
        {
            echo "A est bien egale à 10 <br>";
        }
        elseif($b > $c)
        {
            echo " B est bien supérieur à C<br>";
        }
        else
        {
            echo "Tout le monde a faux !! <br>";
        }
        /* si une des conditions superieurs est verifiés, donc elle renvoie TRUE. 
        Toutes les conditions suivantes ne seront pas evaluées à cause de la condition ELSEIF meme si cette condition renvoie TRUE 
        // ELSEIF permet d'ajouter des conditions complémentaires, et  on peux en ajouter autant que l'on souhaite */

        // --Condition exclusive XOR
        $a = 10; $b = 5; $c = 2;
        if($a == 10 XOR $b == 6)
        {
            echo 'ok condition exclusive<br>'; 
        }
        // XOR : pour entrer dans les accolades de la condition, il faut que seulement u ne des deux conditions soient valide
        // si les deux conditions sont bonnes ou mauvaise, on rentre pas dans les accolades.

        //--------------------------------------------------------------------------------------------------------------------
        // Forme contractée : 2ème possibilité d'écriture du IF (condition ternaire)
        echo ($a == 10)  ?  "A est égal à 10 <br>"  :  "A n'est pas égal à 10 <br>" ;
        // Le ? remplave le IF, lres deux ppoints ':' remplace le ELSE


        // --- Comparaison
        
        $varA = 1;
        $varB = "1";

        if($varA == $varB)
        {
            echo "il s'agit de la meme chose<br>";
        }
        // avec la présence du triple ===, le test ne fonctionne pas, car les types sont differernts, INTEGER n'est pas égal à STRING.
        /*
        =       affectattion
        ==      comparaison de la valeur
        ===     comparaison de la valeur et du type= affectattion
        */

        echo '<hr><h2 class="display-4 text-center text-info"> Conditions SWITCH </h2><hr>';

        $perso = "Mario";
        switch($perso)
        {
            case 'Toad' : 
                echo "Vous avez choisi $perso<br>";
            break;
            case 'Luigi':
                echo "Vous avez choisi $perso<br>";
            break;
            case 'bowser':
                echo "Vous avez choisi $perso<br>";
            break;
            default:
                echo "Vous etes fou c'est Mario le meilleur<br>";        
        } // Les 'case'  representent les cas dans lequels nous pouvons potentiellement tomber.
          // 'break' stop l'execution de la condition 'switch' si nous tombons dans un des cas.
          
          // EXO / Pouvez vous faire la méme chose que la condition switch mais avec les conditions IF / ELSEIF / ELSE ? si oui, faites le.
            $perso = "Mario";
           if($perso == 'Toad' ||  $perso == 'Luigi'  || $perso == 'Bowser') // jamais de point virgule ';' au niveau de la condition 'IF'
                echo "Vous avez choisi $perso <br>";
            else 
                echo " vous etes fou c'est Mario  le meilleur <br>";    
            //-------------------------------------------------------    
            
            
            if($perso =="Toad")    // jamais de point virgule ';' au niveau de la condition 'IF'
                echo "vous avez choisi $perso <br>";
            elseif($perso =="Luigi")
                echo "vous avez choisi $perso <br>";
            elseif($perso =="Bowser")
                echo "vous avez choisi $perso <br>";
            else  
                echo "vous etes fou c'est  $perso Le meilleur!!<br>";
            
                echo '<hr><h2 class="display-4 text-center text-info"> Fonction prédéfinies  </h2><hr>';
            /* une fonction prédéfinies permet de realiser un traitement specifique,
            elles sont accessibmles de partout dans le code PHP, uil,y une liste assez consequentes*/ 

            echo 'Date : <strong class="text-info"> ' . date("d/m/y") . '</strong><br>';
            // une fonction prédéfinie s'appel toujours avec des parentheses puisqu'elle peut  potentiellemnet recevoir des arguments 
            /* lorsque l'on execute une fonction prédefinie, il faut tjrs se poser la question de savoir ce qu'on doit lui envoyer comme arguments
            et surtout savoir ce qu'elle retourne, donc il est interessant de consulter la documentation (php.net) */

            echo'<hr><h2 class="display-4 text-center text-info">Fonction prédéfinies : traitements des chaines(iconv_strlen, substr)</h2><hr>';

            // strpos() : string position
            $email1 = "sebastien.l7516@gmail.com";
            echo "Position du caractéres '@' dans la chaine : " . strpos ($email1, '@') . '</strong><br>';
            // Indique dans ce cas la position '15' du caractére '@' dans la chaine (et non pas 16 puisque cela commence à 0)
            // contexte : pratique pour controler la validité d'un champs 'email' d'un formulaire

            $email2 = 'Bonjour';
            echo "Position du caractéres '@' dans la chaine : <strong class='text-info'>"; var_dump(strpos ($email2, '@')) . '</strong><br>';
            // strops ($email2, '@') : cette ligne ne sort rien, pourtant il y a bien quelque chose a l'intérieur :  FALSE !
            // Grace au var_dump() on apercoit le FALSE si  le caractére "@" n'est pas trouvé. var_dump() est donc une instruction
            /* d'affichage améliorée que l'on utilise réguliérement en phase de développement. 
            Il en exiqste une autre print_r(), moins détaillé que var_dump()*/

        //-- iconv_strlen()
        $phrase = ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, quam.';
        echo "taille de la chaine de caractére : <strong class= 'text-info'>" . 
        iconv_strlen($phrase) . '</strong><br>';
        /*
        Arguments : 
        1. Nous devons lui fournir la chaine dans laquelle nous souhaitons connaitre la taille.
        Contexte : nous pourrons l'utiliser pouir savoir si le pseudo et le MDP lors d'une inscription ont des tailles conforme 
        */


        //-- substr() 
        $texte = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti nam officia beatae rerum, iure, molestias 
        dignissimos quia distinctio cupiditate, sit nostrum sapiente accusamus facere eveniet? Illo, numquam, ullam provident 
        non amet consectetur enim odio mollitia incidunt quo repellat cupiditate velit laborum? Distinctio expedita placeat quae 
        dolores deserunt impedit suscipit adipisci? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, sunt! 
        Autem fuga, tempora iste veniam numquam commodi et id accusamus maxime perferendis perspiciatis magnam molestias! Necessitatibus
         reprehenderit praesentium quia ipsa a odit. Esse quod consequuntur enim, dignissimos illo nemo? 
        Quaerat dolorum assumenda quasi totam, voluptas illum ad vero maiores cupiditate!";


        echo substr($texte, 0, 20) . " ...<a href= '' class= 'alert-link text-dark'>Lire la suite</a><br>";

        /*
        Arguments :  
        1. la chaine a couper
        2. La position du début 
        3. le nombre de caractére souhaité 
        C ontexte :  souvent utilisé pour afficher une accroche d'un article, il y a le début de l'article puis... lire la suite
        */

        echo '<hr><h2 class="display-4 text-center text-info"> Fonction utilisateurs </h2><hr>';
        // les fonctions qui ne sont pas predéfinies dans la langage sont declaré puis executé par  l'utilisateur.
        // on declare une fonction tjrs avec le mot  clef 'function'' suivi du  nom de la function que nous definisson. 
        // une fonction posséde tjrs des parenthéses puisqu'elle peut potentiellement recevoir des arguments.

        function separation() // déclaration nd'une fonction prévu pour ne pas recevoir d'arguments
        {
                echo "<hr><hr><hr>";
        }
        separation(); // execution de la fonction

        // fonction des arguments
                        // Seb
        function bonjour($qui)
        {                                                 //Seb
                return "Bonjour  <strong class='text-info'> $qui </strong><br>";
        }
        echo bonjour('Seb'); // execution de la fonction avec envoi d'arguments
        /* return dans la fonction retourne le resultat de la fonction et ne géhére pas d'affichage, 
        c'est pour cela que nous sommes obligé de passer par un 'echo' au moment de l'execution de la fonction
        */

        $prenom = 'ANTHONY';
        echo bonjour($prenom); // l'argument peut-etre une variable     

        //------------------------------------------------------------------------------------------------
        function appliqueTva($nombre)
        {
                return $nombre * 1.2 ;
        }
        echo "500€ avec une tva de 20% : <strong class='text-info'>" . appliqueTva(500) . '€</strong><br>';

        // 2 fonctions ne peuvent pas posseder le meme nom

        /* EXO : Pourriez-vous ameliorer cette fonction afin que l'on puisse calculer un 
        nombre avec les taux de notre choix (19.6%, 5.5%, 7% ect...)*/
        
        // function appliqueTva($nombre)
                            //500    , 20
        function appliqueTva2($nombre, $taux = 20) // $taux = 20 taux par defaut de 20% qui sera écrasé par les taux different que l'on peut rajouter  
        {
                return $nombre*(1+$taux/100);
                // (1+$taux/100) ---> permet de calculer le coefficient d'un taux de tva 
        }
        echo "500€ avec une tva de 19.6% : <strong class='text-info'>" . appliqueTva2(500,19.6) . '€</strong><br>';
        echo "1000€ avec une tva de 20% : <strong class='text-info'>" . appliqueTva2(1000) . '€</strong><br>';
        echo "700€ avec une tva de 5.5% : <strong class='text-info'>" . appliqueTva2(700,5.5) . '€</strong><br>';

        //---------------------------------------------------------------------------------------------------------
        //echo meteo ('automne', 12); // il est possible d'excuter une fonction avant de l'avoir déclarée
        /*function meteo($saison, $temperature)
        {
            return "Nous sommes <strong class='text-info'> $saison</strong> et 
            il fait <strong class='text-info'> $temperature degre(s)<hr></strong> ";
        }
        */
        //-----------------------------------------------------------------------------------------------------------------
        // Exo : gerer le (s) de degres en fonction de la tempérarture et l'article qui se trouve devant la saison (en, au)

                            // hiver    1
        function exoMeteo($saison, $temperature)
        {
            if($saison == 'printemps')
                $art = 'au';
            else 
                $art = 'en';
            //-----------------------------------------------------------------------------------------------------    
            if($temperature > 1 || $temperature < -1)
                $s = 's';
            else 
                $s = '';
            
            //------------------------------------------------------------------------------------------------------

            
        }

        echo exoMeteo('printemps' , 1);
        echo exoMeteo('hiver' , 1);
        echo exoMeteo('hiver' , 0);
        echo exoMeteo('été' , 25);
        echo exoMeteo('hiver' , -25);

        echo '<hr><h2 class="display-4 text-center text-info"> Portée des variables : espace local / espace global </h2><hr>';

        // Espace LOCAL vers l'espace GLOBAL

        function jourSemaine()
        {
            $jour = "Mercredi"; // variable locale declarée dans une fonction (dans l'espace local)
            return $jour; // on retourne ce qui resulte de la fonction (a ce moment là on quitte la fonction)
            echo 'ALLO!!!'; // /!\ cette ligne ne sortira pas car il y a un return avant 
        }
        echo $jour; /*  /!\ ne fonctionne pas car cette variable n'est connu qu'a l'intérieur de la fonction,
         ce sont donc deux variables complétement différentes*/ 

         echo jourSemaine() . '<hr>';
         $recup = jourSemaine(); // on récupère
         echo $recup . '<hr>'; // on affiche 
         

         //----------------------------------------------------------------------------------------------------------------
         // Espace GLOBAL vers espace local 

             $pays = 'France';  // variable déclarée dans l'esapce global (espace par defaut)
            function affichagePays()
            {
                global $pays;   /* le mot clé 'global' permet d'importer une variable déclarée dans l'espace global 
                                    (à l'exterieur d'une fonction) l'espace local (dans une fonction)*/
                return $pays;
            }
            echo affichagePays().'<hr>'; // execution de la fonction
            /*
            Espace Local (dans une fonction) : il n'est pas pôssible d'exporter 
            une variable déclaréeee dans l'esapce local (dans une fonction) vers l'espace global (hors d'une fonction, espace  par defaut de PHP)
            
            Esapace Global (a l'intérieur d'une fonction, espace par defaut) : pour importer 
            une vvariable déclarée dans l'espace global vers l'esapce local (dans une fonction) nous devons utiliser le mot clé 'global'
            */

            //------------------------------------------------------------------------------------------------------------------------------------
            // PHP7 
            function identite(string $nom, int $age) 
            {
                    return "<strong class='text-info'>$nom</strong> a <strong class='text-info'> $age </strong> ans";
            }
            echo identite('SEBOOS', 34) . '<hr>';
            //echo identite(34, 'SEBOOS');  // /!\  ERROR : les types attendus ne sont pas les bons 

            echo '<hr><h2 class="display-4 text-center text-info"> Structure iterative : boucles </h2><hr>';

            // Boucle WHILE 
              
            $i = 0; // valeur de départ 
               
            while($i < 3)
            {       
                echo "$i---";
                $i++; // incrémentation equivaut à : $i = $1 + 1 | l'incrementation du "compteur" est effectuée est effectuée à chaque tour de boucle
            }

            //0---1---2---
            // Exo : Faites en sorte de ne pas avoir les tirets a la fin
            $j = 0;
            while($j < 3)
            {  
                if($j == 2) // on entre une seule fois dans le IF lorsque $j vaut 2
                    echo $j;
                else  // on entre 2 fois lorsque $j vaut 0 puis 1
                   echo "$j---";
                //------------------------------
                $j++; // incrementation / sens      
            }
            
            echo '<hr>';
            // ----------- BOUCLE FOR---------------------------------------

            for($i = 0; $i < 16; $i++) // initialisation / condition d'entrée / incrémentation - sens
            {
                    echo "$i<hr>";
                    // echo $i . '<br>' ;
            }

            echo '<hr><h2 class="display-4 text-center text-info"> Exercices boucles </h2><hr>';  
        ?>

        <hr> <!-- selecteur en html -->
            <div class="form-group col-md-2 offset-md-5">
                <select class="form-control" id="">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>
        <hr> 
        <?php
            // EXO : afficher 30 options dans un selecteur HTML via une boucle PHP            
            echo '<div class="form-group col-md-2 offset-md-5">';
                    echo '<select class="form-control" id="">';
                    for($i =0; $i <= 30; $i++)
                    {
                       echo "<option>$i</option>";
                    }
                    echo '</select>';
                    echo '</div><hr>';   
        ?> 
        <!-- 
            on minimise le code PHP
            Il existe plusieurs écriture de boucle ou de condition : 
            for(): -> endfor;
            if(): -> else: -> elseif(): -> endif;
            while(): -> endwile;
            les deux point ':' remplace l'accolade ouvrante et "endfor,  endwhile, endif ect..." remplace l'accolade fermante
        -->

        <div class="form-group col-md-2 offset-md-5">
            <select class="form-control" id="">
                <?php for ($i = 0; $i <= 30; $i++): ?>
                    <option><?= $i ?></option>
                <?php endfor; ?>
            </select>  
        </div>

        <?php
        // EXO : Faite une boucle qui  affiche de 0 à 9 sur la mémme ligne (soit 10 tours) dans un tableau HTML
        /*
                    -----------------------------------------
                    | 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 |
                    -----------------------------------------
        */            
        ?>
        <div class= "col-md-6 offset-md-3"> 
            <table class= "table table-bordered text-center"> <!-- declaration du  tableau-->
                <tr><!-- une ligne du tableau-->
                    <?php for($i = 0; $i < 10; $i++): ?>
                        <td><?= $i ?></td> <!-- une cellule du tableau  [?= raccourci php et echo]--> 
                    <?php endfor; ?>   
                </tr>
            </table>
        </div><hr>

        <?php
        echo '<div class= "col-md-6 offset-md-3">';
        echo '<table class= "table table-bordered text-center"><tr>';
        for($i = 0; $i < 10; $i++)
        {
            echo "<td>$i</td>";
        }
        echo '</tr></table>';
        echo '</div><hr>';
        ?>

        <?php
        // Exo : Faites la méme chose en allant de 0 à 99 sur plusieurs lignes sans faire 10 boucles 
        /*
                    ---------------------------------------------------
                    | 0  | 1  | 2  | 3  | 4  | 5  | 6  | 7  | 8  | 9  |
                    ---------------------------------------------------
                    | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 17 | 18 | 19 |
                    ---------------------------------------------------
                    | 20 | 21 | 22 | 23 | 24 | 25 | 26 | 27 | 28 | 29 |
                    ---------------------------------------------------
                    | -- | -- | -- | -- | -- | -- | -- | -- | -- | -- |       
                    ---------------------------------------------------
                    | 90 | 91 | 92 | 93 | 94 | 95 | 96 | 97 | 98 | 99 |
                    ---------------------------------------------------
        */    
        ?>
        <?php
        $compteur = 0;
        echo '<div class="col-md-6 offset-md-3">';
        echo '<table class="table table-bordered text-center">';
        for($ligne = 0; $ligne < 10; $ligne++)
        {
            echo '<tr>';
            for($cellule = 0 ; $cellule < 10; $cellule++)
            {
                echo "<td>$compteur</td>";
                $compteur++;
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '</div><hr>';
        ?>
    
        <?php $compteur = 0; ?>
        <div class= "col-md-6 offset-md-3"> 
            <table class= "table table-bordered text-center">
            <?php for($lignei = 0; $ligne < 10; $lignei++): ?>
                    <tr>
                    <?php for($cellule = 0; $cellule < 10; $cellule++): ?>   
                        <td><?= $compteur++ ?></td>
                    <?php endfor; ?>  
                    </tr>
         <?php endfor; ?>
         </table>
        </div>

        <?php
         echo '<hr><h2 class="display-4 text-center text-info"> Tableau de données ARRAY  </h2><hr>';  
        // Un tableau de données Array est déclaré un peut comme une variable amélioré, car on ne conserve pas qu'une valeur mais un ensemble de valeur
        $liste = array('Alix', 'Malik', 'Eric', 'Eliza', 'Isabelle', 'Anémone');
        echo $liste; // /!\ ERROR ! il n'est pas possible d'afficher le contenu d'un tableau de données ARRAY avec un simple 'echo'

        print_r($liste); // print_r() est une instruction d'affichage amélioré que l'on utilise souvent en phase de développement,  ce n'est pas un affichage conventionnel, c'est un outil de débugage, l'internaute n'est pas censé le voir a l'affichage
        
        echo '<pre>'; print_r($liste); echo '</pre>'; //<pre> est une balize HTML permettant de formateer le texte, cela  nous permet de mettre en forme la sorti du print_r()

        // $liste est un tableau  de données ARRAY associatifs, c'est a dire qu'il y aura toujours un indice associé a une valeur, 
        // il y a deux colonnes, une colonne pour les indices et une colonnne pour les valeurs 


        echo '<pre>' ; var_dump($liste) ; echo '</pre>';// var_dump() est une autre instruction d'affichage améluioré mais avec plus d'informations que le print_r() (nombre d'éléments dans le tableau, type de donné de chaque valeur, taille de chaines de  caractéres  ect ....)
        // Contexte : B ien souvent, lorsque l'on récupera des informations de la BDD, nous les retrouverons sous forme d'ARRAY

        echo '<hr><h2 class="display-4 text-center text-info"> Boucle FOREACH pour les tableaux de données ARRAY   </h2><hr>';
        // La bocle FOREACH  est moyen simple de passer en revue un tableau de données ARRAY . FOREACH fonctionne uniquement sur les tableaux et les objets.
        
        $perso  = ["Mario","Toad","Luigi","Bowser","Yoshi","Peach"];
        // 2éme possibilité d'écriture d'un tableau ARRAY avec les crochets[]
       
        echo '<pre>'; print_r($perso); echo '</pre><hr>';


        // EXO : tenter d'extraire "Bowser" en passant par le tableau  ARRAY sans faire un "echo Bowser"

        echo $perso[3]; // voila l'affichage conventionnel, pour extraire une valeur d'un tableau ARRAY avec l'indice correspondant.


        // Boucle FOREACH-------------------------------------------------------------------------------
         echo '<div class="col-md-6 offset-md-4 alert alert-success text-center">';
         foreach($perso as $value)
         {
                echo $value . '<hr>'; // on affiche successivement les données du tableau ARRAY
         }
         echo '</div>';
         // arguments boucle FOREACH :
         // 1er : tableau ARRAY à parcourir
         // 2eme : variable qui  va receptionné une valeur du Tableau ARRAY par tour de boucle.
         // une fois que la boucle FOREACH a passé en revue le tableau ARRAY, elle s'arrete.
         // Le mot 'as' fait parti du langage et est obligatire  
         // indice =>  $value
         //------------------
         /*     [0] => Mario
                [1] => Toad
                [2] => Luigi
                [3] => Bowser
                [4] => Yoshi
                [5] => Peach
         */

        // Exo : Enlever le dernier <hr> du tableau 
        echo '<div class= "col-md-6 offset-md-4 alert alert-primary text-center">';
        foreach($perso as $value)
        {
            if($value == 'Peach') 
                echo $value;
            else     
                echo $value . '<hr>';
        }
        echo '</div><hr>';

        echo '<div class= "col-md-6 offset-md-4 alert alert-secondary text-center">';
        foreach($perso as $value)
        {
            if($value == end($perso)) 
                echo $value;
            else     
                echo $value . '<hr>';
        }
        echo '</div><hr>';

        // boucle FOREACH avec indice+ valeur. Affichage 
        echo '<div class= "col-md-6 offset-md-4 alert alert-danger text-center">';
        foreach($perso as $key => $value)
        {
                echo "$key : $value<hr>";
        }
        echo '</div><hr>';
        // Quand il y a deux variables, la 1ere ($key) parcours la colonne des indices et ($value) parcours la colonne des valeurs
        /*

        $key    $value 
        ---------------
        [0] =>  Mario
        [1] =>  Toad
        [2] =>  Luigi
        [3] =>  Bowser
        [4] =>  Yoshi
        [5] =>  Peach

        */
        $couleur = array ("j" => "jaune", "r" => "rouge" , "b"=> "bleu", "v" => "vert"); // nous pouvons definir nos propre indices
        echo '<pre>' ; print_r($couleur); echo '</pre>';

        echo 'taille du tableau :  <strong class="text-info">' . count($couleur). '</stron><hr>';
        echo 'taille du tableau :  <strong class="text-info">' . sizeof($couleur). '</stron><hr>';
        // count() et sizeof() sont des fonctions prédéfinie permettant d'afficher le nombre d'éléments contenu dans le tableau ARRAY. Pas de différence entre count() et sizeof()

        echo "Rassemblement des éléments du tableau en chaine de caractéres avec un séparateur : <strong class='text-info'>".implode(" - ",$couleur)."</strong><hr>"; // l'inverse de : explode()

        //$liste = "rouge/vert/orange/violet";

        echo '<hr><h2 class="display-4 col-md-6 text-center text-info"> tableaux  ARRAY multidimensionnel   </h2><hr>';
        
        // nous pparlons de tableau ARRAY mukltidimensionnel qd un tableau est contenu dans u autre tableau

        $tab_multi = array(
            0 => array("prenom" => "sebastien" , "nom" =>"safourcade", "age" => 35),
            1 => array("prenom" => "karen " , "nom" =>"marquand", "age" => 25)
        );
        echo '<pre>'; print_r($tab_multi); echo '</pre>';

        // EXO : Tenter de sortir 'Karen' en passant par le tableau multi representé $tabl_multi sans faire un 'echo macron' 

        $tab_multi = array(
            0 => array("prenom" => "sebastien" , "nom" =>"safourcade", "age" => 35),
            1 => array("prenom" => "karen " , "nom" =>"marquand", "age" => 25)
        );
        echo '<pre>'; print_r($tab_multi); echo '</pre>';
        
        echo $tab_multi[1]["nom"];

        // afficher sucessivement les données du tableau multi en passant par des boucles foreach (boucle imbriqué)
        foreach($tab_multi as $key =>$tab )
        {
            echo '<div class="col-md-6 offset-md-4 alert alert-danger text-center">';
            foreach($tab as $key2 => $value)
            {
                echo "$key2 : $value <br>";
            }
            echo '</div>';
        }
        // $tab : receptionne un tableau ARRAY par tour de boucle 
        //la deuxiéme boucle FOREACH permet de passer en revue chaque chaque tableau contenu  dans le tableau multidimensionnel 
        foreach($tab_multi as $key =>$tab )
        {
            echo '<div class="col-md-6 offset-md-4 alert alert-danger text-center">';
            foreach($tab as $key2 => $value)
            {
                if($key2 == 'prenom')
                // if($key2 != 'nom' && $keys2 !='age')
                echo "$key2 : $value <br>";
            }
            echo '</div>';
        }
        //----------------------------------------------------------------------------
        for($i = 0; $i < sizeof($tab_multi); $i++)
        {
            echo '<div class="col-md-6 offset-md-4 alert alert-warning text-center">';
                echo $tab_multi[$i] ['prenom'];
                // $tab_multi[0] -> 1 er tour de boucle
                // $tab_multi[1] -> 2eme tour de boucle 
            echo '</div>';    

        }
        
        echo '<hr><h2 class="display-4 text-center text-success"> Superglobales </h2></hr>';
        // Les superglobales sont des variables prédéfinies de type ARRAY, accessibles de partout dans le code PHP, qui permettent de véhiculer un certain type d'informations/ données

        /*
        - Les superglobales s'appellent toujours avec le signe $ suivi d'un '_' et de son nom en majuscules.
        $_SERVER     : véhicule toutes les données liées à notre serveur
        $_GET        : véhicule les données transmises dans l'URL   
        $_POST       : véhicule les données saisies dans un formulaire   
        $_FILES      :véhicule les données d'un fichier uploadé (image/ photo/doc etc...)   
        $_COOKIE     : véhicule toutes les données liées aux fichiers cookie stockées sur le pc de l'internaute   
        $_SESSION    : véhicule les données d'une session en cours.   
        */

        echo '<pre>'; print_r($_SERVER); echo '</pre>';

        // un objet est un autre type de données. Un peu à la maniére d'un ARRAY,
        // Cependant, cela va beaucoup plus loin car on peut y declarer des variables (appelés : attibuts ou proprietés)mais aussi des fonctions (appelés :  méthodes)

        class Etudiant
        {
            public $prénom = "Leon"; // permet de preciser que l'element soit accesible de partout, (il y a aussi protected et private, utile en cas d'heritage et d'encapsulation )
            public $age = 25;
            public function pays()
            {
                return "France";
            }
        }

        /* une class est un plan de construction qui regroupe des données. Pour pouvoir acceder aux informations déclarées dans la class, 
        donc de créeeer un objet(un exemplaire)de la class.
    
        */


        $objet = new Etudiant; /* le mot clé "new" permet d'instancier la classe, donc de créer un objet issu de la class
        $objet est objet (un exemplaire) issu de la class 'Etudiant', c'est ce qui  nous permet de le déployer afin que l'on puisse s'en servir. on se 
        sert de ce qui est dans la class à travers l'objet */ 
        echo '<pre>' ; var_dump($objet); echo '</pre>';
        echo '<pre>' ; var_dump(get_class_methods($objet)); echo '</pre>';

        echo $objet->prénom . '<hr>';/* nous pouvons piocher dans un ARRAY avec
        les crochets [], nous devons piocher dans un objet avec la fléche '->'*/ 
        echo $objet->age . '<hr>';
        echo $objet->pays() . '<hr>';// appel d'une methode (fonction) avec les parenthese.

        ?>
        
</div><hr>
        
</body>
</html> 