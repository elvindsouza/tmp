<?php
    $num=$_REQUEST["v"];
    for ($i = 1; $i <= 10; $i++) {
            echo ("<p style='text-align: center;'>$num"
                . " X " . "$i" . " = " 
                . $num * $i . "</p><br>");
    }
?>