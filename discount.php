<?php 
include("admin/config.php");
$coupon 	= $_POST['coupon'];
$cartTotal	= $_POST['cartTotal'];
$date = date("Y-m-d");
$query = "SELECT couponPrice FROM coupon WHERE '$date' BETWEEN startDate AND endDate AND couponCode='$coupon' AND usedVal<usageno AND minimumVal<='$cartTotal'";
$result = mysql_query($query);

if(mysql_num_rows($result)>0){
	$query2 = "UPDATE coupon SET usedVal=usedVal+1 WHERE couponCode='$coupon'";
	mysql_query($query2);
	$row = mysql_fetch_object($result);
	echo $row->couponPrice;
}
else {
	echo "0.00";
}
?>