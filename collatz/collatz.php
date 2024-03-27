<?php

include 'function.php';

if (isset($_POST["First_Number"]) && isset($_POST["Second_Number"])) {
    $calculator = new CollatzCalculator();
    $result = $calculator->calculate($_POST["First_Number"], $_POST["Second_Number"]);

    echo "Results:<br>";
    foreach ($result['results'] as $number => $data) {
        echo "Number: $number, Max Value: {$data['max_value']}, Iterations: {$data['iterations']}<br>";
    }

    echo "<br>Number with max iterations:<br>";
    echo "Number: {$result['number_with_max_iterations']}, Max Value: {$result['results'][$result['number_with_max_iterations']]['max_value']}, 
    Iterations: {$result['results'][$result['number_with_max_iterations']]['iterations']}<br>";

    echo "<br>Number with min iterations:<br>";
    echo "Number: {$result['number_with_min_iterations']}, Max Value: {$result['results'][$result['number_with_min_iterations']]['max_value']}, 
    Iterations: {$result['results'][$result['number_with_min_iterations']]['iterations']}<br>";
}
?>