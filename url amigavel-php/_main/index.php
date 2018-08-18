<?php 
include_once('Link.Class.php');

define('REQ', "_main" . DIRECTORY_SEPARATOR);

$link = new Link();

var_dump($link);


if ($link->Path != null) {
	require(REQ . 'pages' . DIRECTORY_SEPARATOR . '/' . $link->Path . '/' . $link->file . '.php');
} else {
	require(REQ . 'pages' . DIRECTORY_SEPARATOR . '/' $link->File . '.php');
}

?>