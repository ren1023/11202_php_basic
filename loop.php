<?php


$sum=0;

for ($i=0; $i<=100; $i++) {
    $sum=$sum+$i;
}

echo "1加到100為：".$sum;
?>

<!-- 迴圈練習 -->

<h1>迴圈練習</h1>
<h3>使用for迴圈來產生以下的數列</h3>

<ul>
    <li>1,3,5,7,9……n</li>
</ul>git

<?php

// 使用for迴圈來產生以下的數列
// 1,3,5,7,9……n

$n=100;

for ($i=1;$i<=$n;$i+=2){
    echo $i.",";

}

echo "<br>";
echo "--------";
echo "<br>";

?>

<h3>使用for迴圈來產生以下的數列</h3>

<ul>
    <li>10,20,30,40,50,60……n</li>
</ul>

<?php
// 使用for迴圈來產生以下的數列
// 10,20,30,40,50,60……n
$n=10;
$x=0;
for ($i=1;$i<=$n;$i++){
    $x=$i*10;
    echo $x.",";
}

echo "<br>";
echo "--------";
echo "<br>";
?>


<h3>使用for迴圈來產生以下的數列</h3>

<ul>
    <li>3,5,7,11,13,17……97</li>
</ul>


<?php

// 使用for迴圈來產生以下的數列
// 3,5,7,11,13,17……97


$n=100; //輸入的數字
 //餘數


for($j=3;$j<=$n;$j++){
    $flag=true;
    $x=0;
    for ($i=2; $i<=($j/2); $i++) {
        
        $x = $j % $i ;
        // echo '當$i='.$i.', 餘數為：'.$x;

        if ( $x == 0 ) {
                $flag=false;
                // echo "不是質數";
                // echo "<br>";
                break;
        }else{
            // echo "是質數";
            // echo "<br>";

        }
    }


    if ($flag==true){
        // echo $j."是質數";
        echo $j.",";
        // echo "<br>";
    }else{
        // echo $j . ',不是質數';
    }

}


echo "<br";
echo "***程式最底端";

?>
