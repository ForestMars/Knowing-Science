<?php 
$theme_path = $base_path . drupal_get_path('theme', 'bismuth');
global $theme;
  ?>
<!--================================================== Header ==================================================-->
<div id="toptab-wrapper">
    <div class="toptab">
        <div class="social-icons">
            <a href="http://facebook.com/knowingscience">
                <img height="35px" src="<?php echo drupal_get_path('theme','bismuth');?>/images/facebook.png">
            </a>
            <a href="http://twitter.com/knowing_science">
                <img height="35px" src="<?php echo drupal_get_path('theme','bismuth');?>/images/twitter.png">
            </a>
        </div>
    </div>
</div>

  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Top Nav ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php print render($page['topnav']); ?>


  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End TopNav ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Main Nav ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->     
<div class="wrapper">
<?php include('nav.tpl.php'); ?> 

  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Hero Section ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Hero Section ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  
<!--============================================= End Header ==================================================-->  
    <!--=== Content Part ===-->
    <div class="container content-sm">
		 <?php print render($tabs); ?>
        <?php if (isset($page['content'])): ?>
            <div id="content-top">
                <?php print render($page['content']); ?>
            </div>
        <?php endif; ?>
    	
    </div><!--/container-->
    <!-- End Content Part -->

<?php include('footer.tpl.php'); ?> 



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

