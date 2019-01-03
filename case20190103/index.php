<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-3
 * Time: 下午10:10
 */

$str = 'hello world';
$integer = 100;
$boolean = TRUE;

// gettype($var) 获取变量的类型
echo gettype($str);
echo '<br>';
echo gettype($integer);
echo '<br>';
echo gettype($boolean);
echo '<br>';
echo '<hr>';

//is_type($var) 判断变量的类型
if(is_int($str)) {
    echo '$str is int';
} else if(is_double($str)) {
    echo '$str is double';
} else if(is_string($str)) {
    echo '$str is string';
}
echo '<br>';
echo '<hr>';

// settype($var)
echo gettype($integer);
echo '<br>';
echo gettype((string)$integer);
echo '<br>';
echo gettype($integer);
echo '<br>';
settype($integer, 'string');
echo gettype($integer);
echo '<br>';
echo '<hr>';

// boolean
echo gettype($boolean);
echo '<br>';
$boolean = true;
echo gettype($boolean);
echo '<br>';
$boolean = 'true';
echo gettype($boolean);
echo '<br>';
echo '<hr>';

// 布尔值转换(0、''、'0'、NULL、[])
var_dump((bool)0);
echo '<br>';
var_dump((bool)'');
echo '<br>';
var_dump((bool)null);
echo '<br>';
var_dump((bool)NULL);
echo '<br>';
var_dump((bool)Null);
echo '<br>';
var_dump((bool)'0 ');
echo '<br>';
var_dump((bool)'0.0');
echo '<br>';
var_dump((bool)' 0');
echo '<br>';
var_dump((bool)[]);
echo '<br>';
var_dump((bool)'00');
echo '<br>';
echo '<hr>';

// integer
var_dump(180); //十进制
echo '<br>';
var_dump(075); //八进制
echo '<br>';
var_dump(0xA3); //十六进制
echo '<br>';
echo PHP_INT_MAX;
echo '<br>';
echo PHP_INT_MAX + 1;
echo '<br>';
echo '<hr>';

// int转化
var_dump((int)true);
echo '<br>';
var_dump((int)false);
echo '<br>';
var_dump(intval(true));
echo '<br>';
var_dump(intval('php'));
echo '<br>';
var_dump(intval('35php'));
echo '<br>';
var_dump(intval('php35php'));
echo '<br>';
var_dump(intval('0.2'));
echo '<br>';
var_dump(intval('36.2'));
echo '<br>';
var_dump(intval('36.8'));
echo '<br>';
var_dump(round('36.2'));
echo '<br>';
var_dump(round('36.8'));
echo '<br>';
echo '<hr>';

// 浮点数float
var_dump(36.8);
echo '<br>';
var_dump(floatval('36.8'));
echo '<br>';
var_dump(floatval(false));
echo '<br>';
var_dump(floatval(true));
echo '<br>';
var_dump(floatval(15));
echo '<br>';
$float1 = 3.1415926;
$float2 = 3.1415927;
//$equ = 0.000001;
$equ = 0.000000000000001;
if(abs($float1 - $float2) < $equ) {
    echo '相等';
} else {
    echo '不相等';
}
echo '<hr>';

// 字符串string
$phpcn1 = 'php中文网';
var_dump($phpcn1);
echo '<br>';
$phpcn2 = 'php\'中文网';
var_dump($phpcn2);
echo '<br>';
$phpcn3 = 'php\'中文\\网';
var_dump($phpcn3);
echo '<br>';
$phpcn4 = "php\'中文\\网";
var_dump($phpcn4);
echo '<br>';
$phpcn5 = "php{$phpcn1}网";
var_dump($phpcn5);
echo '<br>';
$phpcn5 = "$phpcn1 php网";
var_dump($phpcn5);
echo '<br>';
$heredoc = <<<"LIST"
<ul>
<li>1234{$phpcn1}</li>
<li>2234{$phpcn1}</li>
</ul>
LIST;
echo $heredoc;
echo '<br>';
$nowdoc = <<<'EOD'
<ul>
<li>1'2'34{$phpcn1}</li>
<li>2234{$phpcn1}</li>
</ul>
EOD;
echo $nowdoc;
echo '<hr>';

// 数组array
// array_values()
$arr1 = [
    0 => 10,
    1 => 20,
    2 => 30
];
var_dump($arr1);
echo '<br>';
$arr2 = [10, 20,  30];
var_dump($arr2);
echo '<br>';
print_r($arr2);
echo '<br>';
print_r($arr2, true);
echo '<br>';
$arr3 = [
    1 => 10,
    1.7 => 20,
    true => 30,
    'choel' => 40,
    0.3 => 'hello',
    2.7 => 50,
    false => 'ok'
];
var_dump($arr3);
echo '<br>';
$arr4 = [
    9 => 10,
    'choel' => 40,
    2 => 30
];
var_dump($arr4);
echo '<br>';
$arr5 = [
    'name' => 'wuchao',
    'age' => 24,
    'other' => [0, 1, 2]
];
var_dump($arr5);
echo '<br>';
var_dump($arr5['name']);
echo '<br>';
var_dump($arr5{'name'});
echo '<br>';
$arr5[] = 100; // 追加
var_dump($arr5);
echo '<br>';
$arr5['s'] = 200; // 追加
var_dump($arr5);
echo '<br>';
unset($arr5['s']); //删除元素
var_dump($arr5);
echo '<br>';
unset($arr5);
var_dump($arr5); //删除数组
echo '<br>';
foreach ($arr4 as $key => $val) {
    unset($arr4[$key]);
}
var_dump($arr4); //清空数组
echo '<br>';
var_dump($arr3);
echo '<br>';
var_dump(array_values($arr3));
echo '<hr>';

// php输出
// echo输出标量
// print_r格式化输出
// var_dump()更多信息
