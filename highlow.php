<?php

if($argc > 1) {
	$min = $argv[1];
	$max = $argv[2];
} else {
	$min = 1;
	$max = 100;
}

$answer = mt_rand($min, $max);

$guess = '';
$numguesses = 1;

while ($guess != $answer) { 
	// echo "Correct";

	fwrite(STDOUT, 'Guess the number ');
	$guess = trim(fgets(STDIN));

	if ($guess > $answer) {
		echo "Too High\n";
		$numguesses++;
	}
	elseif ($guess < $answer) {
		echo "Too low\n";
		$numguesses++;
	}
}  // end while loop

fwrite(STDOUT, "You are awesome! You guessed in {$numguesses} tries!" . "\n");


?>