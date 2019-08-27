<?php
/* 
 * ------------------------------------------------------------------------------------------
 *                                        _____ _                     _                _    _ 
 *     /\                                / ____| |                   | |              | |  (_)
 *    /  \   _ __ ___   ___  _   _ ___  | |    | |__   ___   ___ ___ | | _____   _____| | ___ 
 *   / /\ \ | '_ ` _ \ / _ \| | | / __| | |    | '_ \ / _ \ / __/ _ \| |/ _ \ \ / / __| |/ / |
 *  / ____ \| | | | | | (_) | |_| \__ \ | |____| | | | (_) | (_| (_) | | (_) \ V /\__ \   <| |
 * /_/    \_\_| |_| |_|\___/ \__,_|___/  \_____|_| |_|\___/ \___\___/|_|\___/ \_/ |___/_|\_\_|           
 *                                                                                                                                                                          
 * <AmousQiu@dal.ca> wrote this file. As long as you retain this notice you
 * can do whatever you want with this stuff. If we meet some day, and you think this stuff is
 * worth it, you can buy me a beer in return (Personal prefer Garrison Raspberry).
 *                                                                        @Copyright Ziyu Qiu
 * ------------------------------------------------------------------------------------------
 */

/*FILE INTRODUTION PART 
  * ------------------------------------------------------------------------------------------
  *FileName: index.php
  *Function: -show all the photos existing in the folder.
  *!!!!!!Needs rewrite.
*/
?>

<!DOCTYPE HTML>
<head>
<title>Artworks</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body bgcolor="#afafaf">
<h1 align="center"> Some photos </h1>

	<?php
	$folder = "./";
	$files = array();
	$handle = opendir($folder);

	while (false !== ($file = readdir($handle))) {
	    if ($file != '.' && $file != '..') {
          $hz = strstr($file, ".");
		        if ($hz == ".png" ){
		            $files[] = $file;
		        }
      }
	}

	 
	if ($files) {
			echo '<div class="row"> ';
			$i=0;
			foreach ($files as $k => $v) {
		    if($i==0){   
			    echo'<div class="col">';
		    }
		    echo  '<img width=300 height=500 src="'.$v.'">';
		    if($i==4){
		      echo'</div>';
		    }
		    $i=$i+1;
		    if($i==5){
			     $i=0;
		    }
	    }
			echo '</div>';
			echo '</div>';
	} 
  ?>
</body>
</html>


 


 

