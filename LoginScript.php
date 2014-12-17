<?php
    $test = session_start();
    include ("./databaseClass.php");
 
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
   // $db->setup('root','emokid11','localhost','sase');
    $db->connect();
    $email = trim($_POST['email']);
    $email = addslashes($email);
    $password = trim($_POST['password']);
    $password = addslashes($password);
   // $password = md5($password);
 
    $sql = "SELECT salt FROM `user` WHERE `email` = '$email'";
    
    $result = $db->send_sql($sql);
    $saltArr = mysqli_fetch_row($result);
    $salt = $saltArr[0];
 
    $password = md5(md5($password).md5($salt));
    $sql = "SELECT * FROM `user` WHERE email='$email' AND passhash = '$password'";
    $result = $db->send_sql($sql);
     
    if(!$result || mysqli_num_rows($result) <= 0)
    {
        echo('
        <script type="text/javascript">
        
          window.location = "LoginPageIncorrect.php"
        </script>
        ');
    }
   
    else
    {
    $sql = "SELECT id FROM `user` WHERE `email` = '$email'";
    $userArr = mysqli_fetch_row($result);
    $UID = $userArr[0];

    $_SESSION['sessionEmail'] = $email;
    $_SESSION['sessionUID'] = $UID;
    echo('
        <script type="text/javascript">
        
          window.location = "adminHome.php"
        </script>
        ');
    // hello this is a comments
    }
   
  }
    $db->disconnect();
?>