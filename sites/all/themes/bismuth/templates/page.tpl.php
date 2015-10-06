<?php  /* convert html to php for Drupal ACA (Relax) template */ ?>

<div class="wrapper">

    <?php
    $theme_path = $base_path . drupal_get_path('theme', 'relax');
    ?>


    <header id="header">
        <div class="container">
            <?php if ($page['header_top']): ?>
                <div class="header">
                    <div id="header-top-region" class="topbar">
                        <ul class="loginbar pull-right">
                            <li>
                                <?php
                                    //language switcher custom block
                                    $block = module_invoke('acalang_switcher', 'block_view', 'aca_custom_lang_switcher');
                                    print render($block['content']);
                                ?>
                            </li>
                            <li class="topbar-divider"></li>
                            <li>
                                <i class="fa fa-user"></i>
                                <?php 
                                    if(user_is_logged_in()):
                                        echo '<a href="/user/logout">logout</a>';
                                    else:
                                        echo '<a href="/user/login">login</a>';
                                    endif;
                                 ?>
                            </li>
                            <li class="topbar-divider"></li>
                            <li>
                            <?php
                                if(drupal_is_front_page()):
                                    print '<i class="fa fa-home"></i>';
                                else:
                                    print '<i class="fa fa-home"></i>';
                                    echo '<a href="/">home</a>';
                                endif;
                            ?>
                            </li>
                        </ul>
                    </div>
                    <div class="clr"></div>
                </div>
            <?php endif; ?>
            <div class="logo-container">
                <div class="logo-container-left">
                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img class="img-responsive" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                        </a>
                        <?php
                    else:
                        print l("", "", array("attributes" => array("class" => "logo-link")));
                    endif;
                    ?>
                </div>
                <div class="clr"></div>
            </div>

            <?php if ($site_name || $site_slogan): ?>
                <div id="name-and-slogan">

                    <?php if ($site_name): ?>
                        <?php if ($title): ?>
                            <div id="site-name">
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
                            </div>
                        <?php else: /* Use h1 when the content title is empty */ ?>
                            <h1 id="site-name">
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
                            </h1>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if ($site_slogan): ?>
                        <div id="site-slogan"><?php print $site_slogan; ?></div>
                    <?php endif; ?>

                </div>
            <?php endif; ?>

            <?php if ($page['header']): ?>
                <div id="header-region">
                    <?php print render($page['header']); ?>
                </div>
            <?php endif; ?>
        </div>
    </header> <!-- /header -->    

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs clearfix">
        <div class="container">
            <h2 class="text-left"><a href="#"><?php print render($title);?></a></h2>
        </div>
        <?php if($breadcrumb): ?>
        <div class="container">
            <?php echo $breadcrumb;?>
        </div>
        <?php endif;?>
    </div>
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content blog-page blog-item">
        <!--======NODE EDIT TABS=====-->
        <?php if ($tabs): ?>
            <div id="tabs-wrapper" class="clearfix">
            <?php endif; ?>
            <?php if ($tabs): ?>
                <?php print render($tabs); ?>
            </div>
        <?php endif; ?> 
        <!--======END OF NODE EDIT TABS=====-->    
        <?php print render($page['messages']); ?>

        <?php print render($page['content']); ?>
        <?php print render($page['content_bottom']); ?>

        <hr>

    </div>    

</div>
<div class="footer-v1 footer">
	<div class="container">
		 <?php print render($page['footer']); ?>
	</div>
</div>
<?php //include('footer.tpl.php'); ?> 

<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
</body>
</html>