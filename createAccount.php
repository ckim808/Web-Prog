<?php

include ("./databaseClass.php");

//taken from the net 
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
    $db->setup('root','emokid11','localhost','sase');
    $name = trim($_POST['name']);
    $name = addslashes($name);
    $password = trim($_POST['password']);
    $password = addslashes($password);
    $password = md5($password);
    $email = trim($_POST['email']);
    $email = addslashes($email);
    $passResetQuestion = trim($_POST['securityQuestion']);
    $passResetQuestion = addslashes($passResetQuestion);
    $passResetAnswer = trim($_POST['securityAns']);
    $passResetAnswer = addslashes($passResetAnswer);
    $salt = saltGenerator(5);
   // $salt = md5($salt);
    $password = md5($password.md5($salt));

    $sql = "INSERT INTO `user`(`name`, `email`, `passhash`,`passResetQuestion`,`passResetAnswer`,`salt`) VALUES ('$name', '$email', '$password', '$passResetQuestion', '$passResetAnswer','$salt')";
    $db->send_sql($sql);

  }


?>

