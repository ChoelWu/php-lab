<?php

// $str = [
// 	'<{foreach list=menu_list key=menu_key value=menu}>',
// 	'<{if condition="$a==9"}>',
// 	'<{extends file="tpl/index"} />',
// 	'<{include file="tpl/index/index"} />',
// 	'<{block name="content"}><{/block}>',
// 	'<{/if}>',
// 	'<{/foreach}>',
// 	'<{/block}>',
// 	'kngming'
// ];

// $pattern = '/<{[a-zA-Z]+}>/';

// echo '<pre>';
// var_dump(preg_grep($pattern, $str));

// $num = [0, 22, 15, 98.55,'-22.00', -22.08, '0.00'];

// $pattern = '/^(-\d+\.\d+)|(0\.\d+)$/';

// echo '<pre>';
// var_dump(preg_grep($pattern, $num));

// $pwd = [
// 	'wuchao14561013',
// 	'wuchai_asd',
// 	'wuchao---',
// 	'12311111111111-',
// 	'wuchao11'
// ];

// $pattern = '/^\w{8,16}$/';

// echo '<pre>';
// var_dump(preg_grep($pattern, $pwd));


// $char = [
// 	'wuchao14561013',
// 	'wuchai_asd',
// 	'wuchao---',
// 	'吴超',
// 	'吴----超'
// ];

// $pattern = '/^<\x{2460}-\x{2468}>{0,}$/';

// echo '<pre>';
// var_dump(preg_grep($pattern, $char));


// $url = [
// 	'https://www.baidu.com',
// 	'http://www.baidu.com',
// 	'https://baidu.com',
// 	'https://zhidao.baidu.com',
// 	'https://ww_.zhidao.baidu.com',
// 	'https://baidu',
// 	'htt://www.baidu.com',
// 	'https:/www.baidu.com',
// ];


// $pattern = '/^http(s)?:\/\/(\w*\.)+\w*$/';

// echo '<pre>';
// var_dump(preg_grep($pattern, $url));

$mail = [
	'775669127@qq.com',
	'choel@foxmial.com',
	'775669127qq.com',
	'775669127@qq',
	'775669127@lol.qq.com',
	'775669127@.com',
	'@qq.com',
];


$pattern = '/^\w+@(\w+\.)+\w*/';

echo '<pre>';
var_dump(preg_grep($pattern, $mail));