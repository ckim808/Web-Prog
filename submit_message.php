<?php
    session_start();
    include ("databaseClassMySQLi.php");
    $db = new database();
    $db->connect();
    $message = addslashes(strip_tags($_POST["text"]));
    $userid = $_POST["Person"];
    $sessionID = $_SESSION['sessionUID'];

    $query = "INSERT INTO messages (`targetUser`, `fromUser`, `message`)  VALUES ('$userid' , '$sessionID' , '$message')";
    $res = $db->send_sql($query);
    $db->disconnect();
?>

<script type="text/javascript">    
    window.location = "AdminHome.php"
</script>