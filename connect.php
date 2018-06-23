<?php
$link = mysqli_connect('localhost', 'root', 'coderslab');
mysqli_select_db( $link, 'tygposts');
mysqli_query($link, "SET NAMES, 'utf8'");
?>
