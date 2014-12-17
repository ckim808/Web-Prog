<?php
include ("./databaseClass.php");
if(empty($_POST['data']))
  {
    echo("Mail Address is empty!");
    return false;
  }
  if(empty($_POST['loc']))
  {
    echo("loc is empty!");
    return false;
  }
else
{
  $db = new database();
  $db->connect();

  $data = $_POST['data'];
  $data = trim($data);
  $data = addslashes($data);
  $data = strip_tags($data);

  $loc = $_POST['loc'];
  $loc = trim($loc);
  $loc = addslashes($loc);
  $loc = strip_tags($loc);

  $sql = "SELECT * FROM `user` WHERE $loc='$data'";
  $result = $db->send_sql($sql);

  if(!$result || mysqli_num_rows($result) > 0)
  {
    echo("Email is in database!");
  }
  else
  {
    echo("Email is not in database!");
  }
}
  $db->disconnect();
?>