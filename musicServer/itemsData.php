<?php
  $servername=null;
  $username="root";
  $password=null;
  $dbName="musicServer";


  $conn=new mysqli($servername,$username,$password,$dbName);
  if(!$conn){
	  die("Connection failed!".mysql_connect_error());
  }
  else{
	  //echo("Success");
  }

  $sql="SELECT * FROM `musicTable`";
  $result=mysqli_query($conn,$sql);
  //var_dump($result);
  if(mysqli_num_rows($result)>0){
	  while($row=mysqli_fetch_assoc($result)){
		  echo "FileName:".$row ['musicName'].";";
	  }
  }
?>

