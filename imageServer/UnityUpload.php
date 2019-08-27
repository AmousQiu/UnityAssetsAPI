<?php
//TODO variable part
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
  *FileName: UnityUpload.php
  *Function: -Receive a file in a form of bytes
  *          -Receive its name as well
  *          -Save it to a specific folder on the server
  *          -if  the specific folder doesn't exist, create one
  *Variable: "post"
  *
  *----------------------------------------------------------------------------------------------
  */ 

  $myFile = $_FILES["post"]["tmp_name"];
  $content = '';
  
  //Read file part and write them into a char.
  $fh = fopen($myFile, 'r') or die("can't open file");
  while (!feof($fh)) {
      $content .= fgets($fh);
  }
  fclose($fh);

  $file_path="uploadImages/";

  if(is_dir($file_path)!=TRUE){
     mkdir($file_path,0664);
  }
  $myFile = $file_path.$_REQUEST['Name'].".png";
  $fh = fopen($myFile, 'w') or die("can't open file");

  $stringData = $content;
  fwrite($fh, $stringData);
  fclose($fh);
  echo $myFile;
?>

