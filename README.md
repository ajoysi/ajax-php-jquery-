# ajax-php-jquery-
遇到一个需求，需要在线输入地点在线天气查询
我们有一次遇到一个需求，需要在线输入地点在线天气查询
这个功能我
先用php<?php
	header("Content-Type:text/json;utf-8");
	$city = $_GET["city"];
	$a = file_get_contents("http://v.juhe.cn/weather/index?cityname=".$city."&format=&key=12c6a039cb0a597a7cc75346a076b533");
	print_r($a);
?>
在聚合上用数据接口输入城市获得天气情况

在HTML文件里面，先引入百度地图接口通过用户输入的地址去天气预报的接口查找具体数据
再把拿回来的数据进行展示，写一个switch case进行判断，不同的天气展示不同图片
