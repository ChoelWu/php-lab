<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-5
 * Time: 下午3:44
 */
namespace case20190105;

class Student
{
    public $name = 'peter';
    public $age = 18;
    public $sex = 'F';

    public function getInfo()
    {
        return '姓名' . $this->name . '性别' . $this->sex . '年龄' . $this->age;
    }
}