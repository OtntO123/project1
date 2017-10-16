<?php
ini_set('display_errors', 'On');        //Debug messages
error_reporting(E_ALL | E_STRICT);

header("Cache-Control: no-cache, must-revalidate");     //Don't use cache
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
//var_dump( $_FILES["fileToUpload"]["name"]);
if(!isset($_POST["submit"]) or $_FILES["fileToUpload"]["name"] == "") {
	header('Location: index.php?wn=1');
}


$target_dir = "CSVdata/";
$target_file = $target_dir . $_FILES["fileToUpload"]["name"];
$uploadOk = 1;
$appp =file($_FILES["fileToUpload"]["tmp_name"]);

// Check file exists
if (file_exists($target_file)) {
	echo "File exists!";
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
}

// Check file type
if ($_FILES["fileToUpload"]["type"] != "text/csv" && $_FILES["fileToUpload"]["type"] != "text" && $_FILES["fileToUpload"]["type"] != "csv") {
        echo "Sorry, only csv, text files are allowed.";
        $uploadOk = 0;
}

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
echo "<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}
th {
    background-color: Indigo;
    color: white;
}
tr:nth-child(even){background-color: #f2f2f2}
tr:hover {background-color: LightSkyBlue}
caption { 
	display: table-caption;
	text-align: center;
	color: MidnightBlue;
	font-size:200%;
}
</style>
</head>";
echo "<body>";
echo "<div style='overflow-x:auto;'>";
echo "<table style='width:100%'>
<caption>" . $_FILES["fileToUpload"]["name"] . "</caption>";
$appp = file($target_file);
foreach($appp as $i => $k) {
        echo "<tr>";
        foreach(explode(",", $k) as $j) {
        echo ($i == 0) ? "<th>$j</th>" : "<td>$j</td>";
        }
        echo "</tr>";
}
echo "</table></div>";
echo "</body>";
echo "</html>";

//header("Content-type:application/jpg");
// It will be called downloaded.pdf
//header("Content-Disposition:attachment;filename=download.jpg");
// The PDF source is in original.pdf
//readfile($target_file);

?>
