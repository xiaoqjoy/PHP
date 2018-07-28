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

$arr = [33,34,67,'abc'];
echo $arr[1];

$cars = ["Volvo","BMW","Toyota"];   //数值数组

$age = ["Peter"=>"3234325","Ben"=>"37","Joe"=>"43"];    //关联数组   指定的键的数组


foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

echo var_dump($age);

$arrlength = count($cars);

echo var_dump($cars);

for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}


$q = isset($_GET['q'])? htmlspecialchars($_GET['q']) : '';
var_dump($q);
echo '<br>';
if($q) {
    if($q =='RUNOOB') {
        echo '菜鸟教程<br>http://www.runoob.com';
    } else if($q =='GOOGLE') {
        echo 'Google 搜索<br>http://www.google.com';
    } else if($q =='TAOBAO') {
        echo '淘宝<br>http://www.taobao.com';
    }
} else {
    ?>
    <form action="" method="get">
        <select name="q">
            <option value="">选择一个站点:</option>
            <option value="RUNOOB">Runoob</option>
            <option value="GOOGLE">Google</option>
            <option value="TAOBAO">Taobao</option>
        </select>
        <input type="submit" value="提交">
    </form>
    <?php
}

?>


<!--
sort() - 对数组进行升序排列
rsort() - 对数组进行降序排列
asort() - 根据关联数组的值，对数组进行升序排列
ksort() - 根据关联数组的键，对数组进行升序排列
arsort() - 根据关联数组的值，对数组进行降序排列
krsort() - 根据关联数组的键，对数组进行降序排列
-->
