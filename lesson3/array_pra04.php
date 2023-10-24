<h2>找出五百年內的閏年</h2>
<ul>
<li>請依照閏年公式找出五百年內的閏年</li>
<li>使用陣列來儲存閏年</li>
<li>使用迴圈來印出閏年</li>
</ul>

<?php
// 2023~2523



// if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {

//     echo $year . "潤年";
// } else {
//     echo $year . "平年";
// }

$year = [];

for($i=2023;$i<=2523;$i++){
    
    if (($i % 4 == 0 && $i % 100 != 0) || ($i % 400 == 0)) {
        // echo $i . "潤年";
        $year [] = $i;
    } 
}

print_r ($year);
echo "<br>";
print_r (count($year));
echo "<br>";

foreach($year as $year){
        echo $year. "," . "<br>";
}

?>

<h3>teacher</h3>
<?php



?>