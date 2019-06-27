<?php

// 服务器端设置允许客户端跨域请求
header("Access-Control-Allow-Origin:*");

$arr = [
  [
    'name' => 'JavaScript入门',
    'price' => 88.80,
    'publish' => '黄科学院'
  ],
  [
    'name' => 'python从入门到放弃',
    'price' => 66.60,
    'publish' => '量子科技'
  ]
];

echo json_encode($arr);

?>