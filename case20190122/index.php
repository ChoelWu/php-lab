<?php
function compile($tagArr) {
	$foreachStartArr = explode(" ", $tagArr[0]);
	$list_str = '';
	$key_str = '';
	$value_str = '';
	foreach($foreachStartArr as $tag) {
		$foreachItemArr = explode("=", $tag);
		if($foreachItemArr[0] == 'list') {
			$list_str = '$' .$foreachItemArr[1] . ' as ';
		}

		if($foreachItemArr[0] == 'value') {
			$value_str = '$'.$foreachItemArr[1];

		}

		if($foreachItemArr[0] == 'key') {
			$key_str = '$'.$foreachItemArr[1] . '=>';

		}
	}
	echo $list_str . $key_str . $value_str;
}



$tagArr = [
	'foreach list=menu_list value=menu',
	'/foreach'
];

$echoArr = [
	'<td><{$menu.title}></td>'
];
compile($tagArr);

//<{foreach list=menu_list key=menu_key value=menu}>
//<td><{$menu.title}></td>
//<{/foreach}>

//<{if condition="$a eq 21"}>
//not
//<{else if}>
//hello
//<{else}>
//world
//<{/if}>

//<{block name="content"}>
//<{block}>

//<{extends file="layout"}>
//html...
//<{/extends}>

//<{include file="layout" /}>