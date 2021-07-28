<form action="" method="post" enctype="multipart/form-data">
choose file <br>
<input type="file" name="f" value="">
<input type="submit" name="s" value="upload"><br>
</form>


<?php

if(isset($_POST['s']))
//print_r($_FILES);
//die();
{
 $m = "/opt/lampp/htdocs/move/files2".$_FILES['f']['name'];
 move_uploaded_file($_FILES['f']['tmp_name'], $m);
}
?>
