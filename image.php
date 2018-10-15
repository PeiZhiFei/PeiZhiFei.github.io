<?php
//顶头
/*header("Content-type: image/png");
$im = @imagecreate(500, 500)
or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  "打发佛挡杀佛", $text_color);
imagepng($im);
imagedestroy($im);*/

/*$img = imagecreate(400, 400);
//设置背景色
imagecolorallocate($img, 255, 255, 255);
imageellipse($img,200,200,50,50,imagecolorallocate($img, 255, 0, 0));//画椭圆
//输出默认是文本
header('Content-type:image/png');
imagepng($img);*/


//加水印
$img2 = imagecreatefromjpeg('bo.jpg');
imagestring($img2,3,11,11,'123123',imagecolorallocate($img2, 255, 0, 0));
header('Content-type:image/jpeg');
imagejpeg($img2);



?>
