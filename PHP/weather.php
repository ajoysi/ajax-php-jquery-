<?php
	header("Content-Type:text/json;utf-8");
	$city = $_GET["city"];
	$a = file_get_contents("http://v.juhe.cn/weather/index?cityname=".$city."&format=&key=12c6a039cb0a597a7cc75346a076b533");
	print_r($a);
?>