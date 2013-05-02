<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>
<script type="text/javascript" src="js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script>
$(document).ready(function(){
	$("#startDate").datepicker({
		minDate:0,
		dateFormat:"yy-mm-dd",
		onClose:	function(selectedDate){
			$("#endDate").datepicker('option','minDate',selectedDate)
		}
		});
	var minD = $("#startDate").val();
	$("#endDate").datepicker({
		dateFormat:"yy-mm-dd"
		});
});
</script>
    <div id="content">
    <?php
	include("class/class.coupon.php");
	
	if(isset($_POST['submit'])):
		$coupon = new Coupon();
		$coupon->couponPrice 		= $_POST['couponPrice'];
		$coupon->couponCode			= $_POST['couponCode'];
		$coupon->startDate			= $_POST['startDate'];
		$coupon->endDate			= $_POST['endDate'];
		$coupon->minimumVal			= $_POST['minimumVal'];
		$coupon->usageno			= $_POST['usageno'];
		
		$coupon->add();	
		echo $coupon->msg;
	endif;
	?>
    	<h2>Add new coupon</h2>
        <form name="frmCoupon" id="frmCoupon" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table id="tbl_addcoupon">
                <tr>
                    <td>Coupon Code:</td>
                    <td><input type="text" name="couponCode" id="couponCode" /></td>
                </tr>
                <tr>
                    <td>Coupon Price($):</td>
                    <td><input type="text" name="couponPrice" id="couponPrice" /></td>
                </tr>
                <tr>
                    <td>Coupon Start Date:</td>
                    <td><input type="text" name="startDate" id="startDate" /></td>
                </tr>
                <tr>
                    <td>Coupon End Date:</td>
                    <td><input type="text" name="endDate" id="endDate" /></td>
                </tr>
                <tr>
                    <td>Minimum Value($):</td>
                    <td><input type="text" name="minimumVal" id="minimumVal" /></td>
                </tr>
                <tr>
                    <td>Max. number of usage:</td>
                    <td><input type="text" name="usageno" id="usageno" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit" /></td>
                </tr>
            </table>
        </form>
    </div>
<?php include("includes/footer.php"); ?>