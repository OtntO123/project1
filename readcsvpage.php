<?php
class readcsvpage extends abspage
{
    public function get()
    {
	$this->html .= showcsv::csv($_GET['csv']);	//read csv file address from _GET and display 
    }

}
