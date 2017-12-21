<html>
 <head>
 <title>Buy file</title>
 <meta name="keywords" content="iShare" />
 <meta name="description" content="iShare - iBank Share Platform" />
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
   input {border: 1px solid black; width: 400px;}
   textarea {border: 1px solid black; width: 400px;}
   select {border: 1px solid black; width: 150px;}
   .kup {width: auto;}
   a {color: black; text-decoration:none; font-weight:bold;}
   a:hover {text-decoration:underline;}
   .title {font-size:large;}   
  </style>
 </head>
 <body>
 <div class="block" style="height: 100%;"><div class="centered">
 <center><img src="../iBank/apple.png"><br /><h2>iShare</h2></center>
 <?php 
 $link = mysqli_connect('mysqlserver.com', 'user', 'pass','iBank');	 
 mysqli_set_charset($link,'utf8');
 if (isset($_GET['file']) && file_exists('ec0fa01d/'.$_GET[file]) && $result=mysqli_fetch_array(mysqli_query($link,'SELECT * FROM Files WHERE File="' . $_GET['file'] .'";'))) {
 ?>
 <form action="download.php" method="POST">
 Name: <b><?php echo($result['Name']); ?></b><br />
 Description: <b><?php echo($result['Description']); ?></b><br />
 File: <b><?php echo($_GET['file']); ?></b>
 <input type="hidden" name="file" value="<?php echo($_GET['file']); ?>"><br />
 Price: <b><?php echo($result['Price']); ?></b><br />
 Payment to: <b><?php echo(mysqli_fetch_array(mysqli_query($link,'SELECT User FROM Accounts WHERE ID=' . $result['User'] .';'))['User']); ?></b><br /><br />
 Your account mail:<br />
 <input type="text" name="from"><br />
 Your password:<br />
 <input type="password" name="pass"><br /><br />
 <div style="text-align: center;"><input class="kup" type="submit" value="DOWNLOAD"></div>
 </form>
 <a href="../iBank/newaccount.php">Requires iBank account</a>
 <?php
 } else echo('WRONG FILE!');
 ?>
 </div></div>
 </body>
</html>