<?php

	$html = file_get_contents('profile.html');
	

	if (isset($_POST['submit']))
	{
		$html = str_replace("{FORM}", "hidden", $html);
		$html = str_replace("{PROFILE}", "", $html);

		$login = $_POST['login'];
		$html = str_replace("{LOGIN}", $login, $html);
	}
	else 
	{
		$html = str_replace("{FORM}", "", $html);
		$html = str_replace("{PROFILE}", "hidden", $html);
	}

	echo $html;