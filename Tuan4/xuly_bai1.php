<h1>Tuần 4 - Bài 1: Xem ngày hiện tại ở các định dạng khác nhau</h1>
<table border=1>
		<?php 
			if(isset($_POST["submit"])){
				echo "<tr><td>Định Dạng</td><td>Hiển Thị</td></tr>";
				echo "<tr><td>d/m/y</td><td>".date("d/m/y")."</td></tr>";
				echo "<tr><td>d/m/Y</td><td>".date("d/m/Y")."</td></tr>";
				echo "<tr><td>d/M/Y</td><td>".date("d/M/Y")."</td></tr>";
				echo "<tr><td>D/M/Y</td><td>".date("D/M/Y")."</td></tr>";
				echo "<tr><td>l/M/Y</td><td>".date("l/M/Y")."</td></tr>";
			}
		?>
</table>