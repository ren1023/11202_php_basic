<h2>
以 * 符號為基礎在網頁上排列出下列圖形:    
</h2>
<ul>
<li>直角三角型</li>
<li>倒直角三角型</li>
<li>正三角型</li>
<li>菱型</li>
<li>矩形</li>
<li>內含對角線的矩形</li>
</ul>


<?php
echo "手動印出";
echo "*<br>";
echo "**<br>";
echo "***<br>";
echo "*****<br>";
echo "******<br>";
echo "<hr>";

$amount=7;
echo "<h2>1.直角三角形</h2>";
for ($i=0;$i<$amount;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>


<h2>2.倒直角三角形</h2>
<?php
// 倒直角三角形
for ($i=$amount-1;$i>=0;$i--){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>

<style>
    *{
        font-family: 'Courier New';
    }
</style>


<h2>3.正三角形</h2>
<?php
for ($i=0;$i<$amount;$i++){
        
    for($j=0;$j<($amount-1-$i);$j++){
        echo "&nbsp";
        
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>


<h2>4.倒正三角形</h2>
<?php
for ($i=$amount-1;$i>=0;$i--){
    for($j=0;$j<($amount-$i);$j++){
        echo "&nbsp";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>


<h2>5.菱形</h2>
<?php
$mid=floor(($amount*2-1)/2);
for($i=0;$i<($amount*2)-1;$i++){

    if($i<=$mid){
        $tmp=$i;
    }else{
        $tmp--;
    }

    for($j=0;$j<($mid-$tmp);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($tmp*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>

<h2>6.矩形</h2>
<?php

for ($i=0;$i<$amount;$i++){
    for($j=0;$j<$amount;$j++){
        if($i==0||$i==($amount-1)){
            echo "*";
        }elseif($j==0 || $j==($amount-1)){
            echo "*";
        }
        else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>
<hr>

<h2>7.矩形+對角線</h2>
<?php

for ($i=0;$i<$amount;$i++){
    for($j=0;$j<$amount;$j++){
        if($i==0 || $i==($amount-1)){
            echo "*";
        }else if($j==0 || $j==($amount-1) ){
            echo "*";
        }else if ($i==$j || $i+$j==($amount-1)){
            echo "*";
        }
        else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>
<hr>
<h2>8.矩形+對角線+改星星為紅色</h2>
<?php

for ($i=0;$i<$amount;$i++){
    for($j=0;$j<$amount;$j++){
        if($i==0 || $i==($amount-1)){
            echo "*";
        }else if($j==0 || $j==($amount-1) ){
            echo "*";
        }else if ($i==$j || $i+$j==($amount-1)){
            echo "<span style='color:red'>*</span>";
        }
        else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>
<hr>


<P>&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>


