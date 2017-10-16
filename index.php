<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");


//header("Content-type:application/csv");
// It will be called downloaded.pdf
//header("Content-Disposition:attachment;filename='Downloads.csv'");
// The PDF source is in original.pdf
//readfile("C.csv");
if(isset($_GET["wn"])){
	if($_GET["wn"] = 1){
	echo "PLEASE CHOOSE FILE!!!";	
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
