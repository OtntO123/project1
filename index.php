<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

if(isset($_GET["wn"])){
	//echo $_GET["wn"];
	switch($_GET["wn"]){
		case 0:
                        echo "Warning!!You should not see that URL!!!";
                        break;
		case 1:
			echo "Warning!!PLEASE CHOOSE A FILE or Write a existing file name!!!";	
			break;
	}
}
?>

<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
	Select CSV to upload:
	<input type="file" name="fileToUpload" id="fileToUpload"><br>
	Or Check a EXISTING FILE, Please type file name:
	<input type="text" name="filename" value=""><br>
	<input type="submit" value="Click HERE TO GO" name="submit">
</form>



<?php
$files = scandir('CSVdata');
echo "EXISTING FILEs:";
for($i = 2; $i < count($files); $i++){
	echo "</br>" . ($i-1) . "."  . $files[$i];
}
//print_r($files);

//class basic
?>

</body>
</html>
