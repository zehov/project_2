<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Домашно зад.3 Създайте форма, в която потребителя въвежда
имената си и след натискане на „Изпрати“ получава надпис на “Name,
are you having fun with Bootstrap!” Стилизирайте формата и
съобщението с Bootstrap.
*/
?>
<!HTML>
 <head>
 	<meta charset="UTF-8">
 	<title>task01</title>
 	<meta charset="UTF-8">
<style type="text/css">
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

 <?php
 session_start();
$name=$_POST['user_name'];//взимаме въведеното име 

if (!empty($_POST['submit'])) {
	
 echo "Enter something";
 	} else{
	echo "<div class='alert alert-success text-center' role='alert'>$name are you having fun with Bootstrap?</div>";//взетото име и текста
	//Измислено от мен, няма го в задачата!
	echo "<a href='domashno_task3.php'><button type='button' class='btn btn-primary btn-lg col-md-3 col-md-offset-2'>Yess</button></a>";
    echo "<a href='http://topigri.bg/igra-kefche.html'><button type='button' class='btn btn-default btn-lg col-md-3 col-md-offset-2'>NO</button>";
}

session_destroy();	

?>
</body>
</html>
