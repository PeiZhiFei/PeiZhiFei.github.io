<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>
<body>
<?php

//全文都是php不用结尾标识，有html就要加
//strlen() 函数返回字符串的长度（字符数）
function sayHello($name)
{
    echo $name . '<br>';
}

//获取时间戳
echo '时间戳' . time() . '<br>';

echo date('Y') . '<br>';
//看帮助文档各种格式
echo date_default_timezone_get() . '<br>';
//设置时区，还是看帮助文档
date_default_timezone_set('Asia/Shanghai');
echo date('Y-m-d H:i:s') . '<br>';
echo date('Y-m-d H:i:s', 1456283406) . '<br>';

//count() 函数用于返回数组的长度（元素的数量）：
$array2 = array(1, 23, 4, 5, 'hello', 'jikexueyuan', array('h' => 'hello', 'n' => 'jikue'), array(3, 2, 1));
echo json_encode($array2) . '<br>';

$array1 = ['h' => 'hello', 'n' => 'jikue', [1, 2]];
echo json_encode($array1) . '<br>';

$jsonobr = '{"h":"hello","w":"sadf","0":[1,2,3]}';
print_r(json_decode($jsonobr));

//使用json是对象的属性
$o = json_decode($jsonobr);
echo $o->h;
//{"h":"hello","w","sadf",[1,2,3]};

//数值数组遍历
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

//map数组遍历
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
//写文件，打开文件
//以@书写方法会忽略警告
//$f = @fopen('data', 'w');
$f = fopen('data.txt', 'w');
if ($f) {
    fwrite($f, 'nihaoasdhjfkashdfkjasdf');
    fclose($f);
    echo 'ok' . '<br>';
} else {
    echo 'fail' . '<br>';
}

//读取文件
$p=fopen('data','r');
while(!feof($p)){
    //只读取一行
    $content=fgets($p);
    echo $content;
}
fclose($p);

//读取整个文件
echo file_get_contents('data'). '<br>';



?>
</body>
</html>