<!DOCTYPE HTML>
<html>
    <!-- Include header -->
    <?php include ('header.php'); ?>
    
    <body>
        <!-- Include navigation -->
        <?php include ('nav.php'); ?>

        <!-- Main heading -->
        <h1 class="text-center portfolioTitle">Brooke Redbird</h1>

        <!-- Portfolio categories -->
        <div class="container-fluid boxWrap">
            
            <!-- Illustration category -->
            <div class="col-md-4 col-sm-12">
                <a href="illus-mobile.php">
                    <div class="illusBox homeBoxes"></div>
                    <div class="col-md-12 boxCaptions">
                        <h2 class="text-center">Illustration</h2>
                    </div>
                </a>
            </div>

            <!-- Graphic Design category -->
            <div class="col-md-4 col-sm-12">
                <a href="design-ui.php">
                    <div class="designBox homeBoxes"></div>
                    <div class="col-md-12 boxCaptions">
                        <h2 class="text-center">Graphic Design</h2>
                    </div>
                </a>
            </div>

            <!-- Web Design category -->
            <div class="col-md-4 col-sm-12">
                <a href="web-sports.php">
                    <div class="webBox homeBoxes"></div>
                    <div class="col-md-12 boxCaptions">
                        <h2 class="text-center">Web Design</h2>
                    </div>
                </a>
            </div>

        </div>
        
        <!-- Include footer -->
        <?php include ('footer.php'); ?>
    </body>
</html>
