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
