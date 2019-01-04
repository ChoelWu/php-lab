<?php

function decodeUnicode($str)
{
    return preg_replace_callback('/\\\\u([0-9a-f]{4})/i',
        create_function(
            '$matches',
            'return mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UCS-2BE");'
        ),
        $str);
}


 
$str = "PHP二次开发：www.php2.cc";
$str_u = json_encode($str);
$str_t = json_decode($str_u, true);
echo $str_u;
echo '<br>';
var_dump(decodeUnicode("PHP\u4e8c\u6b21\u5f00\u53d1\uff1awww.php2.cc"));