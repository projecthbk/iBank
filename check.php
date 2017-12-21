<?php	
		$link = mysqli_connect('mysqlserver.com', 'user', 'pass','iBank');
		mysqli_set_charset($link,'utf8');
		$result = mysqli_query($link,'SELECT Money,Pass FROM Accounts WHERE User="' . $_POST['user'] . '";');
		$row = mysqli_fetch_array($result);
		if ($row['Pass']==$_POST['pass']) echo($row['Money']);
		mysqli_free_result($result);
		mysqli_close($link);
?>
