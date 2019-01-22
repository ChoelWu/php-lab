<?php
ini_set('output_buffering',1);
ob_start(); //打开缓冲区
echo "Hellon"; //输出
//header("location:jump.php"); //把浏览器重定向到index.php
//ob_end_flush();//输出全部内容到浏览器