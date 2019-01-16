<?php
$file = fopen('amount.txt', 'r');
$data = [];
while(!feof($file)) {
  $data[] = fgets($file);
}
fclose($file);
$sum = 0;
foreach($data as $d) {
	$sum += floatval($d);
}
$a = $sum + (1900 * 2) + (715 * 4) + 3600 - 660;
$b = 4000 * 7;
var_dump($b - $a + 2000 + 2000 + 2000);