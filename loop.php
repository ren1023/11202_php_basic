<?php

$sum=0;

for ($i=0; $i<=100; $i++) {
    $sum=$sum+$i;
}

echo "1加到100為：".$sum;
?>

<h1>迴圈練習</h1>
<h3>使用for迴圈來產生以下的數列</h3>

<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
</ul>

<?php

$n=100;

for ($i=1;$i<=$n;$i+=2) {
    echo $i;
    echo ",";
}
echo "<hr>";


$a=4;
$x=0;

$flag=true;

for ($i=2; $i<$a; $i++) {
    
    $x = $a % $i ;
    echo '因數為：$i='.$i.', 餘數為：'.$x;

   if ( $x == 0 ) {
        $flag=false;
        // echo "不是質數";
        echo "<br>";
        break;
       
   }else
   
//    echo "是質數";
   echo "<br>";
}


if ($flag=true){
    echo $a."不是質數";
    echo "<br>";
}else{
    echo $a . "是質數";
}


echo "***程式最底端";

?>
