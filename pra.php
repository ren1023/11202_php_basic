<h3>閏年判斷，給定一個西元年份，判斷是否為閏年</h3>

<?php

$year = 1999;

echo "年份：" . $year;
echo "<hr>";

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {

    echo $year . "潤年";
} else {
    echo $year . "平年";
}


?>