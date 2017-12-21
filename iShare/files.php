<html>
 <head>
 <title>iShare files</title>
 <meta name="keywords" content="files iShare" />
 <meta name="description" content="iShare - File Sharing Service" />
  <style>
   body
   {
	background:white;
   	color:black;
	font-family:tahoma,sans;
	height:100%
	overflow:hidden;
   }
   table {
    border:0px;
   } 
   td
   {
	text-align:justify;
	vertical-align:middle;
   }
   .block {
    text-align: center;
   }
   .block:before {
    content: '';
    display: inline-block;
    height: 100%;
    vertical-align: middle;
    margin-right: -0.25em;
   }
   .centered {
     display: inline-block;
     vertical-align: middle;
	 border: 1px solid black;
	 background:#AAAAAA;
	 text-align: left;
	 padding: 5px;
   }
   img
   {
	width: 100px;
	height: 100px;
	border: 0px;
   }
   input {border: 1px solid black; width: 150px;}
   select {border: 1px solid black; width: 150px;}
   a {color: black; text-decoration:none; font-weight:bold;}
   a:hover {text-decoration:underline;}
   .title {font-size:large;}   
  </style>
 </head>
 <body>
 <div class="block" style="height: 100%;"><div class="centered">
 <center><img src="../iBank/apple.png"><br /><h2>iShare</h2><span class="title"><?php echo($_GET['user']); ?></span></center>
 <span class="title">Files</span>
 <table style="border: 1px solid #000000; background-color: #CCCCCC;">
 <tr><td><b>Name</b></td><td><b>Description</b></td><td><b>File</b></td><td><b>User</b></td><td><b>Price</b></td><td><b>Download</b></td></tr>
 <?php
 		$link = mysqli_connect('mysqlserver.com', 'user', 'pass','iBank');
		mysqli_set_charset($link,'utf8');
		if (isset($_GET['user'])) $result = mysqli_query($link,'SELECT * FROM Files WHERE User=' . mysqli_fetch_array(mysqli_query($link,'SELECT ID FROM Accounts WHERE User="' . $_GET['user'] .'";'))['ID'] . ';'); else $result = mysqli_query($link,'SELECT * FROM Files;');
		while ($row = mysqli_fetch_array($result)) {
			echo('<tr><td>' . $row['Name'] . '</td><td>' . $row['Description'] . '</td><td>'. $row['File'] . '</td><td>'. mysqli_fetch_array(mysqli_query($link,'SELECT User FROM Accounts WHERE ID=' . $row['User'] .';'))['User'] . '</td><td>'. $row['Price'] . '</td><td><a href="buy.php?file=' . $row['File'] . '">BUY</a></td></tr>');  
		}
 ?>
 </table>
 <a href="addfile.php">Add file</a>
 </div></div>
 </body>
</html>