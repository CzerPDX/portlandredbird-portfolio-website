<!DOCTYPE HTML>
<html>
    <?php
        $thisPage = 'Design';
        include('header.php');
        include('portfolio-functions.php'); // Add this line

        $previewDir = 'images/portfolio/design/all/';
        $portfolio_items = get_portfolio_items($previewDir);
    ?>

    <body>
        <?php include('nav.php'); ?>

        <h1 class="text-center portfolioTitle">Graphic Design</h1>

        <section class="portfolio">
            <div class="container">
                <div class="row">
                    <ul class="portfolio-sorting list-inline text-center">
                        <li><a href="#" data-group="all" class="active">All</a></li>
                        <li><a href="#" data-group="logos">Logos</a></li>
                        <li><a href="#" data-group="books">Page Layout</a></li>
                        <li><a href="#" data-group="photoediting" class="active">Photo Editing</a></li>
                        <li><a href="#" data-group="facebookCovers">Facebook Covers</a></li>
                        <li><a href="#" data-group="uiElements">UI Elements</a></li>
                        <li><a href="#" data-group="various">Various/Other</a></li>
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
