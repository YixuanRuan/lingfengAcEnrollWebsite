$(document).ready(function(){
	
	$("#phone").blur(function(){
	var num=document.getElementById("phoneDiv").getElementsByTagName("span").length;
		var str=$.trim($("#phone").val());
		if($.isEmptyObject(str)){
			if(num===0){
		   $("#phone").after("<span style='color:red'>请填写手机号</span>");}
		   }else{
				var phone=/^[0-9]{11,}$/;
				if(str.match(phone)===null){
					if(num===0){
				   $("#phone").after("<span style='color:red'>请输入11位手机号</span>");}
				   }else{
					   $("#phoneDiv span").remove();
				   }
			   }
		
	});
});

$(document).ready(function(){
	$("#pwd").blur(function(){
var num=document.getElementById("pwdDiv").getElementsByTagName("span").length;
		var str=$.trim($("#pwd").val());
		if($.isEmptyObject(str)){
			if(num===0){
		   $("#pwd").after("<span style='color:red'>请设置密码</span>");}
		   }else{
			   $("#pwdDiv span").remove();
		   }
	});
});

$(document).ready(function(){
	$("#nickname").blur(function(){
var num=document.getElementById("nicknameDiv").getElementsByTagName("span").length;
		var str=$.trim($("#nickname").val());
		if($.isEmptyObject(str)){
			if(num===0){
		   $("#nickname").after("<span style='color:red'>请填写昵称</span>");}
		   }else{
			   $("#nicknameDiv span").remove();
		   
		}
	});
});

$(document).ready(function(){
	$("#realname").blur(function(){
var num=document.getElementById("realnameDiv").getElementsByTagName("span").length;
		var str=$.trim($("#realname").val());
		if($.isEmptyObject(str)){
			if(num===0){
		   $("#realname").after("<span style='color:red'>请填写姓名</span>");}
		   }else{
			   $("#realnameDiv span").remove();  
		}
	});
});

$(document).ready(function(){
	
	$("#email").blur(function(){
var num=document.getElementById("emailDiv").getElementsByTagName("span").length;
		var str=$.trim($("#email").val());
		if($.isEmptyObject(str)){
			if(num===0){
		   $("#email").after("<span style='color:red'>请填写邮箱</span>");}
		   }else{
				var email=/^[a-zA-Z0-9_\.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9]+)*\.[a-zA-Z0-9]{2,6}$/;
				if(str.match(email)===null){
					if(num===0){
				   $("#email").after("<span style='color:red'>请输入正确的邮箱</span>");}
				   }else{
					   $("#emailDiv span").remove();
				   }
			   
		}
	});
	
});

$(document).ready(function(){
	
	$("#stuNum").blur(function(){
var num=document.getElementById("studentNumDiv").getElementsByTagName("span").length;
		var str=$.trim($("#stuNum").val());
		if($.isEmptyObject(str)){
			if(num===0){
		   $("#stuNum").after("<span style='color:red'>请填写学号</span>");}
		   }else{
				var stuNum=/^[0-9]{8,}$/;
				if(str.match(stuNum)===null){
					if(num===0){
				   $("#stuNum").after("<span style='color:red'>请输入8位数字学号</span>");}
				   }else{
					   $("#studentNumDiv span").remove();
				   }
			   
		}
	});
	
});

$(document).ready(function(){
	
	$("#enroll").blur(function(){
var num=document.getElementById("enrollDiv").getElementsByTagName("span").length;
		var str=$.trim($("#enroll").val());
		if($.isEmptyObject(str)){
			if(num===0){
		   $("#enroll").after("<span style='color:red'>请填写入学年份</span>");}
		   }else{
				var year=/^[0-9]{4,}$/;
				if(str.match(year)===null){
					if(num===0){
				   $("#enroll").after("<span style='color:red'>请输入4位数字年份</span>");}
				   }else{
					   $("#enrollDiv span").remove();
				   }
			   
		}
	});
	
});





