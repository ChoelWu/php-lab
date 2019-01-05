<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-5
 * Time: 下午3:34
 */
use case20190105\Student;
// php对象
$student = new Student();
echo $student->getInfo();
echo '<br>';
echo $student->name;
echo '<br>';
echo $student->sex;
echo '<br>';
echo $student->age;
echo '<br>';