<?php
  include ("./databaseClass.php");

    if(empty($_POST['id']))
  {
    echo("Data is empty!");
    return false;
  }

  else
  {

    $id = trim($_POST['id']);
    $id = strip_tags($id);
    $id = addslashes($id);

    $db = new database();
    $db->connect();


      $sql = "DELETE FROM `poll_option` WHERE `id_poll`= '$id'";
      $result = $db->send_sql($sql);

      $sql = "DELETE FROM `poll` WHERE `id_poll`= '$id'";
      $result = $db->send_sql($sql);

      echo('
        <script type="text/javascript">
         window.location = "PollsPage.php"
        </script>
        ');

      $db->disconnect();

  }


?>
