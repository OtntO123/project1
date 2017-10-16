<?php
ini_set('display_errors', 'On');        //Debug messages
error_reporting(E_ALL | E_STRICT);

header("Cache-Control: no-cache, must-revalidate");     //Don't use cache
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

$target_dir = "CSVdata/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
//$CSVFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$appp =file($_FILES["fileToUpload"]["tmp_name"]);


//print_r($appp);
//echo count($appp);

//echo ( $fgetcsv($_FILES["fileToUpload"]["tmp_name"]));
//print_r($content);

//var_dump($content);
// Check if image file is a actual image or fake image

//if(isset($_POST["submit"])) {
//	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//	if($check !== false) {
//		echo "File is an image - " . $check["mime"] . ".";
//		$uploadOk = 1;
//	} else {
//		echo "File is not an image.";
//		$uploadOk = 0;
//	}
//}

// Check if file already exists
//if (file_exists($target_file)) {
//	echo "Sorry, file already exists.";
//	$uploadOk = 0;
//}
//// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
//	echo "Sorry, your file is too large.";
//	$uploadOk = 0;
//}
//// Allow certain file formats
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
//	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//	$uploadOk = 0;
//}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
} else {
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
	} else {
	echo "Sorry, there was an error uploading your file.";
	}
}
echo "<html>";
echo "<body>";
echo "<table style='width:100%'>";

foreach($appp as $i => $k) {
        echo "<tr>";
        foreach(explode(",", $k) as $j) {
        echo ($i == 0) ? "<th>$j</th>" : "<td>$j</td>";
        }
        echo "</tr>";
}
echo "</table>";
echo "</body>";
echo "</html>";

//header("Content-type:application/jpg");
// It will be called downloaded.pdf
//header("Content-Disposition:attachment;filename=download.jpg");
// The PDF source is in original.pdf
//readfile($target_file);

?>
