<style>
 
h1 {
  font-size:23px;
}

h2 {
  font-size:19px;
  margin:20px 0px 15px 15px;
}

.col1
{
width:210px;
}

.col2 {
  width:540px;
  padding:0px;
}

.col3 {
  display:none;
}

table#product {
  width:880px;
}

table#product td {
  padding:4px;
  border:1px #999 solid;
  background:#fff;
  vertical-align: top;
} 

.imagecache-product, .model {
  display:none;
}

.product-body {
  display:block;
  width:860px;
  float:left;
  margin:10px;
  padding:5px;
  border:0px #F00 dotted;
}

.product-body li {
  float:none;
  list-style-type:disc;
  text-indent: -15px;
  margin:0px 0px 0px 25px;
}

.terms {
  display:none;
}

.uc-price, .product-info, .product sell {}

.uc-price-product, .price-prefixes, .uc-price-sell
{
display:inline;
color:#ff6a00;
font-size:16px;
font-weight:600;
margin:20px 0px 0px;
border:0px #F00 dotted;
float:left;
clear:right;
}

.imagecache-product_display, .imagecache-product_list
{
  display:block;
  width:910px;
  margin:0px auto; 
  text-align:center;
}

.tempTitle
{
font-size: 21px;
font-weight:bold;
line-height: 130%;
color:#000080;
}
.add-to-cart {
display:inline;
  float:left;
  clear:right;
}

 </style>


<h2><?php print $title ?></h2>
<div class="imagecache-product_display"><?php print render($content['field_image_cache']); ?></div>
<div class="product-body"><?php print render($content['body']); ?></div> 
<div class="uc-price-sell clearfix"><?php print render($content['display_price']); ?></div> 
<div class="clearfix"></div>
<div class="add-to-cart"><?php print render($content['add_to_cart']); ?></div> 
<div class="clearfix"></div>


