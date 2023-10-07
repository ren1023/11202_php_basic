<!DOCTYPE html>
<html>
<head>
    <title>9x9 Multiplication Table</title>
</head>
<body>
    <h1>9x9 Multiplication Table</h1>
    <table border="1">
        <tr>
            <th>&times;</th>
            <?php
            // 列出表頭
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>{$i}</th>";
            }
            ?>
        </tr>
        <?php
        // 生成乘法表格
        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            echo "<th>{$i}</th>";
            for ($j = 1; $j <= 9; $j++) {
                $result = $i * $j;
                echo "<td>{$result}</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
