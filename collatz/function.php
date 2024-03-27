<?php

class CollatzCalculator
{
    protected function calculate_iterations($number)
    {
        $iterations = 0;
        $max_value = $number;
        while ($number != 1) {
            if ($number % 2 == 0) {
                $number /= 2;
            } else {
                $number = (3 * $number) + 1;
            }
            $max_value = max($max_value, $number);
            $iterations++;
        }
        return ['iterations' => $iterations, 'max_value' => $max_value];
    }

    public function calculate($start, $finish)
    {
        $max_iterations = -1;
        $min_iterations = 1000000;
        $numberWithMaxIterations = 0;
        $numberWithMinIterations = 0;
        $results = [];

        for ($i = $start; $i <= $finish; $i++) {
            $data = $this->calculate_iterations($i);
            $max_value = $data['max_value'];
            $iterations = $data['iterations'];

            $results[$i] = ['max_value' => $max_value, 'iterations' => $iterations];

            if ($iterations > $max_iterations) {
                $max_iterations = $iterations;
                $numberWithMaxIterations = $i;
            }

            if ($iterations < $min_iterations) {
                $min_iterations = $iterations;
                $numberWithMinIterations = $i;
            }
        }

        return [
            'results' => $results,
            'number_with_max_iterations' => $numberWithMaxIterations,
            'number_with_min_iterations' => $numberWithMinIterations
        ];
    }
}
?>