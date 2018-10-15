<?php
//header();
print_r($_FILES);
$fileinfo = $_FILES['myfile'];
$error = $fileinfo['error'];

/*
define ('UPLOAD_ERR_OK', 0);
define ('UPLOAD_ERR_INI_SIZE', 1);
define ('UPLOAD_ERR_FORM_SIZE', 2);
define ('UPLOAD_ERR_PARTIAL', 3);
define ('UPLOAD_ERR_NO_FILE', 4);
define ('UPLOAD_ERR_NO_TMP_DIR', 6);
define ('UPLOAD_ERR_CANT_WRITE', 7);
define ('UPLOAD_ERR_EXTENSION', 8);
*/

switch ($error) {
    case UPLOAD_ERR_OK:
        echo '正常';
//        domove();
        @$tmpname = $_FILES['myfile']['tmp_name'];
        @$name = $_FILES['myfile']['name'];
        @$re = move_uploaded_file($tmpname, '\upload\\' . $name);
        echo $re ? '上传成功' : '上传失败';
        break;
    case UPLOAD_ERR_INI_SIZE:
        echo '上传文件超过了PHP配置文件中的upload_max_filesize的值';
        break;
    case UPLOAD_ERR_FORM_SIZE:
        echo '超过了表单MAX_FILE_SIZE限制的大小';
        break;
    case UPLOAD_ERR_PARTIAL:
        echo '文件部分被上传';
        break;
    case UPLOAD_ERR_NO_FILE:
        echo '没有选择上传文件';
        break;
    case UPLOAD_ERR_NO_TMP_DIR:
        //自定义的没有会使用系统默认的
        echo '没有临时文件夹';
        break;
    case UPLOAD_ERR_CANT_WRITE:
        echo '文件写入失败';
        break;
    case UPLOAD_ERR_EXTENSION:
        echo '系统错误，被扩展打断';
        break;
}

function domove()
{
    $tmpname = $_FILES['myfile']['tmp_name'];
    $name = $_FILES['myfile']['name'];
    $re = move_uploaded_file($tmpname, dirname(__FILE__) . '\upload\\' . $name);
    echo $re ? '上传成功' : '上传失败';
}

function _get($str)
{
    $val = !empty($_GET[$str]) ? $_GET[$str] : null;
    return $val;
}