<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Домашно зад. 1 Създайте таблица с дизайн по избор, стилизирана с
BOOTSTRAP.
a. Отпечатайте таблицата с рнр, като във всяка клетка изписвате
номера на реда и колоната.

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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
 <!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
 
 <!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 <?php


 

 echo "<table class='table table-bordered'>";
 



$x = array('tr=1/ td=1','tr=2/ td=1','tr=3/ td=1',
            'tr=4/ td=1','tr=5/ td=1',
            'tr=6/ td=1','tr=7/ td=1', );
$y = array('tr=1/ td=2','tr=2/ td=2','tr=3/ td=2',
            'tr=4/ td=2','tr=5/ td=2',
            'tr=6/ td=2','tr=7/ td=2');
$z= array('tr=1/ td=3','tr=2/ td=3','tr=3/ td=3',
            'tr=4/ td=3','tr=5/ td=3',
            'tr=6/ td=3','tr=7/ td=3');
$counter=count($x);



	

		for ($l=0; $l < $counter ; $l++) { 
			
			echo "<tr><td>".$x[$l]."</td>";
			
	        echo "<td>".$y[$l]."</td>";
	        echo "<td>".$z[$l]."</td></tr>";

		
	}





 echo "</table>";

?>
 
 
 </body>
 </html>
