<html>
<head>
    <h1>第一个PHP程序</h1>
    <h2> <a href="http://baidu.com/">jump to baidu </a> </h2>
</head>

<body>
<form method="get" action="<?php echo $_SERVER["PHP_SELF"]?>">
    账号<input type="text" name="username">
    密码<input type="text" name="password">
    提交<input type="submit">
</form>

<?php
    echo "当前路径<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<hr></hr>";
    echo "<br>";
    echo "hello git";
    for ($i=0; $i < 10; $i++) {
        echo "hello git <br>";
    }
?>
</body>
</html>
