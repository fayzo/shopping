<?php
	session_start();

	if (isset($_REQUEST['key'])) {

		if($_REQUEST['key'] == 'lang'){
		    # code...
	       $_SESSION['language'] = $_REQUEST['lang'];
		//    exit($_SESSION['language']);
		}
	}

    if (!isset($_SESSION['language'])){
    		$_SESSION['lang'] = "en";
    	}else if (isset($_SESSION['language']) && !empty($_SESSION['language'])) {
    			$_SESSION['lang'] = $_SESSION['language'];
    	}
    require_once "languages/" .$_SESSION['lang']. ".php";
?>