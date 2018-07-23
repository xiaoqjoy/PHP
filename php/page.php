<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/17
 * Time: 17:54
 */

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

$sql = "SELECT id, name, age, time, smoking FROM user";
$result = $conn->query($sql);


while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - name: " . $row["name"]. "-age:" .$row["age"]."-time:" .$row["time"]."-smoking:" .$row["smoking"]."<br>";
}
/*if ($result->num_rows > 0) {
    // 输出数据

} else {
    echo "0 结果";
}*/

$conn->close();


?>