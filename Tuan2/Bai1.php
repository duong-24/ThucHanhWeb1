<!DOCTYPE html>
	<?php
		include "xuly.php";
		$s = new Tuan2();
	?>
	<?php
		if(isset($_POST["submit"])) // or $request //
		{
			if(isset($_POST["chieudai"]) && isset($_POST["chieurong"]) && $_POST["chieudai"] > 0 && $_POST["chieurong"] > 0 )
			{
				$dientich = $s -> DientichHCN ($_POST["chieudai"],$_POST["chieurong"]);
			}
		}
	?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
    <link rel="stylesheet" type="text/css" href="../Tuan2/style.css">
</head>
<body>
	<h1>Tuần 2 - Bài 1: Tính diện tích hình chữ nhật</h1>
    <div id="khung">
        <div id="head">
			DIỆN TÍCH
			<br>
			HÌNH CHỮ NHẬT
		</div>
        <div id="content">
            <form action="#" name="hcn" method="post">
                <table>
                    <tr>
                        <td class="left">Chiều dài:</td>
                        <td class="right">
                            <input type="text" name="chieudai"
							Value="<?php if(isset($_POST["chieudai"]) && $_POST["chieudai"] > 0) echo $_POST["chieudai"] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Chiều rộng:</td>
                        <td class="right">
                            <input type="text" name="chieurong"
							Value="<?php if(isset($_POST["chieurong"]) && $_POST["chieurong"] > 0) echo $_POST["chieurong"] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Diện tích:</td>
                        <td class="right">
                            <input type="text" name="dientich" disabled="true"
							Value="<?php if(isset($dientich)) echo $dientich ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="mix">
                            <input type="submit" name="submit" value="Tính" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>