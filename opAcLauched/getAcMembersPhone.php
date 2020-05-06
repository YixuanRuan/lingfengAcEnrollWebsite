<?php
  $servername="localhost";
  $username="root";
  $password="123";
  $dbname="lfAc";
  $tbname="a".$_GET['eventId'];

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
		  $data["$order"]=$row['Phone'];
		  $order++;
	  }
		  echo json_encode($data);
 }
$conn->close();
?>