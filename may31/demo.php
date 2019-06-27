<?php

// echo '123';

// echo 'alert(123)';

// echo 'fn1()';

$arr = [1,2,3,4];

$str = json_encode($arr);

// echo 'fn1(789)';

// echo "fn1({$str})";

// echo 'var arr = ' . $str;
// echo $str;

$cb = $_GET['callback'];

echo $cb . "({$str})";

?>