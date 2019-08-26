<!DOCTYPE html>
<html>
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

		if (

		    $hz == ".gif" or $hz == ".jpg" or $hz == ".JPG" or $hz == ".JPEG" or

		    $hz == ".PNG" or $hz == ".png" or $hz == ".GIF"

		) {

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


 


 

