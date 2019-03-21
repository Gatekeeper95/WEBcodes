<?php
/**
 *Created by phpstorm  IDE
 *User:王鑫714
 *Date:2019/3/20
 *Time:上午10:42
 *love life,love php
 */
class Site {
    /*成员变量*/
    var $url;
    var $title;

    /*成员函数*/
    function  setUrl($par){
        $this -> url = $par;
    }
    function getUrl(){
        echo $this -> url . PHP_EOL;
    }
    function setTitle($par){
        $this -> title = $par;
    }
    function getTitle(){
        echo $this -> title . PHP_EOL;
    }
}

$rounoob = new Site;
$taobao = new Site;
$google = new Site;

//调用成员函数，设置标题和URL
$rounoob -> setTitle('菜鸟教程:');
$taobao -> setTitle('淘宝');
$google -> setTitle('Google 搜索');

$rounoob -> setUrl('www.rounoob.com');
$taobao -> setUrl('www.taobao.com');
$google -> setUrl('www.google.com');

//调用成员函数，获取标题和URL
$rounoob -> getTitle();
$taobao->getTitle();
$google->getTitle();

$rounoob->getUrl();
$taobao->getUrl();
$google->getUrl();












