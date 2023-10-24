<h1>Lesson5_日期與時間</h1>
<?php
date_default_timezone_set('Asia/Taipei');//設定時區
echo date("Y-m-d H:i:s");
?>
<h2>strtotime</h2>
<?php
echo strtotime("now");
$time=strtotime("now");//基礎單位是秒
echo "<br>";
echo date("Y-m-d H:i:s",$time);
?>
<h2>給定兩個日期，計算中間間隔天數</h2>
<?php
$date1='2023-10-24';
$date2='2023-11-15';
$days=(strtotime($date2)-strtotime($date1))/(60*60*24);
echo $date1." 到 ".$date2 ." 有 ".$days." 天 ";
?>
<hr>
<h2>計算距離自己下一次生日還有幾天</h2>
<?php
$date="1974-10-7";
$today= date("Y-m-d");

homework！



?>
<hr>

<h2>利用 date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
<li>2021/10/05</li>
<li>10 月 5 日 Tuesday</li>
<li>2021-10-5 12:9:5</li>
<li>2021-10-5 12:09:05</li>
<li>今天是西元 2021 年 10 月 5 日</li>上班日(或假日) 
</ul>

<?php
echo date('Y/m/d');
echo "<br>";
echo date('m 月 d 日 l' );
echo "<br>";
echo date('Y-m-n H:i:s' );
echo "<br>";
echo date('Y-n-j G:i:s' );
echo "<br>";

if (date('l')=='Saturday'|| date('l')=='Sunday' ){
    echo date('今天是西元 Y 年 m 月 d 日')."是假日";
}else{
    echo date('今天是西元 Y 年 m 月 d 日')."是上班日";
}
?>
<hr>
<h2>利用迴圈來計算連續五個周一的日期</h2>
<ol>
例:
<li>2021-10-04 星期一</li>
<li>2021-10-11 星期一</li>
<li>2021-10-18 星期一</li>
<li>2021-10-25 星期一</li>
<li>2021-11-01 星期一</li>
</ol>

<?php
$weekday=date('N');
// echo $weekday;
$diff=1-$weekday;//與星期二的差異
$lastMonday=strtotime("$diff days");//計算上一個星期一的日期
$nextMonday=date("Y-m-d",strtotime("+1 week",$lastMonday));//上一個星期一+1 週

// echo $diff;

for($i=0;$i<5;$i++){
    
    $nextMonday=date("Y-m-d",strtotime("+1 week",strtotime($nextMonday)));
    echo "週一的日期：".$nextMonday;
    echo "<br>";

}


?>

