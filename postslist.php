<?php

include("connect.php");

$query = mysqli_query($link, "SELECT * FROM posts ORDER BY id DESC");

while($post = mysqli_fetch_array($query)) {
	echo '<ul><li><a href="showposts.php?id='.$post["id"].'">'.$post["title"].'</a></li></ul>';
}
