<?php

	$pattern = "/^[a-z]*$/";
	
	function is_username_valid($username)
	{
		if(!preg_match("/^[a-z]*$/", strlen($username) < 8))
		{
			echo "false ".$username;
		}
		else{
			echo "true ".$username;
		}
	}
	
	function is_password_valid($password)
	{
		if(!preg_match("/^[a-zA-Z0-9]*/", strlen($password) < 8))
		{
			echo "false";
		}
		else{
			echo "true";
		}
	}
	
	$zeronull = is_username_valid("zeronull");
	echo $zeronull;
	echo "<br>";
	$useroke = is_username_valid("useroke");
	echo $useroke;
	echo "<br>";
	$qazw = is_password_valid("qazW_123");
	echo $qazw;
?>