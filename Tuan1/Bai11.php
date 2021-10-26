<?php
	echo "<meta charset='utf8'>";
	echo "<h3>Bài 11</h3>";
	echo "Bảng cửu chương từ 2 đến 10";
	echo "<table border=1 cellspacing=0 cellpading=0>";
		echo "<tr>";
			for ($i=1 ; $i<=10 ; $i++){
				echo "<td>";
					for ( $j=1 ; $j<=10 ; $j++){
						$a =  $i*$j;
						echo "$a";
						echo "<br>";
					}
				echo "</td>";
			}
		echo "</tr>";
	echo "</table>";
?>