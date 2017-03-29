<?php

    echo "<table> <tr>";

    for($i = 1;  $i <= 31;){
    
        echo "<td style='background-color: lightgreen; text-align: center;'>".$i."</td>";
    
        if($i % 7 == 0)
            echo "</tr> <tr>";
        
        $i++;
    }

    echo "</table>";