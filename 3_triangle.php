<?php

function calc_tpascal($file) {

    function lines_map($line) {
		return explode(" ", $line);
    }
    
	$lines = array_map("lines_map", file($file));
    $result = 0;
	for($i = count($lines) - 2; $i >= 0; $i--) {           
        for($col = 0; $col <= $i; $col++) {                        
            
            $start = (int)$lines[$i+1][$col];
            $sum = (int)$lines[$i+1][$col+1];
            $max = max($start, $sum);
            
            (int)$lines[$i][$col] = (int)$lines[$i][$col] + $max;              
		}
    }

    return $lines;
}

$result = calc_tpascal("triangle.txt");

echo "Resultado: {$result[0][0]} \n";
 