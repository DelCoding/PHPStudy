
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

function printTable($t){
    echo "<table border='10'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>E-Mail</th>
<th>SEX</th>
<th>Password</th>
";

    while ($row = $t->fetch_assoc()){
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
}
$results = $con->query("select ID, name, age, email, sex, passwd from Persons ORDER BY age ASC ");
printTable($results);

echo "<h3>请提交需要查询的表单<br></h3>";
?>

<html>

    <form action="select.php" method="get" >
        <table border="1">
            <tr>
                <td>ID：<input type="text" name="id"></td><br>
            </tr>
            <tr>
                <td>Name：<input type="text" name="name"><br></td>
            </tr>
        </table>
        <input type="submit">
    </form>
</html>

<?php

    function _get($str){
        $val = isset($_GET[$str])?$_GET[$str]:null;
        return $val;
    }

    function check($my_id){
        echo "<h2>";

        if (preg_match("/\D/",$my_id) || preg_match("/\s/",$my_id)){
            echo "匹配到非数字字符<br>";
            echo "请输入正确的id<br>";
            return false;
        }

//        if (preg_match("/\s/", $my_name)){
//            echo "匹配到空白字符<br>";
//            echo "请输入正确的name<br>";
//            return false;
//        }

        echo "</h2>";
        return true;
    }
    //sel_id = 3 union select * from admin
    $my_id = _get('id');
//    $my_name = _get("name");

    if ($my_id != null){
        echo "<h3>".$my_id."<br>";
//        echo $my_name."<br>";

        if(check($my_id)){
            echo "查询结果<br>";

            $sel_result = $con->query("SELECT * FROM Persons WHERE ID=$my_id");
            echo $con->error;
            printTable($sel_result);
        }
    }


    echo "</h3>";
    $con->close();
