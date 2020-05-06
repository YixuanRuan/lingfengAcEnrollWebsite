<?php
  $servername="localhost";
  $username="root";
  $password="123";
  $dbname="lfMember";
  $tbname="l".$_GET['phone'];

  $conn= new MySQLi($servername,$username,$password,$dbname);
  if($conn->connect_error){
	  echo "系统维护中，客官请歇会再来";
  }

  $sql="SELECT * FROM ".$tbname;
  $result=$conn->query($sql);
  if($result->num_rows>0){
	  $order=1;
	  $data=array();
	  while($row = $result->fetch_assoc()){
		  $data["$order"]=$row['EventId'];
		  $order++;
	  }
		  echo json_encode($data);
 }
$conn->close();
?>