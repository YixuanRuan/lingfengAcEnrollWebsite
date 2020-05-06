// JavaScript Document
$(document).ready(function(){
	function processInfo(){
		var phone=localStorage.getItem("phone");
		$.get("userInfoGetDetailed.php?phone="+phone,function(data){
			var x;
			var info=JSON.parse(data);
			for(x in info){
				if(info[''+x]!==null)
				{$("#"+x).val(""+info[''+x]);}
			}
		});
	}
	
	processInfo();
});