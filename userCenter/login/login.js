//function processInfo(){
//	var phone=localStorage.getItem('phone');
//	var pwd=localStorage.getItem('pwd');
//	
//	if(name!==null){
//		document.getElementById('phone').value=phone;
//		document.getElementById('pwd').value=pwd;
//	}
//}
//
$(document).ready(function(){
	$(".register").click(function(){
		location.href="../register/register.html";
	});
	
//	processInfo();
	
//	$("#loginBtn").submit(function(){
//		
//		$.post("getUserInfo.php",{phone:''+$("#phone").val()},
//				  function(result,status){
//				var dic=JSON.parse(result);
//			$.each(dic,function(i,field){
//				localStorage.setItem(i,field);
//			});
//		});
//	});
	
}); 

function setLocal(){
	localStorage.setItem("phone",""+$("#phone").val());
}