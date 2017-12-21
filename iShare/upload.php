<?php
	$target_file = 'SecRetFolDer/' . basename($_FILES['file']['name']);
	if (!file_exists($target_file)) {
		if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) echo('<meta http-equiv="refresh" content="0;url=http://ksysiu.one.pl/iShare/fileinfo.php?file=' . basename($_FILES['file']['name']) . '">');
	} else echo('File with that name already exists in iShare. Try to change name.');
?>