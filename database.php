<?php
//    include("2.php");
    $con = mysql_connect("localhost", "root", "");
/*
 *       创建数据库及my_db表
    if(!$con){
        echo "<h3>数据库连接失败</h3>";
        die();
    }
    if(mysql_query("CREATE DATABASE my_db", $con)){
        echo "<h3>数据库创建成功</h3>";
    }
    else {
        echo "<h3>数据库创建失败".mysql_error()."</h3><br>";
    }

    mysql_select_db("my_db", $con);
    $sql = "CREATE TABLE Persons
        (
            ID int NOT NULL AUTO_INCREMENT,
            primary key(ID),
            name varchar(20),
            age int
        )";

    mysql_query($sql, $con);

    echo "<br><h3>创建表成功</h3><br>";

    mysql_select_db("my_db", $con);
    $ins1 = "alter table Persons add column email varchar(30)";
    $ins2 = "alter table Persons add column sex varchar(4)";
    $ins3 = "alter table Persons add column passwd varchar(40)";
    mysql_query($ins1, $con);
    mysql_query($ins2, $con);
    mysql_query($ins3, $con);
    echo "<h3>新增列成功";
    echo "正在退出</h3>";
 */
    mysql_close($con);

?>
