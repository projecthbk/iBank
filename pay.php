<html>
 <head>
 <title>Send payment</title>
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
 <center><img src="apple.png"><br /><h2>iBank</h2></center>
 <form action="transfer.php" method="POST">
 <?php 
 if (isset($_GET['to']) && isset($_GET['price']) && isset($_GET['title'])) {
 ?>
 <table>
 <tr><td>Payment to:</td><td><b><?php echo($_GET['to']); ?></b>
 <input type="hidden" name="to" value="<?php echo($_GET['to']); ?>"></td></tr>
 <tr><td>Payment amount:</td><td><b><?php echo($_GET['price']); ?></b>
 <input type="hidden" name="amount" value="<?php echo($_GET['price']); ?>"></td></tr>
 <tr><td>Payment title:</td><td><b><?php echo($_GET['title']); ?></b>
 <input type="hidden" name="title" value="<?php echo($_GET['title']); ?>"></td></tr>	 
 </table><br />
 <?php
 } else {
 ?>
 Payment to:<br />
 <input type="text" name="to"><br />
 Payment amount:<br />
 <input type="text" name="amount"><br />
 Payment title:<br />
 <input type="text" name="title"><br />
 <?php
 };
 ?>
 Your account mail:<br />
 <input type="text" name="from"><br />
 Your password:<br />
 <input type="password" name="pass"><br /><br />
 <div style="text-align: center;"><input class="kup" type="submit" value="PAY"></div>
 </form>
 <a href="newaccount.php">Register account</a>
 </div></div>
 </body>
</html>
