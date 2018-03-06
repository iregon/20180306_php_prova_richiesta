<?php
    $km = $_POST["txt_km"];

    if(is_numeric($km)) {
        echo "<h1>Chilometri: " . $km . "</h1>";
        echo "<h2>Miglia: " . ($km * 0.621371) . "</h1>";
    }
    else {
        echo "Valore on valido";
    }
    
?>