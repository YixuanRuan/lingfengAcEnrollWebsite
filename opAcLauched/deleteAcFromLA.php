<?php
$servername="localhost";
$username="root";
$password="123";

$phone=$_GET['phone'];
$eventId=$_GET['eventId'];

$dbname1="lfMember";
$tbname11="l".$phone;
$dbname2="lfAc";
$tbname21="lfAc";
$tbname22="a".$eventId;

// delete the event from the Member's Lauched Ac table 
$conn1 =new mysqli($servername,$username,$password,$dbname1);
	
if($conn1->connect_error){
	die("连接失败：".$conn1->connect_error);
}

$sql1="DELETE FROM $tbname11 WHERE EventId=$eventId";

if($conn1->query($sql1)){
}else{
	die();
}

$conn1->close();

// delete the event from lfAc
$conn2 =new mysqli($servername,$username,$password,$dbname2);
$sql2="DELETE FROM $tbname21 WHERE EventId=$eventId";
$sql3="DROP TABLE $tbname22";
if($conn2->query($sql2)&&$conn2->query($sql3)){
}else{
	die();
}

$conn2->close();

?>