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
		grandTotal();
	});
	
	// Calculating Shipping
	$("#country").change(function(){
		shipping();
		grandTotal();
	});
	
	$("#btn_shipping").click(function(){
		shipping();
		grandTotal();
	});
	
	// To print the order
	$("#print").click(function(){
		//$("#btn_shipping").remove();
		//$(".itemremove").remove();
		PrintElem("#checkoutrow");
		
	});
	
});

// Function for Shipping
function shipping (){
	var qtyObj = $(".itemQuantity");
	var qty = '0';
	var frist = 0;
	
	qtyObj.each(function(){
		if(frist==0){
			frist = 1;
		}
		else {
			quantity = parseFloat($(this).text());
			qty = parseFloat(qty) + quantity;
		}
		
	});
	
	shipping_country = $("#country").val();
	
	if(shipping_country=="US"){
		$("#shipping_val").text("$"+"0.00");
	}
	else {
		shippingVal = qty *1;
		shippingVal = shippingVal.toFixed(2);
		$("#shipping_val").text("$ "+shippingVal);
	}
}

/*****************************	Function of Printing 		*********************************/
function PrintElem(elem){
        Popup($(elem).html());
    }

function Popup(data) {
        var mywindow = window.open('', 'Order');
        
		html = "<html><head><title>Order</title>";
		html += '<link rel="stylesheet" href="css/media.css" type="text/css" />';
		html += '</head><body >';
		html += data;
		html += '</body></html>';
		
		mywindow.document.open();
		mywindow.document.write(html);
		mywindow.document.close();
        mywindow.print();
        mywindow.close();
        return true;
    }
	
/***********************************************		Function to Calculate Total 	********************************/
function total(){
	itemTotal = $(".itemTotal");
	first = 0;
	totalVal = 0;
	
	itemTotal.each(function(){
		if(first==0){
			first = 1;
		}
		else {
			currentVal = $(this).text();
			currentVal	= currentVal.substring(1);
			
			totalVal += parseFloat(currentVal);
		}
	});
	totalVal = totalVal.toFixed(2);
	
	$("#total").text("$"+totalVal);
}

/*****************************************			Function to calculate Grand Total 	************************************/
function grandTotal(){
	subTotal 	= $(".simpleCart_total").text();
	subTotal	= subTotal.substring(1);
	
	
	shippingVal 	= $("#shipping_val").text();
	shippingVal		= shippingVal.substring(1);
	
	couponDiscount 	= $("#coupon_discount").text();
	if(couponDiscount==''){
		couponDiscount=0;
	}
	
	finalVal = parseFloat(subTotal) + parseFloat(shippingVal) - parseFloat(couponDiscount);

	$("#grand_total").text("$"+finalVal);
	//alert(shippingVal);
}

$(window).load(function(){
	total();
	grandTotal();
});

timeoutId 	= window.setInterval(total,1000);	
timeoutId2 	= window.setInterval(grandTotal,1000);	