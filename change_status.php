<?php
    include ("databaseClassMySQLi.php");
    $db = new database();
    $db->connect();

    $query = "UPDATE deliverables SET status='".$_POST["status"]."' WHERE id_deliv=".$_POST["id"];
    $res = $db->send_sql($query);
?>

<script type="text/javascript">    
    window.location = "DelivPage.php"
</script>