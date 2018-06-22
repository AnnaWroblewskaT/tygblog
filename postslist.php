<?php
include("connect.php");
$query = mysql_query("select * from tygposts order by id desc");
while($rekord = mysql_fetch_array($query))
{
$naz .= '<li><a href="tygposts.php?id='.$rekord[0].'">'.$rekord[1].'</a></li>'; 
}
echo '<ul>'.$naz.'</ul>';
?>
