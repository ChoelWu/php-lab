<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-5
 * Time: 下午11:59
 */
// COOKIE
setcookie('siteName', 'PHP.cn');
include_once "../index.php";
// 变量的值传递和变量的引用
$var1 = 'PHP';
$var2 = $var1;
$var3 = &$var1;
echo '<pre>';
var_dump($var1);
var_dump($var2);
var_dump($var3);
echo '<br>';
echo '<pre>';
$var1 = 'JAVA';
echo '<pre>';
var_dump($var1);
var_dump($var2);
var_dump($var3);
echo '<br>';
echo '<pre>';

// 可变变量
$title = 'name';
$$title = 'php-task';
echo '<pre>';
var_dump($title);
var_dump($$title);
var_dump($name);
echo '<br>';
echo '<pre>';

// 变量的作用域
// 局部变量--函数内部、方法、全局变量--当前脚本、超全局变量--系统预设，跨脚本使用、静态变量--定义在函数内部的共享变量
$num = 100;
var_dump($GLOBALS);
function getNum() {
    echo $GLOBALS['num'];
}
getNum();
echo '<pre>';
var_dump($_SERVER);
echo '<br>';
echo '<pre>';
echo '<pre>';
var_dump($_GET);
echo '<br>';
echo '<pre>';
echo '<pre>';
var_dump($_POST);
echo '<br>';
echo '<pre>';

var_dump($_COOKIE);