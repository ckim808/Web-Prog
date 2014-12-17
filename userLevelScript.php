<?php
include ("./databaseClass.php");

if(empty($_POST['id']))
{
  echo("ID is empty!");
  return false;
}

if(empty($_POST['num']))
{
  echo("num is empty!");
  return false;
}

else
{

  $db = new database();
  $db->connect();

  $id = ($_POST['id']);
  $id = trim($id);
  $id = addslashes($id);
  $id = strip_tags($id);
  
  $num = trim($_POST['num']);
  $num = addslashes($num);
  $num = strip_tags($num);

  $query = "SELECT * FROM `user` WHERE `id` = '$id'";
  $result = $db->send_sql($query);

  if(!$result || mysqli_num_rows($result) <= 0)
  {
    echo('not found');
  }

  else
  {
      $row = $result->fetch_assoc();
      $group_id = $row["group_id"];
      
      $sql = "UPDATE `user` SET `group_id`= '$num' WHERE `id` = '$id'";

      $result = $db->send_sql($sql);

       echo('
        <script type="text/javascript">
          window.location = "topAdminPage.php"
        </script>
        ');

    
  }


}

$db->disconnect();
?>