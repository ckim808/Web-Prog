<?php
session_start();

$requiredID = 2;

$UID = $_SESSION['sessionUID'];

echo("$UID");
include("databaseClass.php");

$sql = "SELECT * FROM `user` WHERE `id` = '$UID'";
$result = $db->send_sql($query);

 if(!$result || mysqli_num_rows($result) <= 0)
  {
    echo('not found');
  }

   else
  {
      $row = $result->fetch_assoc();
      $group_id = $row["group_id"];
      
      if($group_id <= $requiredID)
      {

      }

      else
      {
      	echo('
        <script type="text/javascript">
          window.location = "sorry.php"
        </script>
        ');
      }

  }

?>