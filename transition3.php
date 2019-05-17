<?php

$varpays = $_POST['pays'];


if ($varpays=='Inde') 
	{
		header('Location: chap5.5.php');
	}

else
	{
		header('Location:chap5.4.php');
	}

exit;
?>