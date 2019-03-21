<?php
/**
 *Created by phpstorm  IDE
 *User:王鑫714
 *Date:2019/3/21
 *Time:上午10:20
 *love life,love php
 */
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'myphpdb';
//创建连接
$conn = new mysqli($servername,$username,$password,$dbname);


//检测连接
if ($conn -> connect_error){
    die('连接失败：' . $conn -> connect_error);
}
echo '连接成功' . '<br>';

//创建数据库
$sql = "INSERT INTO myguests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
$sql = "INSERT INTO myguests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com')";
$sql = "INSERT INTO myguests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";
if ($conn -> query($sql) === TRUE){
    echo '数据库插入成功';
}else {
    echo 'Error creating database:' . $conn -> error;
}
$conn -> close();

