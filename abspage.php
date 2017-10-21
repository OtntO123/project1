<?php
abstract class abspage {	//abstract class
	protected $html;

	public function __construct()
	{
		$this->html .= '<html>';
	}

	public function __destruct()
	{
		$this->html .= '</html>';
		echo $this->html;	//echo all http code
	}

	public function post() {}	//select one to run based on GET or POST

	public function get() {}	//select one to run
}




