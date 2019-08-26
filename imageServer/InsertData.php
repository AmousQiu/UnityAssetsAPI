/*
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * <AmousQiu@dal.ca> wrote this file.  As long as you retain this notice you
 * can do whatever you want with this stuff. If we meet some day, and you think
 * this stuff is worth it, you can buy me a beer in return.           -Ziyu Qiu
 * ----------------------------------------------------------------------------
 */

/*FileName: InsertData.php
 *Function: -Post function 
 *          -Receive the fileNamePost.
 *          -Find if there any duplicate filename already exist in server.
 *          -return an error message if there is duplicate.
 *          -Insert the name into the MySQL database if not.
 */


<?php
/*
 * This part is for connecting to database 
 * change these settings to your setup
 */
  $servername=null;
  //change this to your username for phpMyAdmin
  $username="root";
  //change this to your password for phpMyAdmin
  $password=null;
  //change this to your database name 
  $dbName="imageServer";

  //"fileNamePost" is the variable name that you give in Unity.
  $FileName=$_POST["fileNamePost"];//the uploading file's name


  //Connection to phpMyAdmin
  $conn=new mysqli($servername,$username,$password,$dbName);
  if(!$conn){
	  die("Connection failed!".mysql_connect_error());
  }

 /* Check if there is already something has the same name in the server 
  * if So , send an error message and make user rename it.
  * if there is nothing exist, add this file to databse
  */

  //change 'imageTable' and 'imageName' according to your database
  $sql="select * from imageTable where imageName='".$FileName."'";
 
  $rs = mysqli_query($conn,$sql);

  $recordCount=mysqli_num_rows($rs);

  if($recordCount>0){
	  mysqli_close($conn);
	  die("exist");
  }else{ 
      $sql="INSERT INTO imageTable (imageName) VALUES ('".$FileName."')";

      $result=mysqli_query($conn,$sql);

      if(!$result){
	  echo"error";
      } 
      else{
	  echo "success";
      }
  }
?>

