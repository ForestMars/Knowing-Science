<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<?php
$output = '';
  $imageInfo = $node->field_image_cache['und'];
  foreach($imageInfo as $val){
    $productImage = file_create_url($val['uri']);
    $imageAlt = $val->field_image_cache['alt'];
    $imageBig = '';
    $output .= '<div class="ms-slide">';
    $output .= '<img class="ms-brd" width=550px height=550px src="'. $productImage. '" data-src="' .$productImage. '" alt="'. $imageAlt. '">';
     $output .= '<img class="ms-thumb" width=180px height=180px src="'. $productImage .'" alt="thumb">';
    $output .= '</div>';
  }

?>
<div class="row">
  <div class="col-md-6 md-margin-bottom-50">
    <div class="ms-showcase2-template">
    <!-- Master Slider -->
      <div class="master-slider ms-skin-default" id="masterslider">
        <?php print $output ;?>
      </div>
    <!-- End Master Slider -->
    </div>
  </div>
  <div class="col-md-6">
    <div class="shop-product-heading">
        <h2><?php print $node->title; ?></h2>
    </div><!--/end shop product social-->
 
    <ul class="list-inline product-ratings margin-bottom-30">
        <li class="product-review-list">
            <span>(<?php print $node->comment_count;?>) <a href="#">Review</a> | <a href="#"> Add Review</a></span>
        </li>
    </ul><!--/end shop product ratings-->

    <p><?php print substr($node->body['und'][0]['value'], 0, 25);?></p><br>

    <ul class="list-inline shop-product-prices margin-bottom-30">
        <li class="shop-red"><?php print '$'.$node->sell_price; ?></li>
        <li class="line-through"><?php print '$'.$node->list_price; ?></li>
    </ul><!--/end shop product prices-->

    <h3 class="shop-product-title">Quantity</h3>
    <div class="margin-bottom-40">
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
  <ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
    <li><a href="#reviews" role="tab" data-toggle="tab">Reviews (<?php print $node->comment_count;?>)</a></li>
  </ul>
  
  <div class="tab-content">
  <!-- Description -->
  <div class="tab-pane fade in active" id="description">
  <div class="row">
    <div class="col-md-7">
      <p><?php print $node->body['und'][0]['value'];?></p><br>
      
      <h3 class="heading-md margin-bottom-20">Specifies</h3>
      <div class="row">
        <div class="col-sm-6">
          <ul class="list-unstyled specifies-list">
            <li><i class="fa fa-caret-right"></i>Product Type: <span><?php print $node->field_product_type['und'][0]['value'];?></span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- End Description -->
  
  <!-- Reviews -->                
  <div class="tab-pane fade" id="reviews">
  <div class="product-comment margin-bottom-40">
    <div class="product-comment-in">
      <img class="product-comment-img rounded-x" src="assets/img/team/01.jpg" alt="">
      <div class="product-comment-dtl">
      <h4>Mickel <small>22 days ago</small></h4>
      <p>I like the green colour, it's very likeable and reminds me of Hollister. A little loose though but I am very skinny</p>
        <ul class="list-inline product-ratings">
        <li class="reply"><a href="#">Reply</a></li>  
      </ul>
      </div>
    </div>    
  </div>
  <?php print render($content['comments']); ?>

</article>

<script>
    jQuery(document).ready(function() {
      console.log('tttt');
        App.init();
        App.initScrollBar();        
        OwlCarousel.initOwlCarousel();     
        MasterSliderShowcase2.initMasterSliderShowcase2();
    });
</script>