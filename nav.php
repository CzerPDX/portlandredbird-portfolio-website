<button type="button" id="navLinewrap">
            <i class="fa fa-bars fa-3x" aria-hidden="true"></i>
        </button>
        <div class="navWrap">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="https://portlandredbird.com"><h2>Portfolio</h2></a>
                    </div>
                    <div id="navMobile">
                        <ul class="nav navbar-nav">
                          <li class="dropdown<?php if ($thisPage=="Web") echo " active"; ?>"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Web Design <span class="caret"></span></a>
                            <ul class="web dropdown-menu">
                                <li><a href="web-sports.php">Youth Sports Websites</a></li>
                                <li><a href="index.php">This Website!</a></li>
                            </ul>
                          </li>
                          <li class="design dropdown<?php if ($thisPage=="Design") echo " active"; ?>"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Graphic Design <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="design-logos.php">Logos</a></li>
                                <li><a href="design-layout.php">Page Layout</a></li>
                                <li><a href="design-photo-edit.php">Photo Editing</a></li>
                                <li><a href="design-fb.php">Facebook Covers</a></li>
                                <li><a href="design-ui.php">UI Elements</a></li>
                                <li><a href="design-var.php">Various</a></li>
                            </ul>
                            </li>    
                            <li class="illus dropdown<?php if ($thisPage=="Illustration") echo " active"; ?>"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Illustration <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="illus-mobile.php">Mobile Game Screens</a></li>
                                <li><a href="illus-zeez.php">zeez Starcraft II</a></li>
                                <li><a href="illus-var.php">Various</a></li>
                            </ul>
                          </li>
                        </ul>
                    
                        <!--<ul class="nav navbar-nav navbar-right">
                            <li<?php if ($thisPage=="Resume") echo " class=\"active\""; ?>><a href="resume.php"><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i><p> Resume</p></a></li>
                        </ul>-->
                    </div>
                </div>
            </nav>     
        </div>