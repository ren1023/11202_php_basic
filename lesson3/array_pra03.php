<h2>威力彩電腦選號沒有重覆號碼(利用 while 迴圈)</h2>

<ul>
<li>使用亂數函式 rand($a,$b)來產生號碼</li>
<li>將產生的號碼順序存入陣列中</li>
<li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
<li>完成選號後將陣列內容印出</li> 
</ul>



第一區：
 1-38
rand(min,max);

<hr>
<?php

$area1=[];


for($i=0;$i<6;$i++){
    $tmp =rand(1,38);
    $area1[$i]=rand(1,38);
    
}
foreach($area1 as $n){
    echo $n.",";
}

print_r ($area1);
echo "<br>";



?>

<hr>
<h3>修正版</h3>
<?php

$num=[];
while(count($num)<6){
    $tmp =rand(1,38);
    if (!in_array($tmp,$num)){
        $num[]=$tmp;
    }
}

foreach($num as $n){
    echo $n . ",";
    
}

?>


