<?php
abstract class abspage {
	protected $html;

	public function __construct()
	{
		$this->html .= '<html>';
	}

	public function __destruct()
	{
		$this->html .= '</html>';
		echo $this->html;
		//var_dump($this->html);
	}

	public function post() {}

	public function get() {}
}




