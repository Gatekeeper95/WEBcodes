<?php
/**
 *Created by phpstorm  IDE
 *User:王鑫714
 *Date:2019/3/21
 *Time:上午9:05
 *love life,love php
 */
$sites = array(
    'runoob' => array(
        "菜鸟教程",
        "http://www.runoob.com"
    ),
    "google"=>array
    (
        "Google 搜索",
        "http://www.google.com"
    ),
    "taobao"=>array
    (
        "淘宝",
        "http://www.taobao.com"
    )
);
print ('<pre>');
print_r($sites);
print ('<pre>');
echo '<br>';
echo $sites['runoob'][0] . '地址为：' . $sites['runoob'][1];













