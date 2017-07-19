<?php
    //文件上传处理脚本
//    $error = $name = $type = $size = $tmp_name = "";
    function _get($str)
    {
        $val = !empty($_FILES["file"][$str])?$_FILES["file"]["$str"]:null;
        return $val;
    }


    if (_get("error") > 0) {
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
?>
