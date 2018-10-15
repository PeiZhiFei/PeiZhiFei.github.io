<?php
require_once 'sqls.php';
//if(empty($_GET['name'])){
//    die('username is empty');
//}if(empty($_GET['age'])){
//    die('userage is empty');
//}
if ((!empty($_GET['name'])) && (!empty($_GET['age']))) {
    connectDb('myapp');
    $name = $_GET['name'];
    $age = intval($_GET['age']);
    mysql_query("INSERT INTO app2(name,age) VALUES ('$name',$age)");
    if (mysql_errno()) {
        echo mysql_error();
    } else {
        echo 'register success';
        //不要重定向自己
        header('Location:register.php');
    }
} else {
    die('username or userage is empty');
}
?>