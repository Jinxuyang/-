<?php
	header('Access-Control-Allow-Origin:*');
	$question = $_GET["question"];
	$url = 'your_api'.$question;
	$res = file_get_contents($url);
	$arr = json_encode($res);
	echo $arr
?>