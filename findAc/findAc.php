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


$sql = "SELECT * FROM $tbname";
$result = $conn->query($sql);
if($result->num_rows>0){
	$i=1;
	$data=array();
	while($row = $result->fetch_assoc()){	$data[''.$i]=array('eventId'=>$row['EventId'],'laucher'=>$row['Laucher'],'phone'=>$row['Phone'],'enroll'=>$row['Enroll'],'location'=>$row['Location'],'timeStart'=>$row['TimeStart'],'timeEnd'=>$row['TimeEnd'],'budget'=>$row['Budget'],'num'=>$row['Num'],'watchout'=>$row['Watchout']);
		$i++;
	}
}
	echo json_encode($data);
$conn->close();
?>