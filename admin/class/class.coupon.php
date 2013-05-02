<?php
	class Coupon{
		public $msg;
		public $couponId;
		public $couponCode;
		public $couponPrice;
		public $startDate;
		public $endDate;
		public $minimumVal;
		public $usageno;
		public $usedVal;
		
		public function __construct(){
		}
		
		public function add(){
			$query = "INSERT INTO coupon(couponCode, couponPrice, startDate, endDate, minimumVal, usageno) VALUES('$this->couponCode', '$this->couponPrice', '$this->startDate', '$this->endDate', '$this->minimumVal', '$this->usageno')";	
			$result = mysql_query($query);
			if($result){
				$this->msg = "<p class='msg'>Coupon Added Successfully.</p>";
			}
			else {
				$this->msg = "<p class='msg'>There is a problem to add the coupon.</p>";
			}
		}
		
		public function show_all(){
			$query = "SELECT * FROM coupon ORDER BY id DESC";
			return mysql_query($query);
		}
		
		public function del($id){
			$query = "DELETE FROM coupon WHERE id='$id'";
			$result = mysql_query($query);
			if(mysql_affected_rows()>0){
				$this->msg = "<p class='msg'>Coupon has been deleted successfully.</p>";
			}
			else {
				$this->msg = "<p class='msg'>There is a problem to delete the coupon.</p>";
			}
		}
	}
?>