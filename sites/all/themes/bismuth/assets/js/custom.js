/* Write here your custom javascript codes */


jQuery(document).ready(function () {
   jQuery(".col-md-4 .service .triptych a").removeAttr("href");
   jQuery(".node-type-product .col-sm-6 .field-type-image img").after("<div class='caption'><i>Photo is representation only. Actual items may differ</i></div>");
    jQuery(".node-type-product-kit .col-sm-6 .field-type-image img").after("<div class='caption'><i>Photo is representation only. Actual items may differ</i></div>");
    //customize the drupal 7 search form
    var searchboxdefault = 'Search';
    jQuery("#search-block-form input#edit-search-block-form--2").val(searchboxdefault);
    jQuery("#search-block-form input#edit-search-block-form--2").focus(function () {
        if (jQuery(this).val() === searchboxdefault)
            jQuery(this).val('');
    });
    jQuery("#search-block-form input#edit-search-block-form--2").blur(function () {
        if (jQuery(this).val() === '')
            jQuery(this).val(searchboxdefault);
    });
    
    jQuery("#search-block-form #edit-submit").val("Go");
    
    //end of drupal search form customization
    
    //responsive menu drop down
    jQuery(".responsive-menus.responsified .responsive-menus-simple li.menuparent span.nolink").click(function(event){
       var currentContent = jQuery(this).siblings('ul.rm-removed');
       $('.responsive-menus.responsified .responsive-menus-simple li.menuparent ul').not(currentContent).slideUp();
       currentContent.slideToggle();
    });
	$('#block-menu-menu-footer-menu .menu li').append('<i class="fa fa-angle-right"></i>');
});