<?php

$GLOBALS['VIEWS_FOLDER'] = "private/views/";
$GLOBALS['HOME'] = set_home_url();
/*echo 'self : '.$_SERVER['PHP_SELF'];
echo "<br>";
echo 'server name : '.$_SERVER['SERVER_NAME'];
echo "<br>";
echo 'host : '.$_SERVER['HTTP_HOST'];
echo "<br>";
echo 'useragent : '.$_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];*/
function set_home_url(){
	return substr($_SERVER['SERVER_NAME'], 0, -1) . $_SERVER['PHP_SELF'];
}  