<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<p>修改用户信息</p>
<p>用户ID: <?php
    echo $_GET['id'];
    ?>
</p>

<form action='edit.php' method="GET" enctype="application/x-www-form-urlencoded">
    <input type="hidden" name="id" value="<?php
    echo $_GET["id"];
    ?>">
    <div>用户名 ：
        <input type="text" name="name" value="
        <?php
        echo $_GET['name'];
        ?>
        ">
    </div>
    <br>
    <!--    <div>用户密码：-->
    <!--        <input type="text" name="userpass">-->
    <!--    </div>-->
    <!--    <br>-->
    <div>用户年龄：
        <input type="text" name="age" value="
          <?php
        echo $_GET['age'];
        ?>
        ">
    </div>
    <br>
    <div style="">
        <input type="submit" value="修改" style="width: 200px;display: inline-block">
    </div>
    <br>
    <br>
</form>
</body>
</html>