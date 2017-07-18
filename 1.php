<html>
<head>
    <h1>第一个PHP程序</h1>
    <h2> <a href="http://baidu.com/">jump to baidu </a> </h2>
</head>

<body>

<?php
    $name = $pass = $gender = "";
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = $_GET["username"];
        $pass = $_GET["password"];
        $gender = $_GET["gender"];
    }
?>

<form method="get" action="<?php echo $_SERVER["PHP_SELF"]?>">
    账号<input type="text" name="username"><br>
    密码<input type="password" name="password"><br>
    性别：<br>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male<br>
    <input type="submit">


</form>

<?php
    echo "当前路径<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<hr></hr>";
    echo "<br>";
    echo "hello git";
    echo "<hr>";
    echo "<h2>这是获取到的信息</h2>";
    echo "username: ".$name;
    echo "<br>";
    echo "password: ".$pass;
    echo "<br>";
    echo "gender: ".$gender;
?>
</body>
</html>
