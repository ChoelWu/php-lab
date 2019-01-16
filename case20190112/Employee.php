<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-12
 * Time: 下午2:19
 */

class Employee
{
    public $name = 'Choel';

    public function __call($method, $args) {
        echo '<pre>';
        print_r($method);
        echo '<br>';
        print_r($args);
        echo '<pre>';
    }

    public function __callStatic($method, $args) {
        echo '<pre>';
        print_r($method);
        echo '<br>';
        print_r($args);
        echo '<pre>';
    }
}