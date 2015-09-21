<?php
$deck = array();
for ($i = 0; $i < 52; $i++){
	$deck[] = $i;
}

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
                    "11.png" => 11, 
                    "12.png" => 12, 
                    "13.png" => 13,);

shuffle($deck);
 $sum = array();
for($i = 0; $i < 4; $i++){
$sum[$i] = 0;
	for ($j = 0; $j < rand(4, 6); $j++){
		echo "<img src ='cards/" . $suitArray[floor(array_pop($deck)/13)] . "/" . (array_pop($deck) % 13 + 1) . ".png' / >";		
		$sum[$i] = $sum[$i] + $theCardValues[(array_pop($deck) % 13 + 1) . ".png"];
	}
	echo $sum[$i] . " ";
	
	if ($sum[$i] == 42){	
		echo "YOU WIN! ";	
	}
	
echo "<br />";
}

for ($i = 3; $i > 0; $i--){
	$temp = $sum[$i];
	if ($sum[$i] > $sum[$i-1] && $sum[$i] < 42){
		$temp = $sum[$i];	
	}
}
?>
