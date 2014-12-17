<?php

include ("./databaseClass.php");


function saltGenerator($length) 
{
    $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ+-*#&@!?";
    $validCharNumber = strlen($validCharacters);
 
    $result = "";
 
    for ($i = 0; $i < $length; $i++) {
        $index = mt_rand(0, $validCharNumber - 1);
        $result .= $validCharacters[$index];
    }
 
    return $result;
}
 

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

  if(empty($_POST['securityQuestion']))
  {
    echo("Security Question is empty!");
    return false;
  }

  if(empty($_POST['securityAns']))
  {
    echo("Security Answer is empty!");
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

    $passResetQuestion = trim($_POST['securityQuestion']);
    $passResetQuestion = addslashes($passResetQuestion);
    $passResetQuestion = strip_tags($passResetQuestion);


    $passResetAnswer = trim($_POST['securityAns']);
    $passResetAnswer = addslashes($passResetAnswer);
    $passResetAnswer = strip_tags($passResetAnswer);

    $salt = saltGenerator(5);


    $sql = "INSERT INTO `user`(`name`, `email`, `passhash`,`passResetQuestion`,`passResetAnswer`,`salt`) VALUES ('$name', '$email', '$password', '$passResetQuestion', '$passResetAnswer','$salt')";
    $db->send_sql($sql);
  }

?>

