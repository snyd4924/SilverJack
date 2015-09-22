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
$temp = -5;
echo "<table>";
for($i = 0; $i < 4; $i++){
	echo "<tr>";
	if ($i==0){
		echo "<td>";
		echo "<img src='images/0.png' width='100' height='100'/>";
		echo "</td>";
		echo "<td>";
		echo "Claudia";
		echo "</td>";
	}
	if ($i==1){
		echo "<td>";
		echo "<img src='images/1.png' width='100' height='100'/>";
		echo "</td>";
		echo "<td>";
		echo "Arash";
		echo "</td>";
	}
	if ($i==2){
		echo "<td>";
		echo "<img src='images/2.png' width='100' height='100'/>";
		echo "</td>";
		echo "<td>";	
		echo "Robby";
		echo "</td>";
	}
	if ($i==3){
		echo "<td>";
		echo "<img src='images/3.png' width='100' height='100'/>";
		echo "</td>";
		echo "<td>";
		echo "Josh";
		echo "</td>";	
	}
	$sum[$i] = 0;
	for ($j = 0; $j < rand(4, 6); $j++){
		$lastCard =  array_pop($deck);
		$cardToDisplay = ($lastCard % 13) + 1;
		echo "<td>";
		echo "<img src ='cards/" . $suitArray[floor($lastCard/13)] . "/" . $cardToDisplay . ".png' / >";
		echo "</td>";
		echo "<td>";
		$sum[$i] = $sum[$i] + $theCardValues[$cardToDisplay. ".png"];
	}
	echo "<td>";
	echo $sum[$i];
	echo "</td>";
	if($sum[$i] <= 42 && $sum[$i] > $temp){
		$temp = $sum[$i];
	}
	// echo "</tr>";
	echo "<br />";
}
echo "</tr>";
echo "<tr>";

if ($temp==$sum[0]){
		echo "<td>";
		echo "Claudia Wins";
		echo "</td>";
	}
	if ($temp==$sum[1]){
		echo "<td>";
		echo "Arash Wins";
		echo "</td>";
	}
	if ($temp==$sum[2]){
		echo "<td>";	
		echo "Robby Wins";
		echo "</td>";
	}
	if ($temp==$sum[3]){
		echo "<td>";
		echo "Josh Wins";
		echo "</td>";	
	}
echo "</tr>";
echo "</table>";

?>
