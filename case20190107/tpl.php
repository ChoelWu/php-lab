<?php
include "./smarty/libs/Smarty.class.php";

$smarty = new Smarty();
$smarty->assign('name', 'world');
$smarty->display("hello.html");