<?php

$deck = array();

for ($i = 0; $i < 52; $i++){
	$deck[] = $i;
}

shuffle($deck);

echo "<br ?>";
echo "<br ?>";
$suitArray = array("clubs", "diamonds", "hearts", "spades");

//echo "<img src ='cards/" . $suitArray[floor($lastCard/13)] . "/1.png' / >";

for($i = 0; $i < 4; $i++){

	for ($j = 0; $j < rand(4, 6); $j++){
		echo "<img src ='cards/" . $suitArray[floor(array_pop($deck)/13)] . "/" . (array_pop($deck) % 13 + 1) . ".png' / >";	
	}

echo "<br />";
}

?>
