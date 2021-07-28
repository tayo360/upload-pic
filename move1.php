<!DOCTYPE html>

<html>

<head><title>RUN CODE</title></head>

<body id="body" class="j-light-gray" style="font-family: Roboto">

	<form action = '' method='post' enctype='multipart/form-data'>

		<input type='file' name='f' value=''>

		<input type='submit' name='s' value='upload'><br>

	</form>

	<?php

	if(isset($_POST['s'])){

		//USE RELATIVE URL

		//$m = "/opt/lampp/htdocs/move/files2/".$_FILES['f']['name'];

		//OR USE ABSOLUTE URL

		$m = $_SERVER['DOCUMENT_ROOT']."/move/files2/".$_FILES['f']['name']; //THIS IS BETTER $_SERVER['DOCUMENT_ROOT'] WILL ALWAYS POINT TO htdocs folder

		echo $m.'<br>';

		if(move_uploaded_file($_FILES['f']['tmp_name'],$m)){

			Echo $_FILES['f']['name']." successfully move";

		}else{

			echo "file not moved";

		}

	}

	?>



</body>

</html>