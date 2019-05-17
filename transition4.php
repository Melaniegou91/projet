<?php

$c1 = $_POST['nb1'];
$c2 = $_POST['nb2'];
$c3 = $_POST['nb3'];
$c4 = $_POST['nb4'];
$c5 = $_POST['nb5'];
$c6 = $_POST['nb6'];


if ($c1=='27' AND $c2=='10' AND $c3=='27' AND $c4=='78' AND $c5=='02' AND $c6=='32') 
	{
		header('Location: chapitre6.php');
	}

else
	{
		header('Location:chap5.7.php');
	}

exit;
?>