
<h2>字串取代</h2>
將”aaddw1123”改成”*********”

<hr>

<?php

$s1='aaddw1123';

$t=str_replace('a','*',$s1);

echo "$t";
echo "<br>";

$t1=str_repeat("*",strlen($s1));
echo "$t1";

?>
<hr>

<h2>字串分割</h2>
將”this,is,a,book”依”,”切割後成為陣列
<?php
$s2="this,is,a,book";
$a=explode(',',$s2);

print_r($a);




?>

<hr>

<h2>字串組合</h2>
將上例陣列重新組合成“this is a book”

<?php

echo join(" ",$a);// 使用空格連接數組中的元素並輸出結果

?>

<hr>
<h2>子字串取用</h2>
將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”
<br>
<?php

$s4="The reason why a great man is great is that he resolves to be a great man";

echo mb_substr($s4,0,10);
echo "...";

$cs="今天天氣真的是不太好的樣子";
echo mb_substr($cs,0,3); //一個中文字 3 個元字
echo "...";
echo "<br>";

echo substr($cs,0,4);
echo "...";
?>

<h2>尋找字串與 HTML、css 整合應用</h2>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會 PHP 網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>


<?php

$bb="學會 PHP 網頁程式設計，薪水會加倍，工作會好找";
$c='程式設計';

echo mb_substr($bb,(mb_strpos($bb,$c)),4);// 1. 顯示從字符串中提取的 4 個字符

echo "<div style='font-size:20px;color:red'>".mb_substr($bb,(mb_strpos($bb,$c)),4)."</div>";// 2. 以紅色 20px 字體大小顯示從字符串中提取的 4 個字符


echo str_replace($c, ("<span style='font-size:20px;color:red'>".mb_substr($bb,(mb_strpos($bb,$c)),4)."</span>"),$bb);// 3. 用紅色 20px 字體大小替換子字符串並顯示結果






?>