<?php	
		$link = mysqli_connect('mysqlserver.com', 'user', 'pass','iBank');
		mysqli_set_charset($link,'utf8');
		$result = mysqli_query($link,'SELECT ID,Pass,Money FROM Accounts WHERE User="' . $_POST['from'] . '";');
		$row = mysqli_fetch_array($result);
		$fromid = $row['ID'];
		$pass = $row['Pass'];
		$fromsaldo = $row['Money'];
		$result = mysqli_query($link,'SELECT ID,Money FROM Accounts WHERE User="' . $_POST['to'] . '";');
		$row = mysqli_fetch_array($result);
		$toid = $row['ID'];	
		$tosaldo = $row['Money'];		
		if ($pass==$_POST['pass'] && $fromsaldo-$_POST['amount']>=0)
			if (mysqli_query($link,'UPDATE Accounts SET Money=' . ($fromsaldo-$_POST['amount']) . ' WHERE ID=' . $fromid . ';')===True &&
			mysqli_query($link,'UPDATE Accounts SET Money=' . ($tosaldo+$_POST['amount']) . ' WHERE ID=' . $toid . ';')===True &&
			mysqli_query($link,'INSERT INTO History VALUES (0,' . $fromid . ',' . $toid .',' . $_POST['amount'].',now(),"' . $_POST['title'] . '");')===True) echo('DONE');
		mysqli_close($link);
?>
