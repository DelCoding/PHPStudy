<?php
    //COOKIE设置和时区
    setcookie("user","Junay",time()+3600);
    date_default_timezone_set("Asia/Shanghai");
    session_start();
?>

<html>
<head>
    <title>主界面</title>
    <h1>第一个PHP程序</h1>
    <h2> <a href="http://www.google.com/">Google</a> </h2>
    <?php echo "现在是：".date("h:i:sa"); echo "<br>" ?>
</head>

<body>

<!--<img src="javascript:alert('XSS');" onerror="javascript:alert('XSS')"> -->
<?php
    if(isset($_SESSION['views']))
        $_SESSION['views'] = $_SESSION['views'] + 1;
    else {
        $_SESSION['views'] = 1;
    }
    echo "<br><h2>Welcome!</h2><br>";
    echo "<h3>你的会话号是：".$_SESSION['views']."</h3><br>";

    echo "尝试连接数据库<br>";
    $con = mysqli_connect("localhost", "root", "123456");
    if(!$con){
        die('Could not connect:'.mysqli_error());
    }
    else {
        echo "使用新函数连接";
        echo "<h3>连接数据库成功</h3>";
    }
?>
<!-- a simple of form with get -->
<form method="get" action="2.php" target="_blank">
    <h2>登陆表单</h2>
    <table border="1">
        <tr>
    <td>
                ID: <input type="int" name="ID"><br>
    </td>
        </tr>
            <td>
    用户名：<input type="text" name="username"><br>
            </td>
        <tr>
            <td>
    密码：<input type="password" name="password"><br>
            </td>
        </tr>
        <tr>
            <td>
    年龄：<input type="text" name="age"><br>
            </td>
        </tr>
            <td>
    邮箱：<input type="text" name="email"><br>
            </td>
        <tr>
            <td>
    性别：<br>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male<br>
            </td>
        </tr>
    </table>
    <input type="submit">
</form>

<!-- upload file to server -->
<form target="_blank "action="upload_file.php" method="post" enctype="multipart/form-data">
    <h2><br>文件上传<br></h2>
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file" />
    <br />
    <input type="submit" name="submit" value="Submit" />
</form>

<!-- a simple of send email -->
<form method="post" action="email.php" target="_blank">
    <h2><br>发送邮件<br></h2>
    Email:<input name="email" type="text" /><br />
    Subject: <input name="subject" type="text" /><br />
    Message:<br />
    <textarea name="message" row="100" cols="50">
    </textarea><br />
    <input type="submit" />
</form>

<?php
    echo "<br>当前路径<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<hr></hr>";
    echo "<br>";
    echo "hello git";
    echo "<hr>";
    echo "<br>已修改<hr>";
    echo "<p>Copyright @ 2008-".date("Y")." By JUNAY</p>"
?>
</body>
</html>
