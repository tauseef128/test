<?php





class logic
{
	function __construct($args)
	{

	}
	$sessionClass = new sessionClass();
	$$isLoggedIn = $sessionClass->isLoggedIn();

	if($isLoggedIn){

		header('../index.php');
	}else{
		header('../login.php');
	}
}