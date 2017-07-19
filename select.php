<?php
/**
 * Created by PhpStorm.
 * User: Junay
 * Date: 2017/7/20
 * Time: 0:38
 */

$con = new mysqli("localhost", "root", "123456","my_db");
if ($con->connect_errno){
    echo "<h3>连接数据库失败<br></h3>";
    die();
}
echo "<h3>连接数据库成功</h3>";

$results = $con->query("select ID, name, age, email, sex, passwd from Persons");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>E-Mail</th>
<th>SEX</th>
<th>Password</th>
";

while ($row = $results->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row["ID"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['sex']."</td>";
    echo "<td>".$row['passwd']."</td>";
    echo "</tr>";
}

echo "</table>";

$con->close();
