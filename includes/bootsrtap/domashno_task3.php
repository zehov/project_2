<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Домашно зад.3 Създайте форма, в която потребителя въвежда
имената си и след натискане на „Изпрати“ получава надпис на “Name,
are you having fun with Bootstrap!” Стилизирайте формата и
съобщението с Bootstrap.
*/
session_start();
?>
<!HTML>
 <head>
 	<meta charset="UTF-8">
 	<title>task03</title>
 	<meta charset="UTF-8">
<style type="text/css">
#forma{
	margin-top: 5%;
	text-align: center;
	}
#hi{
	margin-top: 5%;
	padding: 1%;
	text-align: center;
	border:solid black;
    background-color: #96A7EF;
	font-weight: bold;
	color:#08530F;
}
</style>
 </head>
 <body>
 	<!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
 integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
 <!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
 integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
 
 <!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
 integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<div id="forma">
	<div id="hi"><p>HELLO!</p></div>
<form class="form-inline col-xs-3 col-md-offset-4" action="domashno_task3_1.php" method="post">
  <div class="form-group">
    
    <input type="text" class="form-control col-md-offset-5 text-center" id="user_name" name="user_name" placeholder="Enter your name ...">
  
  
  <button type="submit" value="submit" class="btn btn-default col-md-offset-5">GO</button>
  </div>
</form>
</div>

  </body>
 </html>
