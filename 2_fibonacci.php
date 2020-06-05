<?php

function factorization($seq) {
	
	$dividers = [];
	
	for($i = 1; $i <= sqrt($seq); ++$i) {
		if(($seq % $i) == 0) {
			array_push($dividers, $i);
			if($i != $seq/$i) {
				array_push($dividers, ($seq / $i));
			}
		}
	}

	return $dividers;
}

$sequence = 1;
$i = 1;

$fibo = 0;

while(true) {

	$fibo = $sequence; 
	$sequence = $i; 
	$i = $fibo + $i;
	$result = count(factorization($sequence));
	if(  $result >= 1000) {
		echo "Sucesso: $sequence - $result divisores \n";		
		return false;
	}
}
    