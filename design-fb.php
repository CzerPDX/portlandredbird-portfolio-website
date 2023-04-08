<!DOCTYPE HTML>
<html>
    <?php
        $thisPage = 'Design';
        include('header.php');
        include('portfolio-functions.php');

        $previewDir = 'images/portfolio/design/fb/';
        $portfolio_items = get_portfolio_items($previewDir);
    ?>

    <body>
        <?php include('nav.php'); ?>

        <h1 class="text-center portfolioTitle">Facebook Covers</h1>
        <h2 class="text-center">For Small Businesses</h2>

        <section class="portfolio">
            <div class="container">
                <div class="row">
                    <ul class="portfolio-sorting list-inline text-center">
                        <li><a href="#" data-group="all" class="active">All</a></li>
                        <li><a href="#" data-group="realty">Rentals and Realty</a></li>
                        <li><a href="#" data-group="products">Products</a></li>
                        <li><a href="#" data-group="services">Services</a></li>
                    </ul>

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
