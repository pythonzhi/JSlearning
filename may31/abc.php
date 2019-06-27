<?php

$str = '这是从数据库读出的一条数据';

?>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      h2 {
        color: orange;
      }
    </style>
  </head>
  <body>
    <!-- 前后端混合开发 -->
    <h2><?php echo $str; ?></h2>
  </body>
</html>
