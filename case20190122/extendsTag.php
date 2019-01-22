<?php

function compile($tagArr, $htmlArr = null) {
	$file_name = substr($tagArr[0], strpos($tagArr[0], 'extends file=') + strlen('extends file='), strlen($tagArr[0]) + 1) ;
	echo $file_name;
}

$tagArr = [
	'extends file="layout"'
];

$htmlArr = [
	'html...'
];

compile($tagArr, $htmlArr);
//<{extends file="layout"} />
