<?php


  if(empty($_POST['data']))
  {
    echo("Data is empty!");
    return false;
  }

  else
  {

    $data = trim($_POST['data']);
    $data = addslashes($data);
    $data = strip_tags($data);
    $data = intval($data);
    echo($data);
  }


?>
