<?php
	echo "<meta charset='utf8'>";
	echo "<h3>Bài 7</h3>";
	echo "Dãy số:"."<br>";
	for ($i = 1; $i <= 100; $i++){
		if ($i%2){
			echo "$i ;&nbsp";
		}
		else{
			echo "<b>$i</b> ;&nbsp";
		}
	}
?>