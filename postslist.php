<?php

include("connect.php");

$query = mysqli_query("select * from tygposts order by id desc");

$naz="";

while($rekord = mysqli_fetch_array($query))
{
$naz .= '<li><a href="tygposts.php?id='.$rekord[0].'">'.$rekord[1].'</a></li>';
}
echo '<ul>'.$naz.'</ul>';
?>
