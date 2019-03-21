<?php
/**
 *Created by phpstorm  IDE
 *User:王鑫714
 *Date:2019/3/21
 *Time:上午9:47
 *love life,love php
 */
session_start();
// 存储 session 数据
$_SESSION['views']=1;
?>

<html>
<head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
</head>
<body>

<?php
// 检索 session 数据
echo "浏览量：". $_SESSION['views'];
?>

</body>
</html>
