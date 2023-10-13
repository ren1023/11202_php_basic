<h1>尋找字串</h1>
<?php
$source="印出尋找到的單字或字母所在句子中的位置";
$target="字母";

$flag="沒找到";
$start=0;
// $pos=0;
while($target){

    $tmp=mb_substr($source,$start,mb_strlen($target));
    if($tmp==$target){
        $flag="找到";
        break;//跳出整個 while 的迴圈
    }
    $start++;
    // $pos++;
}

echo "找到了，位置在：".$start;
echo "<br>";
echo "原始字串為：\"$source\"";
echo "<br>";
echo "尋找目標為：\"$target\"";


?>