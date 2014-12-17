<?php

include ("./databaseClass.php");



 
  if(empty($_POST['name']))
  {
    echo("Name is empty!");
    return false;
  }

  if(empty($_POST['password']))
  {
    echo("password is empty!");
    return false;
  }

  if(empty($_POST['email']))
  {
    echo("email is empty!");
    return false;
  }


  else
  {
  
    $db = new database();
    $db->connect();

    $name = trim($_POST['name']);
    $name = addslashes($name);
    $name = strip_tags($name);

    $password = trim($_POST['password']);
    $password = addslashes($password);
    $password = strip_tags($password);
    $password = hash("sha256", $password);

    $email = trim($_POST['email']);
    $email = addslashes($email);
    $email = strip_tags($email);


    $sql = "INSERT INTO `pendinguser`(`name`, `email`, `passhash`) VALUES ('$name', '$email', '$password')";
    $db->send_sql($sql);
  }

?>

