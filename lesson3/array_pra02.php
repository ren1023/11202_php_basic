<h2>利用程式來產生陣列</h2>
<ul>
<li>以迴圈的方式產生一個九九乘法表</li>
<li>將九九乘法表的每個項目以字串型式存入陣列中</li>
<li>再以迴圈方式將陣列內容印出</li>
</ul>

<?php

$nine=[];
for($j=1;$j<=9;$j++){
    echo "<br>";
    for ($i=1;$i<=9;$i++){
      
        $nine[]="$i * $j =". ($j*$i); // 輸出乘積結果

    }
    

}
foreach($nine as $idx => $value){
       echo $value;
        if ($idx%9 == 8){
        echo "<br>";
    }
    
}
?>

<?php
echo "<table>";
foreach($nine as $idx => $value){
    if ($idx %9 ==0){
        echo "<tr>
        <td>$value</td>";
    }elseif ($idx %9 ==8){
        echo " <td>$value</td>
    </tr>";
        
    }else{
        echo "<td>$value</td>";
        
    }
 
}
echo "</table>";
?>



<table>
    if (){
        <tr>
        <td></td>
    }elseif{
        <td></td>
    </tr>
        
    }else{
        <td></td>
        
    }
    
       
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>


    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    
</table>

