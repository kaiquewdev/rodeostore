<?php

if ($_FILES["arquivo"]["error"] > 0)
{
	echo "Erro " . $_FILES["arquivo"]["error"] . "encontrado.";	
}

else
{
	if(file_exists("upload/" . $_FILES["arquivo"]["name"]))
	{
		echo $_FILES["arquivo"]["name"] ." já foi enviado.";
	}
	else
	{
		move_uploaded_file($_FILES["arquivo"]["tmp_name"],"upload/".$_FILES["arquivo"]["name"]);
		echo "Armazenado em: /upload/" . $_FILES["arquivo"]["name"];
	}
		
}

?>