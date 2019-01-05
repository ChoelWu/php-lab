<?php
include_once "../index.php";

echo $a;
$obj = new stdClass();
$obj->name = 'hello world';
$obj->server = function() {
    return 'hello program';
};
var_dump($obj->name);
var_dump(call_user_func($obj->server));
echo '<pre>';
var_dump($obj);
echo '<pre>';



// 数组转化为对象
$arr = [
    'name' => 'chole',
    'age' => 24,
    'addr' => 'Xi\'an'
];
echo '<pre>';
var_dump((object)$arr);
echo '<pre>';

// 整型/字符串等转化为对象

$integer = 15;
$string = 'hello choel';
$boolean = TRUE;

echo '<pre>';
print_r((object)$integer);
print_r((object)$string);
print_r((object)$boolean);
print_r((object)null);
print_r((object)'');
echo '<pre>';
