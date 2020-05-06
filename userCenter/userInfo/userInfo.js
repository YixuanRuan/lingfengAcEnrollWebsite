// JavaScript Document
$(document).ready(function(){
	$('#setUserInfoBtn').click(function(){
		location.href="setUserInfo.html";
	});
	
	$("#backHome").click(function(){
		var phone=localStorage.getItem('phone');
		$.get("../../getAuth.php?phone="+phone,function(data){
			location.href="../../homePage"+data+".html";
		});
	});
	
	var $form = $('form');
   	$form.submit(function(){
		$.post($(this).attr('action'),function(response){
			$("p").html("hello");
		});
		return false;
//		, $(this).serialize()
   	});
});
