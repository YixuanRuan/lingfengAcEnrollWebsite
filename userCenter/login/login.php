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
$password=$_POST['pwd'];

$sql="SELECT * FROM $tbname WHERE Phone='".$phone."'";
$result = $conn->query($sql);


if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		if($row['Pwd']===$password){
			$val=$row['Auth'];
			echo '<script type="text/javascript"> window.localStorage.setItem("phone","'.$phone.'");
			window.localStorage.setItem("pwd","'.$pwd.'");
			window.location.href="../../homePage'.$val.'.html";</script>';
			exit();
		}
	}
	$message = "没有注册/密码/姓名错误（请重新登录或注册）";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo '<script type="text/javascript"> window.location.href="login.html";</script>';
	exit();
}
$message = "没有注册/密码/姓名错误（请重新登录或注册）";
echo "<script type='text/javascript'>alert('$message');</script>";
echo '<script type="text/javascript"> window.location.href="login.html";</script>';

?>