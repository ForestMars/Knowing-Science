<?php 
$theme_path = $base_path . drupal_get_path('theme', 'bismuth');
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
        <div id="board">
        <?php if (isset($page['content'])): ?>
            <div id="content-top">
                <?php print render($page['content']); ?>
            </div>
        <?php endif; ?></div>

  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Hero Section ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  
<!--============================================= End Header ==================================================-->


    </div><!--/container-->
    <!-- End Content Part -->


    <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <a href="index.html"><img id="logo-footer" class="footer-logo" src="<?php echo path_to_theme() . '/assets/img/kid_knowledge/kid-knowledge-logo-stars-trans.gif' ?>" alt="" width="200px"></a>
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
                            3 Macdonald Ave<br />
                            Armonk, New York, 10504<br />
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
                        <p><a name="ngss-tm"></a>* NEXT GENERATION SCIENCE STANDARDS is a registered trademark of Achieve. Neither Achieve nor the lead states and partners that developed the Next Generation Science Standards was involved in the production of, and does not endorse, this product.</p>
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
