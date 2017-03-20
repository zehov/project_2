 <!DOCTYPE html> 
 <html lang="bg"> 
 <head><link rel="stylesheet" type="text/css" href="css/style.css"></head>
<?php
error_reporting(E_ALL & ~E_NOTICE);
//start game 
session_start();
/*if ($_SESSION["language"]=="en"){
	include_once('includes/header_EN.php');
}else{
	include_once('includes/header.php');
}*/
//for check code do not visible 


//*******************************************************
$language=$_SESSION["language"];
$username=$_SESSION["username"];
$cat=$_GET['cat'];
$away=$_GET['away'];
include_once('includes/conection_users.php');
//====================== name for language=================================================
if ($language=="en"){
	$player="player";
	$point="score";
	$game_num="games";
}else{
	$player="играч";
	$point="точки";
	$game_num="игри";
}
//======================= insert result when user go away===================================
if ($away==1){
	$read_query = "SELECT  *  FROM `users` WHERE `username`='$username' ";//sort users by score -high to low
	$result = mysqli_query($conn, $read_query); 
	$row = mysqli_fetch_assoc($result);	
	$score=$row['score']-1;
	$num_games=$row['game_id']+1;
	$insert_query = "UPDATE `users` SET `score`='$score' ,`game_id`='$num_games' WHERE `username`='$username'"; 
			if (mysqli_query($conn, $insert_query)) { 
				//echo "Успешен запис в базата данни!"; 
			} else { 
			//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!! 
			//echo "Error: " . $insert_query . " - " . mysqli_error($conn); 
			} 
}else {}
$read_query = "SELECT * FROM `users` ORDER BY `users`.`score` DESC  ";//sort users by score -high to low
$result = mysqli_query($conn, $read_query); 
 if (mysqli_num_rows($result) >0) { 
			$n=1;
			//start -table for view users and score ...**********************************
			?>
			<div class="result" style="text-align:center">
			<?php
			echo "<table border=1>"; 
			echo "<tr><td class='white'>N</td>
			<td class='white'>$player</td>
			<td class='white'>$point</td>
			<td class='white'>$game_num</td>
			</tr>"; 
		while($row = mysqli_fetch_assoc($result)){ 
				echo "<tr>";
					if ($username==$row['username']){
					echo"<td class='chess'>" . $n . "</td>";
					echo "<td class='chess'>" . $row['username'] . "</td>"; 
					echo "<td class='chess'>" . $row['score'] . "</td>"; 
					echo "<td class='chess'>" . $row['game_id'] . "</td>"; 
					echo "</tr>"; 
					} else{
						echo"<td class='white' >" . $n . "</td>";
					echo "<td class='white'>" . $row['username'] . "</td>"; 
					echo "<td class='white'>" . $row['score'] . "</td>"; 
					echo "<td class='white'>" . $row['game_id'] . "</td>"; 
					echo "</tr>"; 
					}
					$n++;
 			 if ($n==10){//numder fo user to view
				 break;
			 }
		} 
			echo "</table>"; 
			?>
			</div>
			//end  -table for view users and score ...*************************************** 
			<?php
		echo "<p id='logout'><a href='logout.php'>Log Out</a></p>";//log out the GAME
	}
	
	//******************************************************game choise category*****************

if ($language == "en") {
	include_once('includes/header_EN.php');
	echo "<p class='hello'>Hello, <b>" . $username . "</b></p>";
	if ($cat==0){

//category  eng******************************************
	
	echo "<img class='devil' src='css/img/devil.png' alt='devil_face'>";

?>
	<img id="frame2" src="css/img/frame.png" alt="frame">
<p class="text" align="right"><font color="#fff" size="10px">Choose a category:</font> </p>
<form action="#" method="post">
		<div class="category" style="text-align:center">			
			<ul id = "list">
			<li><a href='hangman.php?cat=1' class="myButton">Countries</a></li>
			<li><a href='hangman.php?cat=2' class="myButton">Cities</a></li>
			<li><a href='hangman.php?cat=3' class="myButton">Animals</a></li>
			<li><a href='hangman.php?cat=4'class="myButton">Famous people</a></li>
			<li><a href='hangman.php?cat=5' class="myButton">Star Wars</a></li>
			</ul>
		</div>		
	</form>

<?php
} else {
	// *****************start game EN*********************************
	echo "start game";
	?>
	 <form>
		<div class="category" style="text-align:center">
			<p> GAME_bg </p>
			<a href='game.php' class='myButton'>BACK to Category</a>

		</div>		
	</form>
	 
	 <?php
	
//**********************end game**************************************
 }
//*************** category on BG ************************** 
} else {
	include_once('includes/header.php');
	echo "<p class='hello'>Здравей, <b>" . $username . "</b></p>" ;
   if ($cat==0){
	echo "<img class='devil' src='css/img/devil_bg.png' alt='devil_face'>";

?>
	<img id="frame2" src="css/img/frame.png" alt="frame">
	<p class="text" align="center"><font color="#fff" size="10px">Избери категория:</font> </p>
	<form>
		<div class="category" style="text-align:center">
		
			<ul id = "list">
			<li><a href='hangman_bg.php?cat=1' class="myButton">Държави</a></li>
			<li><a href='hangman_bg.php?cat=2' class="myButton">Градове</a></li>
			<li><a href='hangman_bg.php?cat=3' class="myButton">Животни</a></li>
			<li><a href='hangman_bg.php?cat=4' class="myButton">Известни личности</a></li>
			<li><a href='hangman_bg.php?cat=5' class="myButton">Междузвездни войни</a></li>
			</ul>
		</div>		
	</form>
 <?php	
 } else {
	 // *****************start game BG*********************************
	 echo "start game";
	 ?>
	 <form>
		<div class="category" style="text-align:center">
			<p> GAME_bg </p>
			<a href='game.php' class='myButton'>Обратно към Категорите</a>

		</div>		
	</form>
	 
	 <?php
	//**********************end game************************************** 
 }
}

include_once('includes/footer.php');
?>

	
