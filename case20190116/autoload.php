<?php
spl_autoload_register('myAutoLoad', true, true);

function myAutoLoad($className){
	echo "所有的包含文件工作都交给我！";
	echo '<br>';
	$classFileName = $className.'.class.php';
	echo '我来包含！' . $classFileName;
	echo '<br>';
	include './' .$classFileName;
}

$objDemo = new Tool();