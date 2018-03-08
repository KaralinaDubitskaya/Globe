<?php

	$html = file_get_contents('profile.html');
	
	if (!isset($_POST['submit']))
	{
		$html = str_replace("{FORM}", "", $html);
		$html = str_replace("{PROFILE}", "hidden", $html);
	}
	else
	{
		$html = str_replace("{FORM}", "hidden", $html);
		$html = str_replace("{PROFILE}", "", $html);

		// Login
		if (!empty($login = $_POST['login']))
		{
			$html = str_replace("{LOGIN}", $login, $html);
			$html = str_replace("{NAME}", ", ".$login, $html);
			$html = str_replace("{PRINT_LOGIN}", "", $html);
		}
		else
		{
			$html = str_replace("{LOGIN}", "", $html);
			$html = str_replace("{NAME}", "", $html);
			$html = str_replace("{PRINT_LOGIN}", "hidden", $html);
		}

		// Age
		if (!empty($age = $_POST['age']))
		{
			$html = str_replace("{AGE}", $age, $html);
			$html = str_replace("{PRINT_AGE}", "", $html);
		}
		else
		{
			$html = str_replace("{AGE}", "", $html);
			$html = str_replace("{PRINT_AGE}", "hidden", $html);
		}

		// Address
		if (!empty($address = $_POST['address']))
		{
			$html = str_replace("{ADDRESS}", $address, $html);
			$html = str_replace("{PRINT_ADDRESS}", "", $html);
		}
		else
		{
			$html = str_replace("{ADDRESS}", "", $html);
			$html = str_replace("{PRINT_ADDRESS}", "hidden", $html);
		}

		// Phone
		if (!empty($phone = $_POST['phone']))
		{
			$html = str_replace("{PHONE}", $phone, $html);
			$html = str_replace("{PRINT_PHONE}", "", $html);
		}
		else
		{
			$html = str_replace("{PHONE}", "", $html);
			$html = str_replace("{PRINT_PHONE}", "hidden", $html);
		}

		// Email
		if (!empty($email = $_POST['email']))
		{
			$html = str_replace("{EMAIL}", $email, $html);
			$html = str_replace("{PRINT_EMAIL}", "", $html);
		}
		else
		{
			$html = str_replace("{EMAIL}", "", $html);
			$html = str_replace("{PRINT_EMAIL}", "hidden", $html);
		}

		// Genres
		if (!empty($genres = $_POST['genres']))
		{
			$html = str_replace("{GENRES}", $genres, $html);
			$html = str_replace("{PRINT_GENRES}", "", $html);
		}
		else
		{
			$html = str_replace("{GENRES}", "", $html);
			$html = str_replace("{PRINT_GENRES}", "hidden", $html);
		}

		// Authors
		if (!empty($authors = $_POST['authors']))
		{
			$html = str_replace("{AUTHORS}", $authors, $html);
			$html = str_replace("{PRINT_AUTHORS}", "", $html);
		}
		else
		{
			$html = str_replace("{AUTHORS}", "", $html);
			$html = str_replace("{PRINT_AUTHORS}", "hidden", $html);
		}

		// Books
		if (!empty($books = $_POST['books']))
		{
			$html = str_replace("{BOOKS}", $books, $html);
			$html = str_replace("{PRINT_BOOKS}", "", $html);
		}
		else
		{
			$html = str_replace("{BOOKS}", "", $html);
			$html = str_replace("{PRINT_BOOKS}", "hidden", $html);
		}

		// News
		if (!empty($news = $_POST['news']))
		{
			$html = str_replace("{NEWS}", $news, $html);
			$html = str_replace("{PRINT_NEWS}", "", $html);
		}
		else
		{
			$html = str_replace("{NEWS}", "", $html);
			$html = str_replace("{PRINT_NEWS}", "hidden", $html);
		}		

	}

	echo $html;