<!DOCTYPE html>
	<?php
		include "xuly.php";
		$s = new Tuan2();
	?>
	<?php
		if(isset($_POST["submit"])) // or $request //
		{
			if(isset($_POST["hk1"]) && isset($_POST["hk2"]) && $_POST["hk1"] >= 0  && $_POST["hk2"] >= 0)
			{
				$trungbinh = $s -> Ketquahoctap($_POST["hk1"],$_POST["hk2"],$tb,$kq,$xl);
			}
		}
	?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6</title>
    <link rel="stylesheet" type="text/css" href="../Tuan2/style1.css">
</head>
<body>
	<h1>Tuần 2 - Bài 6: Kết quả học tập</h1>
    <div id="khung">
        <div id="head">
            Kết quả học tập
		</div>
        <div id="content">
            <form action="#" name="hcn" method="post">
                <table>
                    <tr>
                        <td class="left">Điểm HK1:</td>
                        <td class="right">
                            <input type="text" name="hk1"
                            Value="<?php if(isset($_POST["hk1"]) && $_POST["hk1"] >= 0) echo $_POST["hk1"] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Điểm HK2:</td>
                        <td class="right">
                            <input type="text" name="hk2"
							Value="<?php if(isset($_POST["hk2"]) && $_POST["hk2"] >= 0) echo $_POST["hk2"] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Điểm trung bình:</td>
                        <td class="right">
                            <input type="text" name="tb" disabled="true"
							Value="<?php if(isset($tb)) echo $tb ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Kết quả:</td>
                        <td class="right">
                            <input type="text" name="kq" disabled="true"
							Value="<?php if(isset($kq)) echo $kq ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Xếp loại học lực:</td>
                        <td class="right">
                            <input type="text" name="xl" disabled="true"
							Value="<?php if(isset($xl)) echo $xl ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="mix">
                            <input type="submit" name="submit" value="Xem kết quả" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>