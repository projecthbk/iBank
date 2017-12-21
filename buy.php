<html>
 <head>
 <title>Buy file</title>
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
 <center><img src="apple.png"><br /><h2>iShare</h2></center>
 <?php 
 if (isset(isset($_GET['price']) && isset($_GET['file']) && file_exists('ec0fa01d/'.$_GET[file])) {
 ?>
 <form action="download.php" method="POST">
 FILE:<br /><b><?php echo($_GET['file']); ?></b>
 <input type="hidden" name="file" value="<?php echo($_GET['file']); ?>"><br />
 PRICE:<br /><b><?php echo($_GET['price']); ?></b>
 <input type="hidden" name="amount" value="<?php echo($_GET['price']); ?>"><br />
 Payment to:<br /><b>hrybacz@ksysiu.one.pl</b><br /><br />
 Your account mail:<br />
 <input type="text" name="from"><br />
 Your password:<br />
 <input type="password" name="pass"><br /><br />
 <div style="text-align: center;"><input class="kup" type="submit" value="DOWNLOAD"></div>
 </form>
 <a href="newaccount.php">Register account</a>
 <?php
 } else echo('WRONG FILE!');
 ?>
 </div></div>
 </body>
</html>