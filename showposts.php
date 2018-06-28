<?php
if($_SERVER['REQUEST_METHOD']==='GET') {
    $title=trim($_GET['title']);
    $body=trim($_GET['body']);
} else {
      echo "Something went wrong";
  }

echo $title."<br /><br />";
echo $body;


 ?>
