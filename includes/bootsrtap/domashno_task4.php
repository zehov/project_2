<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Домашно зад. 4 Да се направи шахматна дъска – редуващи се 2
цвята с размери 8х8.
a. Да се добави номерация и буква за всяко поле, като в шахмата –
по колоните букви от A до H и по редове числата от 1 до 8.

*/
?>
<!HTML>
 <head>
 	<meta charset="UTF-8">
 	<title>task01</title>
 	<meta charset="UTF-8">
<style type="text/css">
#chess{

	margin: 1px;
}
#text{
	margin:0;
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
 <?php


 
echo "<div class='row' id='chess'>";
echo "<div class='col-md-3'>";
 echo "<table class='table table-bordered'>";
 
$a = array('A','B','C',
            'D','E',
            'F','G','H','' );
$b = array('1','2','3',
            '4','5',
            '6','7','8','*');



for ($k=0; $k < 1 ; $k++) { //горен ред букви
			
			echo "</tr><td class='warning'> * </td>";//звезда в началото
			echo "<td class='warning'>".$a['7']."</td>";
			
			
	        echo "<td class='warning'>".$a['6']."</td>";
	        echo "<td class='warning'>".$a['5']."</td>";
	        echo "<td class='warning'>".$a['4']."</td>";
	        echo "<td class='warning'>".$a['3']."</td>";
	        echo "<td class='warning'>".$a['2']."</td>";
	        echo "<td class='warning'>".$a['1']."</td>";
	        echo "<td class='warning'>".$a['0']."</td>";
	        echo "<td class='warning'> * </td></tr>";//звезда в края
	       

	 }      	      
for ($q=0; $q < 1 ; $q++) { //цифри ред 8 
			
			echo "<p></tr><td class='warning'>".$b['7']."</td>";//черни фигури на долу
			
			
	        echo "<td><img src='img/black_top.png'></td>";
	        echo "<td class='active'><img src='img/black_horse.png'></td>";
	        echo "<td><img src='img/black_officer.png'></td>";
	        echo "<td class='active'><img src='img/black_queen.png'></td>";
	        echo "<td><img src='img/black_king.png'></td>";
	        echo "<td class='active'><img src='img/black_officer.png'></td>";
	        echo "<td><img src='img/black_horse.png'></td>";
	        echo "<td class='active'><img src='img/black_top.png'></td>";
	        echo "<td class='warning'>".$b['0']."</td>";
	       

	 }    
for ($q=0; $q < 1 ; $q++) { //цифри ред 7 
			
			echo "<p></tr><td class='warning'>".$b['6']."</td>";//черни пешки
			
			
	        echo "<td class='active'><img src='img/black_soldier.png'></td>";
	        echo "<td><img src='img/black_soldier.png'></td>";
	        echo "<td class='active'><img src='img/black_soldier.png'></td>";
	        echo "<td><img src='img/black_soldier.png'></td>";
	        echo "<td class='active'><img src='img/black_soldier.png'></td>";
	        echo "<td></td>";
	        echo "<td class='active'><img src='img/black_soldier.png'></td>";
	        echo "<td><img src='img/black_soldier.png'></td>";
	        echo "<td class='warning'>".$b['1']."</td>";
	       

	 }    
for ($q=0; $q < 1 ; $q++) { //цифри ред 6 
			
			echo "<p></tr><td class='warning'>".$b['5']."</td>";//ход
			
			
	        echo "<td> </td>";
	        echo "<td class='active'> </td>";
	        echo "<td> </td>";
	        echo "<td class='active'> </td>";
	        echo "<td> </td>";
	        echo "<td class='active'><img src='img/black_soldier.png'></td>";
	        echo "<td> </td>";
	        echo "<td class='active'> </td>";
	        echo "<td class='warning'>".$b['2']."</td>";
	       

	 }    
for ($q=0; $q < 1 ; $q++) { //цифри ред 5 
			
			echo "<p></tr><td class='warning'>".$b['4']."</td>";//празни
			
			
	        echo "<td class='active'> </td>";
	        echo "<td> </td>";
	        echo "<td class='active'> </td>";
	        echo "<td> </td>";
	        echo "<td class='active'> </td>";
	        echo "<td> </td>";
	        echo "<td class='active'> </td>";
	        echo "<td> </td>";
	        echo "<td class='warning'>".$b['3']."</td>";
	       

	 }    
for ($q=0; $q < 1 ; $q++) { //цифри ред 4 
			
			echo "<p></tr><td class='warning'>".$b['3']."</td>";//ход
			
			
	        echo "<td> </td>";
	        echo "<td class='active'> </td>";
	        echo "<td> </td>";
	        echo "<td class='active'><img src='img/soldier.png'></td>";
	        echo "<td> </td>";
	        echo "<td class='active'> </td>";
	        echo "<td> </td>";
	        echo "<td class='active'> </td>";
	        echo "<td class='warning'>".$b['4']."</td>";
	       

	 }    
for ($g=0; $g < 1 ; $g++) { //цифри ред 3 
			
			echo "<p></tr><td class='warning'>".$b['2']."</td>";//ход
			
			
	        echo "<td class='active'> </td>";
	        echo "<td> </td>";
	        echo "<td class='active'> </td>";
	        echo "<td> </td>";
	        echo "<td class='active'><img src='img/soldier.png'></td>";
	        echo "<td> </td>";
	        echo "<td class='active'> </td>";
	        echo "<td> </td>";
	        echo "<td class='warning'>".$b['5']."</td>";
	       

	 }    
for ($j=0; $j < 1 ; $j++) { //цифри ред 2
			
			echo "<p></tr><td class='warning'>".$b['1']."</td>";//бели пешки
			
			
	        echo "<td><img src='img/soldier.png'></td>";
	        echo "<td class='active'><img src='img/soldier.png'></td>";
	        echo "<td><img src='img/soldier.png'></td>";
	        echo "<td class='active'></td>";
	        echo "<td></td>";
	        echo "<td class='active'><img src='img/soldier.png'></td>";
	        echo "<td><img src='img/soldier.png'></td>";
	        echo "<td class='active'><img src='img/soldier.png'></td>";
	        echo "<td class='warning'>".$b['6']."</td>";
	       

	 }    
for ($y=0; $y < 1 ; $y++) { //цифри ред 1
			
			echo "<p></tr><td class='warning'>".$b['0']." </td>";//бели фигури
			
			
	        echo "<td class='active'><img src='img/top.png'></td>";
	        echo "<td><img src='img/horse.png'></td>";
	        echo "<td class='active'><img src='img/officer.png'></td>";
	        echo "<td><img src='img/queen.png'></td>";
	        echo "<td class='active'><img src='img/king.png'></td>";
	        echo "<td><img src='img/officer.png'></td>";
	        echo "<td class='active'><img src='img/horse.png'></td>";
	        echo "<td><img src='img/top.png'></td>";
	         echo "<td class='warning'>". $b['7']."</td></tr>";
	       

	 }      	        	      
for ($k=0; $k < 1 ; $k++) { //долен ред букви
			
			echo "</tr><td class='warning'> * </td>";
			echo "<td class='warning'>".$a['0']."</td>";
			
			
	        echo "<td class='warning'>".$a['1']."</td>";
	        echo "<td class='warning'>".$a['2']."</td>";
	        echo "<td class='warning'>".$a['3']."</td>";
	        echo "<td class='warning'>".$a['4']."</td>";
	        echo "<td class='warning'>".$a['5']."</td>";
	        echo "<td class='warning'>".$a['6']."</td>";
	        echo "<td class='warning'>".$a['7']."</td>";
	        echo "<td class='warning'> * </td></tr>";
	       

	 }      	      
echo "<table border='1'>";
echo "</div>";


//ходове
echo "<div class='alert alert-info text-center' role='alert' id='text'><p>Moves:</p>
     <p>White <img src='img/soldier.png'>:D2 = > D4</p>
     <p>Black <img src='img/black_soldier.png'>:F7 = > F6</p>
     <p>White <img src='img/soldier.png'>:E2 = > E3</p>
     <p>...</p></div>";

//добавка от мен 
echo "<div class='alert alert-danger text-center' id='text'>";
echo "<p>Обърнете внимание че дъската е 1 към 1 с оригиналната !!!</p>";
echo "</div>";
echo "</div>";



?>