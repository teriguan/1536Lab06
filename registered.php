<?php
	/* Modifies the input to conform to the format in users.txt */
	$first = ucwords(strtolower($_POST["first"]));
	$last = ucwords(strtolower($_POST["last"]));
	$email = strtolower($_POST["email"]);
	
	/* Delimits the values with a space */
	$val = array($first, $last, $email);
	$str = implode(" ", $val);

	/* Compares the inputs with the server data */
	$contents = file_get_contents('users.txt');
	$match = strpos($contents, $str);
	
	/* Sends the page depending on whether a user match was found or not */
	if($match|| $match === 0) {
	header("Location:./thankyou.html");
	exit();
	} else {	
	header("Location:./sorry.html");
	exit();
	}

?>
