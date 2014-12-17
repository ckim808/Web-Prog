<?php

include ("./databaseClass.php");

$num;

if(empty($_POST['num']))
{
  echo("num is empty!");
  return false;
}

else if(!empty($_POST['num']))
{
  $num = intVal($_POST['num']);
  echo ($num);
}

if(empty($_POST['Name']))
{
  echo("Name is empty!");
  return false;
}

for($i = 1; $i < $num; $i++)
{
 if(empty($_POST['Option'.$i]))
 {
  echo("No Option".$i);
  return false;
  }
}

if(empty($_POST['description']))
{
 echo("desc is empty!");
  return false;
}

else
{

  $db = new database();
  $db->connect();
  $name = trim($_POST['Name']);
  $name = addslashes($name);
   echo("<br>");
  echo($name);
  $optionArr = array();
  $optionArr = array_pad($optionArr, $num, 0);
  for($i=1; $i <= $num; $i++)
  {
    
    $optionArr[$i] = trim($_POST['Option'.$i]);
    $optionArr[$i] = addslashes($optionArr[$i]);
    echo('<br> The options are <br>');

    echo($optionArr[$i]);
    echo('<br>');

  
    
  }
  $desc = trim($_POST['description']);
  $desc = addslashes($desc);
  echo("<br>");
  echo($desc);

  

  $sql = "INSERT INTO `poll`(`pollName`, `pollDesc`) VALUES ('$name', '$desc')";
  $db->send_sql($sql);

  $sql = "SELECT `id_poll` FROM `poll` WHERE pollName = '$name'";
  $result = $db->send_sql($sql);

  $rowArr = mysqli_fetch_row($result);
  $pollID = $rowArr[0];

  for($i=1; $i <= $num; $i++)
  {
  $sql = "INSERT INTO `poll_option`(`id_poll`, `optionText`) VALUES ('$pollID', '$optionArr[$i]')";
  $result = $db->send_sql($sql);
  }

  echo('
        <script type="text/javascript">
        
          window.location = "PollsPage.php"
        </script>
        ');

}



?>

