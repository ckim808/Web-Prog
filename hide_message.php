<?php
    include ("databaseClassMySQLi.php");
    $db = new database();
    $db->connect();

    $query = "DELETE FROM messages WHERE id_message=".$_POST["id"];
    $res = $db->send_sql($query);
    $db->disconnect();
?>

<script type="text/javascript">    
    window.location = "AdminHome.php"
</script>