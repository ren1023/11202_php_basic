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
echo "</pre>";

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

echo '<pre>';
print_r ($b);
echo '</pre>';

echo "<br>";
echo '<pre>';
echo $b['姓名'];
echo $b['血型'];
echo '</pre>';

echo "<hr>";

//多維陣列的呈現
$c=[];
$c['name']='小英';
$c['興趣']=['看書','追劇','看yt'];

echo "<pre>";
print_r ($c);
echo "</pre>";

echo "<hr>";

echo $c['name'];
echo "<br>";
// 取用二維陣列的值
echo $c['興趣'][0];
echo "<br>";
echo $c['興趣'][2];









echo "<pre>";
echo "<hr>";
echo "******程式的底端********";
?>

<h3>陣列</h3>

<?php

$a=['甲','乙','丙','丁'];


for ($i=0; $i<count($a); $i++) {
    echo $a[$i];
}


echo "<br>";

foreach ($a as $b){
    echo $b;
}

echo "<hr>";


foreach ($a as $idx => $b) {
    echo "key:".$idx." value: ".$b;
    echo "<br>";
}

?>