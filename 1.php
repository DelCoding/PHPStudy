<html>
<head>
    <h1>第一个PHP程序</h1>
    <h2> <a href="http://baidu.com/">jump to baidu </a> </h2>
    <?php echo "现在是：".date("h:i:sa"); echo "<br>" ?>
</head>

<body>


<?php
	echo "<br>I come in ....<br>"
?>

<form method="get" action="2.php" target="_blank">
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

    echo "<p>Copyright @ 2008-".date("Y")." By JUNAY</p>"
?>
</body>
</html>
