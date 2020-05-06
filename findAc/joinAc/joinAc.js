function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
}

var eventId=getUrlParameter('eventId');
$("#acDetail").append(""+eventId);

$(document).ready(function(){
	$.get("getAcDetail.php?eventId="+eventId,function(data){
		var x;
		var ac=JSON.parse(data);
		for(x in ac){
			$("#"+x).append("<span id='detailInfo'>"+ac[""+x]+"</span>");
		}
	});
	
	$("#joinAcBtn").click(function(){
		var phone=localStorage.getItem("phone");
		$.get("joinAc.php?phone="+phone+"&eventId="+$('#eventId span').text());
		$.get("../../getAuth.php?phone="+phone,function(data){
			location.href="../../homePage"+data+".html";
		});
	});
});



























