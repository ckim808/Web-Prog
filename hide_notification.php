<?php
    include ("databaseClassMySQLi.php");
    $db = new database();
    $db->connect();

    $query = "DELETE FROM notifications WHERE id_notification=".$_POST["id"];
    $res = $db->send_sql($query);
?>

<script type="text/javascript">    
    window.location = "AdminHome.php"
</script>