/**
 * Look under your chair! console.log FOR EVERYONE!
 *
 * @see http://paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
 */
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());

function displ(ddd) { if (document.getElementById(ddd).style.display == 'none') {document.getElementById(ddd).style.display = 'block'} else {document.getElementById(ddd).style.display = 'none'} } 

/**
 * Page-specific call-backs
 * Called after dom has loaded.
 */
var GLOBAL = {

  common : {
    init: function(){
      $('html').removeClass('no-js').addClass('js');
    }
  },

  templateIndex : {
    init: function(){

    }
  },

  templateProduct : {
    init: function(){
      
    }
  },

  templateCart : {
    init: function(){
      
    }
  }

}



/**
 * Fire function based upon attributes on the body tag.
 * This is the reason for "template{{ template | camelize }}" in layout/theme.liquid
 *
 * @see http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
 */
var UTIL = {

  fire : function(func,funcname, args){
    var namespace = GLOBAL;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function'){
      namespace[func][funcname](args);
    }
  },

  loadEvents : function(){
    var bodyId = document.body.id;

    // hit up common first.
    UTIL.fire('common');

    // do all the classes too.
    $.each(document.body.className.split(/\s+/),function(i,classnm){
      UTIL.fire(classnm);
      UTIL.fire(classnm,bodyId);
    });
  }

};
$(document).ready(UTIL.loadEvents);





/**
 * Ajaxy add-to-cart
 */
/* Handle Add to Cart */
function handleAddToCart(){
	"use strict";
	$('body').on('click', '.add-to-cart',function(e) {
		if (typeof e !== 'undefined') e.preventDefault();
		var $this = $(this);
		
		// Hide Modal
		$('.modal').modal('hide');
		
		// Fly image to Cart
		var parent = $this.parents($this.attr('data-parent'));
		var image = $(parent).prev().find('.image-fly');
		flyToCart(image, '#umbrella .cart-link', 700);
		
		// Notify Cart
		var cartURL = '../../../asset/ajax/_product-cart.html';
		$.ajax({
			type: 'GET',
			url: cartURL,
			beforeSend: function () {
			},
			success: function (data) {
			  notifyProduct(data);
			},
			dataType: "html"
		});
	});
}
function flyToCart(imgobj, cart, time){
	"use strict";
  
  if(imgobj){
    var imgsrc = imgobj.attr('src');

    imgobj.animate_from_to(cart, {
      pixels_per_second: time, 
      initial_css: {
        'image': imgsrc
      },
      callback: function(){
      }
    });
  }
}
function notifyProduct($info){
	"use strict";
  var wait = setTimeout(function(){
    $.jGrowl($info,{life: 5000 });	
  },200);
}
/* Handle Add to Wish List */
function handleAddToWL(){
	"use strict";
	$('body').on('click', '.add-to-wish-list',function(e) {
		if (typeof e !== 'undefined') e.preventDefault();
		var $this = $(this);
		
		// Hide Modal
		$('.modal').modal('hide');
		// Notify Cart
		var cartURL = './ajax/_product-wish-list.html';
		$.ajax({
			type: 'GET',
			url: cartURL,
			beforeSend: function () {
			},
			success: function (data) {
			  notifyProduct(data);
			},
			dataType: "html"
		});
	});
}

jQuery(document).ready(function($) {
	"use strict";
	handleAddToCart();
	handleAddToWL();
});
