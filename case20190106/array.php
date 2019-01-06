<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-6
 * Time: 下午1:18
 */
include_once("../index.php");

$arr1 = ['php', 'java', 'python'];
echo '<pre>';
print_r($arr1);
echo '<br>';
echo '<pre>';

$arr2['100'] = 'other';
$arr2['a'] = 'hello';
$arr2[] = 'world';
echo '<pre>';
print_r($arr2);
echo '<br>';
echo '<pre>';

// 数组指针
echo '<pre>';
print_r($arr1);
echo '<br>';
print_r(key($arr1) . '---' . current($arr1));
echo '<br>';
next($arr1);
print_r(key($arr1) . '---' . current($arr1));
echo '<br>';
prev($arr1);
print_r(key($arr1) . '---' . current($arr1));
echo '<br>';
end($arr1);
print_r(key($arr1) . '---' . current($arr1));
echo '<br>';
reset($arr1);
print_r(key($arr1) . '---' . current($arr1));
echo '<br>';
echo '<pre>';

$arr3 = range(1, 10);
echo '<br>';
print_r($arr3);
print_r(count($arr3));
echo '<br>';
echo '<pre>';
echo '<br>';

$arr4 = [
    'a' => 'hello',
    'b' => 'world',
    'c' => '!!'
];
print_r($arr4);
for ($i = 0; $i < count($arr4); $i++) {
    print_r(key($arr4) . ' => ' . current($arr1));
    next($arr4);
    echo '<br>';
}
echo '<br>';
echo '<pre>';