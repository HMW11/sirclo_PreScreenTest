<?php
echo "fivaa(5)<br>";
$fivaa = 5;
	for ($k=$fivaa+1; $k >=2 ; $k--) { 
		echo str_repeat($k-2, 2);
		for ($j=2; $j <= $k ; $j++) { 
			echo $k;
		};
		echo "<br>";
	};
  ?>