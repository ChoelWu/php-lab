<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-6
 * Time: 上午2:30
 */

class demo
{
    static function fun1($var1, $var2)
    {
        return 'fun1, var1=' . $var1 . ',var2=' . $var2;
    }

    public function fun2($var1, $var2)
    {
        return 'fun2, var1=' . $var1 . ',var2=' . $var2;
    }
}

echo '<pre>';
echo call_user_func_array(['demo', 'fun1'], [200, 500]);
echo '<br>';
echo call_user_func_array([(new demo), 'fun2'], [250, 520]);
echo '<br>';
echo '<pre>';