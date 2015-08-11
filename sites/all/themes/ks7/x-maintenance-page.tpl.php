<?php
 
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>

<title><?php print $head_title ?> | <? echo $thisTitle; ?></title>

<meta name="keywords" content="<? echo $thisKeys ?>, <?php print $node->field_keywords['0']['value'] ?>">
<meta name="description" content="<? echo $thisDesc ?>">
<meta name="publisher" content="Knowing Science, LLC">
<meta name="copyright" content="<?php echo date('Y'); ?> Knowing Science, LLC">
<meta name="robots" content="index,follow">
<meta NAME="revisit-after" CONTENT="2 days">


    <?php print $styles ?>
    <?php print $scripts ?>
  <!--[if IE 7]>
<link type="text/css" rel="stylesheet" media="all" href="http://www.knowingscience.com/sites/all/themes/ks/fix-ie.css" />
<![endif]-->
<!--[if lt IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
    
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1013451-43']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  </head>
  <body<?php print phptemplate_body_class($leftbox, $rightbox, $specialhome, $contentbottom, $footer); ?>>
<img src="http://www.knowingscience.com/sites/all/themes/ks3/images/fill.gif">
 
      <div style="display:block; width:500px; float:right; border:0px #333 solid; position:relative; top:15px; left:-10px; margin:0px 0px 0px 0px; text-align:right; text-transform:uppercase; font-size:10px; color:#ccc;"><a href="/home">home</a>&nbsp;|&nbsp;<a href="/about-us">about us</a>&nbsp;|&nbsp;<a href="/cart">shopping cart</a>&nbsp;|&nbsp;<a href="/contact-us">contact us<a>&nbsp;|&nbsp;<?php global $user; ?><?php if ($user->uid): ?><?php print l('Logout', 'logout') ?>&nbsp;|&nbsp;<?php print l('My Account', 'user/'. $user->uid) ?> 
<?php else: ?>
 <?php print l('Login', 'user') ?>       
<?php endif; ?></div>
      <div id="header"><a href="/home"><img src="/sites/all/themes/ks3/images/fill.gif" width="150" height="120"></a>
 
 </div> 

      
      
  <!-- /header -->

 
<div id="topNav"><?php if (isset($primary_links)) : ?>
<div class="topNavRow"><?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?></div><?php endif; ?>
 
<?php if (isset($secondary_links)) : ?>
          <div class="seecNavRow"><?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?></div>
        <?php endif; ?> 
       
 </div>


      
  <!--       COLUMN 1 -->
            <?php if ($leftbox): ?>
   
          <?php print $leftbox ?>
      <?php endif; ?>
     
  

      <div id="center"><!--<div id="squeeze"> <div class="right-corner"><div class="left-corner"> -->
          <?php print $breadcrumb; ?>
          <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
          <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
          <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
          <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
          <?php print $help; ?>
          <div  id="contentArea">
          
          
          <?php if ($slideshow): ?>
   
          <?php print $slideshow ?>
      <?php endif; ?>
      
            <?php print $content ?>
          </div>
          <?php print $feed_icons ?>


      
      </div><!--</div> </div></div> /.left-corner, /.right-corner, /#squeeze, /#center -->

 


  </body>
</html>
