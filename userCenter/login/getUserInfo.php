<?php
$servername="localhost";
$username="root";
$password="123";
$dbname="lfMember";
$tbname="lfMember";

$conn =new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
//	die("连接失败：".$conn->connect_error);
	$message = "系统故障，程序猿正在紧急抢救";
	echo "<script type='text/javascript'>alert('$message');</script>";
	exit();
}

$phone=$_POST['phone'];
$sql="SELECT * FROM ".$tbname." WHERE phone='".$phone."'";
$result=$conn->query($sql);
if($row=$result->fetch_assoc()){
	$info=array('name'=>$row['Realname'],'phone'=>$row['Phone'],'studentNum'=>$row['StudentNum'],
				'gender'=>$row['Gender'],'enroll'=>$row['Enroll'],'email'=>$row['Email']);
	echo json_encode($info);
}else{
	die();
}
?>