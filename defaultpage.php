<?php
class defaultpage extends abspage {	//home page, display GET-readCSV and POST-upload form

	public function __construct()
	{
		if(isset($_GET["wn"])){
			$this->html .= errmsg::Err($_GET["wn"]);
		} 
		upload2::check();	//check whether _POST[filename], if yes to upload
	}
	
	public function post() {	//show 2 form s and 1 data filelist
		$this->html .= upload2::upld();
		$this->html .= showcsv::getform('CSVdata');
		$this->html .= scanfolder::ScFd('CSVdata');
	}

}
