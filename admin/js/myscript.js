$(document).ready(function(){
	$("#pageForm").submit(function(){
		if($("#pageTitle").val() == ""){
			$("span.pageTitle").text("*Required");
			return false;
		}
	});
	$(".delPage").click(function(){
		return confirm("Are you sure to delete the page?");
	});
	
	$("#password").submit(function(){
		if($("#oldPassword").val() == ""){
			$("span.oldPassword").text("*Required");
			return false;
		}
		if($("#newPassword1").val() == ""){
			$("span.newPassword1").text("*Required");
			return false;
		}
		if($("#newPassword2").val() == ""){
			$("span.newPassword2").text("*Required");
			return false;
		}
		if($('#newPassword1').val() !=$('#newPassword2').val()){
			$("span.newPassword2").text("Password and Confirm Password Doesn't Match");
			return false;
		}
	});
	
	$("#oldPassword").focus(function(){
		$("span.oldPassword").text("");
	});
	$("#newPassword1").focus(function(){
		$("span.newPassword1").text("");
	});
	$("#newPassword2").focus(function(){
		$("span.newPassword2").text("");
	});
	
	$("#email").submit(function(){
		if($("#oldEmail").val()==""){
			$("span.oldEmail").text("*Required");
			return false;
		}
		if($("#newEmail").val()==""){
			$("span.newEmail").text("Required");
			return false;
		}
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		
		var oldEmail = $("#oldEmail").val();

		if(reg.test(oldEmail)==false){
			$("span.oldEmail").text("Invalid Email Address");
			return false;
		}
		
		var newEmail = $("#newEmail").val();
		if(reg.test(newEmail)==false){
			$("span.newEmail").text("Invalid Email Address");
			return false;
		}
		
	});
	
	$("#oldEmail").focus(function(){
		$("span.oldEmail").text("");
	});
	$("#newEmail").focus(function(){
		$("span.newEmail").text("");
	});
	
	$("#password").submit(function(){
		if($("#password1").val() ==""){
			$("span.password1").text("*Required");
			return false;
		}
		if($("#password2").val() ==""){
			$("span.password2").text("*Required");
			return false;
		}
		if($("#password1").val()!=$("#password2").val()){
			$("span.password2").text("*Password doesn't match");
			return false;
		}
	});
	
});