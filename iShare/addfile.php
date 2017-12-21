<html>
 <head>
 <title>Add file</title>
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
	<form action="upload.php" method="post" enctype="multipart/form-data">
    File:<br />
    <input type="file" name="file" id="file"><br /><br />
	<div style="text-align: center;"><input type="submit" class="kup" value="UPLOAD FILE" name="submit"></div>
 </form>
 <a href="../iBank/newaccount.php">Requires iBank account</a>
 </div></div>
 </body>
</html>