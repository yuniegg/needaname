<?php

include_once "../classes/database.php";

$db = new Database();

$serviceName = $_POST['service'];


switch ($serviceName)
{
	case 'SRVGetLocalisation':
		echo $db->getLocalisation($_POST['cp']);
	break;
}	
	
?>
	