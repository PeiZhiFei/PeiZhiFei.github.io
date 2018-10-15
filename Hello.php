<!DOCTYPE html>
<html>
<head>
    //解决乱码问题
    <meta charset="utf-8">
</head>
<body>
<div id="msg">我是没变的</div>
<?php
const COUNT = 200;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/23 0023
 * Time: 下午 10:11
 */
/*
 class Hello
{
    private $_age;
    private $_name;

    private static $NUM=0;
    //常量需要静态引用吗？类里面的不是全局的
    const COUNT = 200;


    public function __construct($age, $name)
    {

        $this->_age = $age;
        $this->_name = $name;

        Hello::$NUM++;
        echo COUNT;

        //常量不用$
        if (Hello::$NUM > self::COUNT) {
            throw  new Exception("不能超于".Hello::COUNT."的人");
//            throw  new Exception("不能超于".COUNT."的人");
        }
        echo "构造函数" . "<br>";

    }

    public function say()
    {
        echo 'hello' . '<br>';
    }

    public function getAge()
    {
        return $this->_age;
    }

    public function setAge($age)
    {
        $this->_age = $age;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }


    public static function nihao()
    {
        echo '静态方法';
    }



       public function __construct()
       {
           echo "构造函数"."<br>";
       }

}
*/

/*echo '<script>document.getElementById("msg").innerHTML="234234我变了"</script>';
echo "he", "h";
echo __FILE__;
echo __LINE__;
$a="test";
echo "sdfsdfsad$a"."</br>";
echo "sdfsdfsad{$a}"."</br>";
echo "sdfsdfsad $a "."</br>";
echo $a,$a,$a,"</br>";
echo strrev($a);
$today=date('Y-m-d');
echo "今天是$today";
echo time();
//多种输出，大括号，。和，  双引号才行
//$变量可以嵌套

$st="2013-98-00";
//检测生日格式
echo "<p>正则表达式</p>".preg_match('/^[0-9]{4}(\-(0[1-9]|1[0-2]))(\-(0[1-9]|1[0-9]|2[0-9]|3[0-1]))$/',$st);
*/
$phone='/^1[3589][0-9]{9}$/';
$age='/^[0-9]{4}(\-(0[1-9]|1[0-2]))(\-(0[1-9]|1[0-9]|2[0-9]|3[0-1]))$/';
$email='/^.+@.+\.com$/';

$p=$_POST['phone1'];
$a=$_POST['age1'];
$e=$_POST['email1'];
//$f=$_REQUEST['file'];
if (isset($p,$a,$e)&&!empty($p)&&!empty($a)&&!empty($e)){
    $q1=preg_match($phone,$p);
    $q2=preg_match($age,$a);
    $q3=preg_match($email,$e);
    if (!$q1){
        echo 'phone is wrong';
    } else if (!$q2){
        echo 'age is wrong';
    } else if (!$q3){
        echo 'email is wrong';
    } else{
        echo 'all is right';
//        if ($_FILES['file']['tmp_name']==''){
//            echo 'file is empty';
//        }else if (!preg_match('/image/',$_FILES['file']['type'])){
//            echo 'file is not image';
//        }else{
//            //一个是全局变量，一个是表单变量
//            $d=dirname(__FILE__).'\image\\'.$_FILES['file']['name'];
//            $file=$_FILES['file']['tmp_name'];
//            move_uploaded_file($file,$d);
//            echo '文件上传成功';
//        }
    }
}
else{
    echo '有未输入的内容';
}
?>



</body>
</html>