<?php
//TODO Write the Comments
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
  *FileName: login.php
  *Function: -
  *
  *Variable: "fileNamePost"
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

$servername = null;
$usename = "root";
$password = "";
$dbName = "imageServer";
//variable from unity

$uname = $_POST['uname'];

//$uname = "123";

$upass = $_POST['upass'];

//$upass = "123";

$action = $_POST['action'];

//$action = "login";

 

//Make Connection

$conn = new mysqli($servername, $usename, $password, $dbName);

 

if ($action == "login") {

  $sql = "select * from user where userName='" . $uname . "' and password='" . $upass . "'";

 

  $rs = mysqli_query($conn, $sql);

 

  if (!$rs) {

    mysqli_close($conn);

    die("error");

  }

 

  $recordCount = mysqli_num_rows($rs);

  if ($recordCount > 0) {

    echo "success";

  } else {

    echo "error";

  }

} else if ($action == "regist") {

  $sql = "set names utf8";

  mysqli_query($conn, $sql);

  $sql = "select * from user where userName='" . $uname . "'";

  $rs = mysqli_query($conn, $sql);

  if (!$rs) {

    mysqli_close($conn);

    die("error");

  }

  $recordCount = mysqli_num_rows($rs);

  if ($recordCount > 0) {

    mysqli_close($conn);

    die("exist");

  } else {

    $sql = "insert into user(userName,password) values('" . $uname . "','" . $upass . "')";

    $rs = mysqli_query($conn, $sql);

    if (!$rs) {

      mysqli_close($conn);

      die("error");

    } else {

      echo "success";

    }

  }

} else {

  echo "error";

}

 

mysqli_close($conn);
