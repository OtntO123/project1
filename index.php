<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

if(isset($_GET["wn"])){
	switch($_GET["wn"]){
		case 1:
			echo "PLEASE CHOOSE FILE!!!";	
			break;
	}
}
?>

<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select CSV to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Click HERE TO Upload" name="submit">
</form>



<?php
$files = scandir('CSVdata');
echo "EXISTING FILEs:";
for($i = 2; $i < count($files); $i++){
	echo "</br>" . ($i-1) . ". "  . $files[$i];
}
//print_r($files);

//class basic
?>

</body>
</html>
