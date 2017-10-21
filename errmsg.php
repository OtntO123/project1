<?php
class errmsg {	//error message
	static public function Err($er){	
		//echo $er;
		switch($er){
		case 0:
	        	break;
		case 1:
			return "Warning!!PLEASE CHOOSE A FILE or Check a existing file name!!!";	
			break;
		case 2:
			return "File too large.";
			break;
		case 3:
			return "Not csv / text files.";
			break;
		case 4:
			return "The file has been uploaded successfully.";
			break;
		case 5:
			return "Cannot move temp_file to database.";
			break;

		}		
	}
}
