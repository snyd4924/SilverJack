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
 $theCardValues = array("1.png" => 1,
                    "2.png" => 2,
                    "3.png" => 3,
                    "4.png" => 4,
                    "5.png" => 5,
                    "6.png" => 6, 
                    "7.png" => 7, 
                    "8.png" => 8, 
                    "9.png" => 9, 
                    "10.png" => 10, 
                    "11.png" => 10, 
                    "12.png" => 10, 
                    "13.png" => 10,);
 
for($i = 0; $i < 4; $i++){

	for ($j = 0; $j < rand(4, 6); $j++){
		echo "<img src ='cards/" . $suitArray[floor(array_pop($deck)/13)] . "/" . (array_pop($deck) % 13 + 1) . ".png' / >";	
	}

echo "<br />";
}

?>
