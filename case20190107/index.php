<?php
include "Site.php";

var_dump(__LINE__);
echo '<br>';
var_dump(__FILE__);
echo '<br>';
var_dump(__DIR__);
echo '<br>';
var_dump(__FUNCTION__);
echo '<br>';
var_dump(__CLASS__);
echo '<br>';
var_dump(__METHOD__);
echo '<br>';
var_dump(__NAMESPACE__);


$site = new Site();
$site->setUrl('www.runoob.com');
$site->getUrl();