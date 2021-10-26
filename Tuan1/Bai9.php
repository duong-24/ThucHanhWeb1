<?php
	echo "<meta charset='utf8'>";
	echo "<h3>Bài 9</h3>";
	echo "<table width=500px border=1 cellspacing=0 cellpading=0>";
		echo "<tr>
			<th>STT</th>
			<th>Tên sách</th>
			<th>Nội dung sách</th>
		</tr>";
		for ($i=0 ; $i <= 100 ; $i++){
			echo "<tr>
				<td>$i</td>
				<td>Tên sách $i</td>
				<td>Nội dung sách $i</td>
			</tr>";
	}
	echo "</table>";
?>