<?php
if ($page['toptab']):  
?>
<?php print render($page['toptab']); ?> 
<?php
endif;
?>

<div id="page">
<div id="wrapper">
    <div id="container"><!--  class="clear-block" -->

  <header id="header" role="banner">
<div style="display:block; width:500px; float:right; border:0px #333 solid; position:relative; top:15px; left:-10px; margin:0px 0px 0px 0px; text-align:right; text-transform:uppercase; font-size:10px; color:#ccc;"><a href="/home">home</a>&nbsp;|&nbsp;<a href="/about-us">about us</a>&nbsp;|&nbsp;<a href="/cart">shopping cart</a>&nbsp;|&nbsp;<a href="/contact">contact us<a>&nbsp;|&nbsp;<?php global $user; ?><?php if ($user->uid): ?><?php print l('Logout', 'user/logout') ?>&nbsp;|&nbsp;<?php print l('My Account', 'user/'. $user->uid) ?> 
<?php else: ?>
 <?php print l('Login', 'user') ?>       
<?php endif; ?></div>
    <a href="/home"><img src="/sites/all/themes/ks7/images/fill.gif" width="150" height="120"></a>
 
 
 
<?php print render($page['header']); ?>

  </header>

<div id="topNav"><?php if (isset($main_menu)) : ?>
<div class="topNavRow">          <nav id="main-menu" role="navigation">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see http://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav></div><?php endif; ?>
  </div>
  
    <?php if (isset($secondary_menu)) : ?>
     <nav id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

       


<?php print render($page['slideshow']); ?>


  <div id="main">

 

      
      
    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div><!-- /#content -->



    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside><!-- /.sidebars -->
    <?php endif; ?>

  </div><!-- /#main -->
  <img src="/sites/all/themes/ks7/images/footer_top.jpg"> 

<!-- Block 1 -->
<div class="footerBlock2"><?php
$block = module_invoke('block', 'block_view', '7');
print render($block['content']);
?>
<?php
$block = module_invoke('simplenews', 'block', 'view', 1);
print render($block['content']);
?></div>

<!-- Block 2 -->
<div class="footerBlock1"><?php
$block = module_invoke('block', 'block_view', '1');
print render($block['content']);
?></div>

<!-- Block 3 -->
<div class="footerBlock3"><?php
$block = module_invoke('block', 'block_view', '5');
print render($block['content']);
?></div>

<!-- Block 4 -->
<div class="footerBlock4"><?php
$block = module_invoke('block', 'block_view', '6');
print render($block['content']);
?></div>


<div style="display:block; float:left; width:1024px; text-align:left; font-size:10px; margin:15px auto 0px; padding:10px;  border-top:1px #eee solid;">
&#169; <?php echo date('Y'); ?> Knowing Science LLC.  All Rights Reserved.  Kid Knowledge and Knowing Science are registered trademarks of Knowing Science LLC. Patents Pending
 </div>
 
 


  <?php print render($page['footer']); ?>


</div></div><!-- /#page -->

<?php print render($page['bottom']); ?>