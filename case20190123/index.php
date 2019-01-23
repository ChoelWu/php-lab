<?php

$tag = [
	'<{block name="content"}>hello world<{/block}>',
	'<{block name="content"}><{/block}>',
	'<{include file="tpl/tpl" /}>',
	'<{if condition="$a==1"}>hello world<{else}>123<{/if}>',
	'<{foreach list=menu_list key=menu_key value=menu}></foreach>'
];

$pattern = [
	'/<\{block name=(\'|\")\w+(\'|\")\}>.*<\{\/block\}>',
	'<{if condition=".*"}>(<{elseif condition=".*"\}>)*(<\{else\}>)?<\{\/if\}>/'
];

echo '<pre>';

var_dump(preg_replace($pattern, 't', $tag));

