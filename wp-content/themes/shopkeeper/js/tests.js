jQuery(function($) {
	
	"use strict";

	// Checkout Form Submit Arrow at Focus

	$('.woocommerce-cart #content table.cart td.actions .coupon #coupon_code').on('focus', function() {
		$('.woocommerce-cart #content table.cart td.actions .coupon').addClass('focus');
	});

	$('.woocommerce-cart #content table.cart td.actions .coupon #coupon_code').on('focusout', function() {
		$('.woocommerce-cart #content table.cart td.actions .coupon').removeClass('focus');
	});


	$('form.checkout_coupon #coupon_code').on('focus', function() {
		$('form.checkout_coupon .checkout_coupon_inner').addClass('focus');
	});

	$('form.checkout_coupon #coupon_code').on('focusout', function() {
		$('form.checkout_coupon .checkout_coupon_inner').removeClass('focus');
	});


	
	$(window).load(function() {


	
	});

	
	$(window).resize(function() {


	
	});	

	
    $(window).scroll(function() {


        
    });	 

});
