<!DOCTYPE html>
<html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>task2</title>
 	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
 integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
html,body,div{
	padding: 2px;
	margin: 10px;
	}
	body {
	background-color:#ff80ff;	
	}
#forma{
	margin-top: 15%;
	text-align: center;
	}
</style>
 </head>
 <body>
<?php
if(empty($_POST)){
	?>

<div id="forma">
<form class="form-inline col-xs-3 col-md-offset-4" action="PHP_HW_10_task2.php" method="post">
  <div class="form-group">
    
   <div> <input type="text" class="form-control col-md-offset-3 text-center" id="user_name" name="user_name" placeholder="Enter your name ..."></div>
  
  <button type="submit" value="submit" class="btn btn-default col-md-offset-5">ИЗПРАТИ</button>
  </div>
</form>
</div>
<?php
}
else{
	
		$name=$_POST['user_name']; 
		if (!empty($_POST['user_name']))
		{
			echo "<div class='alert alert-success text-center' role='alert'>$name are you having fun with Bootstrap?</div>";
			echo "<a href='PHP_HW_10_task2.php'><button type='button' class='btn btn-primary btn-lg col-md-3 col-md-offset-2'>GO BACK</button></a>";
		} 
		else
		{
		echo "<div class='alert alert-info text-center' role='info'>Enter your name</div>";
		echo"<a href='PHP_HW_10_task2.php'><button type='button' class='btn btn-inf btn-mg col-md-3 col-md-offset-2'>GO BACK</button>";	
		}
	}
?>
  </body>
 </html>