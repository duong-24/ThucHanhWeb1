<?php
	echo "<meta charset='utf8'>";
	echo "<h3>Bài 13</h3>";
	$list = array("alpha", "beta", "gamma", "delta", "epsilon");
	$arrlength = count($list);
	for ($x=0 ; $x<$arrlength ; $x++){
		echo "<ul>";
			echo "<li>";
				echo "<b>$list[$x]<b>";
			echo "</li>";
		echo "</ul>";
	}
?>