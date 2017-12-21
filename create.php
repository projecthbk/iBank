<?php	
		$link = mysqli_connect('mysqlserver.com', 'user', 'pass','iBank');
		mysqli_set_charset($link,'utf8');
		if ($_POST['tag']==hash('md5',$_POST['mail'] . 'SeCrEt')) if (mysqli_query($link,'INSERT INTO Accounts VALUES (0,"' . $_POST['mail'] . '","' . $_POST['pass'] . '",1000);') && mysqli_query($link,'INSERT INTO History VALUES (0,1,' . mysqli_fetch_array(mysqli_query($link,'SELECT ID FROM Accounts WHERE User="' . $_POST['mail'] .'";'))['ID'] . ',1000,now(),"Start-up points.");')) echo('DONE');
		mysqli_close($link);
?>
