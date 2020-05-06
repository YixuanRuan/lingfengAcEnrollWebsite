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

$phone=$_GET['phone'];
$sql="SELECT * FROM ".$tbname." WHERE phone='".$phone."'";
$result=$conn->query($sql);
if($row=$result->fetch_assoc()){
	$info=array('realname'=>$row['Realname'],'nickname'=>$row['Nickname'],'phone'=>$row['Phone'],'studentNum'=>$row['StudentNum'],
				'gender'=>$row['Gender'],'enroll'=>$row['Enroll'],'email'=>$row['Email'],
			    'idNum'=>$row['IdNum'],'birthday'=>$row['Birthday'],'emergencyContactName'=>$row['EmergencyContactName'],
			    'emergencyContactGender'=>$row['EmergencyContactGender'],'emergencyContactPhone'=>$row['EmergencyContactPhone'],
			    'specialties'=>$row['Specialties'],'outdoorExperience'=>$row['OutdoorExperience']);
	echo json_encode($info);
}else{
	die();
}
?>