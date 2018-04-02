<?php

include_once "../classes/database.php";

$db = new Database();

$serviceName = $_POST['service'];


switch ($serviceName)
{
	case 'SRVGetLocalisation':
		echo $db->getLocalisation($_POST['cp']);
	break;

    case 'SRVCheckUsernameAvailability':
        echo $db->checkUsernameAvailability(strtolower($_POST['username']));
        break;

    case 'SRVCheckEmailAvailability':
        echo $db->checkEmailAvailability(strtolower($_POST['email']));
        break;
}	
	
?>
	