<?php
    session_start();
    include ("databaseClassMySQLi.php");
    $db = new database();
    $db->connect();

    $query = "SELECT tally FROM poll_option WHERE id_pollOption=".$_POST["choice"];
    $res = $db->send_sql($query);
    $current_tally = $res->fetch_row()[0];
    $current_tally++;
    $query = "UPDATE poll_option SET tally = ".$current_tally." WHERE id_pollOption = ".$_POST["choice"];
    $res = $db->send_sql($query);
    $db->disconnect();
?>

<script type="text/javascript">    
    window.location = "SASE_homepage.php";
</script>