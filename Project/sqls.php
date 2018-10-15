<?php

//$con = @mysql_connect('localhost', 'root', '');

define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');


function connectDb($dbname)
{
    $result = @mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD);
    if (!$result) {
        die('can not connect db');
    }
    mysql_select_db($dbname);
    return $result;
}
//
//function test()
//{
//    if ($con) {
//        echo 'success';
//        mysql_select_db('myapp', $con);
//
//        $result = mysql_query('SELECT id,name FROM app2 WHERE id=2');
//        /*    $result_array = mysql_fetch_assoc($result);
//            print_r($result_array);
//            echo '<br>';
//            $result_array = mysql_fetch_assoc($result);
//            print_r($result_array);
//            echo '<br>';
//            $result_array = mysql_fetch_assoc($result);
//            print_r($result_array);
//            echo '<br>';
//            $result_array = mysql_fetch_assoc($result);
//            print_r($result_array);
//            echo '<br>';
//            $result_array = mysql_fetch_assoc($result);
//            print_r($result_array);
//            echo '<br>';
//            $result_array = mysql_fetch_assoc($result);
//            print_r($result_array);
//            echo '<br>';
//            echo '<br>';
//            echo '<br>';
//            echo '<br>';
//            echo '<br>';*/
//
//
//        //循环读取
//        $count = mysql_num_rows($result);
//        for ($i = 0; $i < $count; $i++) {
//            $result_array = mysql_fetch_assoc($result);
//            print_r($result_array);
//        }
//
//        //获取条数,性能好的，不要结果
//        $result2 = mysql_query('SELECT COUNT(*) FROM app2');
//        if ($result2) {
//            $arr = mysql_fetch_array($result2);
//            echo '<br>' . $arr[0] . '<br>';
//        } else {
//            echo 'sql fail';
//        }
//
//        //获取某些条数,性能好的，不要结果
//        $result2 = mysql_query('SELECT COUNT(*) FROM app2 WHERE name="wer"');
//        $arr = mysql_fetch_array($result2);
//        echo '<br>' . $arr[0] . '<br>';
//
//
//    } else {
//        echo 'fail';
//    }
//}
