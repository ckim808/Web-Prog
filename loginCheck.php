<?php
include ("./databaseClass.php");
if(empty($_POST['data']))
  {
    echo("data is empty!");
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
  $db->setup('root','emokid11','localhost','sase');
  $data = $_POST['data'];
  $data = trim($data);
  $data = addslashes($data);
  $loc = $_POST['loc'];
  $loc = trim($loc);
  $loc = addslashes($loc);
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
?>