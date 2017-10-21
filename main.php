<?php
class main {	//check whether to read csv through _GET['csv'], or display homepage and check whether to upload file through _POST[]

    public function __construct()
    {
        $pageRequest = 'defaultpage';	//choose default extent home page class

        if(isset($_GET['csv'])) {	//check whether csv filename in url parameter
            $pageRequest = 'readcsvpage';	//choose extent classs to read csv ile
        }

         $abspage = new $pageRequest;	//initiate class

        if(isset($_GET['csv'])) {	//choose function in abstract class
            $abspage->get();
        } else {
            $abspage->post();
        }
    }
}

