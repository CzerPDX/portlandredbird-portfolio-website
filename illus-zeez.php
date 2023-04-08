<!DOCTYPE HTML>
<html>
    <?php
        $thisPage = 'Illustration';
        include('header.php');
        include('portfolio-functions.php');

        $previewDir = 'images/portfolio/illus/zeez/';
        $portfolio_items = get_portfolio_items($previewDir);
    ?>
    
    
    <body>
        <?php include ('nav.php'); ?>

        <h1 class="text-center portfolioTitle">zeez</h1>
        <h2 class="text-center">Starcraft II Illustrations</h2>

        <section class="portfolio">
            <div class="container">
                <div class="row">

                    <ul class="portfolio-sorting list-inline text-center">
                        <li><a href="#" data-group="all">All</a></li>
                        <li><a href="#" data-group="wallpapers">Wallpapers</a></li>
                        <li><a href="#" data-group="tournament">Tournament Brackets</a></li>
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
