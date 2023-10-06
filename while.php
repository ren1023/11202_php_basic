<?php

// $sum=0;

// for ($i=0; $i<=100; $i++) {
//     $sum=$sum+$i;
// }

// echo "1加到100為：".$sum;

// ##### 1+... 100的結果：#####

$sum = 0;
$i = 1 ;

while ( $i <= 100) {

    echo "當 i =".$i." 時，";
    echo "sum =".$sum . "，";
    $sum += $i;
    // echo "sum=". $sum . "+" . $i . "=" .$sum += $i;
    echo '故 $sum+$i 的結果是 ='.$sum."。";
    echo '<br>';
    
    $i++;
    
}

// echo "1加到100為：".$sum;
// 
?>