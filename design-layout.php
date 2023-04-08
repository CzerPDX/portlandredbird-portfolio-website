<!DOCTYPE HTML>
<html>
    <?php
        $thisPage = 'Design';
        include('header.php');
        include('portfolio-functions.php');

        $previewDir = 'images/portfolio/design/layout/';
        $portfolio_items = get_portfolio_items($previewDir);
    ?>
    
    <body>
        <?php include ('nav.php'); ?>

        <h1 class="text-center portfolioTitle">Page Layout</h1>

        <section class="portfolio">
            <div class="container">
                <div class="row">

                    <ul class="portfolio-sorting list-inline text-center">
                        <li><a href="#" data-group="all" class="active">All</a></li>
                        <li><a href="#" data-group="everydaywraps">Everyday Wraps</a></li>
                        <li><a href="#" data-group="socksforeverybody">Socks for Everybody!</a></li>
                        <li><a href="#" data-group="tranquility">Tranquility</a></li>
                        <li><a href="#" data-group="splendidsoles">Splendid Soles</a></li>
                        <li><a href="#" data-group="cover">Covers</a></li>
                    </ul> <!--end portfolio sorting -->

                    <ul class="portfolio-items list-unstyled" id="grid">
                        
                        <?php echo $portfolio_items; ?>
                        
                        <li class="col-md-4 col-sm-4 col-xs-6 shuffle_sizer"></li>
                    </ul> 
                </div>
            </div>
        </section>
        
        <?php include ('footer.php'); ?>
    </body>
</html>