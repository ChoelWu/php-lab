<?php
//
//
//
//
//<{}>
//
//<{/}>

function compile($tagArr, $htmlArr) {
	$echoStr = '<php> if (';
	$ifCondition = substr($tagArr[0], strpos($tagArr[0], 'if condition=') +  strlen('if condition='), strlen($tagArr[0]) - 1);
	$echoStr .= trim($ifCondition, substr($ifCondition, 0, 1)) . ') { echo "' . $htmlArr[0] . '" }';
	foreach($tagArr as $key => $tag) {
		if(strpos($tag, 'elseif condition=') !== false) {
			$elseifCondition = substr($tag, strpos($tag, 'elseif condition=') +  strlen('elseif condition='), strlen($tag) - 1);
			$echoStr .= ' else if (' . trim($elseifCondition, substr($elseifCondition, 0, 1)) . ') { echo "' . $htmlArr[$key] . '" }';
		} else if(strpos($tag, 'else') !== false) {
			$echoStr .= ' else { ' . 'echo "' . $htmlArr[$key] . '" }';
		}
	}
	$echoStr = '</php>';
	echo $echoStr;
}

$tagArr = [
	'if condition="$a == 21"',
	'elseif condition="$b == 22"',
	'else',
	'/if'
];

$htmlArr = [
	'not',
	'hello',
	'world'
];

compile($tagArr, $htmlArr);