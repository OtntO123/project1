<?php
class scanfolder {	
	static public function ScFd($folder) {
		$files = scandir($folder);	//scan dir - $folder
		$str = "<hr><h1>EXISTING FILEs:</h1>";
		for($i = 2; $i < count($files); $i++){
			$str .= $files[$i] . "</br>"; //list files in folder
		}
		$str .= "</body>";
		return $str;
	}
}
