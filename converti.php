<?php
    $km = $_POST["txt_km"];

    echo "<h1>Chilometri: " . $km . "</h1>";
    echo "<h2>Miglia: " . ($km * 0.621371) . "</h1>";
?>