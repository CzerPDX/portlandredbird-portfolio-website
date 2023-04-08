<!DOCTYPE HTML>
<html>
    <?php
        $thisPage = 'Design';
        include('header.php');
        include('portfolio-functions.php');

        $previewDir = 'images/portfolio/design/photo-edit/';
        $special_classes = ['after-image'];
        $portfolio_items = get_portfolio_items($previewDir, $special_classes);
    ?>
    
    
    <body>
        <?php include ('nav.php'); ?>

        <h1 class="text-center portfolioTitle">Photo Editing</h1>

        <section class="portfolio">
            <div class="container">
                <div class="row">

                    <ul class="portfolio-sorting list-inline text-center">
                        <li><a href="#" data-group="all" class="active">All</a></li>
                        <li><a href="#" data-group="cleanup">Image Cleanup</a></li>
                        <li><a href="#" data-group="extension">Background Extension</a></li>
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
