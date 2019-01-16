<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-8
 * Time: 下午10:29
 */

class Student
{
    private $name = 'choel';
    public $age = 24;

    public function __get($name)
    {
        return $this->name;
    }
    public function __set($name, $value)
    {
        $this->name = $value;
//        return $this->name = 'wuchao';
    }
}

$student = new Employee();
$student->name = 'wuchao';
echo $student->name;
//echo $student->name;


// 外部访问静态元素可以使用 :: ClassName::static
// 外部对象可以访问静态方法，不能访问静态属性