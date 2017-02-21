<?php
header('content-type:text/html; charset=utf-8');

/* Comment
. Домашно зад.2 Създайте масив с четни числа от 2 до 12. Отпечатайте
числата в гридове с размер стойността на числото и фон по избор.
Всяко число да е на отделен ред центрирано.



*/
?>
<!HTML>
<head>
	<meta charset="UTF-8">
	<title>task02</title>
	<meta charset="UTF-8">
<style type="text/css">
html,body,div{
	padding: 0;
	margin: 1px;
}
.row-1{
   font-weight: bold;
  
   background-color: grey;
   border:solid black;
}
.row-2{
   font-weight: bold;
   
   background-color: #6690E6;
   border:solid black;
}
.row-3{
   font-weight: bold;
  
   background-color: #BC3CEB;
   border:solid black;
}
.row-4{
   font-weight: bold;
   
   background-color: #36ECD9;
   border:solid black;
}
.row-5{
   font-weight: bold;
  
   background-color: #D4BF31;
   border:solid black;
}
.row-6{
   font-weight: bold;
  
   background-color: #36EC4B;
   border:solid black;
}

</style>
</head>
<body>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	
				<?php
				$arr = range(2,12);
			
			
echo "<div class='row'>";
		echo "<div class='col-md-2 text-center row-1'>".$arr['0']."</div>";
echo "</div>";
echo "<div class='row'>";
		echo "<div class='col-md-4 text-center row-2'>".$arr['2']."</div>";
echo "</div>";
echo "<div class='row'>";
		echo "<div class='col-md-6 text-center row-3'>".$arr['4']."</div>";
echo "</div>";
echo "<div class='row'>";
		echo "<div class='col-md-8 text-center row-4'>".$arr['6']."</div>";
echo "</div>";
echo "<div class='row'>";
		echo "<div class='col-md-10 text-center row-5'>".$arr['8']."</div>";
echo "</div>";
echo "<div class='row'>";
		echo "<div class='col-md-12 text-center row-6'>".$arr['10']."</div>";
echo "</div>";





						?>
						
					</body>
				</body>
				</html>