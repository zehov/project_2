<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bootstrap_tsk1</title>
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
html,body,div{
	padding: 0;
	margin: 1px;
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
				$arr = range(2,12);
				//$color=dechex(101);
				//echo $color;
			
			
	echo "<div class='row'>";
		echo "<div class='col-md-2  my_row' style='background-color:#FF0000' >".$arr['0']."</div>";
	echo "</div>";
	echo "<div class='row'>";
		echo "<div class='col-md-4 my_row' style='background-color:#FF00FF'>".$arr['2']."</div>";
	echo "</div>";
	echo "<div class='row'>";
		echo "<div class='col-md-6 my_row' style='background-color:#FFFF00'>".$arr['4']."</div>";
	echo "</div>";
	echo "<div class='row'>";
		echo "<div class='col-md-8 my_row' style='background-color:#00FF80'>".$arr['6']."</div>";
	echo "</div>";
	echo "<div class='row'>";
		echo "<div class='col-md-10 my_row' style='background-color:#00FFFF'>".$arr['8']."</div>";
	echo "</div>";
		echo "<div class='row'>";
		echo "<div class='col-md-12 my_row' style='background-color:#FF8040'>".$arr['10']."</div>";
	echo "</div>";





?>



</body>
</html>