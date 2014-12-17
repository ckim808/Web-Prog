<?php
    include ("databaseClassMySQLi.php");
    $db = new database();
    $db->connect();

    $query = "DELETE FROM deliverables WHERE id_deliv=".$_POST["id"];
    $res = $db->send_sql($query);
    $db->disconnect();
?>

<script type="text/javascript">    
    window.location = "DelivPage.php"
</script>