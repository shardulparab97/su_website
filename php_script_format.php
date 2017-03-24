<?php 
	require('activities_data.php');
	$dpt = new Department();
	$json_obj = $dpt->retreive_content(); 
?>