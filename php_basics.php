<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BASICS</title>
	<style>
	table,tr,td,th{
	border: 1px solid;
	border-collapse:collapse;
	padding:5px;
	text-align:center;
	}
	</style>
</head>
<body>
	<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$name = "base";
	
	$con = new mysqli($host,$user,$pass,$name);
	?>
	<form method="post">
		<p>Pole Tekstowe</p>
		<input type="text" name="text1"><br>
		
		<p>Pole Opcji</p>
		<input type="radio" name="radio1" value="czerwony">czerwony<br>
		<input type="radio" name="radio1" value="niebieski">niebieski<br>
		<input type="radio" name="radio1" value="szary">szary<br>
		
		<p>Lista Rozwijana</p>
		<select name="list1"> 
			<option>Option A</option>
			<option>Option B</option>
			<option>Option C</option>
		</select><br>
		<p>Przycisk</p>
		<input type="submit" value="SEND">
	</form>
	<?php
	if(isset($_POST['text1'])&& isset($_POST['radio1'])&& isset($_POST['list1'])){
		$text = $_POST['text1'];
		$list = $_POST['list1'];
		$radio = $_POST['radio1'];
		
		echo "Text: ".$text." List: ".$list." Radio: ".$radio."<br>";
		
		$query = "SELECT * FROM `samochody` WHERE `kolor` = '$radio'";
		$res = $con ->query($query);
		echo "<ol>";
		while($table=$res->fetch_assoc()){
			echo "<li>".$table['marka']." ".$table['model']." ".$table['kolor']."</li>";
		}
		echo "</ol>";
		
		$query = "SELECT * FROM `samochody` WHERE `kolor` = '$radio'";
		$res = $con ->query($query);
		echo "<table><th>Marka</th><th>Model</th>";
		while($table=$res->fetch_assoc()){
			echo "<tr><td>".$table['marka']."</td><td>".$table['model']."</td></tr>";
		}
		echo "</table>";
	}
	else{
		echo "NOT ENOUGH DATA!!!";
	}
	?>
</body>
</html>