<?php
function compile($tagArr, $htmlArr) {
	$name = substr($tagArr[0], strpos($tagArr[0], 'block name=') + strlen('block name='), strlen($tagArr[0]) + 1) ;
	echo $name;
}

$tagArr = [
	'block name="content"',
	'/block'
];
$htmlArr = [
	'html'
];

compile($tagArr, $htmlArr);