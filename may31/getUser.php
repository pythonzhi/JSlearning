<?php

// 服务器端设置允许客户端跨域请求
header("Access-Control-Allow-Origin:*");

$user = $_GET['user'];
//$age = $_GET['age'];

//$user = $_POST['user'];


// echo "你提交的用户名为：" . $user;

echo '{"success": true, "msg": "你提交的用户名为：' . $user . '"}';

?>