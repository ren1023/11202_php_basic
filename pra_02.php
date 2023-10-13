<h2>九九乘法表練習</h2>
<?php

// 一個一個慢慢印
for ($i=1;$i<=9;$i++){
    echo '1 *'.$i. '='.(1*$i)."&nbsp&nbsp&nbsp";
}

echo "<br>";

for ($i=1;$i<=9;$i++){
    echo '2 *'.$i. '='.(1*$i)."&nbsp&nbsp&nbsp";
}

echo "<br>";

for ($i=1;$i<=9;$i++){
    echo '3 *'.$i. '='.(1*$i)."&nbsp&nbsp&nbsp";
}

echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '4 *'.$i. '='.(1*$i)."&nbsp&nbsp&nbsp";
}

echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '5 *'.$i. '='.(1*$i)."&nbsp&nbsp&nbsp";
}

echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '6 *'.$i. '='.(1*$i)."&nbsp&nbsp&nbsp";
}

echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '7 *'.$i. '='.(1*$i)."&nbsp&nbsp&nbsp";
}

echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '8 *'.$i. '='.(1*$i)."&nbsp&nbsp&nbsp";
}

echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '9 *'.$i. '='.(1*$i)."&nbsp&nbsp&nbsp";
}

echo "<br><hr>";

// 
echo "<h2>九九乘法表練習_for loop</h2>";

for($j=1;$j<=9;$j++){
    for ($i=1;$i<=9;$i++){
        echo $j.'*'.$i. '='.($j*$i)."&nbsp&nbsp&nbsp";
    }
    echo "<br>";
}

?>

<h2>九九乘法表練習_for loop+table</h2>

<style>
    table,tr,td,th{
        border: 3px dotted lightseagreen;
        border-collapse:collapse ;
        padding: 2px 10px 2px 2px;
        font-family: 'Trebuchet MS';
        /* background-color: black; */
        /* color: white; */
    }
</style>

<?php

echo "<table>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for ($i=1;$i<=9;$i++){
        echo "<td>";
        echo $j.'*'.$i. '= '.($j*$i);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>    


<h2>九九乘法表練習_table</h2>
<?php
echo "<table>";
for ($i = 0; $i <= 9; $i++) {
    echo "<th>".$i. "</th>"; // 輸出 row 表頭
}
for($j=1;$j<=9;$j++){
    echo "<tr>"; // 輸出 row tag
    echo "<th>".$j. "</th>"; // 輸出每 row 的表頭
    for ($i=1;$i<=9;$i++){
        echo "<td>"; // 新增 column 儲存格
        echo $j*$i; // 輸出乘積結果
        echo "</td>"; // 結束儲存格
    }
    echo "</tr>"; // 結束行
}
echo "</table>"; // 結束表格
?>


<h2>九九乘法表練習_table_優化</h2>
<?php
echo "<table>"; // 印出表格開始標籤
for($j=0;$j<10;$j++){
    if($j==0){
        echo "<tr style='background:#eee'>"; // 如果是第一列，設置背景顏色為淺灰色
    }else{
        echo "<tr>"; // 否則，印出一個新的表格行
    }
    for ($i=0;$i<10;$i++){
        if($i==0){
            echo "<td style='background:#eee'>"; // 如果是第一欄，設置背景顏色為淺灰色
        }else{
            echo "<td>"; // 否則，印出一個新的表格儲存格
        }
        if($j==0 && $i==0){
            echo ""; // 如果是第一行第一列，輸出空白
        }else if($j==0){
            echo $i; // 如果是第一行但不是第一列，輸出列數
        }else if($i==0){
            echo $j; // 如果是第一列但不是第一行，輸出行數
        }else if($j<$i){
            echo ""; // 如果行數小於列數，輸出空白
        }else{
            echo $j*$i; // 否則，輸出行數乘以列數的結果
            echo "</td>"; // 關閉表格儲存格
        }
    }
    echo "</tr>"; // 關閉表格行
}
echo "</table>"; // 關閉表格
?>


    
