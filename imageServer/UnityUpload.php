<?php
  $myFile = $_FILES["post"]["tmp_name"];
  $content = '';
  $fh = fopen($myFile, 'r') or die("can't open file");
  while (!feof($fh)) {
      $content .= fgets($fh);
  }
  fclose($fh);
  $file_path="uploadImages/";
  if(is_dir($file_path)!=TRUE) mkdir($file_path,0664) ;
  $myFile = $file_path.$_REQUEST['Name'].".png";
  $fh = fopen($myFile, 'w') or die("can't open file");

  $stringData = $content;
  fwrite($fh, $stringData);
  fclose($fh);
  echo $myFile;
?>

