<?php

  set_error_handler(
    function($code, $text){
		if (!(error_reporting() & $code)) {
			return false;
		}
		
		if ($code === E_NOTICE) {
			echo "<b>Warning: $text</b>";
			return true;
		}
		
		return false;
	});
	
  var_dump($_GET['id']);