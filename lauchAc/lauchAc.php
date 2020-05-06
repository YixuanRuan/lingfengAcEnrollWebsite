<?php
$servername="localhost";
$username="root";
$password="123";
$dbname1="lfAc";
$tbname11="lfAc";
$dbname2="lfMember";
$tbname21="GLOBAL";


$laucher=$_POST['laucher'];
$phone=$_POST['phone'];
$enroll=$_POST['enroll'];
$location=$_POST['location'];
$timeStart=$_POST['timeStart'];
$timeEnd=$_POST['timeEnd'];
$budget=$_POST['budget'];
$num=$_POST['num'];
$watchout=$_POST['watchout'];


$conn1 =new mysqli($servername,$username,$password,$dbname2);

if($conn1->connect_error){
	die("连接失败：".$conn1->connect_error);
}

$sql1 = "SELECT * FROM $tbname21";
$result=$conn1->query($sql1);
$row=$result->fetch_assoc();
$val=$row['EventId'];
$newVal=$val+1;
$sql2 = "UPDATE $tbname21 SET EventId=$newVal WHERE EventId=$val";

if(mysqli_query($conn1,$sql2)){
}else{
	die("连接失败：".$conn1->connect_error);
}

$sql3 = "INSERT INTO l".$phone." (EventId) VALUES ($val)";

if(mysqli_query($conn1,$sql3)){
}else{
	die("连接失败：".$conn1->connect_error);
}

$conn1->close();

$conn2 =new mysqli($servername,$username,$password,$dbname1);

$sql4 = "INSERT INTO $tbname11 (EventId,Laucher,Phone,Enroll,Location,TimeStart,TimeEnd,Budget,Num,Watchout) VALUES ($val,'$laucher','$phone','$enroll','$location','$timeStart','$timeEnd','$budget','$num','$watchout')";

$sql5 = "CREATE TABLE a$val (Phone varchar(100))";

if(mysqli_query($conn2,$sql4)&&mysqli_query($conn2,$sql5)){
	header("Location:../homePage1.html");
}else{
	echo"发起失败";
}

$conn2->close();
?>


