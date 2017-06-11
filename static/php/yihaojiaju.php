<?php 

	// 加载php文件
	include_once("./simple_html_dom.php");

	// 
	header("Content-Type:text/html; charset=utf8");

	// 选取爬取的网站
	$url = "http://m.yihaojiaju.com/mall/keting-shafa/";
	$html = new simple_html_dom($url);

	$content = $html->find(".wares-list", 0);
	$list = $content->find("ul", 0)->find("li");

	foreach($list as $value) {
		echo $value;
	// 	$link = $value->find("a", 0);
	// 	echo "<a href='http://www.qdfuns.com/".$link->attr["href"]."'>";
	// 	echo $link->innertext . "<br>";
	// 	echo "</a>";
	}
?>