<?php

// echo var_dump( $_FILES );
$files = $_FILES;

var_dump($files);

// echo print_r( $_FILES );
foreach ($files as $k => $v) {
  if( is_uploaded_file( $v['tmp_name'] ) ){

    if( move_uploaded_file($v['tmp_name'],"tmp/{$v['name']}") ){
      echo "文件：{$v['name']} 上传成功。 ";
    }

  }
}


?>