<?php
/**
 * Created by PhpStorm.
 * User: Cybertron
 * Date: 2017/9/21
 * Time: 21:13
 */
$file = 'flag.txt';
$txt = '0';
if(file_put_contents($file, $txt) !== FALSE)
{
    echo '出错';
}
else
{

}
?>