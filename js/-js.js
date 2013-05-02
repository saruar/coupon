$(document).ready(function(){
	$("#btn_coupon").click(function(){
		var coupon 		= $("#coupon").val();
		var cartTotal	= $(".simpleCart_total").text();
		cartTotal 		= cartTotal.substring(1);
		
		$.post(
			"discount.php",
			{'coupon':coupon, 'cartTotal':cartTotal},
			function(data) {
				data = parseFloat(data);
				data = data.toFixed(2);
				$("#coupon_discount").text(data);
			}
			)
	});
});