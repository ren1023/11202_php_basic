<?php

// 宣告陣列的方式
// $a=array();
$a=[];

$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';


echo "<pre>";
// 列印陣列
print_r($a);
echo "<pre>";

// 陣列取值
echo $a[0];
echo "<br>";
echo $a[3];

echo "<hr>";

// 直接輸入 key，取value
$b=[];
$b['姓名']='小明';
$b['最高學力']='生生幼稚園';
$b['number']='0938123456';
$b['血型']='O';

echo "<br>";
echo $b['姓名'];
echo $b['血型'];


echo "<br>";
echo "<hr>";
echo "******程式的底端********";
?>