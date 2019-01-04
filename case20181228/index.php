<?php
$a = array(
	'A' => 'hello',
	'B' => iconv("GBK","UTF-8", '中国')
);

var_dump($a);