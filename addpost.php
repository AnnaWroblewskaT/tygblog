
<form action="addpost.php" method="POST">
  Tytuł posta: <input type="text" name="title"><br/>
  Treść posta: <textarea name="body" rows="20" cols="50"></textarea><br/></br>
  <input type="submit" value="Dodaj">
</form>

<?php
include("connect.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$query = mysqli_query($link, "INSERT INTO posts (title, body) values('".$_POST['title']."','".$_POST['body']."')");
}
?>
