<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-6
 * Time: 上午1:56
 */

include_once '../index.php';

function showMessage($siteName)
{
    return '网站名称：' . $siteName;
}

function changeNum($num)
{
    $num++;
    return $num;
}

function changeNum2(&$num)
{
    $num++;
    return $num;
}

function getParam($arg1, $arg2, $arg3)
{
    return func_get_args();
}

function getParam2()
{
    return func_get_args();
}

function getOneParam($arg1, $arg2, $arg3)
{
    echo '$arg1:' . func_get_arg(0);
    echo '<br>';
    echo '$arg2:' . func_get_arg(1);
    echo '<br>';
    echo '$arg3:' . func_get_arg(2);
}

function getNum() {
    return 100;
}

function getNum2($num1, $num2) {
    return 'NUM is ' . ($num1 * $num2);
}

function funCallBack($callBackName, $var1, $var2) {
    return call_user_func_array($callBackName, [$var1, $var2]);
}