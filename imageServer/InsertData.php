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
  *FileName: InsertData.php
  *Function: -Post function
  *          -Receive the fileNamePost.
  *          -Find if there any duplicate filename already exist in server.
  *          -return an error message if there is duplicate.
  *          -Insert the name into the MySQL database if not.
  *
  *Variable: "fileNamePost"
  *Database Variables: 
  *          -Database Name: "imageServer"
  *          -User Name: "root"
  *          -User Password : null      
  *          -Table Name: imageTable;
  *          -Database table information
  *          -Receive the fileNamePost.
  * +-----------+-------------+------+-----+---------+-------+
  * | Field     | Type        | Null | Key | Default | Extra |
  * +-----------+-------------+------+-----+---------+-------+
  * | imageName | varchar(20) | NO   | PRI | NULL    |       |
  * +-----------+-------------+------+-----+---------+-------+
  *
  *----------------------------------------------------------------------------------------------
  /          



/*
 * This part is for connecting to database 
 * change these settings to your setup
 */
  $servername = null;
  //change this to your username for phpMyAdmin
  $username = "root";
  //change this to your password for phpMyAdmin
  $password = null;
  //change this to your database name 
  $dbName = "imageServer";

  //"fileNamePost" is the variable name that you give in Unity.
  $FileName = $_POST["fileNamePost"]; //the uploading file's name


  //Connection to phpMyAdmin
  //! Don't echo the success message, you'll make your C# confused. 
  $conn = new mysqli($servername, $username, $password, $dbName);
  if (!$conn) {
    die("Connection failed!" . mysql_connect_error());
  }

  /* Check if there is already something has the same name in the server 
  * if So , send an error message and make user rename it.
  * if there is nothing exist, add this file to databse
  */

  //change 'imageTable' and 'imageName' according to your database
  $sql = "select * from imageTable where imageName='" . $FileName . "'";

  //rs would return the result from the select query
  $rs = mysqli_query($conn, $sql);
  //count the number of the results
  $recordCount = mysqli_num_rows($rs);
  
  // if record's number is larger than 0, means there is duplicate file
  if ($recordCount > 0) {
    mysqli_close($conn);
    die("exist");
  } else {
    //change 'imageTable' and 'imageName' according to your database
    $sql = "INSERT INTO imageTable (imageName) VALUES ('" . $FileName . "')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
      echo "error";
    } else {
      echo "success";
    }
  }
  ?>
