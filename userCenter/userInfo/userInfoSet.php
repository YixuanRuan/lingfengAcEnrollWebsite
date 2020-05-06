<?php
$servername="localhost";
$username="root";
$password="123";
$dbname="lfMember";
$tbname="lfMember";

$phone=$_POST['phone'];
$nickname=$_POST['nickname'];
$realname=$_POST['realname'];
$email=$_POST['email'];
$studentNum=$_POST['studentNum'];
$gender=$_POST['gender'];
$enroll=$_POST['enroll'];
$idNum=$_POST['idNum'];
$birthday=$_POST['birthday'];
$emergencyContactName=$_POST['emergencyContactName'];
$emergencyContactGender=$_POST['emergencyContactGender'];
$emergencyContactPhone=$_POST['emergencyContactPhone'];
$specialties=$_POST['specialties'];
$outdoorExperience=$_POST['outdoorExperience'];

$conn =new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	echo "程序猿正在努力维修中......";
};

$sql = "UPDATE $tbname SET Nickname='$nickname',
	Realname='$realname',Email='$email',StudentNum='$studentNum',Gender='$gender',
	Enroll='$enroll',IdNum='$idNum',Birthday='$birthday',EmergencyContactName='$emergencyContactName',
	EmergencyContactGender='$emergencyContactGender',EmergencyContactPhone='$emergencyContactPhone',
	Specialties='$specialties',OutdoorExperience='$outdoorExperience' WHERE Phone='$phone'";

if(mysqli_query($conn,$sql)){
	echo "<script>location.href='userInfo.html'</script>";
}else{
	echo"程序猿正在努力维修中......";
}

$conn->close();
?>
