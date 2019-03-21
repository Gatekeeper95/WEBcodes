<?php
/**
 *Created by phpstorm  IDE
 *User:王鑫714
 *Date:2019/3/19
 *Time:下午21:18
 *love life,love php
 */
$x = 75;
$y = 25;

function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
echo '<br>';














