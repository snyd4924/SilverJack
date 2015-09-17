 
<?php

$deck = array();

for ($i = 0; $i < 52; $i++){
	$deck[] = $i;
}

shuffle($deck);
print_r($deck);

echo "<br ?>";
echo "<br ?>";
$lastCard = array_pop($deck);
$suitArray = array("clubs", "diamonds", "hearts", "spades");

echo "<img src ='cards/" . $suitArray[floor($lastCard/13)] . "/1.png' / >";
echo "<img src ='cards/" . $suitArray[floor($lastCard/13)] . "/" . ($lastCard % 13 + 1) . ".png' / >";

?>
