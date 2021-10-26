<?php
	echo "<meta charset='utf8'>";
	echo "<h3>Bài 10</h3>";
	$date = getdate();
	$thisyear = $date["year"];
	echo "<select>";
	for ($i=$thisyear ; $i>=1900 ; $i--){
		echo "<option value=$i>$i</option>";
	}
	echo "</select>";
?>