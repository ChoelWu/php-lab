<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-7
 * Time: 下午9:59
 */

//require 'test.php';
//function __autoload($className)
//{
//    $path = $className . '.php';
//    if (file_exists($path)) {
//        require_once $path;
//    } else {
//        echo '不存在';
//    }
//}

function loader($className)
{
    $path = $className . '.php';
    if (file_exists($path)) {
        require_once $path;
    } else {
        echo '不存在';
    }
}
spl_autoload_register('loader');
$test = new test();
echo $test->name;