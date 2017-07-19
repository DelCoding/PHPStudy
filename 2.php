<html>
<head>
    <title>大佬用PHPStorm写的php程序</title>
</head>
<body>
    <h1>大佬首发</h1>
    <h2>小弟支持</h2>

<?php
echo "<p><b>大佬的第一份php</b></p>";
    echo "<ul>";
    echo "大佬要推到github<br>";
    echo "小弟热烈欢迎大佬加入<br>";
    echo "大佬万岁！！！<br>";
    echo "<br><h2>嗯嗯，本大佬带你飞。</h2><br>";
    echo "而且不会翻车<br>";
    echo "</ul>"
?>

<?php
    //创建过滤器
    $filters = array
    (
    "name" => array("filter" => FILTER_SANITIZE_STRING),
    "age" => array("filter" => FILTER_VALIDATE_INT, "options" => array("min_range"=>1, "max_range"=>120)),
    "email" => FILTER_VALIDATE_EMAIL,
    );

    $result = filter_input_array(INPUT_GET, $filters);

    if(!$result["age"]){
        echo "<h3>Age must be a number between 1 and 120</h3><br />";
        die();
    }
    elseif (!$result["email"]) {
        echo "<h3>E-Mail is invaild.</h3><br />";
        die();
    }
    else{
        echo "<h2>User input is vaild</h2><br>";
    }

    if (isset($_COOKIE["user"]))
        echo "<u><b>Welcome ".$_COOKIE["user"]."</b>!</u><br />";
    else {
        echo "Welcome guest!<br />";
    }

    echo "<h3>php接收get请求</h3>";
    $name = $passwd = $gender = "";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name= $_GET["username"];
        $passwd = $_GET["password"];
        $gender = $_GET["gender"];
        $age = $_GET["age"];
        $email = $_GET["email"];

        echo "<br>username: ".$name;
        echo "<br>password: ".$passwd;
        echo "<br>gender: ".$gender;
        echo "<br>age: ".$age;
        echo "<br>email: ".$email;
    } else {
        echo "<br>请输入用户名密码";
    }

?>
</body>
</html>

