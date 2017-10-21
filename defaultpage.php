<?php
class defaultpage extends abspage {

	public function __construct()
	{
		if(isset($_GET["wn"])){
			$this->html .= errmsg::Err($_GET["wn"]);
		} 
		upload2::check();
	}
	
	public function post() {
		$this->html .= upload2::upld();
		$this->html .= showcsv::getform();
		$this->html .= scanfolder::ScFd('CSVdata');
	}

}
