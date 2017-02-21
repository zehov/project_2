<!DOCTYPE html>
<html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>task03</title>
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
#chess{
	margin: 10px;
	 text-align: center;
</style>
 </head>
 <?php
 //creat data array
	$a	= range('A ','H ');       
	$b	=range('1','8 '); 
	echo "<div class='row' id='chess' >";
	echo "<div class='col-md-4'>";
	echo "<table class='table table-bordered'>";
	//горен ред букви
	echo "</tr><td class='warning' > </td>";//празно 
		for ($k=count($a)-1; $k>=0 ; $k--) { 
			echo "<td class='warning'>".$a[$k]."</td>";   
		}  
	echo "<td class='warning'> </td></tr>";//празно 
	//цифри по редове и черно/бяло
	for ($row=count($b)-1;$row>=0;$row--)
	{
		echo "</tr><td class='warning'>".$b[$row]."</td>";
			for ($q=count($b)-1; $q>=0 ; $q--) 
			{  
				if(($q+$row)%2==0){
					echo "<td   bgcolor=#ffffff></td>";
				}
				else{
					echo "<td   bgcolor=#000000></td>";
				}	
			}   
		echo "<td class='warning'>".$b[7-$row]."</td>"; 
	}
	 //долен ред букви
	echo "</tr><td class='warning'>  </td>";//празно 
	for ($p=0; $p < count($a) ; $p++)
		{ 
			echo "<td class='warning'>".$a[$p]."</td>" ;
		}    
	 echo "<td class='warning'>  </td></tr>";//празно 
echo "<table border='1'>";
echo "</div>";
echo "</div>";

?>