<?php
/*
 * test.php
 * 
 * Copyright 2015 Krzysiek Hrybacz <krzysiek@debian>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Register account</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.24.1" />
</head>

<body>
	<?php
		$link = mysqli_connect('mysqlserver.com', 'user', 'pass','iBank');
		mysqli_set_charset($link,'utf8');
		if (mysqli_fetch_array(mysqli_query($link,'SELECT ID FROM Accounts WHERE User="' . $_POST['email'] .'";')))
			echo('Mail already registered!'); else {
			$message = 'iBank - click this link: http://ksysiu.one.pl/iBank/confirm.php?mail=' . $_POST['email'] . '&tag=' . hash('md5',$_POST['email'] . 'SeCrEt');
			$subject = 'iBank';;
			$headers = 'From: admin@ksysiu.one.pl';
			if (mail($_POST['email'],$subject,$message,$headers)) echo('<b>Check your e-mail.</b>');
			};
		mysqli_close($link);
	?>
</body>

</html>
