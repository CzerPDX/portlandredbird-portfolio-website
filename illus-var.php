<!DOCTYPE HTML>
<html>
    <?php
        $thisPage = 'Illustration';
        include('header.php');
        include('portfolio-functions.php');

        $previewDir = 'images/portfolio/illus/var/';
        $portfolio_items = get_portfolio_items($previewDir);
    ?>
    
    
    <body>
        <?php include ('nav.php'); ?>

        <h1 class="text-center portfolioTitle">Various</h1>
        <h2 class="text-center">Illustration</h2>

        <section class="portfolio">
            <div class="container">
                <div class="row">

                    <ul class="portfolio-sorting list-inline text-center">
                        <li><a href="#" data-group="all" class="active">All</a></li>
                        <li><a href="#" data-group="portraits">Portraits</a></li>
                        <li><a href="#" data-group="animals">Animals</a></li>
                        <li><a href="#" data-group="postcards">Postcards</a></li>
                    </ul> <!--end portfolio sorting -->

                    <ul class="portfolio-items list-unstyled" id="grid">
                        <?php echo $portfolio_items; ?>

                        <li class="col-md-4 col-sm-4 col-xs-6 shuffle_sizer"></li>
                    </ul>
                </div>
            </div>
        </section>

        <?php include('footer.php'); ?>
    </body>
</html>
