<?php
/**
 *Created by phpstorm  IDE
 *User:王鑫714
 *Date:2019/3/19
 *Time:下午21:31
 *love life,love php
 */
//while
echo 'while 循环:';
echo '<br>';
$i = 1;
while ($i <= 5){
    echo 'The number is '. $i . '<br>';
    $i ++;
}
echo '<br>';

//do__while
echo 'do__while 循环:';
echo '<br>';
$j = 1;
do{
    $j ++;
    echo 'The number is '. $j . '<br>';
}while ($j <= 5);

//for
echo 'for  循环：';
echo '<br>';
for ($i = 1;$i <= 5;$i++){
    echo 'The number is '. $i . '<br>';
}

//foreach
echo 'foreach 循环：';
echo '<br>';
$c = array('one','two','three');
foreach ($c as $item){
    echo $item . '<br>';
}









