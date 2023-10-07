<h3>以表格排列的九九乘法表</h3>

<!-- // 99乘法，表格二 -->

<table style="border: 1px solid black; color: black;">

<?php

for($i=1;$i<=9;$i++){

    echo "<tr>";
    // echo "<th>{$i}</th>";
    
    for($j=1;$j<=9;$j++){

     $result = $i*$j;
   
     echo "<td style='border: 1px solid black; padding: 5px;font-family:Arial;'>{$i}x{$j}={$result}</td>";


    //  echo $i."x".$j ."=".$result;
    //  echo "<br>";


    }

    // echo "  ";
    // echo $i."x".$j ."=".$x;
    // echo "<br>";
}


?>
</table>

<hr>


<table>
<?php
// 99乘法，表格二

// 列出表頭
for ($i = 0; $i <= 9; $i++) {
    echo "<th style='border: 1px solid black; padding: 5px;font-family:Arial;'>{$i}</th>";
}
// 生成乘法表格
for($i=1;$i<=9;$i++){

    echo "<tr>";
    echo "<th style='border: 1px solid black; padding: 5px;font-family:Arial;'>{$i}</th>";
    
    for($j=1;$j<=9;$j++){

     $result = $i*$j;
   
     echo "<td style='border: 1px solid black; padding: 5px;font-family:Arial;'>{$result}</td>";

    }
    echo "</tr>";
}

?>
</table>