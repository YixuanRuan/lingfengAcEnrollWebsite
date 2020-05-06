<?php
$servername="localhost";
$username="root";
$password="123";
$dbname="lfMember";
$tbname="lfMember";

$conn =new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("连接失败：".$conn->connect_error);
}

$phone=$_GET['phone'];
$sql="SELECT * FROM ".$tbname." WHERE Phone='".$phone."'";
$result=$conn->query($sql);
if($row=$result->fetch_assoc()){
	$info=array('name'=>$row['Realname'],'phone'=>$row['Phone'],'studentNum'=>$row['StudentNum'],
				'gender'=>$row['Gender'],'enroll'=>$row['Enroll'],'email'=>$row['Email']);
	echo json_encode($info);
}else{
	die();
}
$conn->close();
?>