<?php
if (file_exists('SecRetFolDer/'.$_POST[file])) {
		$link = mysqli_connect('mysqlserver.com', 'user', 'pass','iBank');
		mysqli_set_charset($link,'utf8');
		$result = mysqli_query($link,'SELECT ID,Pass,Money FROM Accounts WHERE User="' . $_POST['from'] . '";');
		$row = mysqli_fetch_array($result);
		$fromid = $row['ID'];
		$pass = $row['Pass'];
		$fromsaldo = $row['Money'];
		$result = mysqli_query($link,'SELECT ID,Money FROM Accounts WHERE ID=' . mysqli_fetch_array(mysqli_query($link,'SELECT User FROM Files WHERE File="' . $_POST['file'] . '";'))['User'] . ';');
		$row = mysqli_fetch_array($result);
		$toid = $row['ID'];	
		$tosaldo = $row['Money'];		
		$amount =  mysqli_fetch_array(mysqli_query($link,'SELECT Price FROM Files WHERE File="' . $_POST['file'] .'";'))['Price'];
		if ($pass==$_POST['pass'] && $fromsaldo-$amount>=0)
			if (mysqli_query($link,'UPDATE Accounts SET Money=' . ($fromsaldo-$amount) . ' WHERE ID=' . $fromid . ';')===True &&
			mysqli_query($link,'UPDATE Accounts SET Money=' . ($tosaldo+$amount) . ' WHERE ID=' . $toid . ';')===True &&
			mysqli_query($link,'INSERT INTO History VALUES (0,' . $fromid . ',' . $toid .',' . $amount . ',now(),"' . $_POST['file'] . '");')===True) {
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename="'.basename('SecRetFolDer/'.$_POST['file']).'"');
				header('Expires: 0');
				header('Cache-Control: must-revalidate');
				header('Pragma: public');
				header('Content-Length: ' . filesize('SecRetFolDer/'.$_POST['file']));
				readfile('ec0fa01d/'.$_POST['file']);
				exit;
			};
		mysqli_close($link);
}
?>
