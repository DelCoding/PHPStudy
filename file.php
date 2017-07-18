<?php
    $rfile = fopen("old.txt","r") or die("Unable to open the file");
    while (!feof($rfile)) {
        $str = fgets($rfile)."\n";
        $wfile = fopen("new.txt","a+") or die("Unable to open the file");
        fwrite($wfile, $str);
    }
    fclose($rfile);
    fclose($wfile);
    echo "写入文件完成";
?>
