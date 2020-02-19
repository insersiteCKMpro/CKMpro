<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>



    @media screen and (min-width: 769px) and (max-width:2560px) {
    .test {min-height: 93vh; display: flex;}
    .test2 {width: 30%; min-height: 75vh; display: flex;}
    .test3{display:none;}
    .titrec {width: 100%; height: 40vh;}
    .num {margin: 0 7vh; width: 75%; height: 10vh;}
    .trait1 {width: 2px; height: 93vh; padding: 0;}
    .trait2 {display: none;}
    .traitori{display: none;}
    .espace{display: none;}
    .for {width: 45%; height: 70vh; margin-left: 5vh;}
    .radbox {height: 15vh; display: flex;}
    .labe {width: 25%;}
    .star{display: initial;width:75%; height: 15vh;}
    .checkio{width:100%; height: 1vh; display: flex;}
    .checkio1{width:100%; height: 10vh; display: flex;}
    .put {width: 35.3%;}
    .put1 {width: 33%; height: 6vh; margin-top: 3vh;}
    .btn{margin-left: 6vh;width: 75%;}
    .buton {background-color: white !important; color: black !important; border: 1px solid black !important;}
    .buton:hover {background-color: black !important; color: white !important;}
    footer {width: 100%; height: 16vh;}
    .reseaux {width: 33.4%; height: 15vh;}
    .reseaux img {height: 6.7vh; margin: 7vh auto;}
    .fichec {width: 33.3%; height: 15vh;}
    #customControlValidation1:checked~.custom-control-label::before {color: #fff200; border-color: #fff200; background-color: #fff200;}
    #customControlValidation2:checked~.custom-control-label::before {color: #00aeef; border-color: #00aeef; background-color: #00aeef;}
    #customControlValidation3:checked~.custom-control-label::before {color: #00a651; border-color: #00a651; background-color: #00a651;}
    .footerhaut{display: flex; justify-content: space-evenly;}
    .footerbas{display: flex; justify-content: center;}
    .colonne1{width: 30%; align-items: center; color: black !important; text-decoration: none !important; display: flex; flex-direction: column;}
    .ftext1{text-decoration: none; color: black;}
    .ftext1:hover{text-decoration: none; color: black; background-color: blue; color: white;}
    .colonne2{width: 30%; color: black !important; text-decoration: none !important;}
    .ftext2{text-decoration: none; color: black;}
    .ftext2:hover{text-decoration: none; color: black; background-color: blue; color: white;}
    .colonne3{display:flex; align-items: center; width: 30%; justify-content: center;}
    .colonne4 {width: 100%; margin-bottom: 10%; margin-top:2vh; display: none;}
    .snap {width:50%; height: 10vh;}
    .snap:hover{transition: all ease .3s .1s;}
    .fb {width:50%; height: 10vh;}
    .fb:hover{transition: all ease .3s .1s;}
    .insta {width:50%; height: 10vh;}
    .insta:hover{transition: all ease .3s .1s;}
    .flogo {width: 11.5%; height: 38%;}
    img {border-style: none; height: 60%;}
    .navbar-expand-lg .navbar-nav {justify-content: center !important; font-size: 3vh !important;}
}
@media screen and (min-width: 451px) and (max-width: 768px) {
    .test {min-height: 110vh; display: flex; justify-content: center;}
    .test2 { display: none;}
    .test3 { display:flex; flex-direction: column; text-align: center; min-height: 17vh; width:100%; border-bottom: 1px solid grey;}
    .trait1 {display: none;}
    .trait2 {width: 100%; border-top: 1px solid #000; height: 0; align-items: center;}
    .titrec {height: 5vh; text-align: center;}
    .traitori{background-color: black; height: 2px;}
    .espace{margin-top: 5px;}
    .radbox {height: 15vh; display: flex;}
    .labe {width: 25%;}
    .star{display: initial; width:75%; height: 15vh;}
    .checkio{width:100%; height: 4vh; display: flex;}
    .checkio1{width:100%; height: 10vh; display: flex;}
    #customControlValidation1:checked~.custom-control-label::before {color: #fff200; border-color: #fff200; background-color: #fff200;}
    #customControlValidation2:checked~.custom-control-label::before {color: #00aeef; border-color: #00aeef; background-color: #00aeef;}
    #customControlValidation3:checked~.custom-control-label::before {color: #00a651; border-color: #00a651; background-color: #00a651;}
    .put {width: 33.3%; min-height: 2vh;}
    .put1 {width: 33%; height: 6vh; margin-top: 1vh;}    
    .btn{margin-left: 5vh; width: 75%;}
    .buton {background-color: white !important; color: black !important; border: 1px solid black !important;}
    .buton:hover {background-color: black !important; color: white !important;}
    .colonne3 {width: 100%; margin-bottom: 10%; margin-top:2vh; display: none;}
    .colonne4 {width: 100%; margin-bottom: 2%; margin-top:2vh; height: 10vh; display: flex;}
    .flogo {width: 6%; display: flex; justify-content: center;}
    .alignf {text-align: center !important; display: flex; flex-direction: column; align-items: center;}
    .snap {width:35%; height: 5vh;}
    .fb {width:35%; height: 5vh;}
    .insta {width:35%; height: 5vh;}
    .img1{width:40%; height: 5vh;}
    .img2{width:33.3%; height: 5vh;}
    img {vertical-align: middle; border-style: none; height: 90%;}
    
}
@media screen and (max-width: 450px) {
    .radbox {height: 15vh; display: flex;}
    .test2 {display: none;}
    .test3 {display: flex; justify-content: center;}
    .trait1 {display: none;}
    .trait2 {text-align: center;}
    .labe {width: 25%;}
    .star {display: initial; width:75%; height: 15vh;}
    .checkio {width:100%; height: 4vh; display: flex;}
    .checkio1 {width:100%; height: 10vh; display: flex;}
    .put {width: 33.3%; min-height: 2vh;}
    .put1 {width: 33.3%; height: 6vh;}    
    .btn {width: 100%;}
    .buton {background-color: white !important; color: black !important; border: 2px solid black !important;}
    .buton:hover {background-color: black !important; color: white !important;}
    footer {border-top: 1px solid black;}
    #customControlValidation1:checked~.custom-control-label::before {color: #fff200; border-color: #fff200; background-color: #fff200;}
    #customControlValidation2:checked~.custom-control-label::before {color: #00aeef; border-color: #00aeef; background-color: #00aeef;}
    #customControlValidation3:checked~.custom-control-label::before {color: #00a651; border-color: #00a651; background-color: #00a651;}
    .flogo {width: 13%; margin-bottom: 15%;}
    .footerhaut {flex-direction: column-reverse;}
    .colonne2 {order:-1;}
    .footerhaut {align-items: center; text-align: center;}
    .colonne3 {width: 100%; margin-bottom: 10%; margin-top:2vh; display: none;}
    .colonne4 {width: 100%; margin-bottom: 2%; margin-top:2vh; height: 10vh; display: flex;}
    .snap {width:40%; height: 10vh;}
    .fb {width:40%; height: 10vh;}
    .insta {width:40%; height: 10vh;}
    .alignf {text-align: center !important; display: flex; flex-direction: column; align-items: center;}
    .img1{width:40%; height: 5vh;}
    .img2{width:33.3%; height: 5vh;}
    img {vertical-align: middle; border-style: none; height: 50%;}
}
</style>
    <div class="container-fluid">
        <br>
        <h2 class="text-center">formulaire de contact</h2>
        <br>
        <br>
        <main class="test">
            <div class="test2">
                <div class="titrec">
                    <h2 class="text-center">Contact</h2>
                    <br>
                    <div class="num">
                        <p>Numero de téléphone: <br>
                            0123456789
                        </p>
                    </div>
                </div>
            </div>
            <div class="trait1"></div>
            <div class="for">
                <div class="test3"><!--responsive tablette-->
                    <div class="titrec"><!--responsive tablette-->
                        <h2 class="">Contact</h2><!--responsive tablette-->
                        <br><!--responsive tablette-->
                        <div class="num"><!--responsive tablette-->
                            <p>Numero de téléphone: <br>
                                0123456789
                            </p><!--responsive tablette-->
                        </div><!--responsive tablette-->
                    </div><!--responsive tablette-->
                </div><!--responsive tablette-->
                <div class="mx-auto trait2"></div>
                <form>
                    <div class="form-group espace">
                        <label for="exampleInputName1">Nom*</label>
                        <input type="nom" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFirsteName1">Prenom*</label>
                        <input type="prenom" class="form-control" id="exampleInputFirstName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email*</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone1">Téléphone*</label>
                        <input type="phone" class="form-control" id="exampleInputPhone1"
                            aria-describedby="phoneHelp">
                    </div>
                    <div class="radbox">
                        <div class="form-check labe">Activité*</div>
                        <div class="star">
                            <div class="checkio">
                                <div class="custom-control custom-radio text-center put">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation1"
                                        name="radio-stacked">
                                    <label class="custom-control-label" for="customControlValidation1"></label>
                                </div>
                                <div class="custom-control custom-radio text-center put">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation2"
                                        name="radio-stacked">
                                    <label class="custom-control-label" for="customControlValidation2"></label>
                                </div>
                                <div class="custom-control custom-radio text-center put">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation3"
                                        name="radio-stacked">
                                    <label class="custom-control-label" for="customControlValidation3"></label>
                                </div>
                            </div>
                            <div class="checkio1">
                                <p class="text-center put1">3D<br>
                                    Deratisation <br>
                                    Desinfection <br>
                                    Desinsectisation <br>
                                </p>
                                <p class="text-center put1">Nettoyage</p>
                                <p class="text-center put1">Espaces Verts</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <select class="form-control">
                        <option>Default select</option>
                        <option>Default select</option>
                        <option>Default select</option>
                        <option>Default select</option>
                    </select>
                    <br>
                    <select class="form-control">
                        <option>Default select</option>
                        <option>Default select</option>
                        <option>Default select</option>
                    </select>
                    <br>
                    <select class="form-control">
                        <option>Default select</option>
                        <option>Default select</option>
                        <option>Default select</option>
                        <option>Default select</option>
                        <option>Default select</option>
                    </select>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control " id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-dark buton">Submit</button>
                </form>
            </div>
        </main>
        <br>
        <br>
        <!--maps-->
        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3 mt-5"> 
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
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
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</html>