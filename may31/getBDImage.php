<?php

require_once 'httpProxy.php';

$data = httpGet('http://image.baidu.com/channel/listjson?pn=0&rn=30&tag1=明星&tag2=刘德华&ie=utf8');

$cb = $_GET['callback'];

echo "{$cb}({$data})";

?>