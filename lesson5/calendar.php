<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            width: 50%;
            border: 3px double black;
        }
        td{
            border: 1px solid black;
            padding: 5px 10px ;
            text-align: center;
            font-family: Cambria, Cochin;
            font-size: 30px;
        }
        tr>td{
            background-color: #dedbdb;
        }
        .td1{
            background-color: pink;
        }
        .td2{
            background-color: pink;
        }
    </style>
</head>
<body>
<?php
$month=12;
echo "<h3>";
echo date("西元 Y 年 ").$month."月";
echo "</h3>";

$thisMonth=date("$month");
$firstDayofthemonth=date("Y-$month-1");//這個月的第一天
$firstweekday=date("w",strtotime($firstDayofthemonth));//第一天是星期幾。
$totalyDayofthemonth=date("t");//這個月的最後一天是30或31。
$lastdayofthemonth=date("Y-$month-$totalyDayofthemonth"); //這個月的最後一天日期是幾月幾號。
$weeks=ceil(($totalyDayofthemonth+($firstweekday))/7);//每個月占幾週，要印幾列
echo $month."月"."的第一天是星期".$firstweekday;
echo "<br>";
echo "共需". $weeks."列";
// echo "這個共有".$thisMonthDays."天";
$firstCell= date("Y-m-d",(strtotime("-$firstweekday days",strtotime($firstDayofthemonth))));//計算每月第一個欄位：月的第一天日期 - 月的第一個是星期幾幾(若為星期四，就減4)
echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";



for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){

        $addDays=7*$i+$j;//第一列的第一天，啟始累加的天數
        $thisCellDate=strtotime("+$addDays days",strtotime($firstCell));//這一天的日期=第一格+累加的天數

        if (date('w',$thisCellDate)==0 || date('w',$thisCellDate)==6){//星期天和星期六，印粉行色
            echo "<td style='background:pink'>";
        }else{
            echo "<td>";
        }
        if(date("m",$thisCellDate)==date("m",strtotime($firstDayofthemonth))){
            echo date("j",$thisCellDate);
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<hr>






<?php
echo "<h3>";
echo date("西元 Y 年 m 月");
echo "</h3>";
$thisMonth=date("m");
$thisFirstDay=date("Y-m-1");
$thisFirstDate=date('w',strtotime($thisFirstDay));//第一天是星期幾。


$thisMonthDays=date("t");
$thisLastDay=date("Y-m-$thisMonthDays");
echo "這個共有".$thisMonthDays."天";
echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";

$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);

for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        echo "<td>";
        $tmp=7*($i+1)-(6-$j)-$thisFirstDate;;
        if($tmp>0 && $tmp<=$thisMonthDays){
            echo $tmp;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
   
   <h2>西元 2023 年 10 月</h2>
    <div class="container">
        <div class="container">
            <table>
                <tr>
                    <td class="td1">日</td>
                    <td>一</td>
                    <td>二</td>
                    <td>三</td>
                    <td>四</td>
                    <td>五</td>
                    <td class="td2">六</td>
                   
                </tr>
                <tr>
                    <td class="td1">
                       1
                    </td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="td2">7</td>
                </tr>
                <tr>
                    <td class="td1">8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td class="td2">14</td>
                </tr>
                <tr>
                    <td class="td1">15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td class="td2">21</td>
                </tr>
                <tr>
                    <td class="td1">22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td class="td2">28</td>
                </tr>
                <tr>
                    <td class="td1">29</td>
                    <td>30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="td2"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="td2"></td>
                </tr>

            </table>
        </div>
    </div>
</body>
</html>