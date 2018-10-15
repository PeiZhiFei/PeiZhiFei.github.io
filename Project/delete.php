<?php
require_once 'sqls.php';

if (!empty($_GET['id'])) {
    connectDb('myapp');
    $id = intval($_GET['id']);
    echo $id;
    mysql_query("DELETE FROM app2 WHERE id=$id");
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