//$(document).ready(function(){
//	$.getJSON("findAc.php",function(ac,status){
//		if(status==="success"){
//			$.each(ac,function(i,content){
//				$("#joinedAc").append()
//			})
//		}
//	});
//})


$(document).ready(function(){
	$.get("findAc.php",function(data,status){
		var x;
		var ac=JSON.parse(data);
		for(x in ac){
			$("#acList").append("<li class='list-group-item' onclick='goToAc("+ac[''+x].eventId+")'> 活动ID："+ac[''+x].eventId+
								" 活动地点："+ac[''+x].location+" 开始时间："+ac[''+x].timeStart+" 结束时间："+ac[''+x].timeEnd+" 发起人："+ac[''+x].laucher+
								"</li>");
		}
	});
});

function goToAc(eventId){
	location.href="joinAc/joinAc.html?eventId="+eventId;
}

//function appendText(order,text,name){
//	var temp=document.createElement("text");
//	temp.setAttribute("class","text "+name);
//	temp.innerHTML=" "+name+":"+text;
//	var node=document.getElementById(""+order);
//	node.appendChild(temp);
//}
//
//
//function appendAc(location,time,laucher,order){
//	var a=document.createElement("a");
//	a.setAttribute("id",""+order);
//	a.setAttribute("href","joinAc/index.php?location="+location+"&time="+time+"&laucher="+laucher);
//	a.innerHTML="<br>";
//	var node=document.getElementById("activities");
//	node.appendChild(a);
//	appendText(order,location,"location");
//	appendText(order,time,"time");
//	appendText(order,laucher,"laucher");
//	
//}