<?php
$servername="localhost";
$username="root";
$password="123";

$phone=$_GET['phone'];
$eventId=$_GET['eventId'];

$dbname1="lfMember";
$tbname11="j".$_GET['phone'];

// delete the event from the Member's Joined Ac table 
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

?>