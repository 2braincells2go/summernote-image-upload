<?php 
if(empty($_FILES['file']))
{
	exit();	
}
$errorImgFile = "img/warning.png";
$destinationFilePath = 'images/'.$_FILES['file']['name'];
if(!move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)){
	echo $errorImgFile;
}
else{
	echo $destinationFilePath;
}

?>
