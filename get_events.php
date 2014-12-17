<?php
    // List of events
     $json = array();
 
    include ("databaseClassMySQLi.php");
    $db = new database();
    $db->connect();

     // Query that retrieves events
     $query = "SELECT * FROM events";
     $res = $db->send_sql($query);
    

     // sending the encoded result to success page
     echo json_encode($res->fetchAll(PDO::FETCH_ASSOC));
     $db->disconnect();

?>