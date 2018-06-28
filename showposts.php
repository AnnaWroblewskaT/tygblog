<?php
if($_SERVER['REQUEST_METHOD']==='GET') {


  $title="";
  $body="";

  //if(isset($_POST['title']===true && $_POST['body']===true )) {

    $title=trim($_GET['title']);
    $body=trim($_GET['body']);
  }

  else {
      echo "Something went wrong";
  }


echo $title."<br /><br />";
echo $body;


 ?>
