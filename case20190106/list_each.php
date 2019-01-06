<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-6
 * Time: 下午2:03
 */
include "../index.php";
$arr1 = range(0, 4);
echo '<pre>';
print_r($arr1);
list($a, $b, $c) = $arr1;
print_r($a . '---' . $b . '---' . $c);
echo '<br>';
echo '<pre>';

$arr2 = ['php', 'java', 'python'];
echo '<pre>';
print_r(each($arr2));
print_r(each($arr2));
print_r(each($arr2));
echo '<br>';
echo '<pre>';