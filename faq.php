<?php 
    require_once("include/header.php");
    require_once("include/nav.php")
?>
<style>
.rangerbouton
{
    display:flex;
    justify-content:center;
    width:100%;
}
.bouton1
{
    background-color: #fef200;
    border-radius: 5px;
    border:solid 2px black;
}
.bouton2
{
    background-color: RGB(37, 170, 226);
      border-radius: 5px;
      border:solid 2px black;
      margin-right:50px;
      margin-left:50px;
}
.bouton3
{
    background-color: #00a652;
      border-radius: 5px;
      border:solid 2px black;
}
.btn
{
    width:10em;
}
.explication
{
    width:50%;
}
.fleche
{
    height:5vh;
}
.emplacementfleche
{
    width:100%;
    display:flex;
    justify-content:center;
}

@media screen and (max-width: 580px) {

    .rangerbouton
{
    display:flex;
    justify-content:center;
    flex-direction:column;
    align-items:center;
    width:100%;
}

    .btn
{
    width:10em;
    margin: 0 auto;
}

.bouton2
{
    background-color: RGB(37, 170, 226);
      border-radius: 5px;
      border:solid 2px black;
      margin-top:10px;
      margin-bottom:10px;
}
.explication
{
    width:80%;
    margin-bottom:10px;
}

.defquest
{
    font-size: 1.3em;
}

}
</style>

<body>
    <div id="container-fluid">

<h1 class="mx-auto text-center mt-5">FAQ</h1>

<div class="rangerbouton mt-5">

<a href="#3D" ><button type="button" class="btn bouton1"><b>3D</b></button></a>
<a href="#NET" ><button type="button" href="#NET" class="btn bouton2"><b>Nettoyage</b></button></a>
<a href="#EV" ><button type="button" href="#EV" class="btn bouton3"><b>Espaces Verts</b></button></a>

</div>

<h1 class="mx-auto text-center mt-5" id="3D" >3D</h1>
<h4 class="defquest mx-auto text-center mt-5">Questions utiles de la categorie 3D :</h4>
<p class="explication mx-auto text-center mt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur quibusdam corrupti sint, illum nemo numquam itaque ducimus atque, quasi corporis autem magni minus suscipit amet quis sapiente iste reiciendis. Itaque.</p>



<h4 class="mx-auto text-center">Question 1</h4>
<div class="emplacementfleche">
<img class="fleche" onclick="toggle_text('Q3d1');" src="img/flecheJaune.png" alt="">
</div>
<span id="Q3d1" style="display:none;"> 
<p class="explication mx-auto text-center mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur magni modi ullam quibusdam fugit ducimus facilis nisi praesentium vitae aliquam recusandae delectus corrupti, explicabo soluta officiis veniam optio non magnam.
Quaerat, omnis doloremque doloribus odio repellat ullam, corporis laboriosam quae veritatis consequuntur architecto voluptatibus unde in culpa asperiores, reiciendis aspernatur vitae voluptate quidem. Cum, ut labore. Ipsa quas excepturi voluptatum.
Voluptas natus, sed asperiores praesentium quos, perspiciatis veritatis nihil nulla labore vitae aliquid. Quas neque eos aperiam ullam, repellendus vitae cumque nemo vel modi necessitatibus similique tempora rem. Excepturi, eius. </p> </span>




<h4 class="mx-auto text-center">Question 2</h4>
<div class="emplacementfleche">
<img class="fleche" onclick="toggle_text('Q3d2');" src="img/flecheJaune.png" alt="">
</div>
<span id="Q3d2" style="display:none;"> 
<p class="explication mx-auto text-center mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur magni modi ullam quibusdam fugit ducimus facilis nisi praesentium vitae aliquam recusandae delectus corrupti, explicabo soluta officiis veniam optio non magnam.
Quaerat, omnis doloremque doloribus odio repellat ullam, corporis laboriosam quae veritatis consequuntur architecto voluptatibus unde in culpa asperiores, reiciendis aspernatur vitae voluptate quidem. Cum, ut labore. Ipsa quas excepturi voluptatum.
Voluptas natus, sed asperiores praesentium quos, perspiciatis veritatis nihil nulla labore vitae aliquid. Quas neque eos aperiam ullam, repellendus vitae cumque nemo vel modi necessitatibus similique tempora rem. Excepturi, eius. </p> </span>



<h4 class="mx-auto text-center">Question 3</h4>
<div class="emplacementfleche">
<img class="fleche" onclick="toggle_text('Q3d3');" src="img/flecheJaune.png" alt="">
</div>
<span id="Q3d3" style="display:none;"> 
<p class="explication mx-auto text-center mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur magni modi ullam quibusdam fugit ducimus facilis nisi praesentium vitae aliquam recusandae delectus corrupti, explicabo soluta officiis veniam optio non magnam.
Quaerat, omnis doloremque doloribus odio repellat ullam, corporis laboriosam quae veritatis consequuntur architecto voluptatibus unde in culpa asperiores, reiciendis aspernatur vitae voluptate quidem. Cum, ut labore. Ipsa quas excepturi voluptatum.
Voluptas natus, sed asperiores praesentium quos, perspiciatis veritatis nihil nulla labore vitae aliquid. Quas neque eos aperiam ullam, repellendus vitae cumque nemo vel modi necessitatibus similique tempora rem. Excepturi, eius. </p> </span>


<h1 class="mx-auto text-center mt-2" id="NET" >Nettoyage</h1>
<h4 class="defquest mx-auto text-center mt-5">Questions utiles de la categorie Nettoyage :</h4>
<p class="explication mx-auto text-center mt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur quibusdam corrupti sint, illum nemo numquam itaque ducimus atque, quasi corporis autem magni minus suscipit amet quis sapiente iste reiciendis. Itaque.</p>

<h4 class="mx-auto text-center">Question 1</h4>
<div class="emplacementfleche">
<img class="fleche" onclick="toggle_text('Qnet1');" src="img/flecheBleu.png" alt="">
</div>
<span id="Qnet1" style="display:none;"> 
<p class="explication mx-auto text-center mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur magni modi ullam quibusdam fugit ducimus facilis nisi praesentium vitae aliquam recusandae delectus corrupti, explicabo soluta officiis veniam optio non magnam.
Quaerat, omnis doloremque doloribus odio repellat ullam, corporis laboriosam quae veritatis consequuntur architecto voluptatibus unde in culpa asperiores, reiciendis aspernatur vitae voluptate quidem. Cum, ut labore. Ipsa quas excepturi voluptatum.
Voluptas natus, sed asperiores praesentium quos, perspiciatis veritatis nihil nulla labore vitae aliquid. Quas neque eos aperiam ullam, repellendus vitae cumque nemo vel modi necessitatibus similique tempora rem. Excepturi, eius. </p> </span>

<h4 class="mx-auto text-center">Question 2</h4>
<div class="emplacementfleche">
<img class="fleche" onclick="toggle_text('Qnet2');" src="img/flecheBleu.png" alt="">
</div>
<span id="Qnet2" style="display:none;"> 
<p class="explication mx-auto text-center mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur magni modi ullam quibusdam fugit ducimus facilis nisi praesentium vitae aliquam recusandae delectus corrupti, explicabo soluta officiis veniam optio non magnam.
Quaerat, omnis doloremque doloribus odio repellat ullam, corporis laboriosam quae veritatis consequuntur architecto voluptatibus unde in culpa asperiores, reiciendis aspernatur vitae voluptate quidem. Cum, ut labore. Ipsa quas excepturi voluptatum.
Voluptas natus, sed asperiores praesentium quos, perspiciatis veritatis nihil nulla labore vitae aliquid. Quas neque eos aperiam ullam, repellendus vitae cumque nemo vel modi necessitatibus similique tempora rem. Excepturi, eius. </p> </span>

<h4 class="mx-auto text-center">Question 3</h4>
<div class="emplacementfleche">
<img class="fleche" onclick="toggle_text('Qnet3');" src="img/flecheBleu.png" alt="">
</div>
<span id="Qnet3" style="display:none;"> 
<p class="explication mx-auto text-center mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur magni modi ullam quibusdam fugit ducimus facilis nisi praesentium vitae aliquam recusandae delectus corrupti, explicabo soluta officiis veniam optio non magnam.
Quaerat, omnis doloremque doloribus odio repellat ullam, corporis laboriosam quae veritatis consequuntur architecto voluptatibus unde in culpa asperiores, reiciendis aspernatur vitae voluptate quidem. Cum, ut labore. Ipsa quas excepturi voluptatum.
Voluptas natus, sed asperiores praesentium quos, perspiciatis veritatis nihil nulla labore vitae aliquid. Quas neque eos aperiam ullam, repellendus vitae cumque nemo vel modi necessitatibus similique tempora rem. Excepturi, eius. </p> </span>



<h1 id="EV" class="mx-auto text-center mt-2" >Espaces Verts</h1>
<h4 class="defquest mx-auto text-center mt-5">Questions utiles de la categorie Espaces Verts :</h4>
<p class="explication mx-auto text-center mt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur quibusdam corrupti sint, illum nemo numquam itaque ducimus atque, quasi corporis autem magni minus suscipit amet quis sapiente iste reiciendis. Itaque.</p>

<h4 class="mx-auto text-center">Question 1</h4>
<div class="emplacementfleche">
<img class="fleche" onclick="toggle_text('Qev1');" src="img/flecheVerte.png" alt="">
</div>
<span id="Qev1" style="display:none;"> 
<p class="explication mx-auto text-center mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur magni modi ullam quibusdam fugit ducimus facilis nisi praesentium vitae aliquam recusandae delectus corrupti, explicabo soluta officiis veniam optio non magnam.
Quaerat, omnis doloremque doloribus odio repellat ullam, corporis laboriosam quae veritatis consequuntur architecto voluptatibus unde in culpa asperiores, reiciendis aspernatur vitae voluptate quidem. Cum, ut labore. Ipsa quas excepturi voluptatum.
Voluptas natus, sed asperiores praesentium quos, perspiciatis veritatis nihil nulla labore vitae aliquid. Quas neque eos aperiam ullam, repellendus vitae cumque nemo vel modi necessitatibus similique tempora rem. Excepturi, eius. </p> </span>

<h4 class="mx-auto text-center">Question 2</h4>
<div class="emplacementfleche">
<img class="fleche" onclick="toggle_text('Qev2');" src="img/flecheVerte.png" alt="">
</div>
<span id="Qev2" style="display:none;"> 
<p class="explication mx-auto text-center mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur magni modi ullam quibusdam fugit ducimus facilis nisi praesentium vitae aliquam recusandae delectus corrupti, explicabo soluta officiis veniam optio non magnam.
Quaerat, omnis doloremque doloribus odio repellat ullam, corporis laboriosam quae veritatis consequuntur architecto voluptatibus unde in culpa asperiores, reiciendis aspernatur vitae voluptate quidem. Cum, ut labore. Ipsa quas excepturi voluptatum.
Voluptas natus, sed asperiores praesentium quos, perspiciatis veritatis nihil nulla labore vitae aliquid. Quas neque eos aperiam ullam, repellendus vitae cumque nemo vel modi necessitatibus similique tempora rem. Excepturi, eius. </p> </span>

<h4 class="mx-auto text-center">Question 3</h4>
<div class="emplacementfleche">
<img class="fleche" onclick="toggle_text('Qev3');" src="img/flecheVerte.png" alt="">
</div>
<span id="Qev3" style="display:none;"> 
<p class="explication mx-auto text-center mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur magni modi ullam quibusdam fugit ducimus facilis nisi praesentium vitae aliquam recusandae delectus corrupti, explicabo soluta officiis veniam optio non magnam.
Quaerat, omnis doloremque doloribus odio repellat ullam, corporis laboriosam quae veritatis consequuntur architecto voluptatibus unde in culpa asperiores, reiciendis aspernatur vitae voluptate quidem. Cum, ut labore. Ipsa quas excepturi voluptatum.
Voluptas natus, sed asperiores praesentium quos, perspiciatis veritatis nihil nulla labore vitae aliquid. Quas neque eos aperiam ullam, repellendus vitae cumque nemo vel modi necessitatibus similique tempora rem. Excepturi, eius. </p> </span>



    </div>
</body>



<script>

function toggle_text(id) {
    var span = document.getElementById(id);
    if(span.style.display == "none") {
      span.style.display = "inline";
    } else {
      span.style.display = "none";
    }
  }

</script>


<?php 
    require_once("include/footer.php");
?>