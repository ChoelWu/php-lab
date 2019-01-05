<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-6
 * Time: 上午1:36
 */
session_start();
include_once '../index.php';
echo session_id();
$_SESSION['name'] = 'choel';
$_SESSION['age'] = 24;
echo '<pre>';
var_dump($_SESSION);
echo '<br>';
echo '<pre>';
unset($_SESSION['age']);
echo '<pre>';
var_dump($_SESSION);
echo '<br>';
echo '<pre>';
session_destroy();
echo '<pre>';
var_dump($_SESSION);
echo '<br>';
echo '<pre>';