<?php
/*declare(encoding='UTF-8'); //定义多个命名空间和不包含在命名空间中的代码*/
namespace MyProject;

echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';   //设置utf-8
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/11
 * Time: 10:48
 */

echo "hello world";
echo "<br>";
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

echo $GLOBALS['z'];
echo "<br>";
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
echo '这是第 " '  . __LINE__ . ' " 行';   //文件中的当前行号
echo "<br>";
echo '该文件位于 " '  . __FILE__ . ' " ';  //文件的完整路径和文件名
echo "<br>";
class test {
    function _print() {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();
echo "<br>";
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
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