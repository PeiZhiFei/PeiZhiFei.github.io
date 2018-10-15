<?php
require_once 'sqls.php';
?>
<!DOCTYPE html>
<html>
<head>
    //解决乱码问题
    <meta charset="utf-8">
</head>
<body>

<form method="get" action="http.php">
    <br>
    用户名：<input type="text" name="s1"><br>
    <br>
    密码：<input type="text" name="s2"><br>
    <br>
    <input type="button" name="s3" value="按钮"><br>
    <br>
    <input type="submit" value="提交">
</form>


<?php
//单引号和双引号都可以，只有转义有区别

//依赖，会报错，include是包含,once只执行一次
require 'lib.php';
require_once 'Hello.php';
require_once 'sss/Test.php';

echo '\n';
echo "\n";

const asdf = 3;
define("sdf", 100);

function nihao2($name)
{
    //动态取值，字符串里面，类似swift
    echo "name=$name<br/>";
}

function nihao()
{
    //动态取值，字符串里面，类似swift
    echo "name=<br/>";
}

nihao2(234234);

function add($a, $b)
{
    //直接就返回值了
    return $a + $b;
}

echo add(3, 4) + "<br/>";

function getLevel($score2)
{
    //对小数取整
    $score = intval($score2 / 10);
    if ($score > 90) {
        return "优秀";
    } else if ($score > 80) {
        echo "hello" . $score . "<br/>";
        return "良好";
    }
}


echo getLevel(677);

for ($i = 0; $i < 20; $i++) {
    echo "hello$i<br/>";
    if ($i == 10) {
        break;
    }
}

$str = "hello world";
//返回字符所在位置
//。是字符串连接符
echo strpos($str, 'wo') . "<br/>";
echo substr($str, 2, 3) . "<br/>";

//输出数组用print_r，不用echo
print_r(str_split($str, 2));

//空格分割字符串
$stt = "java c php android swift";
print_r(explode(" ", $stt));

$txt2 = "w3cschool.cc";
$cars = array("Volvo", "BMW", "Toyota");

echo "Study PHP at $txt2" . "<br/>";
echo "My car is a {$cars[0]}" . "<br/>";

//字符串连接
echo $str . '<br>sdfgdsfg' . @$stt;

class Car
{
    var $color;

    function Car($color = "green")
    {
        $this->color = $color;
    }

    function what_color()
    {
        return $this->color;
    }
}

//数组也是map
$arrays = array('q', 'g' => "wer", 2 => "234234");
$arrays['h'] = 31;
$arrays['w'] = 32;
$arrays['e'] = 33;
for ($i = 0; $i < 20; $i++) {
    array_push($arrays, 'item' . $i);
}
print_r($arrays);
echo $arrays['h'] . '<br>';
echo $arrays[0] . '<br>';

sayHello(234231);

//面向对象
$h = new Hello(23, "你好");
echo '<br>';
echo '<br>';
echo Hello::COUNT;
echo '<br>';
echo '++++++++++++++++++++++++++++++++++++++++++++++' . '<br>';
echo '++++++++++++++++++++++++++++++++++++++++++++++' . '<br>';
echo '++++++++++++++++++++++++++++++++++++++++++++++' . '<br>';
echo '++++++++++++++++++++++++++++++++++++++++++++++' . '<br>';

$h->say();//调用方法
echo $h->getName() . '<br>';
echo $h->getAge() . '<br>';

//带命名空间
$h = new \sss\Test();
$h->say();

//执行静态方法双冒号
Hello::nihao();

$t = date("H");
if ($t >= "20") {
    echo "Have a good day!";
}

const ss = 325;
echo ss;

//模拟异常
for ($i = 0; $i < 100; $i++) {
    $h = new Hello(23, "123");
}

$func = "nihao";
$func();


connectDb('myapp');
$result = mysql_query("SELECT * FROM app2 ORDER BY id DESC");
echo mysql_num_rows($result);

echo '<table style="text-align: left;border: solid;border: =1">
    <tr><th>id</th><th>名字</th><th>年龄</th></tr>';
//循环读取
$count = mysql_num_rows($result);
for ($i = 0; $i < $count; $i++) {
    $result_array = mysql_fetch_assoc($result);
    $id = $result_array['id'];
    $name = $result_array['name'];
    $age = $result_array['age'];
    echo '<tr><td>' . $id . '</td><td>' . $name . '</td><td>' . $age . '</td></tr>';
    print_r($result_array);
}

?>

//换一种方式写
<table style="text-align: left;border: solid;border: =1">
    <tr>
        <th>id</th>
        <th>名字</th>
        <th>年龄</th>
    </tr>
    <?php
    connectDb('myapp');
    $result = mysql_query("SELECT * FROM app2 ORDER BY id DESC");
    echo mysql_num_rows($result);

//    echo '<table style="text-align: left;border: solid;border: =1">
//    <tr><th>id</th><th>名字</th><th>年龄</th></tr>';

    //循环读取
    $count = mysql_num_rows($result);
    for ($i = 0; $i < $count; $i++) {
        $result_array = mysql_fetch_assoc($result);
        $id = $result_array['id'];
        $name = $result_array['name'];
        $age = $result_array['age'];
        echo '<tr><td>' . $id . '</td><td>' . $name . '</td><td>' . $age . '</td></tr>';
//        print_r($result_array);
    }
    ?>
</table>
</body>
</html>

