<?php

$varpays = $_POST['pays'];


if ($varpays=='Vietnam') 
	{
		header('Location: chapitre3.php');
	}

else
	{
		header('Location:chap2.7.php');
	}

exit;
?>