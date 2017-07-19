<?php
//文件上传处理脚本
//
//解决文件没有权限移动
//  1. 查看Apache进程的所有者，新建php文件，<?php echo exec('whoami')；
//  2. 得到用户名后使用： chown 用户名 上传的文件夹路径
//  3. chmod 755 上传的文件夹
//
//
//    $error = $name = $type = $size = $tmp_name = "";
//    解决未定义的索引提示
    function _get($str)
    {
        $val = !empty($_FILES["file"][$str])?$_FILES["file"]["$str"]:null;
        return $val;
    }

    if ((_get("type") == "image/gif") || (_get("type") == "image/jpeg") || (_get("type")) == "image/pjpeg") {

        if (_get("error") > -1) {
            echo "Return Code: ".$_FILES["file"]["error"]."<br />";
         }
        else {
            echo "Upload: "._get("name")."<br />";
            echo "Type: "._get("type")."<br />";
            echo "Size: "._get("size")."<br />";
            echo "Tmp_File: "._get("tmp_name")."<br />";

            if (file_exists("upload/"._get("name"))) {
                echo _get("tmp_name")."already exists.";
            }
            else {
                move_uploaded_file(_get("tmp_name"), "upload/"._get("name"));
                echo "Had stored in:  upload/".$_FILES["file"]["name"];
            }
        }
    }
    else {
        echo "<h2>不是允许上传的文件类型</h2>";
        echo "<h3><b>请上传gif, jpg文件类型</b></h3>";
    }
?>
