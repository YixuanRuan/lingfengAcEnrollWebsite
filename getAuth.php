<?php
  $servername="localhost";
  $username="root";
  $password="123";
  $dbname="lfMember";
  $tbname="lfMember";

  $conn= new MySQLi($servername,$username,$password,$dbname);
  if($conn->connect_error){
	  echo "系统维护中，客官请歇会再来";
  }
  
  $phone=$_GET['phone'];
  $sql="SELECT * FROM $tbname WHERE Phone='".$phone."'";
  $result=$conn->query($sql);
  if($result->num_rows>0){
	  if($row = $result->fetch_assoc()){
		  $auth=$row['Auth'];
	  }
	  echo $auth;
 }
?>