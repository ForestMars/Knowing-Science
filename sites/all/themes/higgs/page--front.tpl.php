<?php 
  ?>
<body>

<?php /*
$icon_facebook = <?php echo path_to_theme() . '//images/facebook.png'; 
$icon_twitter = <?php echo path_to_theme() . '//images/twitter.png'; 
<div class="social-icons">
  <a href="http://facebook.com/knowingscience"><img src="<?php echo $icon_facebook; ?>" height="35px" /></a>
  <a href="http://twitter.com/knowing_science"><img src="<?php echo $icon_twitter; ?>" height="35px" /></a>
</div>
*/ ?>

<!--================================================== Header ==================================================-->

  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Top Nav ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php print render($page['topnav']); ?>


  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End TopNav ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Main Nav ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<?php /* This is odd because the header and the main content wrapper div overlap. 
       * The main navigation and hero slideshow divs are members both of the header area and the main content wrapper div. 
       */
?>       
<div class="wrapper">
<?php include('nav.tpl.php'); ?> 

  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Hero Section ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="slider-inner">
        <div id="da-slider" class="da-slider">
            <div class="da-slide">
                <h2><i>The  &amp; FRESH</i> <strong>ONLY</strong> <br /> <i>100% NGSS Approved</i> <br /> STEM Curriculum</h2>
                <p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i> <br /> <i>veniam omnis </i></p>
                <div class="da-img"><img class="img-responsive" src="assets/plugins/parallax-slider/img/1.png" alt=""></div>
            </div>
            <div class="da-slide">
                <h2><i>Outstanding</i> <br /> <i>Reason</i> <br /> <i>number 2</i></h2>
                <p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i></p>
                <div class="da-img">
                    <iframe src="http://player.vimeo.com/video/47911018" width="530" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
            </div>
            <div class="da-slide">
                <h2><i>A 3rd final</i> <br /> <i>IMPACTFUL</i> <br /> <i>POINT</i></h2>
                <p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i> <br /> <i>veniam omnis </i></p>
                <div class="da-img"><img src="assets/plugins/parallax-slider/img/html5andcss3.png" alt="image01" /></div>
            </div>
            <div class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
            </div>
        </div>
    </div><!--/slider-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Hero Section ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--============================================= End Header ==================================================-->


<!--================================================== Intro Block ==================================================-->
    <div class="purchase">
        <div class="container">
            <div class="row">
                <div class="col-md-9 animated fadeInLeft">
                    <span>The ONLY 100% NGSS Approved Curriculum</span>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi  vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat corrupti quos.</p>
                </div>
                <div class="col-md-3 btn-buy animated fadeInRight">
                    <a href="#" class="btn-u btn-u-lg"><i class="fa fa-envelope-o"></i> Find Out More</a>
                </div>
            </div>
        </div>
    </div><!--/row-->
<!--================================================== End Intro Block ==================================================-->

<?php print render($page['highlighted']); ?>


<!--================================================== Main Content ==================================================-->
    <div class="container content-sm">
      
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Triptych (User Segments) ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    	<div class="row margin-bottom-30">
        	<div class="col-md-4">
        		<div class="service">
              <i class="fa fa-cubes service-icon"></i>
        			<div class="desc">
                <?php print render($page['triptych1']); ?>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="service">
              <i class="fa fa-cubes service-icon"></i>
        			<div class="desc">
                <?php print render($page['triptych2']); ?>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="service">
              <i class="fa fa-cubes service-icon"></i>
        			<div class="desc">
                <?php print render($page['triptych3']); ?>
        			</div>
        		</div>
        	</div>
    	</div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End Triptych ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Gallery: Curriculum Kits ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="headline"><h2>Curriculum Kits</h2></div>                       
        <div class="row margin-bottom-20">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                	<div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_prek.png' ?>" alt="">
     

                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Pre-K</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_kindergarten.png' ?>" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Kindergarden</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_1st.png' ?>" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Grade 1</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_2nd.png' ?>" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Grade 2</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_3rd.png' ?>" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Grade 3</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_4th.png' ?>" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Grade 4</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_5th.png' ?>" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Grade 5</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_6th.png' ?>" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Grade  6</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
        </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End Gallery ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Info Section ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    	<div class="row margin-bottom-30">
        	<!-- Welcome Block -->
    		<div class="col-md-8 md-margin-bottom-40">
    			<div class="headline"><h2>NGSS Stem Curriculum</h2></div>
    		  <h4><p><strong>The Knowing Science curriculum, developed for the Next Generation Science Standards (NGSS), has everything teachers need:</strong></p></h4>
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img-responsive margin-bottom-20" src="<?php echo path_to_theme() . '/assets/img/kidknowledge/kk33.jpg' ?>" alt="">
                    </div>
                    <div class="col-sm-8">

                        
                        <ul class="list-unstyled margin-bottom-20">
                            <li><i class="fa fa-check color-blue"></i> 
Easy to follow lessons with detailed teacher instruction covering Disciplinary Core Ideas, Crosscutting Concepts and Scientific and Engineering Practices.                            </li>
                            
                            <li><i class="fa fa-check color-blue"></i>
Hands-on/minds-on STEM kits demonstrate engineering and science principles and contain all materials needed for every lesson, including teacher manuals, activity sheets, supplemental literature and suggestions for extended learning.                             </li>
                             
                            <li><i class="fa fa-check color-blue"></i>
CCSS for ELA and Literacy emphasizing informational reading, writing, speaking and listening. Our non-fiction reading and writing component requires close reading and responding to one or more content-specific books or passages written specifically for each lesson.                             </li>
                             
                            <li><i class="fa fa-check color-green"></i>
Addresses the CCSS for Mathematics including measurement, data representation and problem solving, starting in the early grades.
                             </li>
                             
                            <li><i class="fa fa-check color-green"></i>
Incorporates the latest neuroscience research on learning and emphasizes interdisciplinary connections and crosscutting concepts.
                             </li>
                             
                            <li><i class="fa fa-check color-green"></i>
Provides opportunities for collaborative projects and presentations, emphasizing 21st Century Skills. Creativity and innovation; critical thinking, engineering and design problem solving; communication and collaboration; and the responsibility of working productively in a team.
                             </li>
                             
                            <li><i class="fa fa-check color-green"></i>
New Knowing Science eBooks series with high-interest short stories that introduce concepts and vocabulary; explanations and summaries written with language that directly relates to student daily experiences; interactive video game-style activities that reinforce learning; and self-checking review questions.                             </li>
                             
                        </ul>
                    </div>
                </div>

                <blockquote class="hero-unify">
                    <p>Tesseract, colonies vastness is bearable only through love quasar gathered by gravity, white dwarf culture cosmos star stuff harvesting star light, Flatland, astonishment Orion's sword dispassionate extraterrestrial observer, cosmos, corpus callosum emerged into consciousness a mote of dust suspended in a sunbeam, Drake Equation Euclid. A still more glorious dawn awaits. Not a sunrise but a galaxyrise worldlets with pretty stories for which there's little good evidence great turbulent clouds billions upon billions stirred by starlight. Light years billions upon billions cosmic fugue? Hydrogen atoms citizens of distant epochs rich in heavy atoms Apollonius of Perga, billions upon billions? Cosmic ocean! Bits of moving fluff, a billion trillion.</p>
                    <small>(this could be a quote or a summary of the main mesage)</small>
                </blockquote>
            </div><!--/col-md-8-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End Info ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Mini-Gallery Block ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="col-md-4">
    			<div class="headline"><h2>Units</h2></div>
    			<div id="myCarousel" class="carousel slide carousel-v1">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo path_to_theme() . '/assets/img/main/img1.jpg' ?>" alt="">
                            <div class="carousel-caption">
                                <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo path_to_theme() . '/assets/img/main/img2.jpg' ?>" alt="">
                            <div class="carousel-caption">
                                <p>Cras justo odio, dapibus ac facilisis into egestas.</p>
                            </div>
                            </div>
                        <div class="item">
                            <img src="<?php echo path_to_theme() . '/assets/img/main/img3.jpg' ?>" alt="">
                            <div class="carousel-caption">
                                <p>Justo cras odio apibus ac afilisis lingestas de.</p>
                            </div>
                        </div>                        <div class="item">
                            <img src="<?php echo path_to_theme() . '/assets/img/main/img4.jpg' ?>" alt="">
                            <div class="carousel-caption">
                                <p>Justo cras odio apibus ac afilisis lingestas de.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-arrow">
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
    			</div>
            </div><!--/col-md-4-->
    	</div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End Mini-Gallery ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    </div><!--/container-->
    <!-- End Content Part -->





    <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <a href="index.html"><img id="logo-footer" class="footer-logo" src="<?php echo path_to_theme() . '/assets/img/kid_knowledge/kid-knowledge-logo-stars-blue.jpg' ?>" alt="" width="200px"></a>
                    </div><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Latest -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>Footer One</h2></div>
                            <ul class="list-unstyled latest-list">
                                <li>
                                    <a href="#">Incredible content</a>
                                    <small>May 8, 2014</small>
                                </li>
                                <li>
                                    <a href="#">Best shoots</a>
                                    <small>June 23, 2014</small>
                                </li>
                                <li>
                                    <a href="#">New Terms and Conditions</a>
                                    <small>September 15, 2014</small>
                                </li>
                            </ul>
                        </div>
                    </div><!--/col-md-3-->
                    <!-- End Latest -->

                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>Footer Two</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->

                    <!-- Address -->
                    <div class="col-md-3 map-img md-margin-bottom-40">
                        <div class="headline"><h2>Contact Us</h2></div>
                        <address class="md-margin-bottom-40">
                            address <br />
                            Yonders, New York <br />
                            Phone: 800 123 3456 <br />
                            Fax: 800 123 3456 <br />
                            Email: <a href="mailto:info@anybiz.com" class="">info@knowingscience.com</a>
                        </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div>
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            © 2015 Knowing Science LLC. All Rights Reserved. Kid Knowledge and Knowing Science are registered trademarks of Knowing Science LLC. Patents Pending
                        </p>
                    </div>

                  
                </div>
            </div>
        </div><!--/copyright-->
    </div>
    <!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->

<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        OwlCarousel.initOwlCarousel();
        ParallaxSlider.initParallaxSlider();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>