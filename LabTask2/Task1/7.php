<html>
<head>
    <title>Table</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td>
                
                <?php
                for($i=0;$i<=2;$i++){	
	                for($j=0;$j<=$i;$j++){
		                echo "*";
	                    }
	                echo "<br/>";
                    }
                ?>
            </td>
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
</body>
</html>