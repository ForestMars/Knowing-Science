<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<?php
$output = '';
$body = strip_tags($node->body['und'][0]['value']);
  $imageInfo = $node->field_image_cache['und'][0]['uri'];
  $productImage = file_create_url($imageInfo);
  $output .= '<div class="ms-slide">';
  $output .= '<img class="ms-brd" width=550px height=550px src="'. $productImage. '" data-src="' .$productImage. '" alt="'. $imageAlt. '">';
  $output .='<br /><em>'.$imageAlt.'</em>';
  $output .= '</div>';

?>
<div class="row">
  <div class="col-md-6 md-margin-bottom-50">
    <div class="ms-showcase2-template">
    <!-- Master Slider -->
      <div class="master-sliders ms-skin-default" id="mastersliderdd">
        <?php print $output ;?>
      </div>
    <!-- End Master Slider -->
    </div>
  </div>
  <div class="col-md-6">
    <div class="shop-product-heading">
        <h2><?php print $node->title; ?></h2>
    </div><!--/end shop product social-->

    <p><?php echo substr($body,0,126).'...';?></p><br>

    <ul class="list-inline shop-product-prices margin-bottom-30">
        <li class="shop-red"><?php print '$'.substr($node->sell_price,0,-3); ?></li>
        <li class="line-through"><?php print '$'.substr($node->list_price,0,-3); ?></li>
    </ul><!--/end shop product prices-->

    <h3 class="shop-product-title">Quantity</h3>
    <div class="margin-bottom-40">
      <div class="qty">
        <input type="text" id="qty" value="1" name="qty" class="quantity-field">
      </div>
      <?php
      $form_value =  drupal_get_form('uc_product_add_to_cart_form_'.$node->nid, $node);
      print drupal_render($form_value);
      
      ?>
    </div><!--/end product quantity-->    

    <ul class="list-inline add-to-wishlist add-to-wishlist-brd">
        <li class="wishlist-in">
            <i class="fa fa-heart"></i>
            <a href="#">Add to Wishlist</a>
        </li>
        <li class="compare-in">
            <i class="fa fa-exchange"></i>
            <a href="#">Add to Compare</a>
        </li>
    </ul>    
    <p class="wishlist-category"><strong>Categories:</strong> <a href="#">Book</a></p>
  </div>
</div>
</div>
<div class="tab-v5">
  <div class="tab-content">
  <!-- Description -->
  <div class="description" id="description">
    <div class="row">
      <div class="col-md-7">
        <p><?php print $node->body['und'][0]['value'];?></p><br>
      </div>
    </div>
  </div>
  <!-- End Description -->
   </div> 
  <!-- Reviews -->                
</article>
