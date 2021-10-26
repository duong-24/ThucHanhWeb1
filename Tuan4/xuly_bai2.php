<h1>Tuần 4 - Bài 2: Upload ảnh</h1>
<?php 
	if(isset($_REQUEST["btUpload"]))
	{
		$file = $_FILES["myfile"];
		// file ảnh - Kích thước <= 8MB //
		if($file["type"] == "image/jpeg")
		{
			if($file["size"] <= 8*1024*1024)
			{
				$dir = "image/upload/";
				$newname = $dir.date('Ydm')."_".$file["name"];
				$upload = move_uploaded_file($file["tmp_name"],$newname);
				if($upload)
					echo("Upload thành công !"."<br>");
				else
					echo("Không thể upload !"."<br>");
			}else{
				echo("Chỉ được upload file nhỏ hơn 8MB !");
				}
		}else{
			echo("Chỉ được upload file jpeg !");
			}
		echo("Type: ".$file["type"]."<br>");
		echo("Name: ".$file["name"]."<br>");
		echo("Size: ".$file["size"]."<br>");
		echo("Temp: ".$file["tmp_name"]."<br>");
	}
?>