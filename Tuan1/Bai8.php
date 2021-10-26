<?php
	echo "<meta charset='utf8'>";
	echo "<h3>Bài 8</h3>";
	echo "<table border=1 cellspacing=0 cellpading=0>";
		echo "<tr>
			<td>i</td>
			<td>i<sup>2</sup></td>
		</tr>";
		for ($i=0 ; $i <= 10 ; $i++){
			$pow = pow($i,2);
			echo "<tr>
				<td>$i</td>
				<td>$pow</td>
			</tr>";
	}
	echo "</table>";
?>