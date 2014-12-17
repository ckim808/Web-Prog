<?php
    // Values received via ajax
    $title = strip_tags(addslashes($_POST['title']));
    if(isset($_POST['description'])) $description = strip_tags(addslashes($_POST['description']));
    if(isset($_POST['location'])) $location = strip_tags(addslashes($_POST['location']));
    $start = $_POST['start'];
    if(isset($_POST['end'])) $end = $_POST['end'];
    $url = strip_tags(addslashes($_POST['url']));

    include ("databaseClassMySQLi.php");
    $db = new database();
    $db->connect();

    // insert the records
    $query = " INSERT INTO `events`( `title`, `description`, `location`, `start`, `end`,`url`) VALUES ( '$title' ,'$description','$location','$start','$end','$url')";

   
    $res = $db->send_sql($query);
    $db->disconnect();
?>

<script type="text/javascript">    
    window.location = "CalPage.php"
</script>