<?php

$arr = array(
    array(1, 2, 3, 'A'),
    array(1, 2, 'B', 'C'),
    array(1, 'D', 'E', 'F'));



?>


<html>
<head>
    <title>Table</title>
</head>
<body>
    <table border="3" width="100%">
        <tr>
            <th>2D array</th>
            <th>Shape</th>
        </tr>
        <tr>
            <td>
                <?php
                for ($i = 0; $i < count($arr); $i++) {
                    for ($j = 0; $j < count($arr[$i]); $j++) {
                        echo $arr[$i][$j] . " ";
                    }
                    echo "<br>";
                }
                ?>

            </td>
            <td>
            <table border="1" width="100%">
        <tr>
            <td>
                
            <?php
            for($i=3; $i>=1; $i--)
            {
                for($j=1; $j<=$i; $j++)
                {
                    echo " $j ";
                }
                echo "<br>";

            }  

            ?>   
            </td>
            <td>
            <?php
                $alpha = range('A', 'Z');
                $k = 0;
                for($i=0; $i<=2; $i++)
                {
                    for($j=0; $j<=$i; $j++)
                    echo $alpha[$k++]." ";
                    echo "<br>";
                }
            ?>
            </td>
        </tr>
    </table>
            </td>
        </tr>
    </table>
</body>
</html>