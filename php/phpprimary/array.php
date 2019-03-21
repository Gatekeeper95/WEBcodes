<?php
/**
 *Created by phpstorm  IDE
 *User:王鑫714
 *Date:2019/3/19
 *Time:下午20:54
 *love life,love php
 */
$cars = array('a','b','c');
echo "I like " . $cars[0] . "," .$cars[1] . ".";
echo '<br>';
$length = count($cars);

for ($i = 0;$i<$length;$i++){
    echo $cars[$i];
    echo '<br>';
}

//关联数组
$age = array("Peter" => "35","ben" => "37");
$age['joe'] = "43";
echo "Peter is " . $age['Peter'] . " years old.";
echo '<br>';


foreach ($age as $x => $value) {
    echo 'Key='.$x .", Value=" . $value;
    echo '<br>';
}
?>


<?php
$cars=array("Volvo","BMW","Toyota");
sort($cars);
print_r($cars);
?>

<?php
$numbers=array(4,6,2,22,11);
sort($numbers);
print_r($numbers);
?>
