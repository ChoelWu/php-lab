<?php
// $a = array (1, 2, array ("a", "b", "c"));
// $b = var_export ($a);
// echo '<br>';
// var_dump($b);
// echo '<br>';
// $c = "array ( 0 => 1, 1 => 2, 2 => array ( 0 => 'a', 1 => 'b', 2 => 'c', ), )";
// var_dump($c);



// $path = 'web.php';
// $str = '<?php return ';
// $str .= var_export($data,true);//数组转字符串
// $str .= ';';

class C {
    private $prop;

    public function __construct($val) {
        $this->prop = $val;
    }

    public function __debugInfo() {
        return [
            'propSquared' => $this->prop ** 2,
        ];
    }
}

var_dump(new C(42));