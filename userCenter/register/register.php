<?php
$servername="localhost";
$username="root";
$password="123";
$dbname="lfMember";
$tbname="lfMember";

$phone=$_POST['phone'];
$pwd=$_POST['pwd'];
$nickname=$_POST['nickname'];
$realname=$_POST['realname'];
$email=$_POST['email'];
$studentNum=$_POST['studentNum'];
$gender=$_POST['gender'];
$enroll=$_POST['enroll'];
$auth=$_POST['auth'];

if($auth==="ruanyixuan"){
	$val=1;
}else{
	$val=0;
}

$conn =new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	echo "程序猿正在努力维修中......";
};

$sql0 = "INSERT INTO ".$tbname."(Phone,Pwd,Nickname,Realname,Email,StudentNum,Gender,Enroll,Auth) VALUES ('".$phone."','".$pwd."','".$nickname."','".$realname."','".$email."','".$studentNum."','".$gender."','".$enroll."','".$val."');";

$sql1 = "CREATE TABLE j".$phone." (
		EventId int 
		)";
$sql2 = "CREATE TABLE l".$phone." (
		EventId int 
		)";

if(mysqli_query($conn,$sql0)){
	mysqli_query($conn,$sql1);
	mysqli_query($conn,$sql2);
	echo "<script>localStorage.setItem('phone','".$phone."'); location.href=\"../../homePage".$val.".html\"</script>";
}else{
	echo"程序猿正在努力维修中......";
}


$conn->close();


?>


