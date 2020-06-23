<html>
<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
?>

<section id="portfolio" class="container">
        <ul class="portfolio-filter">
            <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Bootstrap</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".html">HTML</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".wordpress">Wordpress</a></li>
        </ul><!--/#portfolio-filter-->

        <ul class="portfolio-items col-12">
            <li class="portfolio-item col-4 apps">
                <div class="item-inner">
                    <img src="img/portfolio/thumb/item1.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="img/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="fa fa-search-plus"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item col-4 joomla bootstrap">
                <div class="item-inner">
                    <img src="img/portfolio/thumb/item2.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="img/portfolio/full/item2.jpg" rel="prettyPhoto"><i class="fa fa-search-plus"></i></a>              
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item col-4 bootstrap wordpress">
                <div class="item-inner">
                    <img src="img/portfolio/thumb/item3.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="img/portfolio/full/item3.jpg" rel="prettyPhoto"><i class="fa fa-search-plus"></i></a>        
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item col-4 joomla wordpress apps">
                <div class="item-inner">
                    <img src="img/portfolio/thumb/item4.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="img/portfolio/full/item4.jpg" rel="prettyPhoto"><i class="fa fa-search-plus"></i></a>          
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item col-4 joomla html">
                <div class="item-inner">
                    <img src="img/portfolio/thumb/item5.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="img/portfolio/full/item5.jpg" rel="prettyPhoto"><i class="fa fa-search-plus"></i></a>          
                    </div>    
                </div>       
            </li><!--/.portfolio-item-->
            <li class="portfolio-item col-4 wordpress html">
                <div class="item-inner">
                    <img src="img/portfolio/thumb/item6.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="img/portfolio/full/item6.jpg" rel="prettyPhoto"><i class="fa fa-search-plus"></i></a>           
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
        </ul>
    </section><!--/#portfolio-->



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/jquery.isotope.min.js"></script> -->
    <script src="js/main.js"></script>
</body>
</html>



<?php 
    require_once("include/footer.php");
?>