<?php
//<{ /}>

function compile($tagArr, $htmlArr = null) {
	$file_name = substr($tagArr[0], strpos($tagArr[0], 'include file=') + strlen('include file='), strlen($tagArr[0]) + 1) ;
	echo $file_name;
}

$tagArr = [
	'include file="layout"'
];

compile($tagArr);