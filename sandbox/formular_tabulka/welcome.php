<?php
    echo "<table>";

    $x=10;
    $y=10;

    for($i=0; $i<$y; $i++)
    {
        echo "<tr>";
        for($j=0; $j<$x; $j++)
        {
            echo "<td>".$i.".".$j."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>