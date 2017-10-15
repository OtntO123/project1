<?php
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

</body>
</html>
