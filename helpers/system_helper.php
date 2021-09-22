<?php
/*
 * Redirect To Page
*/
function redirect($page = FALSE) {
	if (is_string ($page)) {
		$location = $page;
	} else {
		$location = $_SERVER ['SCRIPT_NAME'];
	}

	//Redirect
	header ('Location: '.$location);
    	exit;
    }



    function urlFormat($str){
        //Strip out all whitespace
        $str = preg_replace('/\s*/', '', $str);
        //Convert the string to all lowercase
        $str = strtolower($str);
        //URL Encode
        $str = urlencode($str);
        return $str;
    }
?>