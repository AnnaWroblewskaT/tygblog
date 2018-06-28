
<form action="addpost.php" method="POST">
  	Tytuł posta: <input type="text" name="title"><br/>
  	Treść posta: <textarea name="body" rows="20" cols="50"></textarea><br/></br>
  	<input type="submit" value="Dodaj">
</form>

<?php
include("connect.php");
if($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$sql = "INSERT INTO posts (title, body) VALUES('".$_POST['title']."','".$_POST['body']."')";
	$query = mysqli_query($link, $sql);
}
