<?php

    /* Values received via ajax */
    $id = $_POST['id_event'];
    $title = $_POST['title'];
    $start = $_POST['start'];
    if(isset($_POST['description'])) $description = strip_tags(addslashes($_POST['description']));
    if(isset($_POST['location'])) $location = strip_tags(addslashes($_POST['location']));
    if(isset($_POST['end'])) $end = $_POST['end'];

    include ("databaseClassMySQLi.php");
    $db = new database();
    $db->connect();

     // update the records
    $query = "UPDATE events SET title='".$title."', description='".$description."', location='".$location."', start='".$start."', end='".$end."' WHERE id=".$id;
    $res = $db->send_sql($query);
    $db->disconnect();
?>