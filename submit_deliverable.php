<?php
    include ("databaseClassMySQLi.php");
    $db = new database();
    $db->connect();
    $deliv = addslashes(strip_tags($_POST["Name"]));
    $userid = $_POST["Person"];
    if(isset($_POST["Date"])) $duedate = $_POST["Date"];
    if(isset($_POST["Time"])) $time = $_POST["Time"];
    $status = $_POST["state"];



    $query = " INSERT INTO `deliverables`( `targetUser`, `taskDesc`, `duedate`, `timedue`, `status`) VALUES ( '$userid' ,'$deliv','$duedate','$time','$status')";
    $res = $db->send_sql($query);
    
    
    $query = "INSERT INTO `notifications`(`targetUser`, `link`, `description`, `title`) VALUES ( '$userid' , 'DelivPage.php' , '$deliv' , 'New deliverable')";
    $res = $db->send_sql($query);
    $db->disconnect();
?>

<script type="text/javascript">    
    window.location = "DelivPage.php"
</script>