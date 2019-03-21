<?php
/**
 *Created by phpstorm  IDE
 *User:王鑫714
 *Date:2019/3/19
 *Time:上午10:01
 *love life,love php
 */
$name = "wxcy";
$a = <<<EOF
    "abc"$name
    "123

EOF;
//结束需要独立一行且前后不能空格
echo $a;
