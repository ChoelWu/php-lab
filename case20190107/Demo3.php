<?php
/**
 * Created by PhpStorm.
 * User: choel
 * Date: 19-1-7
 * Time: 下午9:52
 */

class Demo3
{
    const siteName = 'PHP';
    const domain = <<<'EOF'
<a href="www.php.cn">PHP</a>
EOF;
    public function getSiteName() {
        return self::siteName;
    }
}

echo Demo3::siteName;
echo '<br>';
echo Demo3::domain;
echo '<br>';
$className = 'Demo3';
echo $className::domain;
echo '<br>';
echo (new Demo3)::domain;
echo '<br>';
echo (new Demo3())->getSiteName();