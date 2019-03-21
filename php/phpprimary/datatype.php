<?php
/**
 *Created by phpstorm  IDE
 *User:王鑫714
 *Date:2019/3/19
 *Time:上午10:05
 *love life,love php
 */
$x = "Hello worle!";
echo $x;
echo "<br>";
$x = 'Hello world!';
echo $x;
$a = 5895;
var_dump($a);
echo "<br>";
$a = -345; //负数
var_dump($a);
echo "<br>";
$a = 0x8C;//16进制
var_dump($a);
echo "<br>";
$a = 047; //8进制
var_dump($a);
echo "<br>";
$cars = array("aaa","bbb");
var_dump($cars);
echo "<br>";
class Car{
    var $color;
    function  __construct($color = "green")
    {
        $this->color = $color;
    }
    function  what_color(){
        return $this->color;
    }
}
function print_vars($obj){
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}
//实例一个对象
$herbie = new Car("red");
//显示herbie属性
echo "\therbie: Properties\n";
print_vars($herbie);

$c = "hello world";
$c = null;
echo "<br>";
var_dump($c);









