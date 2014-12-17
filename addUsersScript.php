<?php
include ("./databaseClass.php");

if(empty($_POST['id']))
{
  echo("ID is empty!");
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

  

  $query = "SELECT * FROM `pendinguser` WHERE `id` = '$id'";
  $result = $db->send_sql($query);

  if(!$result || mysqli_num_rows($result) <= 0)
  {
    echo('not found');
  }

  else
  {
      $row = $result->fetch_assoc();
    //  $id = $row["id"];
      $email = $row["email"];
      $passhash = $row["passhash"];
      $name = $row["name"];

      $sql = "INSERT INTO `user`(`id`, `email`, `passhash`, `group_id`, `name`) VALUES ('$id','$email','$passhash','3', '$name')";
      $result = $db->send_sql($sql);

      $sql = "DELETE FROM `pendinguser` WHERE `id` ='$id'";
      $result = $db->send_sql($sql);

       echo('
        <script type="text/javascript">
          window.location = "pendingUser.php"
        </script>
        ');

    
  }


}

$db->disconnect();
?>