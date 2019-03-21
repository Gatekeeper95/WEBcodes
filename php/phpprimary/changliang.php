<?php
/**
 *Created by phpstorm  IDE
 *User:王鑫714
 *Date:2019/3/19
 *Time:上午10:29
 *love life,love php
 */
//区分大小写常量名
define("AAA","aaa");
echo AAA; //输出aaa
echo '<br>';
//echo aaa; //输出aaa报错

//不区分大小写的常量
define("AAAA","aaa",true);
echo aaaa;  //输出 aaa

//常量是全局的
function myTest(){
    echo aaaa;

}
echo '<br>';
myTest();
echo "<br>";