<?php
$link = mysqli_connect('localhost', 'root', 'coderslab', 'tygposts');

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($link, "utf8");
?>
