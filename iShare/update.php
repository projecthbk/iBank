 <?php
 $link = mysqli_connect('mysqlserver.com', 'user', 'pass','iBank');	 
 mysqli_set_charset($link,'utf8');
 $result=mysqli_fetch_array(mysqli_query($link,'SELECT ID,Pass FROM Accounts WHERE User="' . $_POST['mail'] .'";'));
 if ($_POST['pass']==$result['Pass']) {
	 if (mysqli_query($link,'INSERT INTO Files VALUES (0,"' . $_POST['file'] . '",' . $result['ID'] . ',' . $_POST['price'] . ',"' . $_POST['name'] . '","' . $_POST['description'] . '");')) echo('DONE'); else unlink('SecRetFolDer/' . $_POST['file']); 
 } else echo('Wrong login!');
 ?>