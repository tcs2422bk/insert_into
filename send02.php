<?php
include 'leo_API.php';
	if(isset($_POST['accou'])){
		$accou = $_POST['accou'];
		$passwo = $_POST['passwo'];
	
		$sql = "INSERT INTO memb (account,password)" .
				" VALUES ('{$accou}','{$passwo}')";
		mysqli_query($link, $sql);
		echo "{$accou}:{$passwo}";
		
		}
?>