<?php
    include ("databaseClassMySQLi.php");
    $db = new database();
    $db->connect();
    $deliv = addslashes(strip_tags($_POST["Name"]));
    $userid = $_POST["Person"];
    if(isset($_POST["Date"])) $duedate = $_POST["Date"];
    if(isset($_POST["Time"])) $time = $_POST["Time"];
    $status = $_POST["state"];

    $query = "INSERT INTO deliverables VALUES('', '".$userid."','".$deliv."','".$duedate."','".$time."','".$status."')";
    $res = $db->send_sql($query);
?>

<script type="text/javascript">    
    window.location = "DelivPage.php"
</script>