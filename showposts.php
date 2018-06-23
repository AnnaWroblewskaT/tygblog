<?php
if($_SERVER['REQUEST_METHOD']==='POST') {


  $title="";
  $body="";

  //if(isset($_POST['title']===true && $_POST['body']===true )) {

    $title=trim($_POST['title']);
    $body=trim($_POST['body']);
  }

  else {
      echo "Something went wrong";
  }


echo $title."<br /><br />";
echo $body;


 ?>
