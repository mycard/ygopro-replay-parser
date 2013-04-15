<?php
	$filename = md5_file($_FILES["file"]["tmp_name"]).".yrp";
	move_uploaded_file($_FILES["file"]["tmp_name"], "replay/".$filename);
	exec("pro.exe ".$filename);
	readfile('out/'.$filename);
?>
