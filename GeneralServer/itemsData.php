<?php 
/* 
 * ------------------------------------------------------------------------------------------
                                         _____ _                     _                _    _ 
      /\                                / ____| |                   | |              | |  (_)
     /  \   _ __ ___   ___  _   _ ___  | |    | |__   ___   ___ ___ | | _____   _____| | ___ 
    / /\ \ | '_ ` _ \ / _ \| | | / __| | |    | '_ \ / _ \ / __/ _ \| |/ _ \ \ / / __| |/ / |
   / ____ \| | | | | | (_) | |_| \__ \ | |____| | | | (_) | (_| (_) | | (_) \ V /\__ \   <| |
  /_/    \_\_| |_| |_|\___/ \__,_|___/  \_____|_| |_|\___/ \___\___/|_|\___/ \_/ |___/_|\_\_|           
                                                                                                                                                                          
 * <AmousQiu@dal.ca> wrote this file. As long as you retain this notice you
 * can do whatever you want with this stuff. If we meet some day, and you think this stuff is
 * worth it, you can buy me a beer in return (Personal prefer Garrison Raspberry).
 *                                                                        @Copyright Ziyu Qiu
 * ------------------------------------------------------------------------------------------
 */

/*FILE INTRODUTION PART 
  * ------------------------------------------------------------------------------------------
  *FileName: itemsData.php
  *Function: -Print out all the data in the database in a specific way
  *Database Variables: 
  *          -Database Name: "imageServer"
  *          -User Name: "root"
  *          -User Password : null      
  *          -Table Name: imageTable;
  *          -Database table information
  * +-----------+-------------+------+-----+---------+-------+
  * | Field     | Type        | Null | Key | Default | Extra |
  * +-----------+-------------+------+-----+---------+-------+
  * | imageName | varchar(20) | NO   | PRI | NULL    |       |
  * +-----------+-------------+------+-----+---------+-------+
  *
  *----------------------------------------------------------------------------------------------
  */

  //Database connectin part
  $servername=null;
  $username="root";
  $password=null;
  $dbName="imageServer";

  
  $conn=new mysqli($servername,$username,$password,$dbName);
  if(!$conn){
	  die("Connection failed!".mysql_connect_error());
  }
  //Only for testing, Don't print it out
  else{
	  //echo("Success");
  }

  //shwo all the tuples from that database
  $sql="SELECT * FROM `imageTable`";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
      //In this way, the output would be like FileName:Balabala; 
      //We would use the ";" to seperate each tuple later.
		  echo "FileName:".$row ['imageName'].";";
	  }
  }
?>

