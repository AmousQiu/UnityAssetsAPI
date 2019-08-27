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

<!DOCTYPE html> 
<html>
<head>
<title>Json Files</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<h1 align="center"> Json Files </h1>
	<?php

	$folder = "./";

	$files = array();

	$handle = opendir($folder);

	while (false !== ($file = readdir($handle))) {
	    if ($file != '.' && $file != '..') {
		$hz = strstr($file, ".");
		if (
		    $hz == ".json"
		) {
		    $files[] = $file;
		}
	 }
	}

	if ($files) {
			    foreach ($files as $k => $v) {
				   echo'<ul class="list-group list-group-flush">';
				   echo '<li class="list-group-item" align="center"><a href="http://18.191.23.16/jsonServer/files/'.$v.'">'.$v.'</a></li>';
				   echo '<br>'; 
	     	          	   echo '</ul>';    
			    }
	} 
	?>
</body>
</html>
