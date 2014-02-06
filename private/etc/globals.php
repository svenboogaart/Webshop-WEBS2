<?php

$GLOBALS['VIEWS_FOLDER'] = "private/views/";
$GLOBALS['HOME'] = set_home_url();

function set_home_url(){
	return substr($_SERVER['HTTP_REFERER'], 0, -1).$_SERVER['PHP_SELF'];;
}  