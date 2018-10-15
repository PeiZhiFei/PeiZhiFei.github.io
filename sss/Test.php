<?php


namespace sss;
class Test
{
    public function say(){
        echo 'hello1'.'<br>';
    }
}

class Test2
{
    public function say(){
        echo 'hello2'.'<br>';
    }
}
class Test3
{
    public function say(){
        echo 'hello3'.'<br>';
    }
}
$a=range(10,100,4);
var_dump($a);
print_r($a);
//unset是析构变量
//关联数组使用指针便历，头尾上下一个
//数组排序，找不同
//implode explode  extract拆分数组 compact组合数组
//array_slice array_merge
compact("sd","jn","sd");//这个变量不加$

$array=array('q'=>'1','w'=>"2",'e'=>3,'a'=>true);
$s=implode(",",$array);
echo $s;
//php和js的zzbds首尾要加/  /
$ss=preg_match('/^.+/',"sdfsadf");
$ss2=preg_match('/^[0-9]{4}(\-[0-9]{5})?$/',"7581-098488");
var_dump($ss2);
echo '<table cellspacing="5" cellpadding="5" border="1">';
for ($x=1;$x<10;$x++){
    echo '<tr>';
    for ($y=1;$y<10;$y++){
        if ($y<=$x){
            //这个地方真难弄，改了好几次
            echo "<td>$x * $y = ".($x*$y)." </td>";
        }
        else{
            echo '<td></td>';
        }
    }
    echo '</tr>';
}
echo '</table>';

?>