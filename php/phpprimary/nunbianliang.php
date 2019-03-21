<?php
/*$x=5; // 全局变量
$y = 10;
function myTest()
{

    global $x,$y;
    echo "<p>测试函数内变量:<p>";
    echo "变量 x 为: $x";
    echo "<br>";
    echo "变量 y 为: $y";
}

myTest();

echo "<p>测试函数外变量:<p>";
echo "变量 x 为: $x";
echo "<br>";
echo "变量 y 为: $y";
*/

function myTest($x)
{
    echo $x;
    //echo PHP_EOL;    // 换行符
    echo "<br />";
}
myTest(5);
myTest(6);


