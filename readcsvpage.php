<?php
class readcsvpage extends abspage
{
    public function get()
    {
	$this->html .= showcsv::csv($_GET['csv']);
    }

}
