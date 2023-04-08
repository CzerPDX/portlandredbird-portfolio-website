<!DOCTYPE HTML>
<html>
    <?php $thisPage='Illustration'; ?>
    <?php include ('header.php'); ?>
    
    
    <body>
        <?php include ('nav.php'); ?>

        <h1 class="text-center portfolioTitle">Illustration</h1>

        <section class="portfolio">
            <div class="container">
                <div class="row">

                    <ul class="portfolio-sorting list-inline text-center">
                        <li><a href="#" data-group="all" class="active">All</a></li>
                        <li><a href="#" data-group="mobile">Mobile</a></li>
                        <li><a href="#" data-group="zeez">zeez Starcraft II Guild</a></li>
                        <li><a href="#" data-group="various">Various</a></li>
                    </ul> <!--end portfolio sorting -->

                    <ul class="portfolio-items list-unstyled" id="grid">
                        
                        <?php
                            $previewDir = 'images/portfolio/illus/all/';
                            //Replace this filepath with one that contains the images you want to display on this page
                            $previewImages = glob($previewDir.'*.jpg');
                            foreach($previewImages as $previewImage) {
                            //Runs the following on every jpg in the given directory. Images will need to be in jpg format unless you change the glob rule to include other filetypes.
                                $size = getimagesize($previewImage, $info);
                                if(isset($info['APP13']))
                                    {
                                        $iptc = iptcparse($info['APP13']);
                                        $title = $iptc["2#105"][0];
                                        $caption = $iptc["2#120"][0];
                                        $keyword0 = $iptc["2#025"][0];
                                        $keyword1 = $iptc["2#025"][1];
                                        $keyword2 = $iptc["2#025"][2];
                                        $keyword3 = $iptc["2#025"][3];
                                        $keyword4 = $iptc["2#025"][4];
                                        $keyword5 = $iptc["2#025"][5];
                                    }
                                //pulls IPTC data from the image and assigns the title, caption, and keywords as variables
                                echo "
                
                                    <li class='col-md-4 col-sm-4 col-xs-6' data-groups='[\"{$keyword0}\", \"{$keyword1}\", \"{$keyword2}\", \"{$keyword3}\", \"{$keyword4}\", \"{$keyword5}\"]'>
                                        <figure class='portfolio-item'>
                                            <a 
                                                class='example-image-link'
                                                href='{$previewImage}' 
                                                data-lightbox='example-set' 
                                                data-title='{$title} - {$caption}'
                                            >
                                                <img 
                                                    class='example-image img-responsive'
                                                    src='{$previewImage}' 
                                                    alt='' 
                                                >
                                            </a>
                                        </figure>
                                    </li>
                                    
                                    ";
                                //Echos out a div with variables filled in for each image.
                            }
                        ?>
                        

            <!-- sizer -->
            <li class="col-md-4 col-sm-4 col-xs-6 shuffle_sizer"></li>

            
          </ul> <!--end portfolio grid -->


          </div> <!--end row -->
        </div> <!-- end container-->
    </section>
        
        <?php include ('footer.php'); ?>