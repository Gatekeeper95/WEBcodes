<?php
/**
 *Created by phpstorm  IDE
 *User:王鑫714
 *Date:2019/3/20
 *Time:上午10:15
 *love life,love php
 */
function printa(){
    echo 'aaa';
}
echo 'my name is ';
printa();
echo '<br>';

function name($fname){
    echo $fname . ' 666 .<br>';
}

echo 'my name is ';
name('777');

//函数返回值
echo '<br>';
function add($q,$b){
    $sum = $q + $b;
    return $sum;
}
echo  '1 + 16 =' . add(1,16);





















