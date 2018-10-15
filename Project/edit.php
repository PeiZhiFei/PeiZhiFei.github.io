<?php
require_once 'sqls.php';

if (!empty($_GET['id'])) {
    connectDb('myapp');
    $id = intval($_GET['id']);
    $name = $_GET['name'];
    $age = intval($_GET['age']);
    //如何插入多条
    mysql_query("UPDATE app2 SET name='$name',age=$age WHERE id=$id");
    if (mysql_errno()) {
        echo mysql_error();
    } else {
        echo 'delete success';
        header('Location:register.php');
    }
} else {
    die('id is empty');
}
?>