<?php

// if($argc > 1) {
// 	$min = $argv[1];
// 	$max = $argv[2];
// } else {
// 	$min = 1;
// 	$max = 100;
// }

// $answer = mt_rand($min, $max);

// $guess = '';
// $numguesses = 1;

// while ($guess != $answer) { 
// 	// echo "Correct";

// 	fwrite(STDOUT, 'Guess the number ');
// 	$guess = trim(fgets(STDIN));

// 	if ($guess > $answer) {
// 		echo "Too High\n";
// 		$numguesses++;
// 	}
// 	elseif ($guess < $answer) {
// 		echo "Too low\n";
// 		$numguesses++;
// 	}
// }  // end while loop

// fwrite(STDOUT, "You are awesome! You guessed in {$numguesses} tries!" . "\n");

// $age = 5;

// while($age < 18) {
// 	echo "you are $age\n";
// 	echo "Another year passes...\n\n";
// 	usleep(500000);

// 	$age++;
// }
// echo "Yay! Now you can vote\n";

///////

for ($age = 5; $age < 18; $age++) {
	echo "you are $age\n";
	echo "Another year passes...\n\n";
	usleep(500000);
}
echo "Yay! Now you can vote\n";
?>