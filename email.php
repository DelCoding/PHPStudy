<?php
function _get($str){
    $val = isset($_REQUEST[$str])?$_REQUEST[$str]:null;
    return $val;
}

if(!empty(_get("email"))){
    $email = _get("email");
    $subject = _get("subject");
    $message = _get('message');
    $ss = mail("jay200080@163.com","Subject: $subject", $message, "From: $email");
    echo $ss;
    echo "<h2>已发送完毕</h2>";
}
else {
    echo "<h2>请填写相关信息</h2>";
}
?>
