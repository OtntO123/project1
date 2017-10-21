<?php
class main {

    public function __construct()
    {
        //print_r($_REQUEST);
        //set default page request when no parameters are in URL
        $pageRequest = 'defaultpage';
        //check if there are parameters
        if(isset($_GET['csv'])) {
            //load the type of page the request wants into page request
            $pageRequest = 'readcsvpage';
        }
        //instantiate the class that is being requested
         $abspage = new $pageRequest;

        if(isset($_GET['csv'])) {
            $abspage->get();
        } else {
            $abspage->post();
        }
	//echo $pageRequest;
	//print_r($_GET);
    }

}

