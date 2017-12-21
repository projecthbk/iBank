<html>
 <head>
 <title>Account</title>
 <meta name="keywords" content="iBank,banking,system" />
 <meta name="description" content="iBank - Internet Banking" />
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
	width: 200px;
	height: 200px;
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
 <center><img src="apple.png"><br /><h2>iBank</h2></center>
 <?php
 $link = mysqli_connect('mysqlserver.com', 'user', 'pass','iBank');	 
 mysqli_set_charset($link,'utf8');
 $result=mysqli_fetch_array(mysqli_query($link,'SELECT ID,Money,Pass FROM Accounts WHERE User="' . ($_POST['login']) . '";'));
 $id=$result['ID'];
 if ($_POST['pass']!='' && $result['Pass']==$_POST['pass']) {
 ?>
 <center><span class="title"><?php echo($_POST['login']); ?></span><br />
 Available points: <?php echo($result['Money']); ?><br /><br />
 <a href="pay.php"><b>SEND TRANSFER</b></a></center><br />
 History:<br />
 <table style="border: 1px solid #000000; background-color: #CCCCCC;"><tr><td><b>From:</b></td><td><b>To:</b></td><td><b>Title:</b></td><td><b>Amount:</b></td><td><b>Date:</b></td></tr>
 <?php
		$result=mysqli_query($link,'SELECT * FROM History WHERE `From`=' . $id . ' OR `TO`=' . $id . ' ORDER BY `Date` DESC, `ID` DESC;');
 		while ($row = mysqli_fetch_array($result)) {
			echo('<tr><td>' . mysqli_fetch_array(mysqli_query($link,'SELECT User FROM Accounts WHERE ID=' . $row['From'] .';'))['User'] . '</td><td>' . mysqli_fetch_array(mysqli_query($link,'SELECT User FROM Accounts WHERE ID=' . $row['To'] .';'))['User'] . '</td><td>'. $row['Title'] . '</td><td>'. $row['Amount'] . '</td><td>'. $row['Date'] . '</td></tr>');  
		}
		mysqli_free_result($result);
		echo('</table>');
 } else echo('<span class="title">Wrong login.</span>');
 
 mysqli_close($link);
 ?>
 </div></div>
 </body>
</html>
