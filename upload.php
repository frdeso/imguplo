<?php 
	$target = "/home/etudiant/dieu/nova_html/fdeslauriers/images/upload/"; 
	$newFileName = substr(md5(microtime()),rand(0,26),5);
	$newFileName = $newFileName . ".jpg";
	$target = $target . basename( $newFileName) ; 
	echo $target."\n";
	
	$ok=1; 
	
	if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
	{
		echo $target;
		echo "Success";
	} 
	else {
		echo "Failure";
	}
?> 
