<?php
/**
 * Created by PhpStorm.
 * User: feifei
 * Date: 2016/3/19
 * Time: 17:28
 */
$d1=explode(",","北京","天津","上海");
$d2=explode(",","朝阳区","海淀区","东城区","西城区");
$d3=explode(",","南开区","和平区","武清区");
$d4=explode(",","黄浦区","普陀区","虹口区");

$s2="";
$s3="";
$s4="";

foreach ($d1 as $k=>$v){
    echo '<script>prov.options.add(new Option("'.$v.'","'.$k.'"))</script>';
}

foreach ($d2 as $k=>$v){
    $s2='city.options.add(new Option("'.$v.'","'.$k.'"));';
}
foreach ($d3 as $k=>$v){
    $s3='city.options.add(new Option("'.$v.'","'.$k.'"));';
}
foreach ($d4 as $k=>$v){
    $s4='city.options.add(new Option("'.$v.'","'.$k.'"));';
}

echo '<script>
    prov.onchange=function() {
      sel=prov.options[prov.selectedIndex].value;
      switch (sel){
      case "0":
            removeAll();
            city.options.add(new Option("==请选择地区==","=="));'.$s2.'
            break;
      case "1":
            removeAll();
            city.options.add(new Option("==请选择地区==","=="));'.$s3.'
            break;
      case "2":
            removeAll();
            city.options.add(new Option("==请选择地区==","=="));'.$s4.'
            break;
      }
    }
    
    function  removeAll() {
      for (i=0;i<15;i++){
      city.options.remove(city.options[i]);
      }
    }
</script>';
