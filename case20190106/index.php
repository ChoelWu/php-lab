<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-6
 * Time: 上午1:48
 */

include_once '../index.php';
include './function.php';

$var1 = 1;
for ($i = 0; $i < 5; $i++) {
    $var2 = 20;
}
echo '<pre>';
var_dump($var2);
echo '<br>';
echo '<pre>';

echo '<pre>';
var_dump(showMessage('PHP中文网'));
echo '<br>';
echo '<pre>';

$var3 = 100;
$var4 = 120;
echo '<pre>';
var_dump($var3);
changeNum($var3);
var_dump($var3);
var_dump($var4);
changeNum2($var4);
var_dump($var4);
echo '<br>';
echo '<pre>';

$rel1 = getParam('PHP', 'JAVA', 'Python');
echo '<pre>';
var_dump($rel1);
echo '<br>';
echo '<pre>';

$rel2 = getParam('PHP', 'JAVA', 'Python', 'others');
echo '<pre>';
var_dump($rel2);
echo '<br>';
echo '<pre>';

$rel4 = getParam2('PHP', 'JAVA', 'Python');
echo '<pre>';
var_dump($rel4);
echo '<br>';
echo '<pre>';

echo '<pre>';
getOneParam('PHP', 'JAVA', 'Python');
echo '<br>';
echo '<pre>';

$functionName = 'getNum';
$num1 = $functionName();
echo '<pre>';
var_dump($num1);
echo '<br>';
echo '<pre>';

$functionName2 = 'getNum2';
$num2 = $functionName2(500, 100);
echo '<pre>';
var_dump($num2);
echo '<br>';
echo '<pre>';

$num3 = call_user_func_array($functionName2, [500, 100]);
echo '<pre>';
var_dump($num3);
echo '<br>';
echo '<pre>';

$num3 = call_user_func_array($functionName2, [500, 100]);
echo '<pre>';
var_dump(funCallBack($functionName2, 500, 100));
echo '<br>';
echo '<pre>';

// require/require_once   开头引入，引入失败终止程序
// include/include_once   运行过程中引入，引入失败抛出异常继续执行

// 匿名函数
$showMsg = function($msg) {
    return $msg;
};
echo '<pre>';
echo $showMsg('PHP.cn');
echo '<br>';
echo '<pre>';

// 闭包
function display($msg, $msgEx) {
    $showMsg = function($m) use ($msgEx) {
        echo $m . $msgEx;
    };
    $showMsg($msg);
}
echo '<pre>';
display('hello world', 'PHP中文网');
echo '<br>';
echo '<pre>';