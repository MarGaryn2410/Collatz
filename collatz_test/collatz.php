<?php

require 'function.php';

if (isset($_POST["First_Number"]) && isset($_POST["Second_Number"])) {
    $First_Number = $_POST["First_Number"];
    $Second_Number = $_POST["Second_Number"];

    $collatzHistogramCalculator = new CollatzHistogramCalculator();
    $histogram = $collatzHistogramCalculator->calculateHistogram($First_Number, $Second_Number);

    echo "Histogram:<br>";
    foreach ($histogram as $iterations => $count) {
        echo "Iterations: $iterations, Count: $count<br>";
    }
}
?>