<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/11
 * Time: 10:48
 */
echo "hello world";

$a = 1;
$b = 2;
$c = $a + $b;


$x = 75;
$y = 25;

function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";

//$name = $_REQUEST['fname'];
$name = $_GET['fname'];
if($name){
    echo $name;
}
echo "<br>";
$i=1;
while($i<=5)
{
    echo "The number is " . $i . "<br>";
    $i++;
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


class Person{
    private $sign = '';
    private $name = '';
    private $age  = 0;
    private $work = '';
    private $sex  = '女';
}

?>