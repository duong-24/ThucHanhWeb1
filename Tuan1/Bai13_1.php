<?php
echo "<h3>Bài 13:</h3>";
	echo "<meta charset ='utf-8'>";
	$list = array("alpha", "beta", "gamma", "delta", "epsilon");
	foreach ($list as $value) {
		echo "<ul>" ;
			echo "<li>";
				echo "$value <br>";
			echo "</li>";
		echo "</ul>";
	}
?>

	