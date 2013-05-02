<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>
	
    <div id="content">
    	<?php
			include("class/class.coupon.php");
			$coupon = new Coupon();
			if(isset($_GET['id'])){
				$coupon->del($_GET['id']);
				echo $coupon->msg;
			}
		?>
    	<h2>List of all Coupons</h2>
        <table id="tbl_couponlist">
        	<tr>
            	<th>Coupon Code</th>
                <th>Price</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Min Val</th>
                <th>Max No.</th>
                <th>Used No.</th>
                <th>Action</th>
            </tr>
            
            <?php
			$result = $coupon->show_all();
			
			while($row = mysql_fetch_object($result)):
			?>
			<tr>
            	<td><?php echo $row->couponCode; ?></td>
                <td><?php echo $row->couponPrice; ?></td>
                <td><?php echo date("Y-m-d", strtotime($row->startDate)); ?></td>
                <td><?php echo date("Y-m-d",strtotime($row->endDate)); ?></td>
                <td><?php echo $row->minimumVal; ?></td>
                <td><?php echo $row->usageno; ?></td>
                <td><?php echo $row->usedVal; ?></td>
                <td><a href="listcoupon.php?id=<?php echo $row->id; ?>">Delete</a></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
<?php include("includes/footer.php"); ?>