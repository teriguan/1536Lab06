<?php

	$first = ucwords(strtolower($_POST["first"]));
	$last = ucwords(strtolower($_POST["last"]));
	$email = strtolower($_POST["email"]);
	$val = array($first, $last, $email);
	$str = implode(" ", $val);
	
	//$file = @fopen('users.txt', 'r');
	
	//$file = 'users.txt';
	$contents = file_get_contents('users.txt');
	$confirm = strpos($contents, $str);
	if($confirm) {
	header("Location:./thankyou.html");
	exit();
	} else {
	header("Location:./sorry.html");
	exit();
	}

?>
