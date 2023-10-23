<?php

$array=[3,2,7,10,30,17];

$score =[
    '姓名'=>'小明',
    '成績'=>98
];

//echo in_array(11,$array);//如果是找不到，會傳空值，所以在頁上會看不到。

if(in_array(11,$array)){
    echo "數字有在陣列中";
    }else{
        echo "數字不在陣列中";
    }
    
echo "<hr>";
// 

echo "<pre>";
print_r (array_keys($array));
echo "</pre>";


echo "<hr>";






    

echo "<pre>";
print_r($array);
echo "</pre>";

sort($array); //升幂排序

echo "<pre>";
print_r($array);
echo "</pre>";

rsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

rsort($array); //降幂排序

echo "<hr>";

//join
$arr = array('Hello','World','Beautiful','Day!');
echo join(" ",$arr);
echo "<hr>";

// student socre





?>