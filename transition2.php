<?php

$varfood = $_POST['food'];


if ($varfood=='Nem') 
	{
		header('Location: chap3.3.php');
	}

else
	{
		header('Location:chap3.2.php');
	}

exit;
?>