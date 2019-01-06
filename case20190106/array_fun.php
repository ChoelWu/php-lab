<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-6
 * Time: 下午2:14
 */

$arr1 = [
    'lan1' => 'PHP',
    'lan2' => 'JAVA',
    'lan3' => 'Python'
];
echo '<pre>';
print_r($arr1);
print_r(array_values($arr1)); // 获得数组的值
echo '<br>';
echo '<pre>';

echo '<pre>';
print_r($arr1);
print_r(array_keys($arr1)); // 获得数组的键名
echo '<br>';
echo '<pre>';

echo '<pre>';
print_r($arr1);
var_dump(array_key_exists('lan1', $arr1)); // 获得数组的键名
var_dump(array_key_exists('lan4', $arr1)); // 获得数组的键名
echo '<br>';
echo '<pre>';

// in_array() 和 array_search() 都可以使用第三个参数来生命是否使用严格类型（搜索的值与待搜索的值类型必须相等）
// in_array() 返回bool类型
echo '<pre>';
print_r($arr1);
var_dump(in_array('PHP', $arr1)); // 获得数组的键名，可以判断一个数组中是否存在另外一个子数组
var_dump(in_array('C', $arr1)); // 获得数组的键名
echo '<br>';
echo '<pre>';

// array_search() 存在返回键名，不存在返回false
echo '<pre>';
print_r($arr1);
var_dump(array_search('PHP', $arr1)); // 获得数组的键名
var_dump(in_array('C', $arr1)); // 获得数组的键名
echo '<br>';
echo '<pre>';

// count() 函数第二个参数规定是否检测多维数组
$arr3 = [
    'lan1' => 'JAVA',
    'script' => [
        'lan1' => 'PHP',
        'lan2' => 'JavaScript'
    ]
];
echo '<pre>';
var_dump(count($arr3));
var_dump(count($arr3, 1));
echo '<br>';
echo '<pre>';

$arr4 = ['a' => '11', 'b' => '22', 'c' => '33', 'd' => '11'];
echo '<pre>';
print_r(array_count_values($arr4));
echo '<br>';
echo '<pre>';

echo '<pre>';
print_r(array_unique($arr4));
echo '<br>';
echo '<pre>';

// array_filter($arr, callback);
// 将数组$arr中的元素一次传入callback函数中返回为1是才能放入目标数组
$arr5 = range(1, 100);
// 求奇数
function odd($num) {
    return $num & 1;
}
$arr_temp = array_filter($arr5, 'odd');
echo '<pre>';
print_r($arr5);
print_r(array_values($arr_temp));
echo '<br>';
echo '<pre>';

// array_walk($arr, $callback)

// array_map()
