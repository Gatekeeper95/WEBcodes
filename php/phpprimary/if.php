<?php
/**
 *Created by phpstorm  IDE
 *User:王鑫714
 *Date:2019/3/19
 *Time:下午20:41
 *love life,love php
 */
$t = date('H');
if ($t < "10")
{
    echo 'Have a good morning';
}else if($t < "20")
{
    echo 'Have a good day';
}else
{
    echo 'Have a good night';
}
