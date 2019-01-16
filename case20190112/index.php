<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-12
 * Time: 下午2:19
 */

include './Employee.php';
$employee1 = new Employee();

$employee2 = $employee1;

$employee3 = clone $employee1; // 复制当前对象的所有状态

echo '<pre>';
var_dump('$employee1:' . $employee1->name . '$employee2:' . $employee2->name . '$employee3:' . $employee3->name);
$employee1->name = 'wuchao';
var_dump('$employee1:' . $employee1->name . '$employee2:' . $employee2->name . '$employee3:' . $employee3->name);
echo '<pre>';

$employee1->hello1('hello', 'world');
$employee1::hello2('hello', 'world');

