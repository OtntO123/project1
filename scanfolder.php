<?php
class scanfolder {
	static public function ScFd($folder) {
		$files = scandir($folder);
		$str = "<hr><h1>EXISTING FILEs:</h1>";
		for($i = 2; $i < count($files); $i++){
			$str .= $files[$i] . "</br>";
		}
		$str .= "</body>";
		return $str;
	}
}
