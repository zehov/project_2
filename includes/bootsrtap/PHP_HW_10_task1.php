<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bootstrap_task1</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
	crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"
	crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" 
	crossorigin="anonymous"></script>
<style type="text/css">
	div{
	padding: 3px;
	}
	.my_row{
   font-weight: bold;
   border:solid black;
   text-align: center;
	}
</style>
</head>

<body>
<?php
		$arr = range(2,12);//създаване на масив	
			for($i=2;$i<count($arr)+2;$i+=2){
				$index=$i-2;
				$colorDec = rand(0,pow(16,6));//генериране на число
				$color='#'.dechex($colorDec);// Преобразува десетично число в шестнадесетично и задаването му като цвят
				echo '<div class="container">';
					echo "<div class='row'>";
						echo "<div class='col-lg-$i  my_row' style='background-color:$color ' >".$arr[$index]."</div>";
					echo "</div>";
				echo "</div>";	
	}

?>
</body>
</html>