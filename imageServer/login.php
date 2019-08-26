<?php

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
