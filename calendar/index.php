<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2024年月曆</title>
    <style>

        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body {
            min-height: 100vh;
            /* background: linear-gradient(to bottom, rgba(195, 220, 153, 0.32), rgba(255, 255, 255, 0.73) 80%); */
            background-color: lightseagreen;
            background-size: cover;
            background-position: center;
        }
        .navbar a {
            position: relative;
            font-size: 14px;
            color: #fff;
            font-weight: 500;
            text-decoration: none;
            margin-left: 10px;
            
        }
        .navbar a::before {
            content: '';
            position: absolute;
            /* 是一個 CSS 屬性，用於指定元素的定位方式。當您將元素的位置設置為絕對定位時，它將根據最接近的已定位的祖先元素進行定位，如果沒有已定位的祖先元素，則相對於文檔的 body 元素進行定位。 */
            top: 100%;
            left: 0;
            width: 0;
            height: 2px;
            background: #fff;
            transition: .3s;
        }
        .navbar a:hover::before {
            width: 100%;
        }
        table{
            margin-left: 30px;
            border-collapse: collapse;
            border:3px double black;
            

        }

        td{
            border:1px solid black;
            padding:5px 10px;
            text-align: center;
        }
        header{
            margin-bottom:50px;
        }
        h3{
            margin-left: 30px;
            margin-bottom: 10px;
            
        }
        nav{
            margin-left: 10px;
        }
    </style>
    
</head>
<body>

        <header class="header">
            <nav class="navbar">
                <a href="./01.php">一月</a>
                <a href="./02.php">二月</a>
                <a href="./03.php">三月</a>
                <a href="./04.php">四月</a>
                <a href="./05.php">五月</a>
                <a href="./06.php">六月</a>
                <a href="./07.php">七月</a>
                <a href="./08.php">八月</a>
                <a href="./09.php">九月</a>
                <a href="./10.php">十月</a>
                <a href="./11.php">十一月</a>
                <a href="./12.php">十二月</a>

            </nav>

        </header>
        <?php
$year=2023;
$month=9;
echo "<h3>";
echo "西元".$year."年 ".$month."月";
echo "</h3>";
$thisMonth=date("$month");//月份
$thisFirstDay=date("Y-$month-1");//該月的第一天
$thisFirstDate=date("w",strtotime($thisFirstDay));//該月的第一天是星期幾。
// $thisMonthDays=date("t",$month);//該月的最後一天是30或31。
$thisMonthDays=date('t', strtotime("$year-$month"));//該月的最後一天是30或31。
$thisLastDay=date("Y-$month-$thisMonthDays"); //該月的最後一天日期是幾月幾號。
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);//每個月占幾週，也就是i要印幾列

//<---for test--->
// echo $month."月"."的第一天是星期".$thisFirstDate;
// echo "<br>";
// echo "共需". $weeks."列";
// echo "<br>";
// echo "本月共".$thisMonthDays."天";
// echo "<br>";
// echo "這個共有".$thisMonthDays."天";
$firstCell= date("Y-m-d",(strtotime("-$thisFirstDate days",strtotime($thisFirstDay))));//計算每月第一個欄位：月的第一天日期 - 月的第一個是星期幾幾(若為星期四，就減4)
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
        if(date("m",$thisCellDate)==date("m",strtotime($thisFirstDay))){//同月則顯示
            echo date("j",$thisCellDate);
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

    
</body>
</html>