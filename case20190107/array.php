<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-7
 * Time: 下午7:44
 */
include "../index.php";
// array_map()
$arr1 = [1, 2, 3, 4, 5];
$arr2 = ['PHP', 'JAVA', 'Python', 'C', 'JavaScript'];
$fun1 = function($value1, $value2) {
    return "第{$value1}个语言是$value2<br>";
};
$arr = array_map($fun1, $arr1, $arr2);
var_dump($arr);

// sort()从小到大 和 rsort()从大到小
echo '<pre>';
print_r($arr2);
echo '<br>';
sort($arr2);
print_r($arr2);
echo '<br>';
rsort($arr2);
print_r($arr2);
echo '<br>';
echo '<pre>';

$arr3 = [
    'lan1' => 'PHP',
    'lan2' => 'JAVA',
    'lan3' => 'C',
    'lan4' => 'Python'
];
echo '<br>';
ksort($arr3);
print_r($arr3);
echo '<br>';
krsort($arr3);
print_r($arr3);
echo '<br>';
sort($arr3);
print_r($arr3);
echo '<br>';
echo '<pre>';

$arr4 = [
    'lan1' => 'PHP',
    'lan2' => 'JAVA',
    'lan3' => 'C',
    'lan4' => 'Python'
];
echo '<br>';
asort($arr4);
print_r($arr4);
echo '<br>';
arsort($arr4);
print_r($arr4);
echo '<br>';
echo '<pre>';

// array_multisort($arr1, $arr2, ...)

// array_push() 和 array_pop() 尾部入栈和出栈
// array_shift() 和 array_unshift() 出队和入队操作

// array_rand($arr, $num)  随机遍历从$arr中拿出$num 个元素的键
// shuffle($arr) 将数组打乱输出，新的数组为索引数组输出
// array_sum($arr) 将数组求和(非数字类型自动转化为数字)
// range($start, $end, $step) 生成$start到$end的步长为$step的数字数组

