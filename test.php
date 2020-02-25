<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
</head>
<style>

img {
  width: 100%;
}

body {
  background: #fff;
  font-weight: 400;
  font-size: 1em;
  font-family: "Open Sans", Arial, sans-serif;
  text-align:center;
}
.tt
  {
    border-top:1px solid black;
    border-bottom:1px solid black;
  }

.w-100 {
    width: 100%!important;
    height: 40vh;
}
a {
  outline: none;
  color: #3498db;
  text-decoration: none;
}

a:hover,
a:focus {
  color: #528cb3;
}

section.team { }

.grid {
  display: block;
  margin: 0 auto;                  
  width: 95%;
  padding-left: 0;  
  font-size: 0;  
  text-align: center;
}

.grid figure {
  margin: 0.1em;
  width: 340px;
  height: 240px;
  background: #3085a3;
  display: inline-block;
  position: relative;
  overflow: hidden;
  text-align: center;
}

/* Common style */
.grid figure img {
  position: relative;
  display: block;
  opacity: 0.8;
  height: 240px;
  @media(max-width: 1260px) {
    height: 270px;
  }
}

.grid figure figcaption {
  color: #fff;
  font-size: 1.25em;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  align-items:center;
}

.grid figcaption:hover h2 {
  text-transform: uppercase;
  word-spacing: -0.15em;
  font-weight: 300;
}

.grid figure figcaption::before,
.grid figure figcaption::after {
  pointer-events: none;
}

.grid figure figcaption,
.grid figure figcaption > a {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.grid figure figcaption > a {
  z-index: 1000;
  text-indent: 200%;
  white-space: nowrap;
  font-size: 0;
  opacity: 0;
}

.grid figure:hover h2 {
  word-spacing: -0.15em;
  font-weight: 300;
  
}

.grid figure h2 span {
  font-weight: 800;
}
figure.un
{
  margin-left:100px;
}
figure.effect-steve , figure.un{
  z-index: auto;
  background: #000;
}

figure.effect-steve:before , figure.un:before {
  box-shadow: 0 3px 30px rgba(0, 0, 0, 0.8);
  opacity: 0;
}

figure.effect-steve figcaption , figure.un figcaption {
  z-index: 1;
  display:flex;
  justify-content:center;
}

figure.effect-steve img , figure.un img {
  opacity: 1;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: perspective(1000px) translate3d(0, 0, 0);
  transform: perspective(1000px) translate3d(0, 0, 0);
}

figure.effect-steve h2 , figure.un h2
{
  background: #f1f1f1;
  color: #2d434e;
}

figure.effect-steve h2 , figure.un h2 {
  position: absolute;
  padding: 0.25em;
  bottom: 10px;
  width: 100%;
}

figure.effect-steve:hover::before , figure.un:hover::before {
  opacity: 1;
}

figure.effect-steve:hover img , figure.un:hover img{
  -webkit-transform: perspective(1000px) translate3d(0, 0, 21px);
  transform: perspective(1000px) translate3d(0, 0, 21px);
}

figure.effect-steve:focus h2:before , figure.un:focus h2:before {
  opacity: 0;
}

.grid figure,
figcaption,
img {
  z-index: 0;
}

.grid figure figcaption h2 {
  font-size: 24px;
}

figure:hover h2 {
  background: #f1f1f1;
  transition: transform 0.35s;
  transform: translateY(-2.5em);
}

h1.slogan {
  text-align: center;
  background-color: #2d434e;
  font-weight: 100;
  margin: 0;
  padding: 20px;
}
article
{
  width:30%;
  
}
.zonetext
{
  align-items:center;
  display:flex;
  text-align:initial;
}


</style>
<body>

  <marquee class="tt" behavior="" direction="" width="100%">Livraison click and collect !</marquee>


  <div id="carouselExampleInterval" class="carousel slidev" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="https://wowslider.com/sliders/demo-10/data/images/dock.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="https://wowslider.com/sliders/demo-10/data/images/dock.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://wowslider.com/sliders/demo-10/data/images/dock.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <h1 class="text-center">NOS PRODUITS</h1>
<div class="un">
<section class="team">
  <div class="grid">

    <figure class="effect-steve">
      <img src="img/3Dmaq.png" />

      <figcaption>
        <h2><span>3D</span></h2>
      </figcaption>
      
    </figure>
    

    <figure class="un ml-5">
      <img src="img/nettoyagemaq.png" />
      <figcaption>
        <h2><span>NETTOYAGE</span></h2>     
      </figcaption>
    </figure>

    </div>  
</section>
<article>
  <div class="zonetext">

  <div class="expli">
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate modi incidunt voluptate consequatur quo officia eligendi asperiores molestiae? Minima inventore necessitatibus voluptatum veritatis voluptates repellat sit ipsum quas quaerat? Nostrum.</p>
</div>

<div class="expli2">
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate modi incidunt voluptate consequatur quo officia eligendi asperiores molestiae? Minima inventore necessitatibus voluptatum veritatis voluptates repellat sit ipsum quas quaerat? Nostrum.</p>
</div>
</div>
</article>





</body>
</html>


<script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</script>

</html>