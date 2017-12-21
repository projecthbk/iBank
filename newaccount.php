<html>
 <head>
 <title>New account</title>
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
 <span class="title">Register account</span><br /><br />
 <form action="register.php" method="POST">
 E-mail:<br />
 <input type="text" name="email"><br /><br />
 <div style="text-align: center;"><input class="kup" type="submit" value="REGISTER"></div>
 </form>
 </div></div>
 </body>
</html>
