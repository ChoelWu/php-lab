<?php

/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-7
 * Time: 下午9:31
 */
include '../index.php';
class Demo2
{
    public $name = 'php';
    private $age = 24;
    protected $sex = 'male';

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSex()
    {
        return $this->sex;
    }
}

$obj = new Demo2();
echo '<pre>';
echo $obj->name;
echo '<br>';
echo $obj->getAge();
echo '<br>';
echo $obj->getSex();
echo '<pre>';

$obj2 = new $obj;
var_dump($obj2);// 用已存在的对象创建对象

// new self() 在自己的类里面里面创建一个当前类

// new parent() 在自己的类里面创建一个父类

// new static()  静态延迟绑定（直接与调用者绑定）
