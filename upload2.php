<?php
class upload2{
	static public function upld() {
	$msg = '<body>';
	$msg .= '<form action="index.php" method="post" enctype="multipart/form-data">';
	$msg .= '<h1>Select CSV to upload: </h1>';
	$msg .= '<input type="file" name="fileToUpload" id="fileToUpload">';
	$msg .= '<input type="submit" value="Click HERE TO UPLOAD" name="submit">';
	$msg .= '</form>';
	return $msg;
	}

	static public function check() {

		if(isset($_FILES["fileToUpload"]["name"])) {
			if($_FILES["fileToUpload"]["name"] == "") {
				header('Location: index.php?wn=1');
			} else {
				$target_file = "CSVdata/" . $_FILES["fileToUpload"]["name"];			

				//// Check file exists
				//if (file_exists($target_file)) {
				//	echo "File exists!";
				//}

				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 500000) {
					header('Location: index.php?wn=2');
				} else if ($_FILES["fileToUpload"]["type"] != "text/csv" && $_FILES["fileToUpload"]["type"] != "text" && $_FILES["fileToUpload"]["type"] != "csv") {
					// Check file type
					header('Location: index.php?wn=3');
				} else if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					//move file
					header('Location: index.php?wn=4');
				} else {
					header('Location: index.php?wn=5');			
				}
			}
		}
	}
}

