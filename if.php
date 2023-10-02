<?php

// $score=75;

// echo "我的成績:" . $score;
// echo "<br>";
// echo "判斷為：";


// if ($score >=60){
//     echo "及格";
// }else{
//     echo "不及格";
// }

// echo "<br>";
// echo "----------------------------";
// echo "<br>";


// $number=95;

// if($number % 2 == 1){
//     echo "基數";
// }else{
//     echo "偶數";
// }

// echo "<br>";
// echo "----------------------------";
// echo "<br>";


// // Switch...case練習：



// $level="A";

// switch($level){
//     case "A":
//         echo "表現優良，請繼續保持";
//     break;
//     case "B":
//         echo "值得肯定，還有進步空間";
//     break;
//     case "C":
//         echo "需要更多的練習";
//     break;
//     case "D":
//         echo "需要加強基本功";
//     break;
//     default:
//         echo "是否無心學業?";
// }

// echo "<br>";
// echo "----------------------------";
// echo "<br>";


// echo "<---練習：分配成績等級--->";
// echo "<br>";
//分配成績等級

$score=20;

echo "我的成績:" . $score;
echo "<br>";
echo "判斷為：";


if ($score >=60){
    echo "及格";
}else{
    echo "不及格";
}

echo "<br>";

$level="";

if($score >=0 && $score <=59){
    echo $level="E";
}elseif($score >=60 && $score <=69){
    echo $level="D";
}elseif($score >=70 && $score <=79){
    echo $level="C";
}elseif($score >=80 && $score <=89){
    echo $level="B";
}elseif($score >=90 && $score <=100){
    echo $level="A";
}else{
    echo "此為無效成績，請重新輸入";    
}

echo "<br>";
// $level="A";

switch($level){
    case "A":
        echo "表現優良，請繼續保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    case "E":
        echo "是否無心學業?";
    break;
    default:
        echo "";
    break;
}

?>