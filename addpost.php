
<form action="" method="post">
  Tytuł posta: <input type="text" name="title"><br/>
  Treść posta: <textarea name="body" rows="20" cols="50"></textarea><br/></br>
  <input type="submit" value="Dodaj">
</form>

<?php
include("connect.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$query = mysql_query("insert into tygposts values('','".$_POST['title']."','".$_POST['body']."')");
}
?>
