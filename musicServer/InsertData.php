<?php
  $servername=null;
  $username="Amous";
  $password="19980420qzy@";
  $dbName="musicServer";

  $FileName=$_POST["fileNamePost"];
  //$userName=$_POST["userName"];

  //$FileName="Hello";

  $conn=new mysqli($servername,$username,$password,$dbName);

  if(!$conn){
	  die("Connection failed!".mysql_connect_error());
  }
  // Check if there is already something has the same name in the server 
  // if So , send an error message and make user rename it.
  // if there is nothing exist, add this file to databse
  $sql="select * from musicTable where musicName='".$FileName."'";
 
  $rs = mysqli_query($conn,$sql);

  $recordCount=mysqli_num_rows($rs);

  if($recordCount>0){
	  mysqli_close($conn);
	  die("exist");
  }else{ 
      $sql="INSERT INTO musicTable (musicName) VALUES ('".$FileName."')";

      $result=mysqli_query($conn,$sql);

      if(!$result){
	  echo"error";
      } 
      else{
	  echo "success";
      }
  }
?>

