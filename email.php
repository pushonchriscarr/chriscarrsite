<?php

if(!is_null($_POST))
{
	$data = $_POST;

	mail("ccarr895@gmail.com", "New Query about Website", $data['comment'].PHP_EOL."From,".PHP_EOL.$data["name"].PHP_EOL.$data['email']); 

	return "Email sent successfully. Thank you for contacting me.";
}

?>
