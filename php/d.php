<?php
echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';   //设置utf-8
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/14
 * Time: 0:56
 */

class MyClass
{
    const constant = '常量值';

    function showConstant() {
        echo  self::constant . PHP_EOL;
    }
}

echo MyClass::constant . PHP_EOL;

$classname = "MyClass";
echo $classname::constant . PHP_EOL; // 自 5.3.0 起

$class = new MyClass();
$class->showConstant();

echo $class::constant . PHP_EOL; // 自 PHP 5.3.0 起



/*连接数据库*/
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";
echo "<br>";

$sql = "SELECT id, name, sex, age FROM dbname";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - name: " . $row["name"]." - sex: " . $row["sex"]." - age: " . $row["age"]."<br>";
}
/*if ($result->num_rows > 0) {
    // 输出数据

} else {
    echo "0 结果";
}*/

$conn->close();

?>