<!DOCTYPE html>
	<?php
		include "xuly.php";
		$s = new Tuan2();
	?>
	<?php
		if(isset($_POST["submit"])) // or $request //
		{
			if(isset($_POST["canh1"]) && isset($_POST["canh2"]) && isset($_POST["canh3"]) && $_POST["canh1"]>0 && $_POST["canh2"]>0 && $_POST["canh3"]>0)
			{
				$tamgiac = $s -> Loaitamgiac ($_POST["canh1"],$_POST["canh2"],$_POST["canh3"]);
			}
		}
	?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
    <link rel="stylesheet" type="text/css" href="../Tuan2/style.css">
</head>
<body>
	<h1>Tuần 2 - Bài 3: Nhận dạng tam giác</h1>
    <div id="khung">
        <div id="head">
			Nhận dạng tam giác
		</div>
        <div id="content">
            <form action="#" name="hcn" method="post">
                <table>
                    <tr>
                        <td class="left">Cạnh 1:</td>
                        <td class="right">
                            <input type="text" name="canh1" size="15"
                            Value="<?php if(isset($_POST["canh1"]) && $_POST["canh1"] > 0) echo $_POST["canh1"] ?>" />
                            (cm)
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Cạnh 2:</td>
                        <td class="right">
                            <input type="text" name="canh2" size="15"
							Value="<?php if(isset($_POST["canh2"]) && $_POST["canh2"] > 0) echo $_POST["canh2"] ?>" />
                            (cm)
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Cạnh 3:</td>
                        <td class="right">
                            <input type="text" name="canh3" size="15"
							Value="<?php if(isset($_POST["canh3"]) && $_POST["canh3"] > 0) echo $_POST["canh3"] ?>" />
                            (cm)
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Loại tam giác:</td>
                        <td class="right">
                            <input type="text" name="tamgiac" disabled="true" size="15"
							Value="<?php if(isset($tamgiac)) echo $tamgiac ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="mix">
                            <input type="submit" name="submit" value="Nhận dạng" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>