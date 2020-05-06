<?php
$servername="localhost";
$username="root";
$password="123";
$dbname="lfAc";
$tbname="lfAc";
$conn =new mysqli($servername,$username,$password,$dbname);
	
if($conn->connect_error){
	die("连接失败：".$conn->connect_error);
}
	
$eventId=$_GET['eventId'];

$sql="SELECT * FROM $tbname WHERE EventId=$eventId";
$result=$conn->query($sql);
if($result){
	if($row=$result->fetch_assoc()){
		$data=array('eventId'=>$row['EventId'],'laucher'=>$row['Laucher'],
					'phone'=>$row['Phone'],'enroll'=>$row['Enroll'],'location'=>$row['Location'],
					'timeStart'=>$row['TimeStart'],'timeEnd'=>$row['TimeEnd'],'budget'=>$row['Budget'],
					'num'=>$row['Num'],'watchout'=>$row['Watchout']);
		echo json_encode($data);
	};
}else{
	die();
}
$conn->close();
?>