<!DOCTYPE html>
	<?php
		include "xuly.php";
		$s = new Tuan2();
	?>
	<?php
		if(isset($_POST["submit"])) // or $request //
		{
			if(isset($_POST["canha"]) && isset($_POST["canhb"]) && $_POST["canha"]>0 && $_POST["canhb"]>0)
			{
				$canhhuyen = $s -> Tinhcanhhuyen ($_POST["canha"],$_POST["canhb"]);
			}
		}
	?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
    <link rel="stylesheet" type="text/css" href="../Tuan2/style.css">
</head>
<body>
	<h1>Tuần 2 - Bài 4: Tính cạnh huyền tam giác vuông</h1>
    <div id="khung">
        <div id="head">
			Cạnh huyền tam giác vuông
		</div>
        <div id="content">
            <form action="#" name="hcn" method="post">
                <table>
                    <tr>
                        <td class="left">Cạnh A:</td>
                        <td class="right">
                            <input type="text" name="canha" 
                            Value="<?php if(isset($_POST["canha"]) && $_POST["canha"] > 0) echo $_POST["canha"] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Cạnh B:</td>
                        <td class="right">
                            <input type="text" name="canhb"
							Value="<?php if(isset($_POST["canhb"]) && $_POST["canhb"] > 0) echo $_POST["canhb"] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Cạnh huyền:</td>
                        <td class="right">
                            <input type="text" name="canhhuyen" disabled="true"
							Value="<?php if(isset($canhhuyen)) echo $canhhuyen ?>" />
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