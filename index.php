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


?>

<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
$dir    = 'CSVdata';
$files = scandir($dir);
//for($i=2;$i<count($files[]);$i++){

//echo "</br>";
//print_r($files);

//class basic
?>

</body>
</html>
