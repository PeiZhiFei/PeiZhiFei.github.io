<?php
require_once 'sqls.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>欢迎使用图书管理系统</p>
<form action="allusers.php" method="GET" enctype="application/x-www-form-urlencoded">
    <div>用户名 ：
        <input type="text" name="name">
    </div>
    <br>
    <!--    <div>用户密码：-->
    <!--        <input type="text" name="userpass">-->
    <!--    </div>-->
    <!--    <br>-->
    <div>用户年龄：
        <input type="text" name="age">
    </div>
    <br>
    <div style="">
        <input type="submit" value="注册" style="width: 200px;display: inline-block">
    </div>
    <br>
    <br>
</form>

<table style="text-align: left;border: solid;border-color: aqua;border-radius: 1em">
    <tr>
        <th style="margin: 5px">id</th>
        <th style="margin: 5px">名字</th>
        <th style="margin: 5px">年龄</th>
        <th style="margin: 5px">编辑</th>
        <th style="margin: 5px">删除</th>
    </tr>
    <?php
    connectDb('myapp');
    $result = mysql_query('SELECT * FROM app2 ORDER BY id DESC');
    if ($result) {
        $count = mysql_num_rows($result);
        echo '目前已注册' . $count . '人';

        echo '<br>';
        echo '<br>';
        echo '<br>';
        for ($i = 0; $i < $count; $i++) {
            $array = mysql_fetch_array($result);
            $id = $array['id'];
            $name = $array['name'];
            $age = $array['age'];
            echo '
    <tr>
        <td>' . $id . '</td>
        <td>' . $name . '</td>
        <td>' . $age . '</td>
        <td>' . "<a href='editui.php?id=$id&name=$name&age=$age'>修改</a>" . '</td>
        <td>' . "<a href='delete.php?id=$id'>删除</a>" . '</td>
    </tr>
    ';
        }
    }
    ?>

<script type="text/javascript">
    document.getElementsByTagName('form')[0].onsubmit = function(e) {

    }
</script>
</body>
</html>